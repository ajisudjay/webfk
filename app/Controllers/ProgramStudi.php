<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProgramStudi extends BaseController
{
    public function detail($slug)
    {
        $data = [
            'title' => 'Program Studi',
            'slug'  => $slug,
        ];
        return view('website/prodi-detail', $data);
    }
}
