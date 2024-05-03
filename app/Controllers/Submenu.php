<?php

namespace App\Controllers;

use App\Models\MainmenuModel;
use App\Models\SubmenuModel;
use App\Controllers\BaseController;
use PhpParser\Node\Expr\Empty_;

class Submenu extends BaseController
{
    protected $MainmenuModel;
    protected $SubmenuModel;
    public function __construct()
    {
        $this->MainmenuModel = new MainmenuModel();
        $this->SubmenuModel = new SubmenuModel();
    }
    public function index()
    {
        if (session()->get('username') !== NULL && session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas' || session()->get('level') === 'Admin Prodi') {
            $admin = session()->get('nama');
            $lvl = session()->get('level');
            $file = session()->get('file');
            if ($file <  1) {
                $gambar = 'app-assets/images/profile/user-profile.png';
            } else {
                $gambar = 'content/user/' . $file;
            }
            $data = [
                'title' => 'Submenu',
                'admin' => $admin,
                'lvl' => $lvl,
                'foto' => $gambar,
            ];
            return view('backend/submenu/index', $data);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
    public function view()
    {
        if (session()->get('username') !== NULL && session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas' || session()->get('level') === 'Admin Prodi') {
            $request = \Config\Services::request();
            if ($request->isAJAX()) {
                $level = session()->get('level');
                if ($level === 'Admin Prodi') {
                    $aksesbutton = 'hidden';
                } else {
                    $aksesbutton = '';
                }
                $data = [
                    'aksesbutton' => $aksesbutton,
                    'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->select('submenu.timestamp as timestamp_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
                    'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
                    'validation' => \Config\Services::validation(),
                ];
                $msg = [
                    'data' => view('backend/submenu/view', $data)
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
        if (session()->get('username') !== NULL && session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas' || session()->get('level') === 'Admin Prodi') {
            $username = session()->get('username');
            $request = \Config\Services::request();
            $urutan = $request->getVar('urutan');
            $mainmenu = $request->getVar('mainmenu');
            $submenu = $request->getVar('submenu');
            $akses = $request->getVar('akses');
            $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($submenu)) . $mainmenu);
            $isi = $request->getVar('isi');
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $timestamp = date("Y-m-d h:i:sa");
            $penulis = $username;
            $validasi = $this->validate([
                'submenu' => 'required[submenu]|alpha_numeric_punct[submenu],'
            ]);
            if (!$validasi) { // Not valid
                session()->setFlashdata('pesanGagal', 'Format isian tidak sesuai');
                return redirect()->to(base_url('/submenu'));
            } else {
                $data = [
                    'urutan' => $urutan,
                    'submenu' => $submenu,
                    'slug' => $slug,
                    'id_mainmenu' => $mainmenu,
                    'content' => $isi,
                    'timestamp' => $timestamp,
                    'penulis' => $penulis,
                    'akses' => $akses,
                ];
                $this->SubmenuModel->insert($data);
                session()->setFlashdata('pesanHapus', 'Berhasil ditambah !');
                return redirect()->to(base_url('/submenu'));
            }
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
    // public function tambah()
    // {
    //     if (session()->get('username') !== NULL && session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas'|| session()->get('level') === 'Admin Prodi') {
    //         $username = session()->get('username');
    //         $request = \Config\Services::request();
    //         $level = session()->get('level');
    //         if ($level === 'Superadmin') {
    //             $aksesbutton = '';
    //         } else {
    //             $aksesbutton = 'hidden';
    //         }
    //         if ($request->isAJAX()) {
    //             $urutan = $request->getVar('urutan');
    //             $mainmenu = $request->getVar('mainmenu');
    //             $submenu = $request->getVar('submenu');
    //             $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($submenu)) . $mainmenu);
    //             $isi = $request->getVar('isi');
    //             $akses = $request->getVar('akses');
    // date_default_timezone_set("Asia/Kuala_Lumpur");             
    // $timestamp = date("Y-m-d h:i:sa");
    //             $penulis = $username;
    //             $validation = \Config\Services::validation();
    //             $valid = $this->validate([
    //                 'urutan' => [
    //                     'label' => 'Urutan',
    //                     'rules' => 'required',
    //                     'errors' => [
    //                         'required' => '{field} Tidak Boleh Kosong',
    //                     ]
    //                 ],
    //                 'mainmenu' => [
    //                     'label' => 'Main Menu',
    //                     'rules' => 'required',
    //                     'errors' => [
    //                         'required' => '{field} Tidak Boleh Kosong',
    //                     ]
    //                 ],
    //                 'submenu' => [
    //                     'label' => 'Sub Menu',
    //                     'rules' => 'required',
    //                     'errors' => [
    //                         'required' => '{field} Tidak Boleh Kosong',
    //                     ]
    //                 ],
    //             ]);
    //             if (!$valid) {
    //                 $msg = [
    //                     'error' => [
    //                         'urutan' => $validation->getError('urutan'),
    //                         'mainmenu' => $validation->getError('mainmenu'),
    //                         'submenu' => $validation->getError('submenu'),
    //                     ],
    //                 ];
    //                 echo json_encode($msg);
    //             } else {
    //                 $data = [
    //                     'urutan' => $urutan,
    //                     'submenu' => $submenu,
    //                     'slug' => $slug,
    //                     'id_mainmenu' => $mainmenu,
    //                     'content' => $isi,
    //                     'timestamp' => $timestamp,
    //                     'akses' => $akses,
    //                     'penulis' => $penulis,
    //                 ];
    //                 $this->SubmenuModel->insert($data);
    //                 $data2 = [
    //                     'aksesbutton' => $aksesbutton,
    //                     'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
    //                     'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
    //                 ];
    //                 $msg = [
    //                     'status' => 'berhasil',
    //                     'data' => view('backend/submenu/view', $data2)
    //                 ];
    //                 echo json_encode($msg);
    //             }
    //         } else {
    //             exit('Data Tidak Dapat diproses');
    //         }
    //     } else {
    //         return redirect()->to(base_url('/login'));
    //     }
    // }

    public function tambahform()
    {
        if (session()->get('username') !== NULL && session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas' || session()->get('level') === 'Admin Prodi') {
            $request = \Config\Services::request();
            $admin = session()->get('nama');
            $lvl = session()->get('level');
            $file = session()->get('file');
            if ($file <  1) {
                $gambar = base_url('app-assets/images/profile/user-profile.png');
            } else {
                $gambar = base_url('content/user/' . $file);
            }
            $data = [
                'title' => 'Sub Menu',
                'admin' => $admin,
                'lvl' => $lvl,
                'foto' => $gambar,
                'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            return view('backend/submenu/tambah', $data);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function editform()
    {
        if (session()->get('username') !== NULL && session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas' || session()->get('level') === 'Admin Prodi') {
            $request = \Config\Services::request();
            $slug = $request->getVar('slug');
            $admin = session()->get('nama');
            $lvl = session()->get('level');
            $file = session()->get('file');
            if ($file <  1) {
                $gambar = base_url('app-assets/images/profile/user-profile.png');
            } else {
                $gambar = base_url('content/user/' . $file);
            }
            $data = [
                'title' => 'Sub Menu',
                'admin' => $admin,
                'lvl' => $lvl,
                'foto' => $gambar,
                'slug' => $slug,
                'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->where('submenu.slug', $slug)->first(),
                'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            return view('backend/submenu/edit', $data);
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function edit()
    {
        if (session()->get('username') !== NULL && session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas' || session()->get('level') === 'Admin Prodi') {
            $username = session()->get('username');
            $request = \Config\Services::request();
            $id = $request->getVar('id');
            $urutan = $request->getVar('urutan');
            $mainmenu = $request->getVar('mainmenu');
            $submenu = $request->getVar('submenu');
            $akses = $request->getVar('akses');
            $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($submenu)) . $mainmenu);
            $isi = $request->getVar('isi');
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $timestamp = date("Y-m-d h:i:sa");
            $penulis = $username;
            $validasi = $this->validate([
                'submenu' => 'required[submenu],'
            ]);
            if (!$validasi) { // Not valid
                session()->setFlashdata('pesanGagal', 'Format isian tidak sesuai');
                return redirect()->to(base_url('/submenu'));
            } else {
                $data = [
                    'urutan' => $urutan,
                    'submenu' => $submenu,
                    'slug' => $slug,
                    'id_mainmenu' => $mainmenu,
                    'content' => $isi,
                    'timestamp' => $timestamp,
                    'penulis' => $penulis,
                    'akses' => $akses,
                ];
                $this->SubmenuModel->update($id, $data);
                session()->setFlashdata('pesanHapus', 'Berhasil diubah !');
                return redirect()->to(base_url('/submenu'));
            }
        } else {
            return redirect()->to(base_url('/login'));
        }
    }

    public function hapus($id)
    {
        if (session()->get('username') !== NULL && session()->get('level') === 'Superadmin' || session()->get('level') === 'Admin Fakultas' || session()->get('level') === 'Admin Prodi') {
            $this->SubmenuModel->delete($id);

            session()->setFlashdata('pesanHapus', 'Berhasil dihapus !');
            return redirect()->to(base_url('/submenu'));
        } else {
            return redirect()->to(base_url('/login'));
        }
    }
}
