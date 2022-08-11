<?php

namespace App\Controllers;

// jika memakai contsruct
// use App\Models\AccountModel;

class Admin extends BaseController
{
    protected $AccountModel;

    public function index()
    {
        $data = [
            'title' => 'Admin | Rakha Program',
            'currentSidebarMenu' => 'admin',
            'account' => $this->AccountModel->getAdmin()
        ];

        return view('pages/adminView', $data);
    }


    public function detail($id_account)
    {
        $data = [
            'title' => 'Detail Account | Jayanti Program',
            'currentSidebarMenu' => 'admin',
            'admin' => $this->AccountModel->getAdmin($id_account)
        ];

        return view('pages/accountDetail', $data);
    }

    public function Add()
    {
        $data = [
            'title' => 'Add Account | Rakha Program',
            'currentSidebarMenu' => 'admin',
            'validation' => \config\Services::validation()
        ];

        return view('pages/accountAdd', $data);
    }

    public function save()
    {
        //validasi create account
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[account.nik]',
                'errors' => [
                    'required' => 'NIK harus diisi.',
                    'is_unique' => 'NIK sudah terdaftar.'
                ]
            ],

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],

            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi.'
                ]
            ],

            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email harus diisi.'
                ]
            ],

            'nomor_hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Hp harus diisi.'
                ]
            ]

        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('/admin/AccountAdd')->withInput()->with('validation', $validation);
        }

        $this->AccountModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'foto_profil' => $this->request->getVar('foto_profil')
        ]);

        return redirect()->to('/Admin/');
    }

    public function Delete($nik)
    {
        $this->AccountModel->delete($nik);
        return redirect()->to('/Admin');
    }
}
