<?php

namespace App\Controllers;

use App\Models\MasyarakatModel;

class Dashboard extends BaseController
{

    protected $MasyarakatModel;

    public function index()
    {
        $data = [
            'title' => 'Dashboard | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'dashboard',
            'SidebarMenuActive' => 'dashboard',
            'dasboardMasyarakat' => $this->MasyarakatModel->getDashboard()

        ];

        // dd($data);


        return view('pages/dashboard', $data);
    }
}
