<?php

namespace App\Controllers;

use App\Models\M_user;
use App\Models\M_chatting;

class User extends BaseController
{
    public function __construct()
    {
        $this->M_user =  new M_user();
        $this->M_chatting =  new M_chatting();
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
            'chatting' => $this->M_chatting->get_comment(),
            'count' => $this->M_user->count(),
        ];
        return view('user/index', $data);
    }

    public function personal($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return  redirect()->to('./');
        }
        $data = [
            'item' => $this->M_user->detail_item($id),
        ];
        return view('user/personal', $data);
    }

    public function update($id)
    {
        //update user
        $this->M_user->save([
            'id_user' => $id,
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'telepon' => $this->request->getVar('telepon'),
            'password' => $this->request->getVar('password'),
        ]);

        // session()->setFlashdata('berhasil', 'Data Berhasil ditambahkan.');
        return redirect()->to('/user');

        dd($this->request->getVar());
    }

    public function delete($id)
    {
        $this->M_user->delete($id);
        session()->setFlashdata('delete', 'Data berhasil dihapus.');
        return redirect()->to('/user');
    }

    //chatting
    public function addComment($id)
    {
        // //jika admin
        // $input = $this->request->getVar('comment');

        // if ($input) {
        //     $find = $this->M_user->search($input);
        // } else {
        //     $find = $this->M_user;
        // }

        //insert chat
        $this->M_chatting->save([
            'comment' => $this->request->getVar('comment'),
            'id_user' => $id,
        ]);

        session()->setFlashdata('berhasil', 'Data Berhasil ditambahkan.');
        return redirect()->to('/user');
    }

    public function chatting($id)
    {
        if (session()->get('username') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return  redirect()->to('./');
        }
        $data = [
            'chatting' => $this->M_chatting->detail_comment($id),
        ];
        return view('user/chatting', $data);
    }
}
