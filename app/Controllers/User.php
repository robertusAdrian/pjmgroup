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
        return view('user/index');
    }
}
