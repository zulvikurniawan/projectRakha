<?php

namespace App\Controllers;


class Masyarakat extends BaseController
{
    protected $MasyarakatModel;

    public function index()
    {
        $data = [
            'title' => 'Report | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'masyarakat',
            'SidebarMenuActive' => 'masyarakat',
            'masyarakat' => $this->MasyarakatModel->getMasyarakat()
        ];
        $validation = \config\Services::validation();
        return view('pages/masyarakatView', $data);
    }

    //method untuk melihat detail masyarakat
    public function detail($id_masyarakat)
    {
        $data = [
            'title' => 'Detail masyarakat | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'masyarakat',
            'SidebarMenuActive' => 'masyarakat',
            'masyarakat' => $this->MasyarakatModel->getMasyarakat($id_masyarakat)
        ];

        return view('pages/masyarakatDetail', $data);
    }

    //method untuk melihat detail masyarakat
    public function detailApproval($id_masyarakat)
    {
        $data = [
            'title' => 'Detail masyarakat | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'masyarakat',
            'SidebarMenuActive' => 'approval',
            'masyarakat' => $this->MasyarakatModel->getMasyarakat($id_masyarakat)
        ];

        return view('pages/masyarakatDetailApproval', $data);
    }

    //method untuk form tambah masyarakat
    public function Add()
    {
        $data = [
            'title' => 'Add masyarakat | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'masyarakat',
            'SidebarMenuActive' => 'masyarakat',
            'validation' => \config\Services::validation()
        ];

        return view('pages/masyarakatAdd', $data);
    }

    //method untuk function simpan masyarakat
    public function save()
    {
        // dd($this->request->getVar());
        //validasi create masyarakat
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[masyarakat.nik]|min_length[16]|max_length[16]',
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

            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat lahir harus diisi.'
                ]
            ],

            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir harus pilih.'
                ]
            ],

            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin harus dipilih.',
                ]
            ],

            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Agama harus diisi.'
                ]
            ],

            'status_perkawinan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status perkawinan harus diisi.'
                ]
            ],
            'pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pekerjaan harus diisi.'
                ]
            ],
            'kewarganegaraan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kewarganegaraan harus diisi.'
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
            'foto_ktp' => [
                'rules' => 'uploaded[foto_ktp]|max_size[foto_ktp,5120]|is_image[foto_ktp]|mime_in[foto_ktp,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Gambar harus diisi',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mine_in' => 'Yang anda pilih bukan gambar'
                ]
            ]

        ])) {
            // $validation = \config\Services::validation();
            return redirect()->to('/Masyarakat/Add')->withInput();
        }


        // ambil file dari form input
        $fileFoto = $this->request->getFile('foto_ktp');
        // pindahkan file ke folder yang dituju
        $fileFoto->move('img');
        // ambil nama file
        $namaFoto = $fileFoto->getName();

        //proses save
        $this->MasyarakatModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'agama' => $this->request->getVar('agama'),
            'status_perkawinan' => $this->request->getVar('status_perkawinan'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
            'alamat' => $this->request->getVar('alamat'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kelurahan_desa' => $this->request->getVar('kelurahanDesa'),
            'kabupaten_kota' => $this->request->getVar('kabupatenKota'),
            'provinsi' => $this->request->getVar('provinsi'),
            'foto_ktp' => $namaFoto,
            'status' => 'Pending',
            "keterangan" => 'Pending'
        ]);

        session()->setFlashdata('tambahData', 'Data berhasil ditambahkan.');
        return redirect()->to('/Masyarakat');
    }

    //menampilkan data approval 
    public function approval()
    {
        $status = 'pending';
        $data = [
            'title' => 'Masyarakat | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'masyarakat',
            'SidebarMenuActive' => 'approval',
            'masyarakatStatus' => $this->MasyarakatModel->getMasyarakatStatus($status)
        ];
        return view('pages/masyarakatApproval', $data);
    }

    //proses ACC
    public function acc($id)
    {
        $this->MasyarakatModel->save([
            'id_masyarakat' => $id,
            'status' => 'approve',
            'keterangan' => 'Selesai'
        ]);
        session()->setFlashdata('tambahData', 'Data berhasil diapprove.');
        return redirect()->to('/Masyarakat/approval');
    }

    //form Reject
    public function formReject($id)
    {
        $data = [
            'title' => 'Masyarakat | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'masyarakat',
            'SidebarMenuActive' => 'masyarakat',
            'masyarakat' => $this->MasyarakatModel->getMasyarakat($id)
        ];
        return view('pages/masyarakatReject', $data);
    }

    //Proses reject
    public function reject($id_masyarakat)
    {
        $this->MasyarakatModel->save([
            'id_masyarakat' => $id_masyarakat,
            'status' => 'reject',
            'keterangan' => $this->request->getVar('keterangan')
        ]);
        session()->setFlashdata('tambahData', 'Data berhasil reject.');
        return redirect()->to('/Masyarakat/approval');
    }

    //method untuk function hapus masyarakat
    public function delete($id_masyarakat)
    {
        // cari file berdasarkan id
        $masyarakat = $this->MasyarakatModel->find($id_masyarakat);
        // jika file default, maka file tidak dihapus
        if ($masyarakat['foto_ktp'] != 'default.jpg') {
            // hapus file
            unlink('img/' . $masyarakat['foto_ktp']);
        }

        $this->MasyarakatModel->delete($id_masyarakat);
        session()->setFlashdata('hapusData', 'Data berhasil dihapus.');
        return redirect()->to('/Masyarakat');
    }

    //method untuk form edit
    public function edit($id_masyarakat)
    {
        $data = [
            $this->request->getVar('id_masyarakat'),
            'title' => 'Edit masyarakat | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'masyarakat',
            'SidebarMenuActive' => 'masyarakat',
            'validation' => \config\Services::validation(),
            'masyarakat' => $this->MasyarakatModel->getMasyarakat($id_masyarakat)
        ];
        return view('pages/masyarakatEdit', $data);
    }

    //method untuk function update
    public function update($id_masyarakat)
    {

        //cek nik lama
        // $nipLama = $this->MasyarakatModel->getMasyarakat($this->request->getVar('nipLama'));
        // if ($nipLama['nik'] == $this->request->getVar('nik')) {
        //     $rule_nip = 'required';
        // } else {
        //     $rule_nip = 'required|is_unique[masyarakat.nik]';
        // }

        //cek data yang dikirim oleh form
        // dd($this->request->getVar());
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'NIK harus diisi.',
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

            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat lahir harus diisi.'
                ]
            ],

            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir harus pilih.'
                ]
            ],

            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin harus dipilih.',
                ]
            ],

            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Agama harus diisi.'
                ]
            ],

            'status_perkawinan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status perkawinan harus diisi.'
                ]
            ],
            'pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pekerjaan harus diisi.'
                ]
            ],
            'kewarganegaraan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kewarganegaraan harus diisi.'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus diisi.'
                ]
            ],

            'foto_ktp' => [
                'rules' => 'max_size[foto_ktp,5120]|is_image[foto_ktp]|mime_in[foto_ktp,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mine_in' => 'Yang anda pilih bukan gambar'
                ]
            ]

        ])) {
            return redirect()->to('/Masyarakat/edit/' . $id_masyarakat)->withInput();
        }

        //proses menambahkan file foto dari form
        $fileFoto = $this->request->getFile('foto_ktp');
        // cek file, apakah file lama tidak diubah
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('foto_ktp_lama');
        } else {
            // cek file, apakah file lama default
            if ($namaFoto = $this->request->getVar('foto_ktp_lama') != 'default.jpg') {
                // hapus file lama
                unlink('img/' . $this->request->getVar('foto_ktp_lama'));
            }
            //pindahkan file ke folder yang dituju
            $fileFoto->move('img');
            // ambil nama file
            $namaFoto = $fileFoto->getName();
        }
        //proses penyimpanan
        $this->MasyarakatModel->save([
            'id_masyarakat' => $id_masyarakat,
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'agama' => $this->request->getVar('agama'),
            'status_perkawinan' => $this->request->getVar('status_perkawinan'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
            'alamat' => $this->request->getVar('alamat'),
            'foto_ktp' => $namaFoto
        ]);

        session()->setFlashdata('ubahData', 'Data berhasil diubah.');
        return redirect()->to('/Masyarakat');
    }

    public function report()
    {
        $data = [
            'title' => 'Report | KECAMATAN PAKUHAJI',
            'SidebarMenuOpen' => 'masyarakat',
            'SidebarMenuActive' => 'report',
            'masyarakat' => $this->MasyarakatModel->getMasyarakat()
        ];
        $validation = \config\Services::validation();
        return view('pages/masyarakatReport', $data);
    }
}
