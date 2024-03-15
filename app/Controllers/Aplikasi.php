<?php

namespace App\Controllers;

use App\Models\AplikasiModel;
use App\Controllers\BaseController;

class Aplikasi extends BaseController
{
    protected $AplikasiModel;
    public function __construct()
    {
        $this->AplikasiModel = new AplikasiModel();
    }
    public function index()
    {
        if (session()->get('username') == NULL || session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas') {
            $admin = session()->get('nama');
            $lvl = session()->get('level');
            $file = session()->get('file');
            if ($file <  1) {
                $gambar = 'app-assets/images/profile/user-profile.png';
            } else {
                $gambar = 'content/user/' . $file;
            }
            $data = [
                'title' => 'Aplikasi',
                'admin' => $admin,
                'lvl' => $lvl,
                'foto' => $gambar,
            ];
            return view('backend/aplikasi/index', $data);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function view()
    {
        if (session()->get('username') == NULL || session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas') {
            $request = \Config\Services::request();
            $username = session()->get('username');
            if ($request->isAJAX()) {
                $data = [
                    'title' => 'Aplikasi',
                    'aplikasi' => $this->AplikasiModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
                    'validation' => \Config\Services::validation(),
                ];
                $msg = [
                    'data' => view('backend/aplikasi/view', $data)
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
        if (session()->get('username') == NULL || session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas') {

            $request = \Config\Services::request();
            $validation = \Config\Services::validation();
            $urutan = $request->getVar('urutan');
            $nama = $request->getVar('nama');
            $link = $request->getVar('link');
            $gambar = $request->getfile('gambar');
            $request = \Config\Services::request();
            if ($request->isAJAX()) {
                $valid = $this->validate([
                    'urutan' => [
                        'label' => 'Urutan',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '* {field} Tidak Boleh Kosong',
                        ]
                    ],
                    'nama' => [
                        'label' => 'Nama',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '* {field} Tidak Boleh Kosong',
                        ]
                    ],
                    'link' => [
                        'label' => 'Link',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '* {field} Tidak Boleh Kosong',
                        ]
                    ],
                    'gambar' => [
                        'label' => 'Gambar',
                        'rules' => 'uploaded[gambar]|max_size[gambar,512]|mime_in[gambar,image/png,image/jpeg]|is_image[gambar]',
                        'errors' => [
                            'uploaded' => '* {field} Tidak Boleh Kosong !',
                            'max_size' => '{field} ukuran lebih dari 512 kb !',
                            'mime_in' => 'Ekstensi tidak sesuai !',
                            'is_image' => 'Ekstensi tidak sesuai !',
                        ]
                    ],
                ]);
                if (!$valid) {
                    $msg = [
                        'error' => [
                            'urutan' => $validation->getError('urutan'),
                            'nama' => $validation->getError('nama'),
                            'link' => $validation->getError('link'),
                            'gambar' => $validation->getError('gambar'),
                        ],
                    ];
                    return $this->response->setJSON($msg);
                } else {
                    $namagambar = $gambar->getRandomName();
                    $gambar->store('content/aplikasi/', $namagambar);
                    $data1 = [
                        'urutan' => $urutan,
                        'nama' => $nama,
                        'link' => $link,
                        'gambar' => $namagambar,
                    ];
                    $this->AplikasiModel->insert($data1);

                    $msg = [
                        'title' => 'Berhasil'
                    ];

                    session()->setFlashdata('pesanBerhasil', 'Data Berhasil Ditambahkan !');
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
        if (session()->get('username') == NULL || session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas') {
            $request = \Config\Services::request();
            $validation = \Config\Services::validation();
            $id = $request->getVar('id');
            $urutan = $request->getVar('urutan');
            $nama = $request->getVar('nama');
            $link = $request->getVar('link');
            $gambar = $request->getfile('gambar');
            $request = \Config\Services::request();
            if ($request->isAJAX()) {
                $valid = $this->validate([
                    'urutan' => [
                        'label' => 'Urutan',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '* {field} Tidak Boleh Kosong',
                        ]
                    ],
                    'nama' => [
                        'label' => 'Nama',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '* {field} Tidak Boleh Kosong',
                        ]
                    ],
                    'link' => [
                        'label' => 'Link',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '* {field} Tidak Boleh Kosong',
                        ]
                    ],
                ]);
                if (!$valid) {
                    $msg = [
                        'error' => [
                            'urutan' => $validation->getError('urutan'),
                            'nama' => $validation->getError('nama'),
                            'link' => $validation->getError('link'),
                        ],
                    ];
                    return $this->response->setJSON($msg);
                } else {
                    $data = [
                        'urutan' => $urutan,
                        'nama' => $nama,
                        'link' => $link,
                    ];
                    $this->AplikasiModel->update($id, $data);

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

    public function hapus($id)
    {
        if (session()->get('username') == NULL || session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas') {
            $cekfile = $this->AplikasiModel->where('id', $id)->first();
            $namafile = $cekfile['gambar'];
            $filesource = '../writable/uploads/content/aplikasi/' . $namafile . '';
            chmod($filesource, 0777);
            unlink($filesource);
            $this->AplikasiModel->delete($id);

            session()->setFlashdata('pesanHapus', 'Berhasil dihapus !');
            return redirect()->to(base_url('/aplikasi'));
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
