<?php

namespace App\Controllers;

use App\Models\KependudukanModel;

// use App\Models\NavModel;

class Data_kel extends BaseController
{
	protected $NavModel;
	//penggunaan NavModel
	public function __construct()
	{
		// $this->NavModel  = new NavModel();

		$this->KependudukanModel = new KependudukanModel();
	}
	public function datawilayah()
	{
		$data = [
			'title'  => 'Nav',
			'warga'  => $this->KependudukanModel->getid()
		];
		return view('/admin/datawilayah/index', $data);
	}
	public function datawilayah_create()
	{
		$data = [
			'title'      => 'create data kelurahan',
			'validation' => \Config\Services::validation(),
		];
		return view('/admin/datawilayah/create', $data);
	}
	public function datawilayah_save()
	{

		//validasi input
		if (!$this->validate([
			'nama_kel' => [
				'rules'  => 'required|is_unique[data_kelurahan.nama_kel]',
				'errors' => [
					'required'  => '{field} harus diisi ',
					'is_unique' => '{field} sudah ada',
				],
			],

		])) {
			// $validation = \Config\Services::validation();
			// return redirect()->to('/data_kelurahan/create')->withInput()->with('validation', $validation);
			return redirect()->to('/data_kel/datawilayah_create')->withInput();
		}
		$this->KependudukanModel->save([
			'nama_kel' => $this->request->getVar('nama_kel'),
			'laki_laki' => $this->request->getVar('laki_laki'),
			'perempuan' => $this->request->getVar('perempuan'),
			'rt' => $this->request->getVar('rt'),
			'rw' => $this->request->getVar('rw'),
			'rw' => $this->request->getVar('rw'),
			'KK' => $this->request->getVar('KK'),

		]);
		session()->setFlashdata('pesan', 'berhasil ditambahkan');
		return redirect()->to('/data_kel/datawilayah');
	}
	public function datawilayah_edit($id)
	{
		$data = [
			'title'      => 'create data kelurahan',
			'validation' => \Config\Services::validation(),
			'warga'  => $this->KependudukanModel->getid($id)
		];
		return view('/admin/datawilayah/edit', $data);
	}
	public function datawilayah_update($id)
	{

		//validasi input
		if (!$this->validate([
			'nama_kel' => [
				'rules'  => 'required[data_kelurahan.nama_kel]',
				'errors' => [
					'required'  => '{field} harus diisi ',
					'is_unique' => '{field} sudah ada',
				],
			],

		])) {
			// $validation = \Config\Services::validation();
			// return redirect()->to('/data_kelurahan/create')->withInput()->with('validation', $validation);
			return redirect()->to('/data_kel/datawilayah_edit')->withInput();
		}
		$this->KependudukanModel->save([
			'id' => $id,
			'nama_kel' => $this->request->getVar('nama_kel'),
			'laki_laki' => $this->request->getVar('laki_laki'),
			'perempuan' => $this->request->getVar('perempuan'),
			'rt' => $this->request->getVar('rt'),
			'rw' => $this->request->getVar('rw'),
			'rw' => $this->request->getVar('rw'),
			'KK' => $this->request->getVar('KK'),

		]);
		session()->setFlashdata('pesan', 'berhasil ditambahkan');
		return redirect()->to('/data_kel/datawilayah');
	}
	public function datawilayah_delete($id)
	{
		//method delete
		$this->KependudukanModel->delete($id);
		//pesan telah dihapus
		session()->setFlashdata('pesan', 'berhasil dihapus');
		return redirect()->to('/data_kel/datawilayah');
	}

	public function data_agama()
	{
		$data = [
			'title'  => 'Nav',
			'berita' => $this->beritaModel->getBerita(),
			'nav'    => $this->NavModel->getid(),
		];
		return view('datakel/dataagama', $data);
	}
	public function data_pendidikan()
	{
		$data = [
			'title'  => 'Nav',
			'berita' => $this->beritaModel->getBerita(),
			'nav'    => $this->NavModel->getid(),
		];
		return view('datakel/datapendidikan', $data);
	}
	public function data_pendidikanKK()
	{
		$data = [
			'title'  => 'Nav',
			'berita' => $this->beritaModel->getBerita(),
			'nav'    => $this->NavModel->getid(),
		];
		return view('datakel/datapendidikanKK', $data);
	}
	public function data_pekerjaan()
	{
		$data = [
			'title'  => 'Nav',
			'berita' => $this->beritaModel->getBerita(),
			'nav'    => $this->NavModel->getid(),
		];
		return view('datakel/datapekerjaan', $data);
	}
	public function data_jenis_kelamin()
	{
		$data = [
			'title'  => 'Nav',
			'berita' => $this->beritaModel->getBerita(),
			'nav'    => $this->NavModel->getid(),
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
