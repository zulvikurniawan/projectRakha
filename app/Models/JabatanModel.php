<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table      = 'jabatan';
    protected $primaryKey = 'id_jabatan';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getJabatan($id_jabatan = false)
    {
        if ($id_jabatan == false) {
            return $this
                ->select('jabatan.*')
                ->where(['jabatan.level' => '0'])
                ->orWhere(['jabatan.level' => '2'])
                ->orWhere(['jabatan.level' => '3'])
                ->findAll();
        }

        return $this->where(['id_jabatan' => $id_jabatan])->first();
    }
}
