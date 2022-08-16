<?php

namespace App\Controllers;

class Profile extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Rakha Program | Profile',
            'currentSidebarMenu' => 'profile'
        ];

        return view('pages/profileView', $data);
    }
}
