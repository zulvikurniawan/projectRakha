<?php

namespace App\Controllers;

class Dashboard extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Dashboard | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'dashboard',
            'SidebarMenuActive' => 'dashboard'
        ];
        return view('pages/dashboard', $data);
    }
}
