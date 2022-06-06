<?php

namespace App\Controllers;

use App\Models\SlidersModel;
use App\Models\BeritaModel;
use App\Models\NavModel;
use App\Models\MapModel;
use App\Models\AlamatModel;

class Home extends BaseController
{
	protected $SlidersModel;
	//penggunaan SlidersModel
	public function __construct()
	{
		$this->beritaModel  = new BeritaModel();
		$this->SlidersModel = new SlidersModel();
		$this->NavModel = new NavModel();
		$this->PetaModel = new MapModel();
		$this->AlamatModel = new AlamatModel();
	}
	public function index()
	{
		//api
		$api = 'https://gis.tasikmalayakota.go.id/integrategeo/67';
		//init resource nya
		$ch = curl_init($api);
		//set return type
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);

		$pagesekarang = $this->request->getVar('page_berita') ? $this->request->getVar('page_berita') : 1;

		$cari =	$this->request->getVar('cari');
		if ($cari) {
			$berita = $this->beritaModel->search($cari);
		}
		if ($cari = null) {
			$berita = $this->beritaModel;
		} else {
			$berita = $this->beritaModel;
		}
		$data         = [
			'nav'     => $this->NavModel->getid(),
			'title'       => 'sliders',
			'sliders'     => $this->SlidersModel->getSlider(),
			'berita'      => $berita->orderBy('id', 'DESC')->paginate(6, 'berita'),
			'pager'       => $this->beritaModel->pager,
			'A'       => $this->AlamatModel->getid(),
			'P'  => json_decode($result, true),
			'currentpage' => $pagesekarang,
		];
		return view('pages/home', $data);
	}


	//--------------------------------------------------------------------

}
