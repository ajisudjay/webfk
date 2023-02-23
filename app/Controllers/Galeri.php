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
        $data = [
            'title' => 'Galeri',
            'admin' => $admin,
            'lvl' => $lvl,
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

        $nama = $request->getVar('nama');
        $file = $request->getFile('file');
        $input = $this->validate([
            'file' => 'uploaded[file]|max_size[file,2048],'
        ]);
        if (!$input) { // Not valid
            session()->setFlashdata('pesanGagal', 'Gagal Ukuran Gambar Maksimal 2MB');
            return redirect()->to(base_url('/galeri'));
        } else {
            $newName = $file->getRandomName();
            $file->move('content/galeri/', $newName);
            $nama_foto = $newName;
            $data = [
                'nama' => $nama,
                'gambar' => $nama_foto,
            ];
            $this->GaleriModel->insert($data);

            session()->setFlashdata('pesanInput', 'Berhasil Menambahkan Gambar');
            return redirect()->to(base_url('/galeri'));
        }
    }

    public function hapus($id)
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $cekfile = $this->GaleriModel->where('id', $id)->first();
        $namafile = $cekfile['gambar'];
        unlink('content/galeri/' . $namafile);
        $this->GaleriModel->delete($id);

        session()->setFlashdata('pesanHapus', 'Galeri Berhasil Di Hapus !');
        return redirect()->to(base_url('/galeri'));
    }
}
