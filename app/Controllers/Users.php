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
        $data = [
            'title' => 'Beranda - Divisi.id',
            'top_header' => 'Beranda',
            'header' => 'Data User',
            'admin' => $admin,
        ];
        return view('backend/user/index', $data);
    }
    public function viewData()
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
                'data' => view('backend/user/view-data', $data)
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
                    'user' => $this->UsersModel->orderBy('username', 'ASC')->get()->getResultArray(),
                ];
                $msg = [
                    'sukses' => 'User Berhasil Ditambahkan !',
                    'status' => 'berhasil',
                    'data' => view('backend/user/view-data', $data2)
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
                echo json_encode($msg);
            } else {
                $data = [
                    'username' => $username,
                    'nama' => $nama,
                    'password' => base64_encode("$password"),
                    'level' => $level,
                ];

                $this->UsersModel->update($username, $data);

                $data2 = [
                    'user' => $this->UsersModel->orderBy('username', 'ASC')->get()->getResultArray(),
                ];
                $msg = [
                    'sukses' => 'User Berhasil Diubah !',
                    'status' => 'berhasil',
                    'data' => view('backend/user/view-data', $data2)
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
        $this->UsersModel->delete($username);

        session()->setFlashdata('pesanHapus', 'User Berhasil Di Hapus !');
        return redirect()->to(base_url('/user'));
    }
}
