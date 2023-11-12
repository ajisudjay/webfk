<?php

namespace App\Controllers;

use App\Models\GaleriModel;
use App\Controllers\BaseController;

class Galeri extends BaseController
{
    protected $GaleriModel;
    public function __construct()
    {
        $this->GaleriModel = new GaleriModel();
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
            'title' => 'Galeri',
            'admin' => $admin,
            'lvl' => $lvl,
            'foto' => $gambar,
        ];
        return view('backend/galeri/index', $data);
    }

    public function view()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'galeri' => $this->GaleriModel->orderBy('id', 'DESC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/galeri/view', $data)
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
        $validation = \Config\Services::validation();
        $nama = $request->getVar('nama');
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
                'file' => [
                    'label' => 'Gambar',
                    'rules' => 'uploaded[file]|max_size[file,2048]',
                    'errors' => [
                        'uploaded' => '* {field} Tidak Boleh Kosong !',
                        'max_size' => '* {field} Ukuran Max 2 mb !',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama' => $validation->getError('nama'),
                        'file' => $validation->getError('file'),
                    ],
                ];
                return $this->response->setJSON($msg);
            } else {
                $newName = $file->getRandomName();
                $file->store('content/galeri/', $newName);
                $nama_foto = $newName;
                $data = [
                    'nama' => $nama,
                    'gambar' => $nama_foto,
                ];
                $this->GaleriModel->insert($data);

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
        $cekfile = $this->GaleriModel->where('id', $id)->first();
        $namafile = $cekfile['gambar'];
        $filesource = '../writable/uploads/content/galeri/' . $namafile . '';
        chmod($filesource, 0777);
        unlink($filesource);
        $this->GaleriModel->delete($id);

        session()->setFlashdata('pesanHapus', 'Berhasil dihapus !');
        return redirect()->to(base_url('/galeri'));
    }
}
