<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Controllers\BaseController;

class Profile extends BaseController
{
	protected $profileModel;
	//penggunaan ProfileModel
	public function __construct()
	{
		$this->profileModel = new ProfileModel();
	}
	public function index()
	{
		//menampilkan data yang ada di tabel Profile ke index
		// $Profile = $this->ProfileModel->findAll();
		$data = [
			'title'   => 'profile',
			'Profile' => $this->profileModel->getProfile(),
		];
		// dd($Profile);
		return view('/Profile/index', $data);
	}

	public function detail($id)
	{
		//menampilkan data yang dipilih Profile ke halaman detail
		$data = [
			'title'   => 'profile',
			'Profile' => $this->profileModel->getProfile($id),
		];
		return view('Profile/detail', $data);
	}
	public function create()
	{
		// untuk form create
		$data = [
			'title'      => 'create Profile',
			'validation' => \Config\Services::validation(),
		];
		return view('Profile/create', $data);
	}
	public function save()
	{
		//validasi input
		if (! $this->validate([
				  'judul' => [
					  'rules'  => 'required|is_unique[profile.judul]',
					  'errors' => [
						  'required'  => '{field} harus diisi ',
						  'is_unique' => '{field} sudah ada',
					  ],
				  ],
				  'label' => [
					  'rules'  => 'required|is_unique[profile.judul]',
					  'errors' => [
						  'required'  => '{field} harus diisi ',
						  'is_unique' => '{field} sudah ada',
					  ],

				  ],

			  ]))
		{
			// $validation = \Config\Services::validation();
			// return redirect()->to('/Profile/create')->withInput()->with('validation', $validation);
			return redirect()->to('/Profile/create')->withInput();
		}
		$this->profileModel->save([
			'label' => $this->request->getVar('label'),
			'judul' => $this->request->getVar('judul'),
			'isi'   => $this->request->getVar('isi'),
		]);
		session()->setFlashdata('pesan', 'berhasil ditambahkan');
		return redirect()->to('/profile');
	}
	public function delete($id)
	{
		//cari gambar yang akan dihapus dari id nya
		$Profile = $this->profileModel->find($id);
		;
		// jika gambar default

		//method delete
		$this->profileModel->delete($id);
		//pesan telah dihapus
		session()->setFlashdata('pesan', 'berhasil dihapus');
		return redirect()->to('/Profile');
	}

	public function edit($id)
	{
		// untuk form edit
		$data = [
			'title'      => 'create Profile',
			'validation' => \Config\Services::validation(),
			'profile'    => $this->profileModel->getProfile($id),
		];
		return view('Profile/edit', $data);
	}

	public function update($id)
	{
		$this->profileModel->save([
			'id'    => $id,
			'label' => $this->request->getVar('label'),
			'judul' => $this->request->getVar('judul'),
			'isi'   => $this->request->getVar('isi'),
		]);
		session()->setFlashdata('pesan', 'berhasil ubah');
		return redirect()->to('/Profile');
	}
	//--------------------------------------------------------------------

}
