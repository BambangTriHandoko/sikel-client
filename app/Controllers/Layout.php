<?php

namespace App\Controllers;

use App\Models\AlamatModel;
use App\Models\BeritaModel;
use App\Models\NavModel;
// use App\Models\NavModel;

class Layout extends BaseController
{
	protected $NavModel;
	//penggunaan NavModel
	public function __construct()
	{
		// $this->NavModel  = new NavModel();

		$this->NavModel = new NavModel();
		$this->AlamatModel = new AlamatModel();
		$this->beritaModel = new BeritaModel();
	}
	public function index()
	{
		$data         = [
			'title'       => 'Nav',

			'berita'      => $this->beritaModel->getBerita(),
			'nav'     => $this->NavModel->getid(),
		];
		return view('Layout/template', $data);
	}
	public function temp()
	{
		$data         = [
			'title'       => 'Nav',

			'nav'     => $this->NavModel->getid(),
		];
		return view('Layout/template2', $data);
	}
	public function edit($id)
	{
		$data         = [
			'title'       => 'Nav',
			'validation' => \Config\Services::validation(),
			'nav'     => $this->NavModel->getid($id),
		];
		return view('Layout/edit', $data);
	}
	public function update($id)
	{
		$layout     = $this->NavModel->find($id);
		$filelogo = $this->request->getFile('logo');
		//kondisi logo tidak diubah
		if ($filelogo->getError() === 4) {
			$namafile = $this->request->getVar('logolama');
		} else {
			// jika logo diubah maka generate nama random file
			$namafile = $filelogo->getRandomName();

			//pindah ke folder img
			$filelogo->move('logo/', $namafile);
		}

		$this->NavModel->save([
			'id'     => $id,
			'warna'  => $this->request->getVar('warna'),
			'panel'  => $this->request->getVar('panel'),
			't_panel'  => $this->request->getVar('t_panel'),
			't_berita'  => $this->request->getVar('t_berita'),
			'logo' => $namafile,

		]);
		session()->setFlashdata('pesan', 'berhasil ubah');
		return redirect()->to('/');
	}
	public function updatealamat($id)
	{
			$this->AlamatModel->save([
			'id'     => $id,
			'alamat'  => $this->request->getVar('alamat'),
			'link_alamat'  => $this->request->getVar('link_alamat'),
			'no_hp'  => $this->request->getVar('no_hp'),
			'email'  => $this->request->getVar('email'),
			'tw'  => $this->request->getVar('tw'),
			'link_tw'  => $this->request->getVar('link_tw'),
			'ig'  => $this->request->getVar('ig'),
			'link_ig'  => $this->request->getVar('link_ig'),
			'web'  => $this->request->getVar('web'),
			'link_web'  => $this->request->getVar('link_web'),

		]);
		session()->setFlashdata('pesan', 'berhasil ubah');
		return redirect()->to('/layout/alamat');
	}

	public function nav()
	{
		$data         = [
			'title'       => 'Nav',

			'nav'     => $this->NavModel->getid(),
		];
		return view('Layout/control', $data);
	}
	public function alamat()
	{
		$data         = [
			'title'       => 'Nav',

			'p'     => $this->AlamatModel->getid(),
		];
		return view('Layout/alamat', $data);
	}
	public function editalamat($id)
	{
		$data         = [
			'title'       => 'Nav',

			'p'     => $this->AlamatModel->getid($id),
		];
		return view('Layout/editalamat', $data);
	}

	//--------------------------------------------------------------------

}
