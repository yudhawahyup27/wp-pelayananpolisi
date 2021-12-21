<?php

namespace App\Models;

use CodeIgniter\Model;

class modelhilang extends Model
{
    protected $table      = 'kehilangan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_pel', 'kasus', 'alamat'];
    protected $useTimesStamps = 'true';

    public function getkehilangan($nama_pel = false)
    {
        if ($nama_pel == false) {
            return $this->findAll();
        }
        return $this->where(['nama_pel' => $nama_pel])->first();
    }
}
