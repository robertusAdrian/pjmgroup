<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';

    protected $useTimestamps = true;

    protected $allowedFields = ['username', 'email', 'telepon', 'password', 'level'];

    public function cek_login($username, $password)
    {
        return $this->where([
            'username' => $username,
            'password' => $password,
        ])->first();
    }
    public function get_item()
    {
        return $this->findAll();
    }

    public function detail_item($id)
    {
        return $this->where(['id_user' => $id])->first();
    }
    public function search($keyword)
    {
        $builder = $this->table('user');
        $builder->like('username', $keyword)->orLike('email', $keyword);
        return $builder;
    }

    public function count()
    {
        $builder = $this->table('user');
        $builder = $this->countAll();
        return $builder;
    }
}
