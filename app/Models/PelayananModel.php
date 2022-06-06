<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayananModel extends Model
{
	//tabel yang akan dipilih sebagai model
	protected $table         = 'pelayanan_publik';
	protected $useTimestamps = true;
	//form yang boleh diisi
	protected $allowedFields = [
		'label',
		'judul',
		'isi',
	];
	//mengambil data berdasarkan ID dari tabel Pelayanan
	public function getid($id = false)
	{
		if ($id === false)
		{
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
}
