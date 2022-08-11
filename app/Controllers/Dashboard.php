<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    protected $AccountModel;

    public function index()
    {
        $data = [
            'title' => 'Rakha Program | Dashboard',
            'currentSidebarMenu' => 'dashboard'
        ];

        return view('pages/dashboard', $data);
    }
}
