<?php

namespace App\Controllers;

use App\Models\M_user;

class Home extends BaseController
{
	public function __construct()
	{
		$this->M_user =  new M_user();
	}
	public function index()
	{

		return view('login');
	}

	public function register()
	{
		$data = [

			'validation' => \Config\Services::validation()
		];
		return view('register', $data);
	}

	public function addUser()
	{
		//validasi user
		if (!$this->validate([
			'username' => [
				'rules' => 'required|is_unique[user.username]',
				'errors' => [
					'required' => '{field} harus diisi.',
					'is_unique' => '{field} sudah terdaftar. '
				]
			],
			'email' => [
				'rules' => 'required|is_unique[user.email]',
				'errors' => [
					'required' => '{field} harus diisi.',
					'is_unique' => '{field} sudah terdaftar. '
				]
			],
			'telepon' => 'required',
		])) {
			$validation = \Config\Services::validation();


			return redirect()->to('/register')->withInput()->with('validation', $validation);
		}

		//insert user
		$this->M_user->save([
			'username' => $this->request->getVar('username'),
			'email' => $this->request->getVar('email'),
			'telepon' => $this->request->getVar('telepon'),
			'password' => $this->request->getVar('password'),
		]);

		session()->setFlashdata('berhasil', 'Data Berhasil ditambahkan.');
		return redirect()->to('/');
	}

	public function cek_login()
	{
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');

		$data = [
			'item' => $this->M_user->cek_login($username, $password),
		];

		// dd($data['item']['username']);
		if ((isset($data['item']['username']) == $username) && (isset($data['item']['password']) == $password)) {
			session()->set('username', $data['item']['username']);
			return  redirect()->to('./user');
		} else {
			session()->setFlashdata('gagal', 'username atau password salah');
			return  redirect()->to('./');
		}
	}

	public function logout()
	{
		$session = \Config\Services::session();
		$session->destroy();
		return  redirect()->to('./');
	}
	//--------------------------------------------------------------------

}
