<?php

namespace App\Controllers;

class Profile extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Profile | Jayanti Program'
        ];

        return view('pages/profileView', $data);
    }
}
