<?php

namespace App\Controllers;

use App\Models\ProdiModel;
use App\Controllers\BaseController;

class Prodi extends BaseController
{
    protected $ProdiModel;
    public function __construct()
    {
        $this->ProdiModel = new ProdiModel();
    }
    public function index()
    {
        if (session()->get('username') == NULL || session()->get('level') === 'Superadmin') {
            $admin = session()->get('nama');
            $lvl = session()->get('level');
            $file = session()->get('file');
            if ($file <  1) {
                $gambar = 'app-assets/images/profile/user-profile.png';
            } else {
                $gambar = 'content/user/' . $file;
            }
            $data = [
                'title' => 'Program Studi',
                'admin' => $admin,
                'lvl' => $lvl,
                'foto' => $gambar,
            ];
            return view('backend/prodi/index', $data);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
    public function view()
    {
        if (session()->get('username') == NULL || session()->get('level') === 'Superadmin') {
            $request = \Config\Services::request();
            $username = session()->get('username');
            if ($request->isAJAX()) {
                $data = [
                    'title' => 'Program Studi',
                    'prodi' => $this->ProdiModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
                    'validation' => \Config\Services::validation(),
                ];
                $msg = [
                    'data' => view('backend/prodi/view', $data)
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
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        $urutan = $request->getVar('urutan');
        $prodi = $request->getVar('prodi');
        $akreditasi = $request->getVar('akreditasi');
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
                'prodi' => [
                    'label' => 'Program Studi',
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
                        'prodi' => $validation->getError('prodi'),
                    ],
                ];
                return $this->response->setJSON($msg);
            } else {
                $data = [
                    'urutan' => $urutan,
                    'prodi' => $prodi,
                    'akreditasi' => $akreditasi,
                ];
                $this->ProdiModel->insert($data);

                $msg = [
                    'title' => 'Berhasil'
                ];

                session()->setFlashdata('pesanBerhasil', 'Data Berhasil Ditambahkan !');
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
        $validation = \Config\Services::validation();
        $id = $request->getVar('id');
        $urutan = $request->getVar('urutan');
        $prodi = $request->getVar('prodi');
        $akreditasi = $request->getVar('akreditasi');
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
                'prodi' => [
                    'label' => 'Program Studi',
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
                        'prodi' => $validation->getError('prodi'),
                    ],
                ];
                return $this->response->setJSON($msg);
            } else {
                $data = [
                    'urutan' => $urutan,
                    'prodi' => $prodi,
                    'akreditasi' => $akreditasi,
                ];
                $this->ProdiModel->update($id, $data);

                $msg = [
                    'title' => 'Berhasil'
                ];

                session()->setFlashdata('pesanBerhasil', 'Data Berhasil Ditambahkan !');
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }

    public function hapus($id)
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $this->ProdiModel->delete($id);

        session()->setFlashdata('pesanHapus', 'Main Menu Berhasil Di Hapus !');
        return redirect()->to(base_url('/prodi'));
    }
}
