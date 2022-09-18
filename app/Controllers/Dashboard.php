<?php

namespace App\Controllers;

use App\Models\MasyarakatModel;

class Dashboard extends BaseController
{

    protected $MasyarakatModel;

    public function index()
    {
        $summary =  $this->MasyarakatModel->getDashboard();
        $totalData = 0;
        foreach ($summary as $s) {
            $totalData += $s['total'];
        }
        $data = [
            'title' => 'Dashboard | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'dashboard',
            'SidebarMenuActive' => 'dashboard',
            'summary' => $summary,
            'total' => $totalData
        ];

        // dd($data['summary']['0']);


        return view('pages/dashboard', $data);
    }
}
