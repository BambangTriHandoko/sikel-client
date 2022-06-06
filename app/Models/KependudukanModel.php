<?php

namespace App\Models;

use CodeIgniter\Model;

class KependudukanModel extends Model
{
	//tabel yang akan dipilih sebagai model
	protected $table         = 'data_kelurahan';
	protected $useTimestamps = true;
	protected $primarykey    = 'id';
	//Entitas yang digunakan
	// protected $returnType = 'App\Entities\Kependudukan';
	//form yang boleh diisi
	protected $allowedFields = [
		'nama_kel',
		'laki_laki',
		'perempuan',
		'rt',
		'rw',
		'KK',
	];
	//mengambil data berdasarkan ID dari tabel Kependudukan
	public function getKependudukan($id = false)
	{
		if ($id === false) {
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
	//menemukan Id
	public function findByID($id)
	{
		$data = $this->find($id);
		if ($data) {
			return true;
		}
		return false;
	}
	public function findData($id)
	{
		$data = $this->find($id);
		if ($data) {
			return $data;
		}
		return false;
	}
	public function getid($id = false)
	{
		if ($id === false) {
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
}
