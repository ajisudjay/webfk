<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Menu extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Menu',
        ];
        return view('website/menu', $data);
    }
}
