<?php

namespace App\Controllers;

use App\Models\MainmenuModel;
use App\Models\SubmenuModel;

class Pages extends BaseController
{
    protected $MainmenuModel;
    protected $SubmenuModel;
    public function __construct()
    {
        $this->MainmenuModel = new MainmenuModel();
        $this->SubmenuModel = new SubmenuModel();
    }
    // BEGIN FRONTEND
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'title_pages' => '',
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),

        ];
        return view('frontend/pages/beranda', $data);
    }

    public function pages($slug)
    {
        $uri = current_url(true);
        $slugx = $uri->getSegment(3); // Method - instrument
        $cek_menu = $this->SubmenuModel->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->where('slug', $slugx)->first();
        $judul = $cek_menu['mainmenu'];
        $data = [
            'title' => '',
            'title_pages' => $judul,
            'submenu' => $this->SubmenuModel->select('*')->select('submenu.id as submenu_id')->select('mainmenu.id as mainmenu_id')->select('mainmenu.urutan as urutan_mainmenu')->select('submenu.urutan as urutan_submenu')->join('mainmenu', 'submenu.id_mainmenu=mainmenu.id')->orderBy('urutan_mainmenu', 'ASC')->orderBy('urutan_submenu', 'ASC')->get()->getResultArray(),
            'mainmenu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->get()->getResultArray(),
            'slug'  => $slug,
            'menu' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(4),
            'menu2' => $this->MainmenuModel->orderBy('urutan', 'ASC')->findAll(5, 4),
            'content' => $this->SubmenuModel->where('slug', $slugx)->findAll(),
        ];
        return view('frontend/pages/pages', $data);
    }

    public function prodi($slug)
    {
        $data = [
            'title' => 'Program Studi',
            'title_pages' => '',
            'slug'  => $slug,
        ];
        return view('frontend/pages/prodi-detail', $data);
    }

    public function sdm($slug)
    {
        $data = [
            'title' => 'Sumber Daya Manusia',
            'title_pages' => '',
            'slug'  => $slug,
        ];
        return view('frontend/pages/sdm', $data);
    }

    public function tentangkami($slug)
    {
        $data = [
            'title' => 'Tentang Kami',
            'title_pages' => '',
            'slug'  => $slug,
        ];
        return view('frontend/pages/tentangkami', $data);
    }

    public function informasi()
    {
        $data = [
            'title' => 'Informasi',
            'slug'  => 'Berita, Artikel dan Agenda',
        ];
        return view('frontend/pages/informasi', $data);
    }

    public function informasi_detail($slug)
    {
        $data = [
            'title' => 'Informasi',
            'title_pages' => '',
            'slug'  => $slug,
        ];
        return view('frontend/pages/informasi-detail', $data);
    }

    public function laboratorium($slug)
    {
        $data = [
            'title' => 'Laboratorium',
            'title_pages' => '',
            'slug'  => $slug,
        ];
        return view('frontend/pages/laboratorium', $data);
    }


    public function laboratorium_detail($slug)
    {
        $data = [
            'title' => 'Laboratorium',
            'title_pages' => '',
            'slug'  => $slug,
        ];
        return view('frontend/pages/laboratorium-detail', $data);
    }

    public function menu()
    {
        $data = [
            'title' => 'Menu',
        ];
        return view('frontend/pages/menu', $data);
    }

    public function mitra()
    {
        $data = [
            'title' => 'Mitra Kerjasama',
        ];
        return view('frontend/pages/mitra', $data);
    }


    public function mitra_detail($slug)
    {
        $data = [
            'title' => 'Mitra Kerjasama',
            'title_pages' => '',
            'slug'  => $slug,
        ];
        return view('frontend/pages/mitra-detail', $data);
    }
    // END FRONTEND

    // START BACKEND
    public function beranda()
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
            'title' => 'Beranda',
            'lvl' => $lvl,
            'admin' => $admin,
            'foto' => $gambar,
        ];
        return view('backend/pages/beranda', $data);
    }

    public function login()
    {
        $captcha1 = rand(0, 9);
        $captcha2 = rand(0, 9);
        $captcha3 = rand(0, 9);
        $captcha4 = rand(0, 9);
        $captcha = $captcha1 . $captcha2 . $captcha3 . $captcha4;
        $data = [
            'title' => 'Login',
            'captcha' => $captcha,
        ];
        return view('backend/pages/login', $data);
    }
    // END BACKEND
}
