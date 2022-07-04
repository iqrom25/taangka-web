<?php

namespace App\Controllers;

use App\Models\M_login;

use CodeIgniter\Validation\Rules;

class Login extends BaseController
{


    protected $loginModel;

    public function __construct()
    {
        $this->loginModel = new M_login();
    }

    public function index()
    {

        $data = [
            'title' => 'Login',
            'validation' => \Config\Services::validation()
        ];
        return view('v_login', $data);
    }

    public function auth()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi !'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi !'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/login')->withInput()->with('validation', $validation);
        } else {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');


            $user = $this->loginModel->getUser($username);

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $loginData = [
                        'id' => $user['id'],
                        'foto' => $user['foto'],
                        'username' => $user['username'],
                        'level' => $user['level'],
                        'login' => TRUE
                    ];
                    session()->set($loginData);
                    return redirect()->to('/admin');
                } else {
                    session()->setFlashdata('error', 'Password Salah');
                }
            } else {
                session()->setFlashdata('error', 'username tidak ditemukan');
            }
            return redirect()->to('/login');
        }
    }

    //--------------------------------------------------------------------

}
