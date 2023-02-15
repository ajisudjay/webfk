<?php

namespace App\Controllers;

use App\Models\SubmenuModel;
use App\Controllers\BaseController;

class Submenu extends BaseController
{
    protected $SubmenuModel;
    public function __construct()
    {
        $this->SubmenuModel = new SubmenuModel();
    }
    public function index()
    {
        if (session()->get('username') == NULL || session()->get('level') === 'Superadmin') {
            $admin = session()->get('nama');
            $lvl = session()->get('level');
            $data = [
                'title' => 'Sub Menu',
                'top_header' => 'Beranda',
                'header' => 'Sub Menu',
                'admin' => $admin,
                'lvl' => $lvl,
            ];
            return view('backend/submenu/index', $data);
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
                    'submenu' => $this->SubmenuModel->select('*')->select('submenu.urutan as submenu_urutan')->select('mainmenu.urutan as mainmenu_urutan')->select('mainmenu.mainmenu as mainmenu_nama')->join('mainmenu', 'mainmenu.id=submenu.id_mainmenu')->orderBy('mainmenu_urutan', 'ASC')->orderBy('submenu_urutan', 'ASC')->get()->getResultArray(),
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
    // public function tambah()
    // {
    //     if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
    //         return redirect()->to(base_url('/login'));
    //     }
    //     $request = \Config\Services::request();
    //     if ($request->isAJAX()) {
    //         $jenis = $request->getVar('jenis');
    //         $latitude = $request->getVar('latitude');
    //         $longitude = $request->getVar('longitude');
    //         $validation = \Config\Services::validation();
    //         $valid = $this->validate([
    //             'jenis' => [
    //                 'label' => 'Jenis',
    //                 'rules' => 'required',
    //                 'errors' => [
    //                     'required' => '{field} Tidak Boleh Kosong',
    //                 ]
    //             ],
    //             'latitude' => [
    //                 'label' => 'Latitude',
    //                 'rules' => 'required',
    //                 'errors' => [
    //                     'required' => '{field} Tidak Boleh Kosong',
    //                 ]
    //             ],
    //             'longitude' => [
    //                 'label' => 'Longitude',
    //                 'rules' => 'required',
    //                 'errors' => [
    //                     'required' => '{field} Tidak Boleh Kosong',
    //                 ]
    //             ],
    //         ]);
    //         if (!$valid) {
    //             $msg = [
    //                 'error' => [
    //                     'jenis' => $validation->getError('jenis'),
    //                     'latitude' => $validation->getError('latitude'),
    //                     'longitude' => $validation->getError('longitude'),
    //                 ],
    //             ];
    //             echo json_encode($msg);
    //         } else {
    //             $data = [
    //                 'jenis' => $jenis,
    //                 'latitude' => $latitude,
    //                 'longitude' => $longitude,
    //             ];
    //             $this->SubmenuModel->insert($data);

    //             $data2 = [
    //                 'jenis' => $this->SubmenuModel->orderBy('jenis', 'ASC')->get()->getResultArray(),
    //             ];
    //             $msg = [
    //                 'sukses' => 'Jenis Berhasil Ditambahkan !',
    //                 'status' => 'berhasil',
    //                 'data' => view('jenis/view-data', $data2)
    //             ];
    //             echo json_encode($msg);
    //         }
    //     } else {
    //         exit('Data Tidak Dapat diproses');
    //     }
    // }

    // public function edit()
    // {
    //     if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
    //         return redirect()->to(base_url('/login'));
    //     }
    //     $request = \Config\Services::request();
    //     if ($request->isAJAX()) {
    //         $id = $request->getVar('id');
    //         $jenis = $request->getVar('jenis');
    //         $latitude = $request->getVar('latitude');
    //         $longitude = $request->getVar('longitude');
    //         $validation = \Config\Services::validation();
    //         $valid = $this->validate([
    //             'latitude' => [
    //                 'label' => 'Latitude',
    //                 'rules' => 'required',
    //                 'errors' => [
    //                     'required' => '{field} Tidak Boleh Kosong',
    //                 ]
    //             ],
    //             'longitude' => [
    //                 'label' => 'Longitude',
    //                 'rules' => 'required',
    //                 'errors' => [
    //                     'required' => '{field} Tidak Boleh Kosong',
    //                 ]
    //             ],
    //         ]);

    //         if (!$valid) {
    //             $msg = [
    //                 'error' => [
    //                     'jenis' => $validation->getError('jenis'),
    //                     'latitude' => $validation->getError('latitude'),
    //                     'longitude' => $validation->getError('longitude'),
    //                 ],
    //             ];
    //             echo json_encode($msg);
    //         } else {
    //             $data = [
    //                 'jenis' => $jenis,
    //                 'latitude' => $latitude,
    //                 'longitude' => $longitude,
    //             ];

    //             $this->SubmenuModel->update($id, $data);

    //             $data2 = [
    //                 'jenis' => $this->SubmenuModel->orderBy('jenis', 'ASC')->get()->getResultArray(),
    //             ];
    //             $msg = [
    //                 'sukses' => 'Jenis Berhasil Diubah !',
    //                 'status' => 'Berhasil',
    //                 'data' => view('jenis/view-data', $data2)
    //             ];
    //             echo json_encode($msg);
    //         }
    //     } else {
    //         exit('Data Tidak Dapat diproses');
    //     }
    // }



    // public function hapus($id)
    // {
    //     if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
    //         return redirect()->to(base_url('/login'));
    //     }
    //     $this->SubmenuModel->delete($id);

    //     session()->setFlashdata('pesanHapus', 'Jenis Berhasil Di Hapus !');
    //     return redirect()->to(base_url('/jenis'));
    // }
}
