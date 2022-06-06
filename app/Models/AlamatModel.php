<?php

namespace App\Models;

use CodeIgniter\Model;

class AlamatModel extends Model
{
	//tabel yang akan dipilih sebagai model
	protected $table         = 'alamat';
// 	protected $useTimestamps = true;
	protected $primarykey    = 'id';
	//Entitas yang digunakan
	// protected $returnType = 'App\Entities\Alamat';
	//form yang boleh diisi
	protected $allowedFields = [
		'alamat', 
		'link_alamat',
		'no_hp',
		'email',
		'tw',
		'link_tw',
		'ig', 
		'link_ig', 
		'web',
		'link_web'
	];
	//mengambil data berdasarkan ID dari tabel Alamat
	public function getAlamat($id = false)
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
