<?php

namespace App\Controllers;

class Profile extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Profile | Jayanti Program',
            'currentSidebarMenu' => 'profile'
        ];

        return view('pages/profileView', $data);
    }
}
