<?php

namespace App\Controllers;

use App\Models\MainmenuModel;
use App\Controllers\BaseController;

class Mainmenu extends BaseController
{
    protected $MainmenuModel;
    public function __construct()
    {
        $this->MainmenuModel = new MainmenuModel();
    }
    public function index()
    {
        if (session()->get('username') == NULL || session()->get('level') === 'Superadmin') {
            $admin = session()->get('nama');
            $lvl = session()->get('level');
            $data = [
                'title' => 'Main Menu',
                'top_header' => 'Beranda',
                'header' => 'Main Menu',
                'admin' => $admin,
                'lvl' => $lvl,
            ];
            return view('backend/mainmenu/index', $data);
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
                    'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
                    'validation' => \Config\Services::validation(),
                ];
                $msg = [
                    'data' => view('backend/mainmenu/view', $data)
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
        if ($request->isAJAX()) {
            $urutan = $request->getVar('urutan');
            $mainmenu = $request->getVar('mainmenu');
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'urutan' => [
                    'label' => 'Urutan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'mainmenu' => [
                    'label' => 'Main Menu',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'urutan' => $validation->getError('urutan'),
                        'mainmenu' => $validation->getError('mainmenu'),
                    ],
                ];
                echo json_encode($msg);
            } else {
                $data = [
                    'urutan' => $urutan,
                    'mainmenu' => $mainmenu,
                ];
                $this->MainmenuModel->insert($data);

                $data2 = [
                    'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
                ];
                $msg = [
                    'sukses' => 'Main Menu Berhasil Ditambahkan !',
                    'status' => 'berhasil',
                    'data' => view('backend/mainmenu/view', $data2)
                ];
                echo json_encode($msg);
            }
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }

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

    //             $this->MainmenuModel->update($id, $data);

    //             $data2 = [
    //                 'jenis' => $this->MainmenuModel->orderBy('jenis', 'ASC')->get()->getResultArray(),
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



    public function hapus($id)
    {
        if (session()->get('username') == NULL || session()->get('level') !== 'Superadmin') {
            return redirect()->to(base_url('/login'));
        }
        $this->MainmenuModel->delete($id);

        session()->setFlashdata('pesanHapus', 'Main Menu Berhasil Di Hapus !');
        return redirect()->to(base_url('/mainmenu'));
    }
}
