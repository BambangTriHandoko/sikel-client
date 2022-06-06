<?php

namespace App\Controllers;

use App\Models\MapModel;
use App\Models\KecModel;
use App\Controllers\BaseController;


class Kelurahan extends BaseController
{
	protected $PetaModel;
	//penggunaan PetaModel
	public function __construct()
	{
		$this->PetaModel = new MapModel();
		$this->kecModel = new KecModel();
	}
	public function index()
	{
		//menampilkan data yang ada di tabel Peta ke index
		$Peta = $this->PetaModel->findAll();
		$data = [
			'title' => 'Peta',
			'Peta'  => $this->PetaModel->getid(),
			'Kec'  => $this->kecModel->getid(),

		];
		return view('admin/kelurahan/index', $data);
	}
	public function kecamatan()
	{
		//menampilkan data yang ada di tabel Map ke index
		// $Map = $this->PetaModel->findAll();
		$data = [
			'title' => 'Map',
			'Kec'   => $this->kecModel->getid(),
			'isi'   => 'v_map',
		];
		// dd($Map);
		return view('admin/kecamatan/index', $data);
	}
	public function view()
	{
		//menampilkan data yang ada di tabel Map ke index
		// $Map = $this->PetaModel->findAll();
		$data = [
			'title' => 'Map',
			'Map'   => $this->PetaModel->getMap(),
		];
		// dd($Map);
		return view('/kelurahan/view', $data);
	}

	public function detail($id)
	{
		//menampilkan data yang dipilih Map ke halaman detail
		$data = [
			'title' => 'Map',
			'Map'   => $this->PetaModel->getMap($id),
		];
		return view('Map/detail', $data);
	}
	public function create()
	{
		// untuk form create
		$data = [
			'title'      => 'create Map',
			'validation' => \Config\Services::validation(),
		];
		return view('admin/kelurahan/create', $data);
	}
	public function createkec()
	{
		// untuk form create
		$data = [
			'title'      => 'create Map',
			'validation' => \Config\Services::validation(),
		];
		return view('admin/kecamatan/create', $data);
	}
	public function save()
	{
		//validasi input
		if (!$this->validate([
			'nama_kel' => [
				'rules'  => 'required|is_unique[map_kelurahan.nama_kel]',
				'errors' => [
					'required'  => '{field} harus diisi ',
					'is_unique' => '{field} sudah ada',
				],
			],
		])) {
			// $validation = \Config\Services::validation();
			// return redirect()->to('/kelurahan/create')->withInput()->with('validation', $validation);
			return redirect()->to('/kelurahan/create')->withInput();
		}
		$filefile = $this->request->getFile('nama');
		//kondlabel file tidak ada
		if ($filefile->getError() === 4) {
			$namafile = 'default.geojson';
		} else {
			//generate nama random file
			$namafile = $filefile->getName();

			//pindah ke folder img
			$filefile->move('geo/kelurahan', $namafile);
		}
		$this->PetaModel->save([
			'kecamatan' => $this->request->getVar('kecamatan'),
			'nama_kel'  => $this->request->getVar('nama_kel'),
			'warna'     => $this->request->getVar('warna'),
			'nama' => $namafile,
		]);
		session()->setFlashdata('pesan', 'berhasil ditambahkan');
		return redirect()->to('/kelurahan');
	}
	public function savekec()
	{
		$filefile = $this->request->getFile('nama');
		//kondlabel file tidak ada
		if ($filefile->getError() === 4) {
			$namafile = 'default.geojson';
		} else {
			//generate nama random file
			$namafile = $filefile->getName();

			//pindah ke folder img
			$filefile->move('geo/kecamatan', $namafile);
		}
		$this->kecModel->save([
			'warna'     => $this->request->getVar('warna'),
			'nama_kec'     => $this->request->getVar('nama_kec'),
			'nama' => $namafile,
		]);
		session()->setFlashdata('pesan', 'berhasil ditambahkan');
		return redirect()->to('/kelurahan/kecamatan');
	}
	public function delete($id)
	{
		//cari gambar yang akan dihapus dari id nya
		$Map = $this->PetaModel->find($id);;
		// jika gambar default

		//method delete
		$this->PetaModel->delete($id);
		//pesan telah dihapus
		session()->setFlashdata('pesan', 'berhasil dihapus');
		return redirect()->to('/kelurahan/kecamatan');
	}
	public function deletekec($id)
	{
		//cari gambar yang akan dihapus dari id nya
		$Kec = $this->kecModel->find($id);;
		// jika gambar default

		//method delete
		$this->kecModel->delete($id);
		//pesan telah dihapus
		session()->setFlashdata('pesan', 'berhasil dihapus');
		return redirect()->to('/kelurahan/kecamatan');
	}

	public function edit($id)
	{
		// untuk form edit
		$data = [
			'title'      => 'create Map',
			'validation' => \Config\Services::validation(),
			'Map'        => $this->PetaModel->getid($id),
		];
		return view('admin/kelurahan/edit', $data);
	}
	public function editkec($id)
	{
		// untuk form edit
		$data = [
			'title'      => 'create Map',
			'validation' => \Config\Services::validation(),
			'Map'        => $this->kecModel->getid($id),
		];
		return view('admin/kecamatan/edit', $data);
	}

	public function updatekec($id)
	{
		$map   = $this->kecModel->find($id);
		$filefile = $this->request->getFile('nama');
		//kondlabel nama tidak ada
		if ($map['nama'] !== 'default.geojson') {
			//hapus nama
			unlink('geo/kecamatan/' . $map['nama']);
		}
		if ($filefile->getError() === 4) {
			$namafile = 'default.geojson';
		} else {
			//generate nama random file
			$namafile = $filefile->getName();

			//pindah ke folder img
			$filefile->move('geo/kecamatan', $namafile);
		}

		$this->kecModel->save([
			'id'        => $id,
			'nama_kec'     => $this->request->getVar('nama_kec'),
			'warna'     => $this->request->getVar('warna'),
			'nama' => $namafile,
		]);
		session()->setFlashdata('pesan', 'berhasil ubah');
		return redirect()->to('/kelurahan/kecamatan');
	}
	public function update($id)
	{
		$map   = $this->PetaModel->find($id);
		$filefile = $this->request->getFile('nama');
		//kondlabel nama tidak ada
		if ($map['nama'] !== 'default.geojson') {
			//hapus nama
			unlink('geo/kelurahan/' . $map['nama']);
		}
		if ($filefile->getError() === 4) {
			$namafile = 'default.geojson';
		} else {
			//generate nama random file
			$namafile = $filefile->getName();

			//pindah ke folder img
			$filefile->move('geo/kelurahan/', $namafile);
		}

		$this->PetaModel->save([
			'id'        => $id,
			'kecamatan' => $this->request->getVar('kecamatan'),
			'nama_kel'  => $this->request->getVar('nama_kel'),
			'warna'     => $this->request->getVar('warna'),
			'nama' => $namafile,
		]);
		session()->setFlashdata('pesan', 'berhasil ubah');
		return redirect()->to('/kelurahan');
	}
}
