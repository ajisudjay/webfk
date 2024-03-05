<?php

namespace App\Controllers;

use App\Models\DokumenModel;
use App\Controllers\BaseController;

class Dokumen extends BaseController
{
    protected $DokumenModel;
    public function __construct()
    {
        $this->DokumenModel = new DokumenModel();
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
                'title' => 'Dokumen',
                'admin' => $admin,
                'lvl' => $lvl,
                'foto' => $gambar,
            ];
            return view('backend/dokumen/index', $data);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function view()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin' || session()->get('level') !== 'Admin Prodi') {
            $request = \Config\Services::request();
            if ($request->isAJAX()) {
                $data = [
                    'dokumen' => $this->DokumenModel->orderBy('id', 'DESC')->get()->getResultArray(),
                    'validation' => \Config\Services::validation(),
                ];
                $msg = [
                    'data' => view('backend/dokumen/view', $data)
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
            $nama = $request->getVar('nama');
            $file = $request->getFile('file');
            $input = $this->validate([
                'file' => 'uploaded[file]|max_size[file,50480]'
            ]);
            if (!$input) { // Not valid
                session()->setFlashdata('pesanGagal', 'Format file tidak sesuai');
                return redirect()->to(base_url('/dokumen'));
            } else {
                $newName = $file->getRandomName();
                $file->store('content/dokumen/', $newName);
                $nama_foto = $newName;
                $data = [
                    'nama' => $nama,
                    'file' => $nama_foto,
                ];
                $this->DokumenModel->insert($data);
                session()->setFlashdata('pesanHapus', 'Berhasil ditambah !');
                return redirect()->to(base_url('/dokumen'));
            }
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function hapus($id)
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin' || session()->get('level') !== 'Admin Prodi') {
            $cekfile = $this->DokumenModel->where('id', $id)->first();
            $namafile = $cekfile['file'];
            $filesource = '../writable/uploads/content/dokumen/' . $namafile . '';
            chmod($filesource, 0777);
            unlink($filesource);
            $this->DokumenModel->delete($id);

            session()->setFlashdata('pesanHapus', 'Berhasil dihapus !');
            return redirect()->to(base_url('/dokumen'));
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
