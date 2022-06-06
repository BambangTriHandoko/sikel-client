<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Controllers\BaseController;

class Users extends BaseController
{
	protected $usersModel;
	//penggunaan UsersModel
	public function __construct()
	{
		$this->usersModel = new UsersModel();
	}
	public function index()
	{
		$data = [
			'title' => 'Users',
			'users' => $this->usersModel->getUsers(),
		];
		return view('/admin/user', $data);
	}
	public function forgot($id)
	{
		$data = [
			'title' => 'Users',
			'Users' => $this->userModel->getUsers($id),
		];
		return view('/admin/forgot', $data);
	}
	public function delete($id)
	{
		//cari gambar yang akan dihapus dari id nya
		$users = $this->usersModel->find($id);

		//method delete
		$this->usersModel->delete($id);
		//pesan telah dihapus
		session()->setFlashdata('pesan', 'berhasil dihapus');
		return redirect()->to('/Users');
	}

	public function logout()
	{
		session_destroy();

		return redirect()->to('/register');
	}
	//--------------------------------------------------------------------

}
