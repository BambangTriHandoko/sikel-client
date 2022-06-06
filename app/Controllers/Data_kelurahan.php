<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KependudukanModel;
use App\Models\NavModel;
use App\Models\AlamatModel;		


// use App\Models\NavModel;

class Data_kelurahan extends BaseController
{
	protected $NavModel;
	//penggunaan NavModel
	public function __construct()
	{
		// $this->NavModel  = new NavModel();

		$this->NavModel    = new NavModel();
		$this->beritaModel = new BeritaModel();
		$this->AlamatModel = new AlamatModel();

	}
	public function data_wilayah_administratif()
	{
		//api
		$api = 'http://sikel.tasikmalayakota.go.id/integrate/67';
		//init resource nya
		$ch = curl_init($api);
		//set return type
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);

		$data = [
			'title'  => 'Nav',
			'berita' => $this->beritaModel->getBerita(),
			'nav'    => $this->NavModel->getid(),
			'A'       => $this->AlamatModel->getid(),
			'warga' => json_decode($result, true)
		];
		return view('datakel/datawilayah', $data);
	}
	public function data_agama()
	{
		//api
		$api = 'http://sikel.tasikmalayakota.go.id/integrate/67';
		//init resource nya
		$ch = curl_init($api);
		//set return type
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);

		$data = [
			'title'  => 'Nav',
			'berita' => $this->beritaModel->getBerita(),
			'nav'    => $this->NavModel->getid(),
			'A'       => $this->AlamatModel->getid(),
			'warga' => json_decode($result, true)
		];
		return view('datakel/dataagama', $data);
	}
	public function data_perkawinan()
	{
		//api
		$api = 'http://sikel.tasikmalayakota.go.id/integrate/67';
		//init resource nya
		$ch = curl_init($api);
		//set return type
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);

		$data = [
			'title'  => 'Nav',
			'berita' => $this->beritaModel->getBerita(),
			'nav'    => $this->NavModel->getid(),
			'A'       => $this->AlamatModel->getid(),
			'warga' => json_decode($result, true)
		];
		return view('datakel/dataperkawinan', $data);
	}
	public function data_pendidikan()
	{
		$api = 'http://sikel.tasikmalayakota.go.id/integrate/67';
		//init resource nya
		$ch = curl_init($api);
		//set return type
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);

		$data = [
			'title'  => 'Nav',
			'berita' => $this->beritaModel->getBerita(),
			'nav'    => $this->NavModel->getid(),
			'A'       => $this->AlamatModel->getid(),
			'warga' => json_decode($result, true)
		];
		return view('datakel/datapendidikan', $data);
	}
	public function data_pekerjaan()
	{
		$api = 'http://sikel.tasikmalayakota.go.id/integrate/67';
		//init resource nya
		$ch = curl_init($api);
		//set return type
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);

		$data = [
			'title'  => 'Nav',
			'berita' => $this->beritaModel->getBerita(),
			'nav'    => $this->NavModel->getid(),
			'A'       => $this->AlamatModel->getid(),
			'warga' => json_decode($result, true)
		];
		return view('datakel/datapekerjaan', $data);
	}
	public function data_jenis_kelamin()
	{
		$api = 'http://sikel.tasikmalayakota.go.id/integrate/67';
		//init resource nya
		$ch = curl_init($api);
		//set return type
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);

		$data = [
			'title'  => 'Nav',
			'berita' => $this->beritaModel->getBerita(),
			'nav'    => $this->NavModel->getid(),
			'A'       => $this->AlamatModel->getid(),
			'warga' => json_decode($result, true)
		];
		return view('datakel/datajeniskelamin', $data);
	}
	public function data_warganegara()
	{
		$data = [
			'title'  => 'Nav',
			'berita' => $this->beritaModel->getBerita(),
			'nav'    => $this->NavModel->getid(),
		];
		return view('datakel/datawarganegara', $data);
	}


	//--------------------------------------------------------------------

}
