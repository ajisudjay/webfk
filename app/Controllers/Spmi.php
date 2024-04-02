<?php

namespace App\Controllers;

use App\Models\SpmiModel;
use App\Controllers\BaseController;

class Spmi extends BaseController
{
    protected $SpmiModel;
    public function __construct()
    {
        $this->SpmiModel = new SpmiModel();
    }
    public function index()
    {

        if (session()->get('username') !== NULL && session()->get('level') === 'Superadmin' || session()->get('level') === 'Pejabat' || session()->get('level') === 'Admin Fakultas') {
            $admin = session()->get('nama');
            $lvl = session()->get('level');
            $file = session()->get('file');
            if ($file <  1) {
                $gambar = 'app-assets/images/profile/user-profile.png';
            } else {
                $gambar = 'content/user/' . $file;
            }
            $data = [
                'title' => 'SPMI',
                'admin' => $admin,
                'lvl' => $lvl,
                'foto' => $gambar,
            ];
            return view('backend/spmi/index', $data);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function view()
    {
        if (session()->get('username') !== NULL && session()->get('level') === 'Superadmin' || session()->get('level') === 'Pejabat' || session()->get('level') === 'Admin Fakultas') {
            $request = \Config\Services::request();
            if ($request->isAJAX()) {
                $data = [
                    'spmi' => $this->SpmiModel->orderBy('kategori', 'ASC')->orderBy('nama', 'ASC')->get()->getResultArray(),
                    'validation' => \Config\Services::validation(),
                ];
                $msg = [
                    'data' => view('backend/spmi/view', $data)
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
        if (session()->get('username') !== NULL && session()->get('level') === 'Superadmin' || session()->get('level') === 'Pejabat' || session()->get('level') === 'Admin Fakultas') {
            $request = \Config\Services::request();
            $nama = $request->getVar('nama');
            $kategori = $request->getVar('kategori');
            $file = $request->getFile('file');
            $username = session()->get('username');
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $timestamp = date("Y-m-d h:i:sa");
            $input = $this->validate([
                'file' => 'uploaded[file]|max_size[file,50480]'
            ]);
            $input2 = $this->validate([
                'nama' => 'required[nama]|alpha_numeric_punct[nama],',
            ]);
            if (!$input) { // Not valid
                session()->setFlashdata('pesanGagal', 'Format file tidak sesuai');
                return redirect()->to(base_url('/spmi'));
            } elseif (!$input2) { // Not valid
                session()->setFlashdata('pesanGagal', 'Format tidak sesuai');
                return redirect()->to(base_url('/spmi'));
            } else {
                $newName = $file->getRandomName();
                $file->store('content/spmi/', $newName);
                $nama_foto = $newName;
                $data = [
                    'nama' => $nama,
                    'kategori' => $kategori,
                    'file' => $nama_foto,
                    'timestamp' => $timestamp,
                    'admin' => $username,
                ];
                $this->SpmiModel->insert($data);
                session()->setFlashdata('pesanHapus', 'Berhasil ditambah !');
                return redirect()->to(base_url('/spmi'));
            }
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function hapus($id)
    {
        if (session()->get('username') !== NULL && session()->get('level') === 'Superadmin' || session()->get('level') === 'Pejabat' || session()->get('level') === 'Admin Fakultas') {
            $cekfile = $this->SpmiModel->where('id', $id)->first();
            $namafile = $cekfile['file'];
            $filesource = '../writable/uploads/content/spmi/' . $namafile . '';
            chmod($filesource, 0777);
            unlink($filesource);
            $this->SpmiModel->delete($id);

            session()->setFlashdata('pesanHapus', 'Berhasil dihapus !');
            return redirect()->to(base_url('/Spmi'));
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
