<?php

namespace App\Models;

use CodeIgniter\Model;

class MasyarakatModel extends Model
{
    protected $table      = 'masyarakat';
    protected $primaryKey = 'id_masyarakat';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'status_perkawinan', 'pekerjaan', 'kewarganegaraan', 'alamat', 'foto_ktp'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getMasyarakat($id_masyarakat = false)
    {
        if ($id_masyarakat == false) {
            return $this->findAll();
        }
        return $this->where(['id_masyarakat' => $id_masyarakat])->first();
    }

    public function getTotalDataMasyarakat()
    {
        return $this
            ->select('count(id_masyarakat) as totalDataMasyarakat')
            ->first();
    }
}
