<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';

    protected $useTimestamps = true;

    protected $allowedFields = ['username', 'email', 'telepon', 'password'];

    public function cek_login($username, $password)
    {
        return $this->where([
            'username' => $username,
            'password' => $password,
        ])->first();
    }
}
