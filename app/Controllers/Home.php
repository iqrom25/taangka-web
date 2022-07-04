<?php

namespace App\Controllers;

use App\Models\M_galeri;
use App\Models\M_paket;
use App\Models\M_pelayanan;
use App\Models\M_kategori_portofolio;
use App\Models\M_portofolio;
use App\Models\M_tim;
use App\Models\M_artikel;

class Home extends BaseController
{

	public function __construct()
	{
		$this->galeri = new M_galeri();
		$this->paket = new M_paket();
		$this->pelayanan = new M_pelayanan();
		$this->kategori = new M_kategori_portofolio();
		$this->portofolio = new M_portofolio();
		$this->tim = new M_tim();
		$this->artikel = new M_artikel();
	}

	public function index()
	{
		$slideshow = $this->galeri->getSlideShow();
		$paket = $this->paket->getAllPaket();
		$pelayanan = $this->pelayanan->getAllPelayanan();
		$portofolio = $this->galeri->getPortofolio();
		$kategori = $this->kategori->getAllKategori();
		$tim = $this->tim->getAllTim();
		$testimoni = $this->galeri->getTestimoni();
		$artikel = $this->artikel->getAllArtikel();
		$data = [
			'title' => 'Home',
			'slideshow' => $slideshow,
			'paket' => $paket,
			'pelayanan' => $pelayanan,
			'portofolio' => $portofolio,
			'kategori' => $kategori,
			'tim' => $tim,
			'testimoni' => $testimoni,
			'artikel' => $artikel

		];
		return view('index', $data);
	}

	public function paket($id)
	{
		$paketPilih = $this->paket->getPaket($id);
		$paket = $this->paket->getAllPaket();
		$data = [
			'title' => $paketPilih['nama'],
			'paket' => $paket,
			'paketPilih' => $paketPilih
		];
		return view('v_paket', $data);
	}

	public function artikel($id)
	{
		$paket = $this->paket->getAllPaket();
		$artikel = $this->artikel->getArtikel($id);
		$dataArtikel = $this->artikel->getAllArtikel();
		$data = [
			'title' => $artikel['judul'],
			'artikel' => $artikel,
			'dataArtikel' => $dataArtikel,
			'paket' => $paket
		];
		return view('v_artikel', $data);
	}

	public function portofolio()
	{

		$kategoriTerpilih = $this->request->getVar('kategori');

		if ($kategoriTerpilih) {

			if ($kategoriTerpilih == 'Semua') {
				$foto = $this->galeri->getPortofolioPaginate();
			} else {
				$idkategori = $this->kategori->getIDKategori($kategoriTerpilih);
				$idPortofolio = $this->portofolio->getIDKategori($idkategori);
				$foto = $this->galeri->getPortofolioKategoriPaginate($idPortofolio);
			}
		} else {
			$foto = $this->galeri->getPortofolioPaginate();
			$kategoriTerpilih = 'Semua';
		}


		$kategori = $this->kategori->getAllKategori();
		$paket = $this->paket->getAllPaket();

		$data = [
			'title' => 'Portofolio',
			'foto' => $foto,
			'kategori' => $kategori,
			'pager' => $this->galeri->pager,
			'paket' => $paket,
			'kategoriTerpilih' => $kategoriTerpilih
		];
		return view('v_portofolio', $data);
	}

	//--------------------------------------------------------------------

}
