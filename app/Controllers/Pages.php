<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Login',
        ];
        return view('backend/pages/login', $data);
    }
}
