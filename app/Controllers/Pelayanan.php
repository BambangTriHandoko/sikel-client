<?php

namespace App\Controllers;

use App\Models\PelayananModel;
use App\Models\NavModel;
use App\Models\BeritaModel;
use App\Controllers\BaseController;
use App\Models\AlamatModel;		


class Pelayanan extends BaseController
{
	protected $PelayananModel;
	//penggunaan PelayananModel
	public function __construct()
	{
		$this->PelayananModel = new PelayananModel();
	
	    	$this->NavModel = new NavModel();
		$this->beritaModel = new BeritaModel();
		$this->AlamatModel = new AlamatModel();


	}
	public function index()
	{
		//menampilkan data yang ada di tabel Pelayanan ke index
		// $Pelayanan = $this->PelayananModel->findAll();
		$data = [
			'title'   => 'Pelayanan',
			'Pelayanan' => $this->PelayananModel->getid(),
			'A'       => $this->AlamatModel->getid(),
		];
		// dd($Pelayanan);
		return view('Pelayanan/index', $data);
	}

	public function halaman($id)
	{
		//menampilkan data yang dipilih Pelayanan ke halaman detail
		$data = [
			'title'   => 'Pelayanan',
			'nav'     => $this->NavModel->getid(),
			'berita'      => $this->beritaModel->getBerita(),
			'Pelayanan' => $this->PelayananModel->getid($id),
			'A'       => $this->AlamatModel->getid(),
		];
		return view('Pelayanan/halaman', $data);
	}
	public function create()
	{
		// untuk form create
		$data = [
			'title'      => 'create Pelayanan',
			'validation' => \Config\Services::validation(),
		];
		return view('Pelayanan/create', $data);
	}
	public function save()
	{
		//validasi input
		if (! $this->validate([
				  'judul' => [
					  'rules'  => 'required|is_unique[pelayanan_publik.judul]',
					  'errors' => [
						  'required'  => '{field} harus diisi ',
						  'is_unique' => '{field} sudah ada',
					  ],
				  ],
				  'label' => [
					  'rules'  => 'required|is_unique[pelayanan_publik.judul]',
					  'errors' => [
						  'required'  => '{field} harus diisi ',
						  'is_unique' => '{field} sudah ada',
					  ],

				  ],

			  ]))
		{
			// $validation = \Config\Services::validation();
			// return redirect()->to('/Pelayanan/create')->withInput()->with('validation', $validation);
			return redirect()->to('/Pelayanan/create')->withInput();
		}
		$this->PelayananModel->save([
			'label' => $this->request->getVar('label'),
			'judul' => $this->request->getVar('judul'),
			'isi'   => $this->request->getVar('isi'),
		]);
		session()->setFlashdata('pesan', 'berhasil ditambahkan');
		return redirect()->to('/Pelayanan');
	}
	public function delete($id)
	{
		//cari gambar yang akan dihapus dari id nya
		$Pelayanan = $this->PelayananModel->find($id);
		;
		// jika gambar default

		//method delete
		$this->PelayananModel->delete($id);
		//pesan telah dihapus
		session()->setFlashdata('pesan', 'berhasil dihapus');
		return redirect()->to('/Pelayanan');
	}

	public function edit($id)
	{
		// untuk form edit
		$data = [
			'title'      => 'create Pelayanan',
			'validation' => \Config\Services::validation(),
			'Pelayanan'    => $this->PelayananModel->getid($id),
		];
		return view('Pelayanan/edit', $data);
	}

	public function update($id)
	{
		$this->PelayananModel->save([
			'id'    => $id,
			'label' => $this->request->getVar('label'),
			'judul' => $this->request->getVar('judul'),
			'isi'   => $this->request->getVar('isi'),
		]);
		session()->setFlashdata('pesan', 'berhasil ubah');
		return redirect()->to('/Pelayanan');
	}
	//--------------------------------------------------------------------

}
