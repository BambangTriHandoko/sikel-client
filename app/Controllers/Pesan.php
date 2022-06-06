<?php

namespace App\Controllers;

use App\Models\PesanModel;

class Pesan extends BaseController
{
	protected $pesanModel;
	//penggunaan pesanModel
	public function __construct()
	{
		$this->pesanModel = new PesanModel();
	}
	public function index()
	{
	
		//menampilkan data yang ada di tabel Pesan ke index
		// $Pesan = $this->pesanModel->findAll();
		$data = [
			'title'       => 'Pesan',
	            'Pesan' => $this->pesanModel->getPesan()
		];
		// dd($Pesan);
		return view('Pesan/index', $data);
	}

	public function detail($id)
	{
		//menampilkan data yang dipilih Pesan ke halaman detail
		$data = [
			'title'  => 'Pesan',
			'Pesan' => $this->pesanModel->getPesan($id),
		];
		return view('Pesan/detail', $data);
	}

	public function kirim()
	{
		//validasi input
		if (! $this->validate([
				  'nama'  => [
					  'rules'  => 'required|is_unique[pesan.nama]',
					  'errors' => [
						  'required'  => '{field} harus dipesan ',
						  'is_unique' => '{field} sudah ada',
					  ],
				  ],
			  ]))
		{
			// $validation = \Config\Services::validation();
			// return redirect()->to('/Pesan/create')->withInput()->with('validation', $validation);
			return redirect()->to('/Pesan/create')->withInput();
		}
		//simpan data dan memberi pesan
		$this->pesanModel->save([
			'nama'  => $this->request->getVar('nama'),
			'email'  => $this->request->getVar('email'),
			'pesan'    => $this->request->getVar('pesan'),
		]);
		session()->setFlashdata('pesan', 'berhasil dikirim');
		return redirect()->to('/');
	}
	public function delete($id)
	{
		//method delete
		$this->pesanModel->delete($id);
		//pesan telah dihapus
		session()->setFlashdata('pesan', 'berhasil dihapus');
		return redirect()->to('/Pesan');
	}

	
	//--------------------------------------------------------------------

}
