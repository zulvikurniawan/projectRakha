<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    protected $AccountModel;

    public function index()
    {
        $data = [
            'title' => 'Detail Account | Rakha Program',
        ];

        return view('pages/dashboard', $data);
    }
}
