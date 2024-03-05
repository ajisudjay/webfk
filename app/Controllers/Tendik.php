<?php

namespace App\Controllers;

use App\Models\TendikModel;
use App\Controllers\BaseController;

class Tendik extends BaseController
{
    protected $TendikModel;
    public function __construct()
    {
        $this->TendikModel = new TendikModel();
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
            'title' => 'Tendik',
            'admin' => $admin,
            'lvl' => $lvl,
            'foto' => $gambar,
        ];
        return view('backend/tendik/index', $data);
    }
    public function view()
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'tendik' => $this->TendikModel->orderBy('nip', 'DESC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('backend/tendik/view', $data)
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
        $nip = $request->getVar('nip');
        $urutan = $request->getVar('urutan');
        $nama = $request->getVar('nama');
        $bagian_unit = $request->getVar('bagian_unit');
        $ruangan = $request->getVar('ruangan');
        $jk = $request->getVar('jk');
        $pendidikan = $request->getVar('pendidikan');
        $tempat_lahir = $request->getVar('tempat_lahir');
        $tanggal_lahir = $request->getVar('tanggal_lahir');
        $alamat = $request->getVar('alamat');
        $telp = $request->getVar('telp');
        $email = $request->getVar('email');
        $status = $request->getVar('status');
        $file = $request->getFile('file');
        if ($request->isAJAX()) {
            $valid = $this->validate([
                'urutan' => [
                    'label' => 'Urutan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'nip' => [
                    'label' => 'NIP',
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
                'bagian_unit' => [
                    'label' => 'Bagian Unit',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'ruangan' => [
                    'label' => 'Ruangan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'tempat_lahir' => [
                    'label' => 'Tempat Lahir',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'tanggal_lahir' => [
                    'label' => 'Tanggal Lahir',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'telp' => [
                    'label' => 'Telepon',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '* {field} Tidak Boleh Kosong',
                    ]
                ],
                'file' => [
                    'label' => 'Gambar',
                    'rules' => 'uploaded[file]|max_size[file,1024]|mime_in[file,image/png,image/jpeg]|is_image[file]',
                    'errors' => [
                        'uploaded' => '* {field} Tidak Boleh Kosong !',
                        'max_size' => '{field} ukuran lebih dari 1 mb !',
                        'mime_in' => 'Ekstensi tidak sesuai !',
                        'is_image' => 'Ekstensi tidak sesuai !',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'urutan' => $validation->getError('urutan'),
                        'nip' => $validation->getError('nip'),
                        'nama' => $validation->getError('nama'),
                        'bagian_unit' => $validation->getError('bagian_unit'),
                        'ruangan' => $validation->getError('ruangan'),
                        'tempat_lahir' => $validation->getError('tempat_lahir'),
                        'tanggal_lahir' => $validation->getError('tanggal_lahir'),
                        'alamat' => $validation->getError('alamat'),
                        'telp' => $validation->getError('telp'),
                        'email' => $validation->getError('email'),
                        'file' => $validation->getError('file'),
                    ],
                ];
                return $this->response->setJSON($msg);
            } else {
                $namagambar = $file->getRandomName();
                $file->store('content/tendik/', $namagambar);
                $data = [
                    'nip' => $nip,
                    'urutan' => $urutan,
                    'nama' => $nama,
                    'bagian_unit' => $bagian_unit,
                    'ruangan' => $ruangan,
                    'jk' => $jk,
                    'pendidikan' => $pendidikan,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'alamat' => $alamat,
                    'telp' => $telp,
                    'email' => $email,
                    'status' => $status,
                    'gambar' => $namagambar,
                ];
                $this->TendikModel->insert($data);
                return redirect()->to(base_url("/tendik/thumb/$namagambar"));
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
        $id = $request->getVar('id');
        $validation = \Config\Services::validation();
        $urutan = $request->getVar('urutan');
        $nip = $request->getVar('nip');
        $nama = $request->getVar('nama');
        $bagian_unit = $request->getVar('bagian_unit');
        $ruangan = $request->getVar('ruangan');
        $jk = $request->getVar('jk');
        $pendidikan = $request->getVar('pendidikan');
        $tempat_lahir = $request->getVar('tempat_lahir');
        $tanggal_lahir = $request->getVar('tanggal_lahir');
        $alamat = $request->getVar('alamat');
        $telp = $request->getVar('telp');
        $email = $request->getVar('email');
        $status = $request->getVar('status');
        $file = $request->getFile('file');
        if (!file_exists($_FILES['file']['tmp_name'])) {
            $data = [
                'nip' => $nip,
                'urutan' => $urutan,
                'nama' => $nama,
                'bagian_unit' => $bagian_unit,
                'ruangan' => $ruangan,
                'jk' => $jk,
                'pendidikan' => $pendidikan,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'alamat' => $alamat,
                'telp' => $telp,
                'email' => $email,
                'status' => $status,
            ];
            $this->TendikModel->update($id, $data);

            $msg = [
                'title' => 'Berhasil'
            ];
            echo json_encode($msg);
        } else {
            $input = $this->validate([
                'file' => 'uploaded[file]|max_size[file,1024]|mime_in[file,image/png,image/jpeg]|is_image[file],'
            ]);
            if (!$input) { // Not valid
                session()->setFlashdata('pesanGagal', 'Format gambar tidak sesuai');
                return redirect()->to(base_url('/tendik'));
            } else {
                $file = $request->getFile('file');
                $cekfile = $this->TendikModel->where('id', $id)->first();
                $namafile = $cekfile['gambar'];
                $filesource = '../writable/uploads/content/tendik/' . $namafile . '';
                $filesourcethumb = '../writable/uploads/content/tendik/thumb/' . $namafile . '';
                chmod($filesource, 0777);
                chmod($filesourcethumb, 0777);
                unlink($filesource);
                unlink($filesourcethumb);
                $newName = $file->getRandomName();
                $file->store('content/tendik/', $newName);
                $nama_foto = $newName;
                $data = [
                    'nip' => $nip,
                    'urutan' => $urutan,
                    'nama' => $nama,
                    'bagian_unit' => $bagian_unit,
                    'ruangan' => $ruangan,
                    'jk' => $jk,
                    'pendidikan' => $pendidikan,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'alamat' => $alamat,
                    'telp' => $telp,
                    'email' => $email,
                    'status' => $status,
                    'gambar' => $nama_foto,
                ];
                $this->TendikModel->update($id, $data);

                return redirect()->to(base_url("/tendik/thumb/$nama_foto"));
            }
        }
    }

    public function thumb($namagambar)
    {
        $cekfile = $this->TendikModel->where('gambar', $namagambar)->first();
        $namafile = $cekfile['gambar'];
        $filesource = '../writable/uploads/content/tendik/' . $namafile;
        list($width, $heigth) = getimagesize($filesource);
        $ratio = $width / $heigth;
        $max = 500;
        if ($width > $max || $heigth > $max) {
            if ($width > $heigth) {
                $newwidht = round($max);
                $newheigth = round($max / $ratio);
            } else {
                $newheigth = round($max);
                $newwidht = round($max * $ratio);
            }
        } else {
            $newwidht = round($width);
            $newheigth = round($heigth);
        }
        $thumb = imagecreatetruecolor($newwidht, $newheigth);
        $exp = explode(".", $namafile);
        $extension = end($exp);
        if ($extension == 'png' | $extension == 'PNG') {
            $source = imagecreatefrompng($filesource);
        } else {
            $source = imagecreatefromjpeg($filesource);
        }

        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidht, $newheigth, $width, $heigth);
        $target = "../writable/uploads/content/tendik/thumb/$namagambar";
        imagewebp($thumb, $target, 80);
        $msg = [
            'title' => 'Berhasil'
        ];
        echo json_encode($msg);
    }

    public function hapus($id)
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $cekfile = $this->TendikModel->where('id', $id)->first();
        $namafile = $cekfile['gambar'];
        $filesource = '../writable/uploads/content/tendik/' . $namafile . '';
        $filesourcethumb = '../writable/uploads/content/tendik/thumb/' . $namafile . '';
        chmod($filesource, 0777);
        chmod($filesourcethumb, 0777);
        unlink($filesource);
        unlink($filesourcethumb);
        $this->TendikModel->delete($id);

        session()->setFlashdata('pesanHapus', 'dihapus !');
        return redirect()->to(base_url('/tendik'));
    }
}
