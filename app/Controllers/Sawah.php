<?php

namespace App\Controllers;

use App\Models\SawahModel;
use App\Controllers\BaseController;


class sawah extends BaseController
{
	protected $SawahModel;
	//penggunaan SawahModel
	public function __construct()
	{
		$this->SawahModel = new SawahModel();
	}
	public function index()
	{
		//menampilkan data yang ada di tabel sawah ke index
		$sawah = $this->SawahModel->findAll();
		$data = [
			'title' => 'sawah',
			'sawah'  => $this->SawahModel->getid(),
		];
		return view('admin/sawah/index', $data);
	}
	public function create()
	{
		// untuk form create
		$data = [
			'title'      => 'create sawah',
			'validation' => \Config\Services::validation(),
		];
		return view('admin/sawah/create', $data);
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
		$this->SawahModel->save([
			'warna'     => $this->request->getVar('warna'),
			'nama' => $namafile,
		]);
		session()->setFlashdata('pesan', 'berhasil ditambahkan');
		return redirect()->to('/sawah');
	}
	public function delete($id)
	{
		//cari gambar yang akan dihapus dari id nya
		$sawah = $this->SawahModel->find($id);;
		// jika gambar default

		//method delete
		$this->SawahModel->delete($id);
		//pesan telah dihapus
		session()->setFlashdata('pesan', 'berhasil dihapus');
		return redirect()->to('/sawah');
	}
	public function edit($id)
	{
		// untuk form edit
		$data = [
			'title'      => 'create sawah',
			'validation' => \Config\Services::validation(),
			'sawah'        => $this->SawahModel->getid($id),
		];
		return view('admin/sawah/edit', $data);
	}
	public function update($id)
	{
		$sawah   = $this->SawahModel->find($id);
		$filefile = $this->request->getFile('nama');
		//kondlabel nama tidak ada
		if ($sawah['nama'] !== 'default.geojson') {
			//hapus nama
			unlink('geo/batas/' . $sawah['nama']);
		}
		if ($filefile->getError() === 4) {
			$namafile = 'default.geojson';
		} else {
			//generate nama random file
			$namafile = $filefile->getName();

			//pindah ke folder img
			$filefile->move('geo/batas/', $namafile);
		}

		$this->SawahModel->save([
			'id'        => $id,
			'warna'     => $this->request->getVar('warna'),
			'nama' => $namafile,
		]);
		session()->setFlashdata('pesan', 'berhasil ubah');
		return redirect()->to('/sawah');
	}
}
