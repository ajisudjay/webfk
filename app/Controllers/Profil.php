<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Profil extends BaseController
{
    public function detail($slug)
    {
        $data = [
            'title' => 'Profil',
            'slug'  => $slug,
        ];
        return view('website/profil', $data);
    }

    public function sdm($slug)
    {
        $data = [
            'title' => 'Kepegawaian',
            'slug'  => $slug,
        ];
        return view('website/profil-sdm', $data);
    }
}
