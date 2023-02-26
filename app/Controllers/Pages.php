<?php

namespace App\Controllers;

class Pages extends BaseController
{
    // BEGIN FRONTEND
    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];
        return view('frontend/pages/beranda', $data);
    }

    public function prodi($slug)
    {
        $data = [
            'title' => 'Program Studi',
            'slug'  => $slug,
        ];
        return view('frontend/pages/prodi-detail', $data);
    }

    public function sdm($slug)
    {
        $data = [
            'title' => 'Sumber Daya Manusia',
            'slug'  => $slug,
        ];
        return view('frontend/pages/sdm', $data);
    }

    public function tentangkami($slug)
    {
        $data = [
            'title' => 'Tentang Kami',
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
            'slug'  => $slug,
        ];
        return view('frontend/pages/informasi-detail', $data);
    }

    public function laboratorium($slug)
    {
        $data = [
            'title' => 'Laboratorium',
            'slug'  => $slug,
        ];
        return view('frontend/pages/laboratorium', $data);
    }


    public function laboratorium_detail($slug)
    {
        $data = [
            'title' => 'Laboratorium',
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
