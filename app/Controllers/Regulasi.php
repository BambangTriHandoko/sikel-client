<?php

namespace App\Controllers;

use App\Models\BerkasModel;
use App\Models\NavModel;
use App\Models\BeritaModel;
use App\Models\AlamatModel;		

class Regulasi extends BaseController
{
	protected $berkasModel;
	//penggunaan berkasModel
	public function __construct()
	{
		$this->BerkasModel = new BerkasModel();
		$this->NavModel = new NavModel();
		$this->beritaModel = new BeritaModel();
		$this->AlamatModel = new AlamatModel();


	}
	public function index()
	{
		//page sekarang

		// $Berkas = $this->berkasModel->findAll();
		$data = [
			'title'  => 'berkas',
			'nav'     => $this->NavModel->getid(),
			'berkas' => $this->BerkasModel->getBerkas(),
			'A'       => $this->AlamatModel->getid(),
			'berita'      => $this->beritaModel->getBerita(),
		];
		// dd($Berkas);
		return view('regulasi/index', $data);
	}
	public function informasi()
	{
		//page sekarang
        $label= "informasi";
		// $Berkas = $this->berkasModel->findAll();
		$data = [
			'title'  => 'berkas',
			'nav'     => $this->NavModel->getid(),
            'A'       => $this->AlamatModel->getid(),
			'berita'      => $this->beritaModel->getBerita(),
		];
		// dd($Berkas);
		return view('regulasi/informasi', $data);
	}

	//--------------------------------------------------------------------

}
