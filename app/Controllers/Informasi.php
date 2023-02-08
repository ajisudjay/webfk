<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Informasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Informasi',
            'slug'  => 'Berita, Artikel dan Agenda',
        ];
        return view('website/informasi', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Informasi',
            'slug'  => $slug,
        ];
        return view('website/informasi-detail', $data);
    }
}
