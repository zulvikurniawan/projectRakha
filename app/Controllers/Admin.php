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
            'title' => 'Admin | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'admin',
            'SidebarMenuActive' => 'admin',
            'account' => $this->AccountModel->getRT(),
        ];

        $validation = \config\Services::validation();
        return view('pages/adminView', $data);
    }

    //method untuk melihat detail akun
    public function detail($id_account)
    {
        $data = [
            'title' => 'Detail Account | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'admin',
            'SidebarMenuActive' => 'admin',
            'admin' => $this->AccountModel->getAdmin($id_account)
        ];

        return view('pages/accountDetail', $data);
    }

    //method untuk form tambah akun
    public function Add()
    {
        $data = [
            'title' => 'Add Account | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'admin',
            'SidebarMenuActive' => 'admin',
            'validation' => \config\Services::validation()
        ];

        return view('pages/accountAdd', $data);
    }

    //method untuk function simpan akun
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

            // 'id_jabatan' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => 'Jabatan harus pilih.'
            //     ]
            // ],

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

            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus diisi.'
                ]
            ],

            'rt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'RT harus diisi.'
                ]
            ],

            'rw' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'RW harus diisi.'
                ]
            ],

            'kelurahanDesa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kelurahan / Desa harus diisi.'
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
            return redirect()->to('/Admin/Add')->withInput();
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
            'id_jabatan' => '1',
            'password' => $this->request->getVar('password'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'email' => $this->request->getVar('email'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kelurahan_desa' => $this->request->getVar('kelurahanDesa'),
            'kabupaten_kota' => $this->request->getVar('kabupatenKota'),
            'provinsi' => $this->request->getVar('provinsi'),
            'foto_profil' => $namaFoto
        ]);

        session()->setFlashdata('tambahData', 'Data berhasil ditambahkan.');
        return redirect()->to('/Admin');
    }

    //method untuk function hapus akun
    public function delete($id_account)
    {
        // cari file berdasarkan id
        $admin = $this->AccountModel->find($id_account);

        // jika file default, maka file tidak dihapus
        if ($admin['foto_profil'] != 'default.jpg') {
            // hapus file
            unlink('img/' . $admin['foto_profil']);
        }

        $this->AccountModel->delete($id_account);
        session()->setFlashdata('hapusData', 'Data berhasil dihapus.');
        return redirect()->to('/Admin');
    }

    //method untuk form edit
    public function edit($id_account)
    {
        $data = [
            $this->request->getVar('id_account'),
            'title' => 'Edit Account | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'admin',
            'SidebarMenuActive' => 'admin',
            'validation' => \config\Services::validation(),
            'jabatan' => $this->JabatanModel->getJabatan(),
            'admin' => $this->AccountModel->getAdmin($id_account)
        ];
        return view('pages/accountEdit', $data);
    }

    //method untuk function update
    public function update($id_account)
    {

        //cek nik lama
        // $nipLama = $this->AccountModel->getRT($this->request->getVar('nipLama'));
        // if ($nipLama['nik'] == $this->request->getVar('nik')) {
        //     $rule_nip = 'required';
        // } else {
        //     $rule_nip = 'required|is_unique[account.nik]';
        // }

        //cek data yang dikirim oleh form
        // dd($this->request->getVar());
        if (!$this->validate([
            // 'nik' => [
            //     'rules' => $rule_nip,
            //     'errors' => [
            //         'required' => 'NIK harus diisi.'
            //     ]
            // ],

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

            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus diisi.'
                ]
            ],

            'rt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'RT harus diisi.'
                ]
            ],

            'rw' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'RW harus diisi.'
                ]
            ],

            'kelurahanDesa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kelurahan / Desa harus diisi.'
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
            return redirect()->to('/Admin/edit/' . $id_account)->withInput();
        }

        //proses menambahkan file foto dari form
        $fileFoto = $this->request->getFile('foto_profil');
        // cek file, apakah file lama tidak diubah
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('foto_profil_lama');
        } else {
            // cek file, apakah file lama default
            if ($namaFoto = $this->request->getVar('foto_profil_lama') != 'default.jpg') {
                // hapus file lama
                unlink('img/' . $this->request->getVar('foto_profil_lama'));
            }
            //pindahkan file ke folder yang dituju
            $fileFoto->move('img');
            // ambil nama file
            $namaFoto = $fileFoto->getName();
        }
        //proses penyimpanan
        $this->AccountModel->save([
            'id_account' => $id_account,
            'nama' => $this->request->getVar('nama'),
            'id_jabatan' => $this->request->getVar('id_jabatan'),
            'password' => $this->request->getVar('password'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'email' => $this->request->getVar('email'),
            'nomor_hp' => $this->request->getVar('nomor_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kelurahan_desa' => $this->request->getVar('kelurahanDesa'),
            'kabupaten_kota' => $this->request->getVar('kabupatenKota'),
            'provinsi' => $this->request->getVar('provinsi'),
            'foto_profil' => $namaFoto
        ]);

        session()->setFlashdata('ubahData', 'Data berhasil diubah.');
        return redirect()->to('/Admin');
    }
}
