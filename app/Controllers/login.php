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
            'title' => 'Login | KECAMATAN PAKUHAJI',
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
            session()->setFlashdata('error', 'NIP atau password Tidak Boleh Kosong.');
            return redirect()->to('/login')->withInput();
        }
        if ($user == null) {
            session()->setFlashdata('error', 'NIP Tidak Terdaftar.');
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
            'title' => 'Register | KECAMATAN PAKUHAJI',
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
                'rules' => 'required|is_unique[account.nik]|min_length[18]|max_length[18]',
                'errors' => [
                    'required' => 'NIP harus diisi.',
                    'is_unique' => 'NIP sudah terdaftar.',
                    'min_length' => 'NIP kurang dari 16 angka.',
                    'max_length' => 'NIP lebih dari 16 angka.',

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

            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin harus dipilih.',
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
            ],

            'foto_profil' => [
                'rules' => 'max_size[foto_profil,5120]|is_image[foto_profil]|mime_in[foto_profil,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mine_in' => 'Yang anda pilih bukan gambar'
                ]
            ]

        ])) {
            // $validation = \config\Services::validation();
            return redirect()->to('/Login/register')->withInput();
        }

        // ambil file dari form input
        $fileFoto = $this->request->getFile('foto_profil');
        // jika user tidak ingin mggunakan foto profil
        // maka foto profil menjadi foto default
        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {
            // pindahkan file ke folder yang dituju
            $fileFoto->move('img');
            // ambil nama file
            $namaFoto = $fileFoto->getName();
        }

        //proses save
        $this->AccountModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'id_jabatan' => $this->request->getVar('id_jabatan'),
            'password' => $this->request->getVar('password'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'email' => $this->request->getVar('email'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'foto_profil' => $namaFoto
        ]);

        session()->setFlashdata('register', 'Data berhasil ditambahkan.');
        return redirect()->to('/Login');
    }

    public function logout()
    {
        session()->destroy('user');
        session()->setFlashdata('success', 'Anda Berhasil Logout.');
        return redirect()->to('/login');
    }
}
