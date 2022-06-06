<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Controllers\BaseController;
use App\Models\NavModel;
use App\Models\AlamatModel;		
use App\Models\BeritaModel;

class Profilekel extends BaseController
{
	protected $profilekelModel;
	//penggunaan profilekelModel
	public function __construct()
	{
		$this->profilekelModel = new ProfileModel();
		$this->NavModel = new NavModel();
		$this->beritaModel = new BeritaModel();
		$this->AlamatModel = new AlamatModel();


	}
	public function index($id = 3)
	{
		//menampilkan data yang ada di tabel profilekel ke index
		// $profilekel = $this->profilekelModel->findAll();
		$data = [
			'title'      => 'profilekel',
			'nav'     => $this->NavModel->getid(),
			'berita'      => $this->beritaModel->getBerita(),
			'A'       => $this->AlamatModel->getid(),
			'profilekel' => $this->profilekelModel->getprofile(3),
		];
		// dd($profilekel);
		return view('/profilekel/index', $data);
	}
	public function struktur($id = 5)
	{
		//menampilkan data yang ada di tabel profilekel ke index
		// $profilekel = $this->profilekelModel->findAll();
		$data = [
			'title'      => 'profilekel',
			'nav'     => $this->NavModel->getid(),
			'berita'      => $this->beritaModel->getBerita(),
			'A'       => $this->AlamatModel->getid(),
			'profilekel' => $this->profilekelModel->getprofile(5),
		];
		// dd($profilekel);
		return view('/profilekel/index2', $data);
	}
	public function visi($id = 4)
	{
		//menampilkan data yang ada di tabel profilekel ke index
		// $profilekel = $this->profilekelModel->findAll();
		$data = [
			'title'      => 'profilekel',
			'nav'     => $this->NavModel->getid(),
			'berita'      => $this->beritaModel->getBerita(),
			'A'       => $this->AlamatModel->getid(),
			'profilekel' => $this->profilekelModel->getprofile($id),
		];
		// dd($profilekel);
		return view('/profilekel/visi', $data);
	}

	public function detail($id)
	{
		//menampilkan data yang dipilih profilekel ke halaman detail
		$data = [
			'title'      => 'profilekel',
			'A'       => $this->AlamatModel->getid(),
			'profilekel' => $this->profilekelModel->getprofile($id),
		];
		return view('profilekel/detail', $data);
	}
	//--------------------------------------------------------------------

}
