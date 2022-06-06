<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class Berita extends BaseController
{
	protected $beritaModel;
	//penggunaan BeritaModel
	public function __construct()
	{
		$this->beritaModel = new BeritaModel();
	}
	public function index()
	{
		$pagesekarang = $this->request->getVar('page_berita') ? $this->request->getVar('page_berita') : 1;
		//menampilkan data yang ada di tabel berita ke index
		// $berita = $this->beritaModel->findAll();
		$data = [
			'title'       => 'Berita',
			'berita'      => $this->beritaModel->orderBy('id', 'DESC')->paginate(10, 'berita'),
			'pager'       => $this->beritaModel->pager,
			'currentpage' => $pagesekarang,
		];
		// dd($berita);
		return view('berita/index', $data);
	}

	public function detail($id)
	{
		//menampilkan data yang dipilih berita ke halaman detail
		$data = [
			'title'  => 'Berita',
			'berita' => $this->beritaModel->getBerita($id),
		];
		return view('berita/detail', $data);
	}
	public function create()
	{
		// untuk form create
		$data = [
			'title'      => 'create Berita',
			'validation' => \Config\Services::validation(),
		];
		return view('berita/create', $data);
	}
	public function save()
	{
		//validasi input
		if (! $this->validate([
				  'judul'  => [
					  'rules'  => 'required|is_unique[berita.judul]',
					  'errors' => [
						  'required'  => '{field} harus diisi ',
						  'is_unique' => '{field} sudah ada',
					  ],
				  ],
				  'gambar' => [
					  'rules'  => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
					  'errors' => [

						  'max_size' => 'ukuran gambar terlalu besar',
						  'is_image' => 'yang anda pilih bukan gambar',
						  'mime_in'  => 'yang anda pilih bukan gambar',
					  ],
				  ],
			  ]))
		{
			// $validation = \Config\Services::validation();
			// return redirect()->to('/berita/create')->withInput()->with('validation', $validation);
			return redirect()->to('/berita/create')->withInput();
		}
		//ambil file gambar
		$filegambar = $this->request->getFile('gambar');
		//kondisi gambar tidak ada
		if ($filegambar->getError() === 4)
		{
			$namagambar = 'default.jpg';
		}
		else
		{
			//generate nama random gambar
			$namagambar = $filegambar->getRandomName();

			//pindah ke folder img
			$filegambar->move('img', $namagambar);
		}

		//simpan data dan memberi pesan
		$this->beritaModel->save([
			'judul'  => $this->request->getVar('judul'),
			'label'  => $this->request->getVar('label'),
			'gambar' => $namagambar,
			'isi'    => $this->request->getVar('isi'),
		]);
		session()->setFlashdata('pesan', 'berhasil ditambahkan');
		return redirect()->to('/berita');
	}
	public function delete($id)
	{
		//cari gambar yang akan dihapus dari id nya
		$berita = $this->beritaModel->find($id);
		;
		// jika gambar default
		if ($berita['gambar'] !== 'default.jpg')
		{
			//hapus gambar
			unlink('img/' . $berita['gambar']);
		}

		//method delete
		$this->beritaModel->delete($id);
		//pesan telah dihapus
		session()->setFlashdata('pesan', 'berhasil dihapus');
		return redirect()->to('/berita');
	}

	public function edit($id)
	{
		// untuk form edit
		$data = [
			'title'      => 'create Berita',
			'validation' => \Config\Services::validation(),
			'berita'     => $this->beritaModel->getBerita($id),
		];
		return view('berita/edit', $data);
	}

	public function update($id)
	{
		$berita     = $this->beritaModel->find($id);
		$filegambar = $this->request->getFile('gambar');
		//kondisi gambar tidak diubah
		if ($filegambar->getError() === 4)
		{
			$namafile = $this->request->getVar('gambarlama');
		}
		else
		{
			// jika gambar diubah maka generate nama random file
			$namafile = $filegambar->getRandomName();

			//pindah ke folder img
			$filegambar->move('img', $namafile);
		}

		$this->beritaModel->save([
			'id'     => $id,
			'judul'  => $this->request->getVar('judul'),
			'label'  => $this->request->getVar('label'),
			'gambar' => $namafile,
			'isi'    => $this->request->getVar('isi'),
		]);
		session()->setFlashdata('pesan', 'berhasil ubah');
		return redirect()->to('/berita');
	}

	//--------------------------------------------------------------------

}
