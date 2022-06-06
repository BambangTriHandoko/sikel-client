<?php

namespace App\Controllers;

use App\Models\MapModel;
use App\Models\KecModel;
use App\Models\KependudukanModel;
use App\Controllers\BaseController;
use App\Models\BeritaModel;
use App\Models\NavModel;

class Peta extends BaseController
{
	protected $PetaModel;
	//penggunaan PetaModel
	public function __construct()
	{
		$this->PetaModel = new MapModel();
		$this->kecModel = new KecModel();
		// $this->dataModel = new KependudukanModel();
		// $this->NavModel = new NavModel();
		// $this->beritaModel = new BeritaModel();
	}
	public function index()
	{
		//menampilkan data yang ada di tabel Peta ke index
		$Peta = $this->PetaModel->findAll();
		$data = [
			'title' => 'Peta',
			'Peta'  => $this->PetaModel->getid(),
			// 'nav'     => $this->NavModel->getid(),
			'Kec'  => $this->kecModel->getid(),
			// 'berita'      => $this->beritaModel->getBerita(),

		];
		// dd($Peta);
		return view('/home/index', $data);
	}

	public function waktu()
	{
		return view('Peta/kalender.php');
	}
	public function chart()
	{
		$data = [
			'title' => 'Peta',
			'Peta'  => $this->PetaModel->getMap(),

		];
		return view('/Peta/chart.php', $data);
	}
	public function detail($id)
	{
		//menampilkan data yang dipilih Petaharian ke halaman detail
		$data = [
			'title' => 'Petaharian',
			'Peta'  => $this->PetaModel->getid($id),
			'kep'   => $this->dataModel->getid($id),

		];
		return view('Peta/detail', $data);
	}
	//--------------------------------------------------------------------

}
