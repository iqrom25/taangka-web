<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pelayanan extends Model
{
    protected $table = 'pelayanan';
    protected $useTimestamps = false;
    protected $allowedFields = ['icon', 'nama', 'keterangan'];

    public function getAllPelayanan()
    {
        return $this->findAll();
    }
}
