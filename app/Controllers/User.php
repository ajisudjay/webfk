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
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin' || session()->get('level') !== 'Admin Prodi') {
            $admin = session()->get('nama');
            $lvl = session()->get('level');
            $file = session()->get('file');
            if ($file <  1) {
                $gambar = 'app-assets/images/profile/user-profile.png';
            } else {
                $gambar = 'content/user/' . $file;
            }
            $data = [
                'title' => 'Akun',
                'admin' => $admin,
                'lvl' => $lvl,
                'foto' => $gambar,
            ];
            return view('backend/user/index', $data);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function view()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin' || session()->get('level') !== 'Admin Prodi') {
            $request = \Config\Services::request();
            $namauser = session()->get('username');
            $lvl = session()->get('level');
            if ($request->isAJAX()) {
                if (session()->get('level') === "Superadmin") {
                    $data = [
                        'user' => $this->UsersModel->orderBy('nama', 'DESC')->get()->getResultArray(),
                        'lvl' => $lvl,
                        'validation' => \Config\Services::validation(),
                    ];
                } else {
                    $data = [
                        'user' => $this->UsersModel->where('username', $namauser)->orderBy('nama', 'DESC')->get()->getResultArray(),
                        'lvl' => $lvl,
                        'validation' => \Config\Services::validation(),
                    ];
                }
                $msg = [
                    'data' => view('backend/user/view', $data)
                ];
                echo json_encode($msg);
            } else {
                exit('Data Tidak Dapat diproses');
            }
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function tambah()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin' || session()->get('level') !== 'Admin Prodi') {
            $request = \Config\Services::request();
            $validation = \Config\Services::validation();
            $nama = $request->getVar('nama');
            $username = $request->getVar('username');
            $level = $request->getVar('level');
            $password = $request->getVar('password');
            $repassword = $request->getVar('repassword');
            $file = $request->getFile('file');
            if ($request->isAJAX()) {
                $valid = $this->validate([
                    'nama' => [
                        'label' => 'Nama',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '* {field} Tidak Boleh Kosong',
                        ]
                    ],
                    'username' => [
                        'label' => 'Username',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '* {field} Tidak Boleh Kosong',
                        ]
                    ],
                    'level' => [
                        'label' => 'Level',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '* {field} Tidak Boleh Kosong',
                        ]
                    ],
                    'password' => [
                        'label' => 'Password',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '* {field} Tidak Boleh Kosong',
                        ]
                    ],
                    'repassword' => [
                        'label' => 'Ulangi Password',
                        'rules' => 'required|matches[password]',
                        'errors' => [
                            'required' => '* {field} Tidak Boleh Kosong',
                            'matches' => '* {field} tidak sesuai',
                        ]
                    ],
                    'file' => [
                        'label' => 'Gambar',
                        'rules' => 'uploaded[file]|max_size[file,1024]',
                        'errors' => [
                            'uploaded' => '* {field} Tidak Boleh Kosong !',
                            'max_size' => '* {field} Ukuran Max 1 mb !',
                        ]
                    ],
                ]);
                if (!$valid) {
                    $msg = [
                        'error' => [
                            'nama' => $validation->getError('nama'),
                            'username' => $validation->getError('username'),
                            'level' => $validation->getError('level'),
                            'password' => $validation->getError('password'),
                            'repassword' => $validation->getError('repassword'),
                            'file' => $validation->getError('file'),
                        ],
                    ];
                    return $this->response->setJSON($msg);
                } else {
                    $namagambar = $file->getRandomName();
                    $file->store('content/user/', $namagambar);
                    $data = [
                        'nama' => $nama,
                        'username' => $username,
                        'level' => $level,
                        'password' => password_hash($password, PASSWORD_DEFAULT),
                        'file' => $namagambar,
                    ];
                    $this->UsersModel->insert($data);

                    $msg = [
                        'title' => 'Berhasil'
                    ];
                    echo json_encode($msg);
                }
            } else {
                exit('Data Tidak Dapat diproses');
            }
        } else {
            return redirect()->to(base_url('/login'));
        }
    }


    public function edit()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin' || session()->get('level') !== 'Admin Prodi') {
            $request = \Config\Services::request();
            $username = $request->getVar('username');
            $nama = $request->getVar('nama');
            $level = $request->getVar('level');
            $file = $request->getFile('file');
            if (!file_exists($_FILES['file']['tmp_name'])) {
                $data = [
                    'username' => $username,
                    'nama' => $nama,
                    'level' => $level,
                ];
                $this->UsersModel->update($username, $data);

                session()->setFlashdata('pesanInput', 'Berhasil Mengubah Data User');
                return redirect()->to(base_url('/user'));
            } else {
                $input = $this->validate([
                    'file' => 'uploaded[file]|max_size[file,1024],'
                ]);
                if (!$input) { // Not valid
                    session()->setFlashdata('pesanGagal', 'Gagal Ukuran Gambar Maksimal 1MB');
                    return redirect()->to(base_url('/user'));
                } else {
                    $file = $request->getFile('file');
                    $cekfile = $this->UsersModel->where('username', $username)->first();
                    $namafile = $cekfile['file'];
                    $filesource = '../writable/uploads/content/user/' . $namafile . '';
                    chmod($filesource, 0777);
                    unlink($filesource);
                    $newName = $file->getRandomName();
                    $file->store('content/user/', $newName);
                    $nama_foto = $newName;
                    $data = [
                        'username' => $username,
                        'nama' => $nama,
                        'level' => $level,
                        'file' => $nama_foto,
                    ];
                    $this->UsersModel->update($username, $data);

                    session()->setFlashdata('pesanInput', 'Berhasil Mengubah Data Akun');
                    return redirect()->to(base_url('/user'));
                }
            }
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function editpass()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin' || session()->get('level') !== 'Admin Prodi') {
            $request = \Config\Services::request();
            if ($request->isAJAX()) {
                $username = $request->getVar('username');
                $password = $request->getVar('password');
                $repassword = $request->getVar('repassword');
                $namauser = session()->get('username');
                $validation = \Config\Services::validation();
                $valid = $this->validate([
                    'password' => [
                        'label' => 'Password',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                    'repassword' => [
                        'label' => 'Ulangi Password',
                        'rules' => 'required|matches[password]',
                        'errors' => [
                            'required' => '{field} Tidak Boleh Kosong',
                            'matches' => '* {field} tidak sesuai',
                        ]
                    ],
                ]);
                if (!$valid) {
                    $msg = [
                        'error' => [
                            'password' => $validation->getError('password'),
                            'repassword' => $validation->getError('repassword'),
                        ],
                    ];
                    echo json_encode($msg);
                } else {
                    $data = [
                        'password' => password_hash($password, PASSWORD_DEFAULT),
                    ];
                    $this->UsersModel->update($username, $data);

                    if (session()->get('level') === "Superadmin") {
                        $data2 = [
                            'user' => $this->UsersModel->orderBy('nama', 'DESC')->get()->getResultArray(),
                            'validation' => \Config\Services::validation(),
                        ];
                    } else {
                        $data2 = [
                            'user' => $this->UsersModel->where('username', $namauser)->orderBy('nama', 'DESC')->get()->getResultArray(),
                            'validation' => \Config\Services::validation(),
                        ];
                    }
                    $msg = [
                        'status' => 'berhasil',
                        'data' => view('backend/user/view', $data2)
                    ];
                    echo json_encode($msg);
                }
            } else {
                exit('Data Tidak Dapat diproses');
            }
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function hapus($username)
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin' || session()->get('level') !== 'Admin Prodi') {
            $cekfile = $this->UsersModel->where('username', $username)->first();
            $namafile = $cekfile['file'];
            $filesource = '../writable/uploads/content/user/' . $namafile . '';
            chmod($filesource, 0777);
            unlink($filesource);
            $this->UsersModel->delete($username);

            session()->setFlashdata('pesanHapus', 'Akun Berhasil Di Hapus !');
            return redirect()->to(base_url('/user'));
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
