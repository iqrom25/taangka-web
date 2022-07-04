<?php

namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model
{
    protected $table = 'user';
    protected $useTimestamps = false;
    protected $allowedFields = ['foto', 'username', 'password', 'level'];

    public function getUser($username)
    {
        return $this->where(['username' => $username])->first();
    }

    public function getProfil($id)
    {
        return $this->where(['id' => $id])->first();
    }
    public function getAllUser()
    {
        return $this->findAll();
    }

    public function cekLogin()
    {
        $login = session()->get('login');

        if ($login == null) {
            session()->destroy();
            return $login;
        }
        return $login;
    }
}
