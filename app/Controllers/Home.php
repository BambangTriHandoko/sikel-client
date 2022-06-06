<?php

namespace App\Controllers;

use App\Models\MapModel;
use App\Models\KecModel;
use App\Models\SawahModel;
use App\Models\JalanModel;
use App\Controllers\BaseController;


class Home extends BaseController
{
	protected $PetaModel;
	//penggunaan PetaModel
	public function __construct()
	{
		$this->PetaModel = new MapModel();
		$this->kecModel = new KecModel();
		$this->SawahModel = new SawahModel();
		$this->JalanModel = new JalanModel();
	}
	public function index()
	{
		//menampilkan data yang ada di tabel Peta ke index
		$Peta = $this->PetaModel->findAll();
		$data = [
			'title' => 'Peta',
			'Peta'  => $this->PetaModel->getid(),
			'Kec'  => $this->kecModel->getid(),
			'jalan'  => $this->JalanModel->getid(),
			'sawah'  => $this->SawahModel->getid(),

		];
		return view('home/new_index', $data);
	}
}
