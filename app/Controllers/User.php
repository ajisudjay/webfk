<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Controllers\BaseController;

class User extends BaseController
{
    protected $UsersModel;
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }
    public function index()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $admin = session()->get('nama');
        $lvl = session()->get('level');
        $data = [
            'title' => 'Akun - FK UNMUL',
            'admin' => $admin,
            'lvl' => $lvl,
        ];
        return view('backend/user/index', $data);
    }
    public function view()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'user' => $this->UsersModel->orderBy('username', 'ASC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/user/view', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }

    public function tambah()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        $username = $request->getVar('username');
        $nama = $request->getVar('nama');
        $password = $request->getVar('password');
        $repassword = $request->getVar('repassword');
        $level = $request->getVar('level');
        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ]
            ],
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ]
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di Pilih',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ]
            ],
            'repassword' => [
                'label' => 'Repassword',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'matches' => 'Konfirmasi Password Tidak Sesuai'
                ]
            ],
        ]);
        if (!$valid) {
            $msg = [
                'error' => [
                    'username' => $validation->getError('username'),
                    'nama' => $validation->getError('nama'),
                    'level' => $validation->getError('level'),
                    'password' => $validation->getError('password'),
                    'repassword' => $validation->getError('repassword'),
                ],
            ];
            session()->setFlashdata('pesanGagal', 'Ulangi Password Tidak Sesuai');
            return redirect()->to(base_url('/user'));
        } else {
            $data = [
                'username' => $username,
                'nama' => $nama,
                'password' => base64_encode("$password"),
                'level' => $level,
            ];
            $this->UsersModel->insert($data);

            session()->setFlashdata('pesanInput', 'Berhasil Menambahkan Akun');
            return redirect()->to(base_url('/user'));
        }
    }


    public function edit()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        $username = $request->getVar('username');
        $nama = $request->getVar('nama');
        $password = $request->getVar('password');
        $repassword = $request->getVar('repassword');
        $level = $request->getVar('level');
        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ]
            ],
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ]
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di Pilih',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ]
            ],
            'repassword' => [
                'label' => 'Repassword',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'matches' => 'Konfirmasi Password Tidak Sesuai'
                ]
            ],
        ]);
        if (!$valid) {
            $msg = [
                'error' => [
                    'username' => $validation->getError('username'),
                    'nama' => $validation->getError('nama'),
                    'level' => $validation->getError('level'),
                    'password' => $validation->getError('password'),
                    'repassword' => $validation->getError('repassword'),
                ],
            ];
            session()->setFlashdata('pesanGagal', 'Ulangi Password Tidak Sesuai');
            return redirect()->to(base_url('/user'));
        } else {
            $data = [
                'username' => $username,
                'nama' => $nama,
                'password' => base64_encode("$password"),
                'level' => $level,
            ];
            $this->UsersModel->update($username, $data);

            session()->setFlashdata('pesanInput', 'Berhasil Menambahkan Akun');
            return redirect()->to(base_url('/user'));
        }
    }



    public function hapus($username)
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $this->UsersModel->delete($username);

        session()->setFlashdata('pesanHapus', 'User Berhasil Di Hapus !');
        return redirect()->to(base_url('/user'));
    }
}
