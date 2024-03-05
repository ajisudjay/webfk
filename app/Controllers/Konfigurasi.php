<?php

namespace App\Controllers;

use App\Models\KonfigurasiModel;
use App\Controllers\BaseController;

class Konfigurasi extends BaseController
{
    protected $KonfigurasiModel;
    public function __construct()
    {
        $this->KonfigurasiModel = new KonfigurasiModel();
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
            'title' => 'Konfigurasi',
            'admin' => $admin,
            'lvl' => $lvl,
            'foto' => $gambar,
        ];
        return view('backend/konfigurasi/index', $data);
    }
    public function view()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'konfigurasi' => $this->KonfigurasiModel->orderBy('id', 'DESC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/konfigurasi/view', $data)
            ];
            echo json_encode($msg);
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
            $id = $request->getVar('id');
            $email = $request->getVar('email');
            $telepon = $request->getVar('telepon');
            $alamat = $request->getVar('alamat');
            $ig = $request->getVar('ig');
            $yt = $request->getVar('yt');
            $fb = $request->getVar('fb');
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'telepon' => [
                    'label' => 'Telepon',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'ig' => [
                    'label' => 'Ig',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'fb' => [
                    'label' => 'Fb',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'yt' => [
                    'label' => 'Yt',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'email' => $validation->getError('email'),
                        'telepon' => $validation->getError('telepon'),
                        'alamat' => $validation->getError('alamat'),
                        'ig' => $validation->getError('ig'),
                        'fb' => $validation->getError('fb'),
                        'yt' => $validation->getError('yt'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $data = [
                    'email' => $email,
                    'telepon' => $telepon,
                    'alamat' => $alamat,
                    'ig' => $ig,
                    'fb' => $fb,
                    'yt' => $yt,
                ];

                $this->KonfigurasiModel->update($id, $data);

                $data2 = [
                    'konfigurasi' => $this->KonfigurasiModel->get()->getResultArray(),
                ];
                $msg = [
                    'status' => 'Berhasil',
                    'data' => view('backend/konfigurasi/view', $data2)
                ];
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }

    public function editvisi()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $id = $request->getVar('id');
            $visi = $request->getVar('visi');
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'visi' => [
                    'label' => 'Visi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'visi' => $validation->getError('visi'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $data = [
                    'visi' => $visi,
                ];

                $this->KonfigurasiModel->update($id, $data);

                $data2 = [
                    'konfigurasi' => $this->KonfigurasiModel->get()->getResultArray(),
                ];
                $msg = [
                    'status' => 'Berhasil',
                    'data' => view('backend/konfigurasi/view', $data2)
                ];
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }

    public function editmisi()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $id = $request->getVar('id');
            $misi = $request->getVar('misi');
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'misi' => [
                    'label' => 'Visi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'misi' => $validation->getError('misi'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $data = [
                    'misi' => $misi,
                ];

                $this->KonfigurasiModel->update($id, $data);

                $data2 = [
                    'konfigurasi' => $this->KonfigurasiModel->get()->getResultArray(),
                ];
                $msg = [
                    'status' => 'Berhasil',
                    'data' => view('backend/konfigurasi/view', $data2)
                ];
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }
    public function editfoto()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $id = $request->getVar('id');
            $foto = $request->getFile('foto');
            $cekfoto = $this->KonfigurasiModel->where('id', $id)->first();
            $fotolama = $cekfoto['foto'];
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'foto' => [
                    'label' => 'File Foto',
                    'rules' => 'uploaded[foto]|max_size[foto,512]|mime_in[foto,image/png,image/jpeg]|is_image[foto]',
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
                        'foto' => $validation->getError('foto'),
                    ],
                ];
                return $this->response->setJSON($msg);
            } else {
                $nama_file = $foto->getRandomName();
                $filepath = '../writable/uploads/content/konfigurasi/' . $fotolama;
                chmod($filepath, 0777);
                unlink($filepath);
                $foto->store('content/konfigurasi/', $nama_file);
                $data = [
                    'foto' => $nama_file,
                ];

                $this->KonfigurasiModel->update($id, $data);

                $data2 = [
                    'konfigurasi' => $this->KonfigurasiModel->get()->getResultArray(),
                ];
                $msg = [
                    'sukses' => 'Konfigurasi Berhasil Diperbarui !',
                    'status' => 'Berhasil',
                    'data' => view('backend/konfigurasi/view', $data2)
                ];
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }
}
