<?php

namespace App\Controllers;

use App\Models\BerkasModel;

class Berkas extends BaseController
{
	protected $berkasModel;
	//penggunaan berkasModel
	public function __construct()
	{
		$this->berkasModel = new BerkasModel();
	}
	public function index()
	{
		

		//menampilkan data yang ada di tabel berkas ke index
		// $berkas = $this->berkasModel->findAll();
		$data = [
			'title'       => 'berkas',
            'Berkas' => $this->berkasModel->getberkas()
		];
		// dd($berkas);
		return view('berkas/index', $data);
	}
	public function detail()
	{
		//page sekarang

		$pagesekarang = $this->request->getVar('page_berkas') ? $this->request->getVar('page_berkas') : 1;
		//menampilkan data yang ada di tabel berkas ke index
		// $berkas = $this->berkasModel->findAll();
		$data = [
			'title'       => 'berkas',
			'berkas'      => $this->berkasModel->paginate(10, 'berkas'),
			'pager'       => $this->berkasModel->pager,
			'currentpage' => $pagesekarang,
		];
		// dd($berkas);
		return view('berkas/index', $data);
	}

	public function create()
	{
		// untuk form create
		$data = [
			'title'      => 'create berkas',
			'validation' => \Config\Services::validation(),
		];
		return view('berkas/create', $data);
	}
	public function save()
	{
		//validasi input
		if (! $this->validate([
				  'judul' => [
					  'rules'  => 'required|is_unique[berkas.judul]',
					  'errors' => [
						  'required'  => '{field} harus dilabel ',
						  'is_unique' => '{field} sudah ada',
					  ],
				  ],
				  'file'  => [
					  'rules'  => 'max_size[file,10240]|mime_in[file,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/zip]',
					  'errors' => [

						  'max_size' => 'ukuran file terlalu besar maksimal 10mb',
						  'mime_in'  => 'yang anda pilih bukan file',
					  ],
				  ],
			  ]))
		{
			// $validation = \Config\Services::validation();
			// return redirect()->to('/berkas/create')->withInput()->with('validation', $validation);
			return redirect()->to('/berkas/create')->withInput();
		}
		//ambil file file
		$filefile = $this->request->getFile('file');
		//kondlabel file tidak ada
		if ($filefile->getError() === 4)
		{
			$namafile = 'default.pdf';
		}
		else
		{
			//generate nama random file
			$namafile = $filefile->getName();

			//pindah ke folder img
			$filefile->move('pdf', $namafile);
		}

		//simpan data dan memberi berkas
		$this->berkasModel->save([
			'judul' => $this->request->getVar('judul'),
			'file'  => $namafile,
			'label' => $this->request->getVar('label'),
			'tahun' => $this->request->getVar('tahun'),
		]);
		session()->setFlashdata('berkas', 'berhasil ditambahkan');
		return redirect()->to('/berkas');
	}
	public function delete($id)
	{
		//cari file yang akan dihapus dari id nya
		$berkas = $this->berkasModel->find($id);
		;
		// jika file default
		if ($berkas['file'] !== 'default.pdf')
		{
			//hapus file
			unlink('pdf/' . $berkas['file']);
		}

		//method delete
		$this->berkasModel->delete($id);
		//berkas telah dihapus
		session()->setFlashdata('berkas', 'berhasil dihapus');
		return redirect()->to('/berkas');
	}

	public function edit($id)
	{
		// untuk form edit
		$data = [
			'title'      => 'create berkas',
			'validation' => \Config\Services::validation(),
			'berkas'     => $this->berkasModel->getberkas($id),
		];
		return view('berkas/edit', $data);
	}

	public function update($id)
	{
		$berkas   = $this->berkasModel->find($id);
		$filefile = $this->request->getFile('file');
		//kondlabel file tidak ada
		if ($berkas['file'] !== 'default.pdf')
		{
			//hapus file
			unlink('pdf/' . $berkas['file']);
		}
		if ($filefile->getError() === 4)
		{
			$namafile = 'default.pdf';
		}
		else
		{
			//generate nama random file
			$namafile = $filefile->getName();

			//pindah ke folder img
			$filefile->move('pdf', $namafile);
		}

		$this->berkasModel->save([
			'id'    => $id,
			'judul' => $this->request->getVar('judul'),
			'tahun' => $this->request->getVar('tahun'),
			'file'  => $namafile,
			'label' => $this->request->getVar('label'),
		]);
		session()->setFlashdata('berkas', 'berhasil ubah');
		return redirect()->to('/berkas');
	}

	//--------------------------------------------------------------------

}
