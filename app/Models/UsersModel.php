<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
	//tabel yang akan dipilih sebagai model
	protected $table         = 'users';
	protected $useTimestamps = true;
	//form yang boleh diisi
	protected $allowedFields = [
		'email',
		'username',
		'password',
		'foto',
	];
	//mengambil data berdasarkan ID dari tabel Users
	public function getUsers($id = false)
	{
		if ($id === false) {
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
}
