<?php

namespace App\Controllers;

class Profile extends BaseController
{
    protected $AccountModel;

    public function index($id_account)
    {
        $data = [
            'title' => 'Rakha Program | Profile',
            'currentSidebarMenu' => 'profile',
            'user' => $this->AccountModel->getAdmin($id_account)
        ];
        // dd($data);
        return view('pages/profileView', $data);
    }
}
