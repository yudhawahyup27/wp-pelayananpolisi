<?php

namespace App\Models;

use CodeIgniter\Model;

class mskck extends Model
{
    protected $table      = 'skck';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_d', 'nama_b', 'jenis_kep', 'alamat', 'rt', 'rw', 'status'];
    protected $useTimesStamps = 'true';

    public function getskck($nama_d = false)
    {
        if ($nama_d == false) {
            return $this->findAll();
        }
        return $this->where(['nama_d' => $nama_d])->first();
    }
}
