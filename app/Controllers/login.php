<?php

namespace App\Controllers;

class login extends BaseController
{
    protected $AccountModel;

    public function index()
    {
        $data = [
            'title' => 'Login | Rakha Program',
        ];

        return view('pages/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Register | Rakha Program',
        ];

        return view('pages/register', $data);
    }
}
