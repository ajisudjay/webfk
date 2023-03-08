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
            'title' => 'Mitra',
            'admin' => $admin,
            'lvl' => $lvl,
            'foto' => $gambar,
        ];
        return view('backend/mitra/index', $data);
    }
    public function view()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'mitra' => $this->MitraModel->orderBy('id', 'DESC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/mitra/view', $data)
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

        $nama = $request->getVar('nama');
        $file = $request->getFile('file');
        $input = $this->validate([
            'file' => 'uploaded[file]|max_size[file,2048],'
        ]);
        if (!$input) { // Not valid
            session()->setFlashdata('pesanGagal', 'Gagal Ukuran Gambar Maksimal 2MB');
            return redirect()->to(base_url('/mitra'));
        } else {
            $newName = $file->getRandomName();
            $file->store('content/mitra/', $newName);
            $nama_foto = $newName;
            $data = [
                'nama' => $nama,
                'gambar' => $nama_foto,
            ];
            $this->MitraModel->insert($data);

            session()->setFlashdata('pesanInput', 'Berhasil Menambahkan Mitra');
            return redirect()->to(base_url('/mitra'));
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

        session()->setFlashdata('pesanHapus', 'Mitra Berhasil Di Hapus !');
        return redirect()->to(base_url('/mitra'));
    }
}
