<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
	//tabel yang akan dipilih sebagai model
	protected $table         = 'pesan';
	protected $useTimestamps = true;
	//form yang boleh diisi
	protected $allowedFields = [
		'nama',
		'email',
		'pesan',

	];
	//mengambil data berdasarkan ID dari tabel Pesan
	public function getPesan($id = false)
	{
		if ($id === false)
		{
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
}
