<?php

namespace App\Controllers;

use App\Models\SlideshowModel;
use App\Controllers\BaseController;

class Slideshow extends BaseController
{
    protected $SlideshowModel;
    public function __construct()
    {
        $this->SlideshowModel = new SlideshowModel();
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
            'title' => 'Slideshow',
            'admin' => $admin,
            'lvl' => $lvl,
            'foto' => $gambar,
        ];
        return view('backend/slideshow/index', $data);
    }
    public function view()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'slideshow' => $this->SlideshowModel->orderBy('id', 'DESC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/slideshow/view', $data)
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
            return redirect()->to(base_url('/slideshow'));
        } else {
            $newName = $file->getRandomName();
            $file->store('content/slideshow/', $newName);
            $nama_foto = $newName;
            $data = [
                'nama' => $nama,
                'gambar' => $nama_foto,
            ];
            $this->SlideshowModel->insert($data);

            session()->setFlashdata('pesanInput', 'Berhasil Menambahkan Slideshow');
            return redirect()->to(base_url('/slideshow'));
        }
    }

    public function hapus($id)
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $cekfile = $this->SlideshowModel->where('id', $id)->first();
        $namafile = $cekfile['gambar'];
        $filesource = '../writable/uploads/content/slideshow/' . $namafile . '';
        chmod($filesource, 0777);
        unlink($filesource);
        $this->SlideshowModel->delete($id);

        session()->setFlashdata('pesanHapus', 'Slideshow Berhasil Di Hapus !');
        return redirect()->to(base_url('/slideshow'));
    }
}
