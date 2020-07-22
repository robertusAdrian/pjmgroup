<?php

namespace App\Models;

use CodeIgniter\Model;

class M_chatting extends Model
{
    protected $table = 'tb_chatting';
    protected $primaryKey = 'id_chat';

    protected $useTimestamps = true;

    protected $allowedFields = ['comment', 'id_user'];

    public function get_comment()
    {
        $query = $this->table('tb_chatting')
            ->join('user', 'user.id_user = tb_chatting.id_user')
            ->get()->getResultArray();
        return $query;
    }

    public function detail_comment($id)
    {
        $query = $this->table('tb_chatting')
            ->where('user.id_user', $id)
            ->join('user', 'user.id_user = tb_chatting.id_user')
            ->get()->getResultArray();
        return $query;
    }
}
