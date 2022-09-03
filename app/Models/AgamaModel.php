<?php

namespace App\Models;

use CodeIgniter\Model;

class AgamaModel extends Model
{
    protected $table      = 'agama';
    protected $primaryKey = 'id_agama';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getAgama($id_agama = false)
    {
        if ($id_agama == false) {
            return $this->findAll();
        }

        return $this->where(['id_agama' => $id_agama])->first();
    }
}
