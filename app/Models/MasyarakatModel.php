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

    protected $allowedFields = ['nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'status_perkawinan', 'pekerjaan', 'kewarganegaraan', 'alamat', 'foto_ktp', 'status', 'keterangan'];

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

    public function getMasyarakatStatus($status)
    {
        return $this->where(['status' => $status])->findAll();
    }

    public function getDashboard()
    {
        return $this
            ->select('
            case when round(DATEDIFF(Cast(CURRENT_TIMESTAMP() as Date), Cast(tanggal_lahir as Date))/365,0) < 17 then count(nik) end as anak_anak,
            case when round(DATEDIFF(Cast(CURRENT_TIMESTAMP() as Date), Cast(tanggal_lahir as Date))/365,0) between 17 and 59 then count(nik) end as dewasa,
            case when round(DATEDIFF(Cast(CURRENT_TIMESTAMP() as Date), Cast(tanggal_lahir as Date))/365,0) > 59 then count(nik) end as lansia,
            jenis_kelamin')
            ->groupBy('jenis_kelamin')
            ->findAll();
    }
}
