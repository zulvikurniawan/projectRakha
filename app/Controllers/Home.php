<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Rakha Program'
        ];

        return view('pages/homeView', $data);
    }
}
