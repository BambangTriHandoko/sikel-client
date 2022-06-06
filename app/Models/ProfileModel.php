<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
	//tabel yang akan dipilih sebagai model
	protected $table         = 'profile';
	protected $useTimestamps = true;
	//form yang boleh diisi
	protected $allowedFields = [
		'label',
		'judul',
		'isi',
	];
	//mengambil data berdasarkan ID dari tabel Profile
	public function getProfile($id = false)
	{
		if ($id === false)
		{
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
}
