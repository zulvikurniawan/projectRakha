<?php

namespace App\Controllers;

class Masyarakat extends BaseController
{
    protected $AccountModel;

    public function index()
    {
        $data = [
            'title' => 'Rakha Program | Data Masyarakat',
            'currentSidebarMenu' => 'masyarakat'
        ];

        return view('pages/masyarakatData', $data);
    }


    public function add()
    {
        $data = [
            'title' => 'Rakha Program | Data Masyarakat',
            'currentSidebarMenu' => 'masyarakat'
        ];

        return view('pages/masyarakatAdd', $data);
    }
}
