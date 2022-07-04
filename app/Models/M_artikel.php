<?php

namespace App\Models;

use CodeIgniter\Model;

class M_artikel extends Model
{
    protected $table = 'artikel';
    protected $useTimestamps = false;
    protected $allowedFields = ['thumbnail', 'judul', 'highlight', 'artikel'];

    public function getAllArtikel()
    {
        return $this->findAll();
    }
    public function getArtikel($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
