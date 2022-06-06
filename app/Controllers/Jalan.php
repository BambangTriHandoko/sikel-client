<?php

namespace App\Controllers;

use App\Models\JalanModel;
use App\Controllers\BaseController;


class jalan extends BaseController
{
	protected $JalanModel;
	//penggunaan JalanModel
	public function __construct()
	{
		$this->JalanModel = new JalanModel();
	}
	public function index()
	{
		//menampilkan data yang ada di tabel jalan ke index
		$jalan = $this->JalanModel->findAll();
		$data = [
			'title' => 'jalan',
			'jalan'  => $this->JalanModel->getid(),
		];
		return view('admin/jalan/index', $data);
	}
	public function create()
	{
		// untuk form create
		$data = [
			'title'      => 'create jalan',
			'validation' => \Config\Services::validation(),
		];
		return view('admin/jalan/create', $data);
	}
	public function save()
	{

		$filefile = $this->request->getFile('nama');
		//kondlabel file tidak ada
		if ($filefile->getError() === 4) {
			$namafile = 'default.geojson';
		} else {
			//generate nama random file
			$namafile = $filefile->getName();

			//pindah ke folder img
			$filefile->move('geo/batas', $namafile);
		}
		$this->JalanModel->save([
			'warna'     => $this->request->getVar('warna'),
			'nama' => $namafile,
		]);
		session()->setFlashdata('pesan', 'berhasil ditambahkan');
		return redirect()->to('/jalan');
	}
	public function delete($id)
	{
		//cari gambar yang akan dihapus dari id nya
		$jalan = $this->JalanModel->find($id);;
		// jika gambar default

		//method delete
		$this->JalanModel->delete($id);
		//pesan telah dihapus
		session()->setFlashdata('pesan', 'berhasil dihapus');
		return redirect()->to('/jalan');
	}
	public function edit($id)
	{
		// untuk form edit
		$data = [
			'title'      => 'create jalan',
			'validation' => \Config\Services::validation(),
			'jalan'        => $this->JalanModel->getid($id),
		];
		return view('admin/jalan/edit', $data);
	}
	public function update($id)
	{
		$jalan   = $this->JalanModel->find($id);
		$filefile = $this->request->getFile('nama');
		//kondlabel nama tidak ada
		if ($jalan['nama'] !== 'default.geojson') {
			//hapus nama
			unlink('geo/batas/' . $jalan['nama']);
		}
		if ($filefile->getError() === 4) {
			$namafile = 'default.geojson';
		} else {
			//generate nama random file
			$namafile = $filefile->getName();

			//pindah ke folder img
			$filefile->move('geo/batas/', $namafile);
		}

		$this->JalanModel->save([
			'id'        => $id,
			'warna'     => $this->request->getVar('warna'),
			'nama' => $namafile,
		]);
		session()->setFlashdata('pesan', 'berhasil ubah');
		return redirect()->to('/jalan');
	}
}
