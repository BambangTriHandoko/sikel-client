<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
	//tabel yang akan dipilih sebagai model
	protected $table         = 'berita';
	protected $useTimestamps = true;
	//form yang boleh diisi
	protected $allowedFields = [
		'judul',
		'gambar',
		'isi',
		'label',
	];
	//mengambil data berdasarkan ID dari tabel berita
	public function getBerita($id = false)
	{
		if ($id === false) {
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
	public function search($cari)
	{

		return $this->table('berita')->like('judul', $cari);
	}
}
