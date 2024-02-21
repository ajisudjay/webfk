<?php

namespace App\Controllers;

use App\Models\MitraModel;
use App\Controllers\BaseController;

class Mitra extends BaseController
{
    protected $MitraModel;
    public function __construct()
    {
        $this->MitraModel = new MitraModel();
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
                'title' => 'Mitra',
                'admin' => $admin,
                'lvl' => $lvl,
                'foto' => $gambar,
            ];
            return view('backend/mitra/index', $data);
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
                    'mitra' => $this->MitraModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
                    'validation' => \Config\Services::validation(),
                ];
                $msg = [
                    'data' => view('backend/mitra/view', $data)
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
        $nama = $request->getVar('nama');
        $urutan = $request->getVar('urutan');
        $jenis = $request->getVar('jenis');
        $pendidikan = $request->getVar('pendidikan');
        $penelitian = $request->getVar('penelitian');
        $pkm = $request->getVar('pkm');
        $mulai_kerjasama = $request->getVar('mulai_kerjasama');
        $berakhir_kerjasama = $request->getVar('berakhir_kerjasama');
        $hasil = $request->getVar('hasil');
        $laporan = $request->getVar('laporan');
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
                'mulai_kerjasama' => [
                    'label' => 'Mulai Kerjasama',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'berakhir_kerjasama' => [
                    'label' => 'Berakhir Kerjasama',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'hasil' => [
                    'label' => 'Hasil dan Manfaat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'laporan' => [
                    'label' => 'Laporan',
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
                        'mulai_kerjasama' => $validation->getError('mulai_kerjasama'),
                        'berakhir_kerjasama' => $validation->getError('berakhir_kerjasama'),
                        'hasil' => $validation->getError('hasil'),
                        'laporan' => $validation->getError('laporan'),
                    ],
                ];
                return $this->response->setJSON($msg);
            } else {
                $data = [
                    'urutan' => $urutan,
                    'nama' => $nama,
                    'jenis' => $jenis,
                    'pendidikan' => $pendidikan,
                    'penelitian' => $penelitian,
                    'pkm' => $pkm,
                    'mulai_kerjasama' => $mulai_kerjasama,
                    'berakhir_kerjasama' => $berakhir_kerjasama,
                    'hasil' => $hasil,
                    'laporan' => $laporan,
                ];
                $this->MitraModel->insert($data);

                $msg = [
                    'title' => 'Berhasil'
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
        $validation = \Config\Services::validation();
        $id = $request->getVar('id');
        $nama = $request->getVar('nama');
        $urutan = $request->getVar('urutan');
        $jenis = $request->getVar('jenis');
        $pendidikan = $request->getVar('pendidikan');
        $penelitian = $request->getVar('penelitian');
        $pkm = $request->getVar('pkm');
        $mulai_kerjasama = $request->getVar('mulai_kerjasama');
        $berakhir_kerjasama = $request->getVar('berakhir_kerjasama');
        $hasil = $request->getVar('hasil');
        $laporan = $request->getVar('laporan');
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
                'mulai_kerjasama' => [
                    'label' => 'Mulai Kerjasama',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'berakhir_kerjasama' => [
                    'label' => 'Berakhir Kerjasama',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'hasil' => [
                    'label' => 'Hasil dan Manfaat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'laporan' => [
                    'label' => 'Laporan',
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
                        'mulai_kerjasama' => $validation->getError('mulai_kerjasama'),
                        'berakhir_kerjasama' => $validation->getError('berakhir_kerjasama'),
                        'hasil' => $validation->getError('hasil'),
                        'laporan' => $validation->getError('laporan'),
                    ],
                ];
                return $this->response->setJSON($msg);
            } else {
                $data = [
                    'urutan' => $urutan,
                    'nama' => $nama,
                    'jenis' => $jenis,
                    'pendidikan' => $pendidikan,
                    'penelitian' => $penelitian,
                    'pkm' => $pkm,
                    'mulai_kerjasama' => $mulai_kerjasama,
                    'berakhir_kerjasama' => $berakhir_kerjasama,
                    'hasil' => $hasil,
                    'laporan' => $laporan,
                ];
                $this->MitraModel->update($id, $data);

                $msg = [
                    'title' => 'Berhasil'
                ];
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
        $cekfile = $this->MitraModel->where('id', $id)->first();
        $namafile = $cekfile['gambar'];
        $filesource = '../writable/uploads/content/mitra/' . $namafile . '';
        chmod($filesource, 0777);
        unlink($filesource);
        $this->MitraModel->delete($id);

        session()->setFlashdata('pesanHapus', 'Berhasil dihapus !');
        return redirect()->to(base_url('/mitra'));
    }
}
