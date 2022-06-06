<?php

namespace App\Controllers;

use App\Models\SlidersModel;

class Sliders extends BaseController
{
	protected $SlidersModel;
	//penggunaan SlidersModel
	public function __construct()
	{
		$this->SlidersModel = new SlidersModel();
	}
	public function index()
	{
		//menampilkan data yang ada di tabel Sliders ke index
		// $Sliders = $this->SlidersModel->findAll();
		$data = [
			'title'   => 'sliders',
			'sliders' => $this->SlidersModel->getSlider(),
		];
		// dd($Sliders);
		return view('sliders/index', $data);
	}

	public function create()
	{
		// untuk form create
		$data = [
			'title'      => 'create sliders',
			'validation' => \Config\Services::validation(),
		];
		return view('sliders/create', $data);
	}
	public function save()
	{
		//validasi input
		if (! $this->validate([
				  'name' => [
					  'rules'  => 'max_size[name,2048]|is_image[name]|mime_in[name,image/jpg,image/jpeg,image/png]',
					  'errors' => [

						  'max_size' => 'ukuran name terlalu besar',
						  'is_image' => 'yang anda pilih bukan gambar',
						  'mime_in'  => 'yang anda pilih bukan gambar',
					  ],
				  ],
			  ]))
		{
			// $validation = \Config\Services::validation();
			// return redirect()->to('/Sliders/create')->withInput()->with('validation', $validation);
			return redirect()->to('/sliders/create')->withInput();
		}
		//ambil file name
		$filename = $this->request->getFile('name');
		//kondisi name tidak ada
		if ($filename->getError() === 4)
		{
			$namename = 'default.jpg';
		}
		else
		{
			//generate name random name
			$namename = $filename->getRandomName();

			//pindah ke folder img
			$filename->move('slider', $namename);
		}

		//simpan data dan memberi pesan
		$this->SlidersModel->save([

			'name'  => $namename,
			'label' => $this->request->getVar('label'),
		]);
		session()->setFlashdata('pesan', 'berhasil ditambahkan');
		return redirect()->to('/Sliders');
	}
	public function delete($id)
	{
		//cari name yang akan dihapus dari id nya
		$Sliders = $this->SlidersModel->find($id);
		;
		// jika name default
		if ($Sliders['name'] !== 'default.jpg')
		{
			//hapus name
			unlink('slider/' . $Sliders['name']);
		}

		//method delete
		$this->SlidersModel->delete($id);
		//pesan telah dihapus
		session()->setFlashdata('pesan', 'berhasil dihapus');
		return redirect()->to('/sliders');
	}

	public function edit($id)
	{
		// untuk form edit
		$data = [
			'title'      => 'create Sliders',
			'validation' => \Config\Services::validation(),
			'sliders'    => $this->SlidersModel->getSlider($id),
		];
		return view('sliders/edit', $data);
	}

	public function update($id)
	{
		$Sliders  = $this->SlidersModel->find($id);
		$filename = $this->request->getFile('name');
		//kondisi name tidak diubah
		if ($filename->getError() === 4)
		{
			$namefile = $this->request->getVar('gambarlama');
		}
		else
		{
			// jika name diubah maka generate name random file
			$namefile = $filename->getRandomName();

			//pindah ke folder img
			$filename->move('slider', $namefile);
		}

		$this->SlidersModel->save([
			'id'    => $id,
			'name'  => $namefile,
			'label' => $this->request->getVar('label'),

		]);
		session()->setFlashdata('pesan', 'berhasil ubah');
		return redirect()->to('/Sliders');
	}

	//--------------------------------------------------------------------

}
