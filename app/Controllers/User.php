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
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $find = $this->M_user->search($keyword);
        } else {
            $find = $this->M_user;
        }


        $data = [
            'item' => $find->get_item(),
            'count' => $this->M_user->count(),
        ];
        return view('user/index', $data);
    }

    public function personal()
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return  redirect()->to('./');
        }
        return view('user/personal');
    }

    public function delete($id)
    {
        $this->M_user->delete($id);
        session()->setFlashdata('delete', 'Data berhasil dihapus.');
        return redirect()->to('/user');
    }
}
