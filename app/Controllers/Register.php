<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;

class Register extends Controller
{
	public function __construct()
	{
		$this->UsersModel = new UsersModel();
	}
	public function index()
	{
		//include helper form
		helper(['form']);
		$data = [];
		echo view('/auth/register', $data);
	}

	public function save()
	{
		//include helper form
		helper(['form']);
		//set rules validation form
		$rules = [
			'username'          => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
			'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
			'password'      => 'required|min_length[6]|max_length[200]',
			'confpassword'  => 'matches[password]',
		];

		if ($this->validate($rules)) {
			$data = [
				'username'     => $this->request->getVar('username'),
				'email'    => $this->request->getVar('email'),
				'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
			];
			$this->UsersModel->save($data);
			session()->setFlashdata('pesan', 'akun berhasil ditambahkan');
			return redirect()->to('/fradmin');
		} else {
			$data['validation'] = $this->validator;
			echo view('auth/register', $data);
		}
	}

	public function delete($id)
	{
		$this->UsersModel->delete($id);
		session()->setFlashdata('pesan', 'akun berhasil dihapus');
		return redirect()->to('/users');
	}
}
