<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'home',
            'subtitle' => 'halaman home'
        ];
        return view('home', $data);
    }
}
