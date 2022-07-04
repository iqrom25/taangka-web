<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\M_kategori_portofolio;
use App\Models\M_galeri;

class M_portofolio extends Model
{
    protected $table = 'portofolio';
    protected $useTimestamps = false;
    protected $allowedFields = ['id_galeri', 'id_kategori'];



    public function getAllPortofolio()
    {
        $kategori_p = new M_kategori_portofolio();
        $kategori = $this->findColumn('id_kategori');
        $k_portofolio = [];
        if ($kategori != null) {
            foreach ($kategori as $k) {

                $temp = $kategori_p->getKategori((int)$k);
                $k_portofolio[] = $temp['nama'];
            }
        }

        return $k_portofolio;
    }
    public function getID($id_galeri)
    {
        $id = $this->where(['id_galeri' => $id_galeri])->first();
        return $id['id'];
    }


    public function getIDKategori($id_kategori)
    {
        $id = $this->where(['id_kategori' => $id_kategori])->findAll();
        return $id;
    }
}
