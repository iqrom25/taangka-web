<?php

namespace App\Controllers;

class Error extends BaseController
{
    public function index()
    {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Page Not Found');
    }

    //--------------------------------------------------------------------

}
