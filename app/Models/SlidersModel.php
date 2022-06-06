<?php

namespace App\Models;

use CodeIgniter\Model;

class SlidersModel extends Model
{
	//tabel yang akan dipilih sebagai model
	protected $table         = 'slider';
	protected $useTimestamps = true;
	//form yang boleh diisi
	protected $allowedFields = [
		'name',
		'label',
	];
	//mengambil data berdasarkan ID dari tabel Slider
	public function getSlider($id = false)
	{
		if ($id === false)
		{
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
}
