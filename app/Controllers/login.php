<?php

namespace App\Controllers;

use App\Models\JabatanModel;

class login extends BaseController
{
    protected $AccountModel;
    // mengarahkan ke tampilan login
    public function index()
    {
        $data = [
            'title' => 'Login | Rakha Program',
        ];

        return view('pages/login', $data);
    }

    // proses login
    public function proses()
    {
        // ambil dataq dari form login
        $nik = $this->request->getVar('nik');
        $password = $this->request->getVar('password');

        // ambil data dari model
        $user = $this->AccountModel->getNik($nik);
        // logic login
        if ($nik == null || $password == null) {
            session()->setFlashdata('error', 'NIK atau Password Tidak Boleh Kosong.');
            return redirect()->to('/login')->withInput();
        }
        if ($user == null) {
            session()->setFlashdata('error', 'NIK Tidak Terdaftar.');
            return redirect()->to('/login')->withInput();
        } else {
            if ($password == $user['password']) {
                session()->set('user', $user);
                return redirect()->to('/dashboard');
            } else {
                session()->setFlashdata('error', 'Password Salah.');
                return redirect()->to('/login')->withInput();
            }
        }
    }

    //menampilkan page regietser
    public function register()
    {
        $data = [
            'title' => 'Add Account | Rakha Program',
            'currentSidebarMenu' => 'admin',
            'jabatan' => $this->JabatanModel->getJabatan(),
            'validation' => \config\Services::validation()
        ];

        return view('pages/register', $data);
    }

    //login save
    public function save()
    {
        // dd($this->request->getVar());
        //validasi create account
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[account.nik]|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'NIK harus diisi.',
                    'is_unique' => 'NIK sudah terdaftar.',
                    'min_length' => 'NIK kurang dari 16 angka.',
                    'max_length' => 'NIK lebih dari 16 angka.',

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

            'id_jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan harus pilih.'
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
            return redirect()->to('/login/register')->withInput()->with('validation', $validation);
        }
        $this->AccountModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'id_jabatan' => $this->request->getVar('id_jabatan'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'foto_profil' => $this->request->getVar('foto_profil')
        ]);

        session()->setFlashdata('register', 'Data berhasil ditambahkan.');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy('user');
        session()->setFlashdata('success', 'Anda Berhasil Logout.');
        return redirect()->to('/login');
    }
}
