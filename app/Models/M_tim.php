<?php

namespace App\Models;

use CodeIgniter\Model;

class M_tim extends Model
{
    protected $table = 'tim';
    protected $useTimestamps = false;
    protected $allowedFields = ['foto', 'nama', 'posisi', 'instagram'];

    public function getAllTim()
    {
        return $this->findAll();
    }
}
