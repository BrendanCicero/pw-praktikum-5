<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'IoT | Home'
        ];

        return view('pages/home', $data);
    }
}
