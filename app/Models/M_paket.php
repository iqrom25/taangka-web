<?php

namespace App\Models;

use CodeIgniter\Model;

class M_paket extends Model
{
    protected $table = 'paket';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama', 'harga', 'brosur'];

    public function getAllPaket()
    {
        return $this->findAll();
    }
    public function getPaket($id)
    {
        return $this->where(['id' => $id])->First();
    }
}
