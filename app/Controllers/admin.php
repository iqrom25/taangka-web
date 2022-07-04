<?php

namespace App\Controllers;

use App\Models\M_login;
use App\Models\M_galeri;
use App\Models\M_paket;
use App\Models\M_pelayanan;
use App\Models\M_kategori_portofolio;
use App\Models\M_portofolio;
use App\Models\M_tim;
use App\Models\M_artikel;
use CodeIgniter\HTTP\Request;

class admin extends BaseController
{
    protected $loginModel;

    public function __construct()
    {
        $this->loginModel = new M_login();
        $this->galeri = new M_galeri();
        $this->paket = new M_paket();
        $this->pelayanan = new M_pelayanan();
        $this->kategori = new M_kategori_portofolio();
        $this->portofolio = new M_portofolio();
        $this->tim = new M_tim();
        $this->artikel = new M_artikel();
    }


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function index()
    {
        $login = $this->loginModel->cekLogin();

        if ($login) {
            $slideshow = count($this->galeri->getSlideShow());
            $paket = count($this->paket->getAllPaket());
            $pelayanan = count($this->pelayanan->getAllPelayanan());
            $portofolio = count($this->galeri->getPortofolio());
            $kategori = count($this->kategori->getAllKategori());
            $tim = count($this->tim->getAllTim());
            $testimoni = count($this->galeri->getTestimoni());
            $artikel = count($this->artikel->getAllArtikel());
            $administrator = count($this->loginModel->getAllUser());
            $data = [
                'title' => 'Dashboard',
                'slideshow' => $slideshow,
                'paket' => $paket,
                'pelayanan' => $pelayanan,
                'portofolio' => $portofolio,
                'kategori' => $kategori,
                'tim' => $tim,
                'testimoni' => $testimoni,
                'artikel' => $artikel,
                'administrator' => $administrator,
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];
            return view('/admin/v_dashboard', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    /////////////////////////////////////////////////////////////
    public function slideshow()
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $foto = $this->galeri->getSlideShow();

            $data = [
                'title' => 'Slide Show',
                'foto' => $foto,
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];
            return view('/admin/v_slideshow', $data);
        } else {

            return redirect()->to('/login');
        }
    }
    public function tambahGaleri()
    {
        $validasi = $this->validate([
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,6144]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ],
        ]);

        if ($validasi) {

            $foto = $this->request->getFile('foto');
            $nama = $foto->getRandomName();
            $foto->move('img', $nama);
            $this->galeri->save(
                [
                    'foto' => $nama,
                    'kategori' => $this->request->getVar('kategori'),

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/slideshow');
        } else {
            $error = \Config\Services::validation()->getError('foto');
            $error = 'data gagal ditambahkan (' . $error . ')';
            session()->setFlashData('pesan_g', $error);
            return redirect()->to('/admin/slideshow');
        }
    }

    public function hapusGaleri($id)
    {
        $foto = $this->galeri->find($id);
        unlink('img/' . $foto['foto']);
        $this->galeri->delete($id);
        session()->setFlashData('pesan_b', 'Data berhasil dihapus');
        return redirect()->to('/admin/slideshow');
    }

    public function editGaleri()
    {
        $validasi = $this->validate([
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,6144]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ],
        ]);

        if ($validasi) {

            $foto = $this->request->getFile('foto');
            if ($foto->getError() == 4) {

                $nama = $this->request->getVar('fotoLama');
            } else {
                $nama = $foto->getRandomName();
                $foto->move('img', $nama);
                unlink('img/' . $this->request->getVar('fotoLama'));
            }


            $this->galeri->save(
                [
                    'id' => $this->request->getVar('id'),
                    'foto' => $nama,
                    'kategori' => $this->request->getVar('kategori'),

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil diubah');
            return redirect()->to('/admin/slideshow');
        } else {
            $error = \Config\Services::validation()->getError('foto');
            $error = 'data gagal diubah (' . $error . ')';
            session()->setFlashData('pesan_g', $error);
            return redirect()->to('/admin/slideshow');
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function paket()
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $paket = $this->paket->getAllPaket();

            $data = [
                'title' => 'Paket',
                'paket' => $paket,
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_paket', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function detailPaket($id)
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $paket = $this->paket->getPaket($id);

            $data = [
                'title' => ' Detail Paket',
                'paket' => $paket,
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_detailPaket', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function tambahPaket()
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $data = [
                'title' => ' Tambah Paket',
                'validation' => \Config\Services::validation(),
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_tambahPaket', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function savePaket()
    {
        $validasi = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'harga' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'numeric' => '{field} harus berupa angka'
                ]
            ],
            'brosur' => [
                'rules' => 'uploaded[brosur]|max_size[brosur,6144]|is_image[brosur]|mime_in[brosur,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ]
        ]);

        if ($validasi) {

            $brosur = $this->request->getFile('brosur');
            $namabrosur = $brosur->getRandomName();
            $brosur->move('img', $namabrosur);

            $this->paket->save(
                [
                    'nama' => $this->request->getVar('nama'),
                    'harga' => $this->request->getVar('harga'),
                    'brosur' => $namabrosur

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/paket');
        } else {
            return redirect()->to('/admin/tambahPaket')->withInput();
        }
    }
    public function editPaket($id)
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $paket = $this->paket->getPaket($id);
            $data = [
                'title' => 'Edit Paket',
                'paket' => $paket,
                'validation' => \Config\Services::validation(),
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];
            return view('/admin/v_editPaket', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function updatePaket()
    {
        $validasi = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'harga' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'numeric' => '{field} harus berupa angka'
                ]
            ],
            'brosur' => [
                'rules' => 'max_size[brosur,6144]|is_image[brosur]|mime_in[brosur,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ]
        ]);

        if ($validasi) {

            $brosur = $this->request->getFile('brosur');
            if ($brosur->getError() == 4) {

                $namabrosur = $this->request->getVar('brosurLama');
            } else {
                $namabrosur = $brosur->getRandomName();
                $brosur->move('img', $namabrosur);
                unlink('img/' . $this->request->getVar('brosurLama'));
            }

            $this->paket->save(
                [
                    'id' => $this->request->getVar('id'),
                    'nama' => $this->request->getVar('nama'),
                    'harga' => $this->request->getVar('harga'),
                    'brosur' => $namabrosur
                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil diubah');
            return redirect()->to('/admin/paket');
        } else {
            return redirect()->to('/admin/editPaket/' . $this->request->getVar('id'))->withInput();
        }
    }

    public function hapusPaket($id)
    {
        $brosur = $this->paket->getPaket($id);
        unlink('img/' . $brosur['brosur']);
        $this->paket->delete($id);
        session()->setFlashData('pesan_b', 'Data berhasil dihapus');
        return redirect()->to('/admin/paket');
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function pelayanan()
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $pelayanan = $this->pelayanan->getAllPelayanan();

            $data = [
                'title' => 'Pelayanan',
                'pelayanan' => $pelayanan,
                'validation' => \Config\Services::validation(),
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_pelayanan', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function tambahPelayanan()
    {
        $validasi = $this->validate([
            'icon' => [
                'rules' => 'uploaded[icon]|max_size[icon,6144]|is_image[icon]|mime_in[icon,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'keterangan' => [
                'rules' => 'required|max_length[300]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'max_length' => '{field} melebihi batas 100 karakter'
                ]
            ],
        ]);

        if ($validasi) {

            $icon = $this->request->getFile('icon');
            $namaIcon = $icon->getRandomName();
            $icon->move('img', $namaIcon);
            $this->pelayanan->save(
                [
                    'icon' => $namaIcon,
                    'nama' => $this->request->getVar('nama'),
                    'keterangan' => $this->request->getVar('keterangan')

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/pelayanan');
        } else {
            session()->setFlashData('pesan_g', 'Data gagal ditambahkan');
            return redirect()->to('/admin/pelayanan')->withInput();
        }
    }

    public function editPelayanan()
    {
        $validasi = $this->validate([
            'icon' => [
                'rules' => 'max_size[icon,6144]|is_image[icon]|mime_in[icon,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'keterangan' => [
                'rules' => 'required|max_length[300]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'max_length' => '{field} melebihi batas 100 karakter'
                ]
            ],
        ]);

        if ($validasi) {

            $icon = $this->request->getFile('icon');
            if ($icon->getError() == 4) {

                $nama = $this->request->getVar('iconLama');
            } else {
                $nama = $icon->getRandomName();
                $icon->move('img', $nama);
                unlink('img/' . $this->request->getVar('iconLama'));
            }

            $this->pelayanan->save(
                [
                    'id' => $this->request->getVar('id'),
                    'icon' => $nama,
                    'nama' => $this->request->getVar('nama'),
                    'keterangan' => $this->request->getVar('keterangan')

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil diubah');
            return redirect()->to('/admin/pelayanan');
        } else {
            session()->setFlashData('pesan_g', 'Data gagal diubah');
            session()->setFlashData('gagal_edit', 'Data gagal diubah');
            return redirect()->to('/admin/pelayanan')->withInput();
        }
    }

    public function hapusPelayanan($id)
    {
        $icon = $this->pelayanan->find($id);
        unlink('img/' . $icon['icon']);
        $this->pelayanan->delete($id);
        session()->setFlashData('pesan_b', 'Data berhasil dihapus');
        return redirect()->to('/admin/pelayanan');
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function portofolio()
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $foto = $this->galeri->getPortofolio();
            $kategori = $this->kategori->getAllKategori();
            $porto = $this->portofolio->getAllportofolio();

            $data = [
                'title' => 'Portofolio',
                'portofolio' => $foto,
                'kategori' => $kategori,
                'kategori_p' => $porto,
                'validation' => \Config\Services::validation(),
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_portofolio', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function tambahPortofolio()
    {
        $validasi = $this->validate([
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,6144]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ],
            'kategori_p' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        if ($validasi) {

            $foto = $this->request->getFile('foto');
            $namafoto = $foto->getRandomName();
            $foto->move('img', $namafoto);
            $this->galeri->save(
                [
                    'foto' => $namafoto,
                    'kategori' => $this->request->getVar('kategori')
                ]
            );
            $idPorto = $this->galeri->getIDPortofolio($namafoto);
            $idKategori = $this->kategori->getIDKategori($this->request->getVar('kategori_p'));

            $this->portofolio->save(
                [
                    'id_galeri' => $idPorto,
                    'id_kategori' => $idKategori

                ]
            );



            session()->setFlashData('pesan_b', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/portofolio');
        } else {
            session()->setFlashData('gagal_edit', 'Data gagal diubah');
            session()->setFlashData('pesan_g', 'Data gagal ditambahkan');
            return redirect()->to('/admin/portofolio')->withInput();
        }
    }
    public function hapusPortofolio($id)
    {
        $foto = $this->galeri->find($id);
        unlink('img/' . $foto['foto']);
        $this->galeri->delete($id);
        $this->portofolio->where(['id_galeri' => $id])->delete();
        session()->setFlashData('pesan_b', 'Data berhasil dihapus');
        return redirect()->to('/admin/portofolio');
    }

    public function editPortofolio()
    {
        $validasi = $this->validate([
            'porto' => [
                'rules' => 'max_size[porto,6144]|is_image[porto]|mime_in[porto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ],
            'kategori_p' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        if ($validasi) {

            $foto = $this->request->getFile('porto');
            if ($foto->getError() == 4) {

                $nama = $this->request->getVar('fotoLama');
            } else {
                $nama = $foto->getRandomName();
                $foto->move('img', $nama);
                unlink('img/' . $this->request->getVar('fotoLama'));
            }

            $this->galeri->save(
                [
                    'id' => $this->request->getVar('id'),
                    'foto' => $nama,
                    'kategori' => $this->request->getVar('kategori')
                ]
            );
            $idPorto = $this->request->getVar('id');
            $idKategori = $this->kategori->getIDKategori($this->request->getVar('kategori_p'));
            $id = $this->portofolio->getID($idPorto);
            $this->portofolio->save(
                [
                    'id' => $id,
                    'id_galeri' => $idPorto,
                    'id_kategori' => $idKategori

                ]
            );



            session()->setFlashData('pesan_b', 'Data berhasil diubah');
            return redirect()->to('/admin/portofolio');
        } else {
            session()->setFlashData('pesan_g', 'Data gagal diubah');
            return redirect()->to('/admin/portofolio');
        }
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function kategori()
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $kategori = $this->kategori->getAllKategori();

            $data = [
                'title' => 'Kategori',
                'kategori' => $kategori,
                'validation' => \Config\Services::validation(),
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_kategori', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function tambahKategori()
    {
        $validasi = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        if ($validasi) {

            $this->kategori->save(
                [
                    'nama' => $this->request->getVar('nama')

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/kategori');
        } else {
            session()->setFlashData('pesan_g', 'Data gagal ditambahkan');
            return redirect()->to('/admin/kategori')->withInput();
        }
    }

    public function hapusKategori($id)
    {

        $porto = $this->portofolio->getIDKategori($id);
        foreach ($porto as $p) {

            $foto = $this->galeri->find($p['id_galeri']);
            unlink('img/' . $foto['foto']);
            $this->galeri->delete($p['id_galeri']);
            $this->portofolio->delete($p['id']);
        }
        $this->kategori->delete($id);


        session()->setFlashData('pesan_b', 'Data berhasil dihapus');
        return redirect()->to('/admin/kategori');
    }

    public function editKategori()
    {
        $validasi = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        if ($validasi) {

            $this->kategori->save(
                [
                    'id' => $this->request->getVar('id'),
                    'nama' => $this->request->getVar('nama')

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil diubah');
            return redirect()->to('/admin/kategori');
        } else {
            session()->setFlashData('pesan_g', 'Data gagal diubah');
            session()->setFlashData('gagal_edit', 'Data gagal diubah');
            return redirect()->to('/admin/kategori')->withInput();
        }
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function tim()
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $tim = $this->tim->getAllTim();

            $data = [
                'title' => 'Tim Kreatif',
                'tim' => $tim,
                'validation' => \Config\Services::validation(),
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_tim', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function tambahTim()
    {
        $validasi = $this->validate([
            'foto-tim' => [
                'rules' => 'uploaded[foto-tim]|max_size[foto-tim,6144]|is_image[foto-tim]|mime_in[foto-tim,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => '{field} harus diisi',
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'posisi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]

            ],
            'instagram' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]

            ]
        ]);

        if ($validasi) {

            $foto = $this->request->getPost('image');

            $image_array_1 = explode(";", $foto);


            $image_array_2 = explode(",", $image_array_1[1]);


            $data = base64_decode($image_array_2[1]);

            $namaFoto = time() . '.png';

            file_put_contents('img/' . $namaFoto, $data);
            $this->tim->save(
                [
                    'foto' => $namaFoto,
                    'nama' => $this->request->getVar('nama'),
                    'posisi' => $this->request->getVar('posisi'),
                    'instagram' => $this->request->getVar('instagram')

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/tim');
        } else {
            session()->setFlashData('pesan_g', 'Data gagal ditambahkan');
            return redirect()->to('/admin/tim')->withInput();
        }
    }

    public function editTim()
    {
        $validasi = $this->validate([
            'foto-tim' => [
                'rules' => 'max_size[foto-tim,6144]|is_image[foto-tim]|mime_in[foto-tim,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'posisi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]

            ],
            'instagram' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]

            ]
        ]);

        if ($validasi) {

            $foto = $this->request->getFile('foto-tim');

            if ($foto->getError() == 4) {
                $namaFoto = $this->request->getVar('fotoLama');
            } else {
                $foto = $this->request->getPost('image-edit');

                $image_array_1 = explode(";", $foto);


                $image_array_2 = explode(",", $image_array_1[1]);


                $data = base64_decode($image_array_2[1]);

                $namaFoto = time() . '.png';

                file_put_contents('img/' . $namaFoto, $data);
                unlink('img/' . $this->request->getVar('fotoLama'));
            }



            $this->tim->save(
                [
                    'id' => $this->request->getVar('id'),
                    'foto' => $namaFoto,
                    'nama' => $this->request->getVar('nama'),
                    'posisi' => $this->request->getVar('posisi'),
                    'instagram' => $this->request->getVar('instagram')

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil diubah');
            return redirect()->to('/admin/tim');
        } else {
            session()->setFlashData('pesan_g', 'Data gagal diubah');
            return redirect()->to('/admin/tim')->withInput();
        }
    }

    public function hapusTim($id)
    {
        $foto = $this->tim->find($id);
        unlink('img/' . $foto['foto']);
        $this->tim->delete($id);

        session()->setFlashData('pesan_b', 'Data berhasil dihapus');
        return redirect()->to('/admin/tim');
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function testimoni()
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $testimoni = $this->galeri->getTestimoni();

            $data = [
                'title' => 'Testimoni',
                'testimoni' => $testimoni,
                'validation' => \Config\Services::validation(),
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_testimoni', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function tambahTestimoni()
    {
        $validasi = $this->validate([
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,6144]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => '{field} harus diisi',
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ],
        ]);

        if ($validasi) {

            $foto = $this->request->getFile('foto');
            $nama = $foto->getRandomName();
            $foto->move('img', $nama);
            $this->galeri->save(
                [
                    'foto' => $nama,
                    'kategori' => $this->request->getVar('kategori')

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/testimoni');
        } else {
            session()->setFlashData('pesan_g', 'Data gagal ditambahkan');
            return redirect()->to('/admin/testimoni')->withInput();
        }
    }

    public function hapusTestimoni($id)
    {
        $foto = $this->galeri->find($id);
        unlink('img/' . $foto['foto']);
        $this->galeri->delete($id);

        session()->setFlashData('pesan_b', 'Data berhasil dihapus');
        return redirect()->to('/admin/testimoni');
    }

    public function editTestimoni()
    {
        $validasi = $this->validate([
            'foto' => [
                'rules' => 'max_size[foto,6144]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ],
        ]);

        if ($validasi) {

            $foto = $this->request->getFile('foto');
            if ($foto->getError() == 4) {

                $nama = $this->request->getVar('fotoLama');
            } else {
                $nama = $foto->getRandomName();
                $foto->move('img', $nama);
                unlink('img/' . $this->request->getVar('fotoLama'));
            }
            $this->galeri->save(
                [
                    'id' => $this->request->getVar('id'),
                    'foto' => $nama,
                    'kategori' => $this->request->getVar('kategori')

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil diubah');
            return redirect()->to('/admin/testimoni');
        } else {
            session()->setFlashData('pesan_g', 'Data gagal diubah');
            return redirect()->to('/admin/testimoni')->withInput();
        }
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function artikel()
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $artikel = $this->artikel->getAllArtikel();

            $data = [
                'title' => 'Artikel',
                'artikel' => $artikel,
                'validation' => \Config\Services::validation(),
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_artikel', $data);
        } else {

            return redirect()->to('/login');
        }
    }
    public function tambahArtikel()
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $data = [
                'title' => ' Tambah Artikel',
                'validation' => \Config\Services::validation(),
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_tambahArtikel', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function saveArtikel()
    {
        $validasi = $this->validate([
            'thumbnail' => [
                'rules' => 'uploaded[thumbnail]|max_size[thumbnail,6144]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => '{field} harus diisi',
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'highlight' => [
                'rules' => 'required|max_length[200]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'max_length' => '{field} terlalu panjang'
                ]
            ],
            'penjelasan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ]
        ]);

        if ($validasi) {

            $thumbnail = $this->request->getFile('thumbnail');
            $namaThumbnail = $thumbnail->getRandomName();
            $thumbnail->move('img', $namaThumbnail);
            $this->artikel->save(
                [
                    'thumbnail' => $namaThumbnail,
                    'judul' => $this->request->getVar('judul'),
                    'highlight' => $this->request->getVar('highlight'),
                    'artikel' => $this->request->getVar('penjelasan')

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/artikel');
        } else {
            return redirect()->to('/admin/tambahArtikel')->withInput();
        }
    }

    public function detailArtikel($id)
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $artikel = $this->artikel->getArtikel($id);
            $data = [
                'title' => ' Detail Artikel',
                'artikel' => $artikel,
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_detailArtikel', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function hapusArtikel($id)
    {
        $this->artikel->delete($id);

        session()->setFlashData('pesan_b', 'Data berhasil dihapus');
        return redirect()->to('/admin/artikel');
    }

    public function editArtikel($id)
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $artikel = $this->artikel->getArtikel($id);
            $data = [
                'title' => ' Edit Artikel',
                'artikel' => $artikel,
                'validation' => \Config\Services::validation(),
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_editArtikel', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function updateArtikel()
    {
        $validasi = $this->validate([
            'thumbnail' => [
                'rules' => 'max_size[thumbnail,6144]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar melebihi batas',
                    'is_image' => 'file bukan berupa gambar',
                    'mime_in' => 'file bukan berupa gambar'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'highlight' => [
                'rules' => 'required|max_length[500]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'max_length' => '{field} terlalu panjang'
                ]
            ],
            'penjelasan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ]
        ]);

        if ($validasi) {

            $thumbnail = $this->request->getFile('thumbnail');
            if ($thumbnail->getError() == 4) {

                $namaThumbnail = $this->request->getVar('thumbnailLama');
            } else {
                $namaThumbnail = $thumbnail->getRandomName();
                $thumbnail->move('img', $namaThumbnail);
                unlink('img/' . $this->request->getVar('thumbnailLama'));
            }
            $this->artikel->save(
                [
                    'id' => $this->request->getVar('id'),
                    'thumbnail' => $namaThumbnail,
                    'judul' => $this->request->getVar('judul'),
                    'highlight' => $this->request->getVar('highlight'),
                    'artikel' => $this->request->getVar('penjelasan')

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil diubah');
            return redirect()->to('/admin/artikel');
        } else {
            return redirect()->to('/admin/editArtikel/' . $this->request->getVar('id'))->withInput();
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function administrator()
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            if (session()->get('level') == 0) {

                $admin = $this->loginModel->getAllUser();
                $data = [
                    'title' => ' Administrator',
                    'administrator' => $admin,
                    'validation' => \Config\Services::validation(),
                    'gambar' => session()->get('foto'),
                    'username' => session()->get('username'),
                    'level' => session()->get('level')
                ];

                return view('/admin/v_administrator', $data);
            } else {
                return redirect()->to('/admin');
            }
        } else {

            return redirect()->to('/login');
        }
    }

    public function tambahAdministrator()
    {
        $validasi = $this->validate([
            'username' => [
                'rules' => 'required|is_unique[user.username]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => 'Username sudah terpakai'
                ]
            ]
        ]);

        if ($validasi) {

            $username = $this->request->getVar('username');
            $password = password_hash($username, PASSWORD_DEFAULT);
            $this->loginModel->save(
                [
                    'foto' => 'default.jpg',
                    'username' => $username,
                    'password' => $password,
                    'level' => 1

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil ditambahkan');
            return redirect()->to('/admin/administrator');
        } else {
            session()->setFlashData('pesan_g', 'Data gagal ditambahkan');
            return redirect()->to('/admin/administrator')->withInput();
        }
    }

    public function hapusAdministrator($id)
    {
        $foto = $this->loginModel->find($id);
        unlink('img/' . $foto['foto']);
        $this->loginModel->delete($id);

        session()->setFlashData('pesan_b', 'Data berhasil dihapus');
        return redirect()->to('/admin/administrator');
    }

    public function profil()
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {
            $profil = $this->loginModel->getProfil(session()->get('id'));
            $data = [
                'title' => 'Profil',
                'profil' => $profil,
                'gambar' => session()->get('foto'),
                'validation' => \Config\Services::validation(),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_profil', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function editProfil($id)
    {
        if ($this->request->getVar('username') != $this->request->getVar('usernameLama')) {
            $validasi = $this->validate([
                'foto' => [
                    'rules' => 'max_size[foto,6144]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'ukuran gambar melebihi batas',
                        'is_image' => 'file bukan berupa gambar',
                        'mime_in' => 'file bukan berupa gambar'
                    ]
                ],
                'username' => [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'is_unique' => '{field} sudah terpakai',
                        'required' => '{field} tidak boleh kosong'
                    ]
                ]
            ]);
        } else {
            $validasi = $this->validate([
                'foto' => [
                    'rules' => 'max_size[foto,6144]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'ukuran gambar melebihi batas',
                        'is_image' => 'file bukan berupa gambar',
                        'mime_in' => 'file bukan berupa gambar'
                    ]
                ],
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ]
            ]);
        }

        if ($validasi) {

            $foto = $this->request->getFile('foto');
            if ($foto->getError() == 4) {
                $nama = $this->request->getVar('fotoLama');
            } else {
                $nama = $foto->getRandomName();
                $foto->move('img', $nama);
                if ($this->request->getVar('fotoLama') != 'default.jpg') {
                    unlink('img/' . $this->request->getVar('fotoLama'));
                }
            }

            $this->loginModel->save(
                [
                    'id' => $id,
                    'foto' => $nama,
                    'username' => $this->request->getVar('username')

                ]
            );

            session()->setFlashData('pesan_b', 'Data berhasil diubah');
            return redirect()->to('/admin/profil');
        } else {
            session()->setFlashData('pesan_g', 'Data gagal diubah');
            session()->setFlashData('gagal_edit', 'Data gagal diubah');
            return redirect()->to('/admin/profil')->withInput();
        }
    }

    public function ubahPassword($username)
    {
        $login = $this->loginModel->cekLogin();
        if ($login) {

            $user = $this->loginModel->getUser($username);
            $data = [
                'title' => ' Ubah Password',
                'user' => $user,
                'validation' => \Config\Services::validation(),
                'gambar' => session()->get('foto'),
                'username' => session()->get('username'),
                'level' => session()->get('level')
            ];

            return view('/admin/v_ubahPassword', $data);
        } else {

            return redirect()->to('/login');
        }
    }

    public function updatePassword($id)
    {

        $user = $this->loginModel->getProfil($id);
        $passwordLama = $this->request->getVar('passwordLama');


        if (password_verify($passwordLama, $user['password'])) {
            $validasi = $this->validate([
                'passwordBaru' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi'
                    ]
                ],
                'konfirmasiPassword' => [
                    'rules' => 'matches[passwordBaru]',
                    'errors' => [
                        'required' => 'password tidak cocok'
                    ]
                ]
            ]);

            if ($validasi) {
                $password = $this->request->getVar('passwordBaru');
                $password = password_hash($password, PASSWORD_DEFAULT);
                $this->loginModel->save(
                    [
                        'id' => $user['id'],
                        'password' => $password
                    ]
                );
                session()->setFlashData('pesan_b', 'Password berhasil diubah');
                return redirect()->to('/admin/profil');
            }
        } else {
            session()->setFlashData('password_salah', 'Password Salah');
            return redirect()->to('/admin/ubahPassword');
        }
    }

    //--------------------------------------------------------------------

}
