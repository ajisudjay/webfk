<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Laboratorium extends BaseController
{
    public function index($slug)
    {
        $data = [
            'title' => 'Laboratorium',
            'slug'  => $slug,
        ];
        return view('website/laboratorium', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Laboratorium',
            'slug'  => $slug,
        ];
        return view('website/laboratorium-detail', $data);
    }
}
