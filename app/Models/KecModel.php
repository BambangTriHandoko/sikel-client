<?php

namespace App\Models;

use CodeIgniter\Model;

class KecModel extends Model
{
	//tabel yang akan dipilih sebagai model
	protected $table = 'map_kecmatan';
	// protected $returnType    = 'object';
	protected $useTimestamps = true;
	//form yang boleh diisi
	protected $allowedFields = [
		'nama',
		'nama_kec',
		'warna',
	];
	//mengambil data berdasarkan ID dari tabel Map
	// public function getMap($id = false)
	// {
	// 	return $this->db->table('map')->join('data_kelurahan', 'data_kelurahan.id_map = map.id')->get()->getResultArray();
	// }
	public function getid($id = false)
	{
		if ($id === false) {
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
}
