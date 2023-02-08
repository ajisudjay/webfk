<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Mitra extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mitra Kerjasama',
        ];
        return view('website/mitra', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Mitra Kerjasama',
            'slug'  => $slug,
        ];
        return view('website/mitra-detail', $data);
    }
}
