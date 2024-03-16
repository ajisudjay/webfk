<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\KonfigurasiModel;

class Auth extends BaseController
{
    protected $UsersModel;
    protected $KonfigurasiModel;
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
        $this->KonfigurasiModel = new KonfigurasiModel();
    }
    public function index()
    {
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        if ($request->isAJAX()) {
            $username = $request->getPost('username');
            $password = $request->getPost('password');
            $captcha = $request->getPost('captcha');
            $captcha2 = $request->getPost('captcha2');
            $valid = $this->validate([
                'username' => [
                    'label' => 'Username',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong'
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'username' => $validation->getError('username'),
                        'password' => $validation->getError('password'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $user = $this->UsersModel->where('username', $username)->first();
                if ($user < 1) {
                    $msg = [
                        'title' => 'gagaluser',
                        'pesan' => 'Username Tidak Terdaftar',
                    ];
                    echo json_encode($msg);
                } elseif ($captcha2 != $captcha) {
                    $msg = [
                        'title' => 'gagallogin',
                        'pesan' => 'Kode Keamanan Salah',
                    ];
                    echo json_encode($msg);
                } else {
                    $hash_pass = $user['password'];
                    if ($user['username'] === $username && password_verify($password, $hash_pass)) {
                        session()->set('username', $user['username']);
                        session()->set('password', $user['password']);
                        session()->set('nama', $user['nama']);
                        session()->set('level', $user['level']);
                        $msg = [
                            'title' => 'berhasiloperator',
                            'urloperator' => '/auth/beranda',
                        ];
                        echo json_encode($msg);
                    } else {
                        $msg = [
                            'title' => 'gagaluser2',
                            'pesan' => 'Username dan Password Tidak Sesuai',
                        ];
                        echo json_encode($msg);
                    }
                }
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }

    public function spmi_login()
    {
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        if ($request->isAJAX()) {
            $password = $request->getPost('password');
            $captcha = $request->getPost('captcha');
            $captcha2 = $request->getPost('captcha2');
            $valid = $this->validate([
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong'
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'password' => $validation->getError('password'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $pass = $this->KonfigurasiModel->first();
                if ($captcha2 != $captcha) {
                    $msg = [
                        'title' => 'gagallogin',
                        'pesan' => 'Kode Keamanan Salah',
                    ];
                    echo json_encode($msg);
                } else {
                    if (base64_encode($password) === $pass['pass_spmi']) {
                        session()->set('password', base64_encode($password));
                        $msg = [
                            'title' => 'berhasiloperator',
                            'urloperator' => '/auth/spmi',
                        ];
                        echo json_encode($msg);
                    } else {
                        $msg = [
                            'title' => 'gagaluser2',
                            'pesan' => 'Password Tidak Sesuai',
                        ];
                        echo json_encode($msg);
                    }
                }
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }

    public function beranda()
    {
        $password = session()->get('password');
        $username = session()->get('username');

        $cek = $this->UsersModel->where(['username' => $username, 'password' => $password])->first();

        session()->set('username', $cek['username']);
        session()->set('password', $cek['password']);
        session()->set('nama', $cek['nama']);
        session()->set('level', $cek['level']);
        session()->setFlashdata('loginBerhasil', 'Login Berhasil');
        return redirect()->to(base_url('/beranda'));
    }

    public function spmi()
    {
        $password = session()->get('password');

        session()->setFlashdata('loginBerhasil', 'Login Berhasil');
        return redirect()->to(base_url('/pages-spmi'));
    }



    public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesanLogout', 'Berhasil Keluar !');
        return redirect()->to(base_url('/login'));
    }
}
