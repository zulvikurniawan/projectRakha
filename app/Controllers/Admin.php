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
            return redirect()->to('/admin/Add')->withInput()->with('validation', $validation);
        }

        $this->AccountModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'foto_profil' => $this->request->getVar('foto_profil')
        ]);

        session()->setFlashdata('tambahData', 'Data berhasil ditambahkan.');
        return redirect()->to('/Admin');
    }

    public function delete($id_account)
    {
        $this->AccountModel->delete($id_account);
        session()->setFlashdata('hapusData', 'Data berhasil dihapus.');
        return redirect()->to('/Admin');
    }

    //method untuk form edit
    public function edit($id_account)
    {
        $data = [
            'title' => 'PT. PANARUB | Edit Account',
            'currentSidebarMenu' => 'admin',
            'validation' => \config\Services::validation(),
            'admin' => $this->AccountModel->getAdmin($id_account)
        ];

        return view('pages/accountEdit', $data);
    }

    //method untuk function update
    public function update($id_account)
    {
        //cek data yang dikirim
        // dd($this->request->getVar());
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.',
                ]
            ],

            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi.',
                ]
            ],

            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email harus diisi.',
                ]
            ],

            'nomor_hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor hp harus diisi.',
                ]
            ]

        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('/Admin/edit/' . $this->request->getVar('id_account'))->withInput()->with('validation', $validation);
        }

        $this->AccountModel->save([
            'id_account' => $id_account,
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'foto_profil' => $this->request->getVar('foto_profil')
        ]);

        session()->setFlashdata('ubahData', 'Data berhasil diubah.');
        return redirect()->to('/Admin');
    }
}
