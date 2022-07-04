<?php

namespace App\Models;

use CodeIgniter\Model;

class M_galeri extends Model
{
    protected $table = 'galeri';
    protected $useTimestamps = false;
    protected $allowedFields = ['foto', 'kategori'];

    public function getSlideShow()
    {
        return $this->where(['kategori' => 'slideshow'])->findAll();
    }
    public function getPortofolio()
    {
        return $this->where(['kategori' => 'portofolio'])->findAll();
    }

    public function getPortofolioPaginate()
    {
        return $this->where(['kategori' => 'portofolio'])->paginate(12, 'galeri');
    }

    public function getPortofolioKategoriPaginate($id)
    {
        foreach ($id as $i) {
            $idFoto[] = $i['id_galeri'];
        }
        if (count($id) > 0) {
            return $this->whereIn('id', $idFoto)->paginate(12, 'galeri');
        } else {
            return null;
        }
    }

    public function getIDPortofolio($nama)
    {
        $id = $this->where(['foto' => $nama])->first();
        return $id['id'];
    }
    public function getTestimoni()
    {
        return $this->where(['kategori' => 'testimoni'])->findAll();
    }
}
