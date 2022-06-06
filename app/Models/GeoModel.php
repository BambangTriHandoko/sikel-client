<?php

namespace App\Models;

use CodeIgniter\Model;

class GeoModel extends Model
{
	//tabel yang akan dipilih sebagai model
	protected $table         = 'apigeo';
	protected $useTimestamps = true;
	protected $primarykey    = 'id';
	//Entitas yang digunakan
	// protected $returnType = 'App\Entities\pendidikan';
	//form yang boleh diisi
	protected $allowedFields = [
'id', 'nama_kel', 'kecamatan', 'warna', 'jumlah', 'lakilaki', 'perempuan', 'kk', 'koordinat'
	];
	//mengambil data berdasarkan ID dari tabel pendidikan
// 	public function getResult($id = false)
// 	{
// 		if ($id === false) {
// 			return $this->findAll();
// 		}

// 		return $this->where(['id' => $id])->first();
// 	}
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
