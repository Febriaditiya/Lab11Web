<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
$data = [
    'title' => 'Halaman Abot',
    'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi
    halaman ini.',
    'nama' => 'Febri Aditia',
    'nim' => '312010212',
    'subtitle' => 'halaman about'
    // 'title' => 'About Me'
    // 'subtitle' => 'Tentang Saya',
];
        return view(
            'about', $data
        );
    }
    public function contact()
    {
        return view('contact');
    }
}