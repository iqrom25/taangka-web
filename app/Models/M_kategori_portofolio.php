<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kategori_portofolio extends Model
{
    protected $table = 'kategori_portofolio';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama'];

    public function getAllKategori()
    {
        return $this->findAll();
    }
    public function getKategori($id)
    {
        return $this->where(['id' => $id])->first();
    }
    public function getIDKategori($nama)
    {
        $id = $this->where(['nama' => $nama])->first();
        return $id['id'];
    }
}
