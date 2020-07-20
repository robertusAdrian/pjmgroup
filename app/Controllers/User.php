<?php

namespace App\Controllers;

use App\Models\M_user;

class User extends BaseController
{
    public function __construct()
    {
        $this->M_user =  new M_user();
    }
    public function index()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return  redirect()->to('./');
        }


        return view('user/index');
    }
}
