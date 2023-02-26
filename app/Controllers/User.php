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
        $file = session()->get('file');
        if ($file <  1) {
            $gambar = 'app-assets/images/profile/user-profile.png';
        } else {
            $gambar = 'content/user/' . $file;
        }
        $data = [
            'title' => 'Akun - FK UNMUL',
            'admin' => $admin,
            'lvl' => $lvl,
            'foto' => $gambar,
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
                'user' => $this->UsersModel->orderBy('nama', 'ASC')->get()->getResultArray(),
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
        if ($request->isAJAX()) {
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
                    'rules' => 'required|min_length[6]',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'repassword' => [
                    'label' => 'Konfirmasi Password',
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
                echo json_encode($msg);
            } else {
                $data = [
                    'username' => $username,
                    'nama' => $nama,
                    'password' => base64_encode("$password"),
                    'level' => $level,
                ];
                $this->UsersModel->insert($data);

                $data2 = [
                    'user' => $this->UsersModel->orderBy('nama', 'ASC')->get()->getResultArray(),
                ];
                $msg = [
                    'sukses' => 'Akun Berhasil Ditambahkan !',
                    'status' => 'berhasil',
                    'data' => view('backend/user/view', $data2)
                ];
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }

    public function edit()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
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
                    'rules' => 'required|min_length[6]',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                        'min_length' => '{field} Minimal 6 digit',
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
                echo json_encode($msg);
            } else {
                $data = [
                    'nama' => $nama,
                    'password' => base64_encode("$password"),
                    'level' => $level,
                ];
                $this->UsersModel->update($username, $data);

                $data2 = [
                    'user' => $this->UsersModel->orderBy('nama', 'ASC')->get()->getResultArray(),
                ];
                $msg = [
                    'sukses' => 'Akun Berhasil Di Ubah !',
                    'status' => 'berhasil',
                    'data' => view('backend/user/view', $data2)
                ];
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }

    public function hapus($username)
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $user = $this->UsersModel->where('username', $username)->first();
        if ($user['file'] < 1) {
            $this->UsersModel->delete($username);
        } else {
            $cekfile = $this->UsersModel->where('username', $username)->first();
            $namafile = $cekfile['file'];
            unlink('content/user/' . $namafile);
            $this->UsersModel->delete($username);
        }


        session()->setFlashdata('pesanHapus', 'User Berhasil Di Hapus !');
        return redirect()->to(base_url('/user'));
    }
}
