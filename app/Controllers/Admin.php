<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\LoginModel;
use App\Models\PenggunaModel;
use App\Models\NewsAndBlogModel;
use App\Models\PengaturanWebModel;
use App\Models\KategoriNewsAndBlogModel;
use App\Models\KelasModel;
use App\Models\JurusanModel;
use App\Models\MenuDinamisModel;
use App\Models\MenuSubDinamisModel;
use App\Models\MenuSubSubDinamisModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->AdminModel = new AdminModel();
        $this->LoginModel = new LoginModel();
        $this->PenggunaModel = new PenggunaModel();
        $this->NewsAndBlogModel = new NewsAndBlogModel();
        $this->PengaturanWebModel = new PengaturanWebModel();
        $this->KategoriNewsAndBlogModel = new KategoriNewsAndBlogModel();
        $this->KelasModel = new KelasModel();
        $this->JurusanModel = new JurusanModel();
        $this->MenuDinamisModel = new MenuDinamisModel();
        $this->MenuSubDinamisModel = new MenuSubDinamisModel();
        $this->MenuSubSubDinamisModel = new MenuSubSubDinamisModel();
        helper(['form', 'date', 'inflector', 'text', 'number']);
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => 'Admin',
        ];
        return view('fv_admin/v_beranda', $data);
    }

    //
    // NEWS AND BLOG
    //

    public function SemuaNewsAndBlog()
    {
        $data = [
            'title' => 'Semua',
            'subtitle' => 'News And Blog',
            'AmbilDataJoinKategoriNewsAndBlog' => $this->NewsAndBlogModel
                ->getNewsAndBlogWithCategory(),
        ];
        return view('fv_admin/v_semua_news_and_blog', $data);
    }
    
    public function TambahNewsAndBlog()
    {
        $data = [
            'title' => 'Tambah',
            'subtitle' => 'News And Blog',
            'AmbilDataJoinKategoriNewsAndBlog' => $this->NewsAndBlogModel
                ->where('deleted_at', null)
                ->getNewsAndBlogWithCategory(),
            'kategoriData' => $this->KategoriNewsAndBlogModel
                ->findAll(),
        ];
        return view('fv_admin/v_tambah_news_and_blog', $data);
    }

    public function SimpanNewsAndBlog()
    {
        $NewsAndBlogModel = new NewsAndBlogModel();
        // Validasi Form
        $validationRules = [
            'judul_newsandblog' => 'required',
            'id_kategori_news_and_blog' => 'required',
            'cover_newsandblog' => 'uploaded[cover_newsandblog]|max_size[cover_newsandblog,1048]|ext_in[cover_newsandblog,jpg,jpeg,png]',
            'penulis_newsandblog' => 'required',
            'deskripsi_singkat_newsandblog' => 'required',
        ];

        $validationMessages = [
            'judul_newsandblog' => [
                'required' => 'Judul Utama  Wajib Diisi',
            ],
            'id_kategori_news_and_blog' => [
                'required' => 'Kategori Utama  Wajib Pilih',
            ],
            'cover_newsandblog' => [
                'uploaded' => 'Pilih gambar untuk diunggah.',
                'max_size' => 'Ukuran gambar terlalu besar. Maksimal 1MB.',
                'ext_in' => 'Format gambar tidak valid. Hanya izinkan jpg, jpeg, png.',
            ],
            'penulis_newsandblog' => [
                'required' => 'Penulis Wajib Diisi',
            ],
            'deskripsi_singkat_newsandblog' => [
                'required' => 'Deskripsi Singkat Wajib Diisi',
            ],
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan kesalahan
            session()->setFlashdata('errorValidation', \Config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        // Proses Unggah Gambar
        $cover_newsandblog = $this->request->getFile('cover_newsandblog');

        if ($cover_newsandblog->isValid() && !$cover_newsandblog->hasMoved()) {
            $newName = $cover_newsandblog->getRandomName();
            $cover_newsandblog->move(FCPATH . 'assets/images/NewsAndBlog', $newName);
        } else {
            return redirect()->back()->withInput()->with('gagal', 'Terjadi kesalahan saat mengunggah gambar.');
        }

        $id_kategori_news_and_blog_tambahan = $this->request->getVar('id_kategori_news_and_blog_tambahan');
        if ($id_kategori_news_and_blog_tambahan === '') {
            $id_kategori_news_and_blog_tambahan = NULL;
        }
        $video_url_newsandblog = $this->request->getVar('video_url_newsandblog') ? $this->request->getVar('video_url_newsandblog') : NULL;
        $video_newsandblog = $this->request->getVar('video_newsandblog_newsandblog') ? $this->request->getVar('video_newsandblog') : NULL;

        $data = [
            'judul_newsandblog' => reduce_multiples($this->request->getVar('judul_newsandblog'), ' ', true),
            'id_kategori_news_and_blog' => $this->request->getVar('id_kategori_news_and_blog'),
            'id_kategori_news_and_blog_tambahan' => $id_kategori_news_and_blog_tambahan,
            'slug_newsandblog' => preg_replace('/-+/', '-', str_replace(' ', '-', strtolower(preg_replace('/[^a-zA-Z0-9\s-]/', '', trim($this->request->getVar('judul_newsandblog')))))),
            'cover_newsandblog' => $newName,
            'penulis_newsandblog' => $this->request->getVar('penulis_newsandblog'),
            'deskripsi_singkat_newsandblog' => $this->request->getVar('deskripsi_singkat_newsandblog'),
            'isi_newsandblog' => $this->request->getVar('isi_newsandblog'),
            'video_url_newsandblog' => $video_url_newsandblog,
            'video_newsandblog' => $video_newsandblog,
            'status_newsandblog' => 1,
        ];
        $NewsAndBlogModel->insert($data);

        return redirect()->to('admin/semua-news-and-blog')->with('berhasil', 'Data berhasil ditambahkan.');
    }

    public function DetailNewsAndBlog($id_newsandblog)
    {
        // Mengambil data berdasarkan $id_newsandblog
        $detailData = $this->NewsAndBlogModel->find($id_newsandblog);

        // Cek apakah data ditemukan
        if ($detailData) {
            $data = [
                'title' => 'Detail',
                'subtitle' => 'News And Blog',
                'detailData' => $detailData, // Menambahkan data detail ke dalam array
                'kategoriData' => $this->KategoriNewsAndBlogModel->findAll(),
            ];
            return view('fv_admin/v_detail_news_and_blog', $data);
        } else {
            // Handle jika data tidak ditemukan, misalnya tampilkan pesan kesalahan atau redirect ke halaman lain.
        }
    }

    public function UpdateNewsAndBlog($id_newsandblog)
    {
        $NewsAndBlogModel = new NewsAndBlogModel();

        // Validasi Form
        $validationRules = [
            'judul_newsandblog' => 'required',
            'id_kategori_news_and_blog' => 'required',
            'penulis_newsandblog' => 'required',
            'deskripsi_singkat_newsandblog' => 'required',
        ];

        $validationMessages = [
            // Hapus validasi untuk cover_newsandblog karena cover_newsandblog tidak wajib diubah
        ];

        // Inisialisasi $newName dengan nilai cover_newsandblog yang ada
        $detailData = $NewsAndBlogModel->find($id_newsandblog);
        $newName = $detailData['cover_newsandblog'];

        if (!$this->validate($validationRules, $validationMessages)) {
            // Jika validasi gagal, atur pesan kesalahan validasi ke dalam session
            session()->setFlashdata('errorValidation', \Config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        // Periksa apakah pengguna ingin mengganti gambar cover_newsandblog
        $cover_newsandblog = $this->request->getFile('cover_newsandblog');
        if ($cover_newsandblog->isValid() && !$cover_newsandblog->hasMoved()) {
            $newName = $cover_newsandblog->getRandomName();
            $cover_newsandblog->move(FCPATH . 'assets/images/NewsAndBlog', $newName);

            // Jika pengguna ingin mengganti gambar cover_newsandblog, hapus file cover_newsandblog sebelumnya
            if ($detailData['cover_newsandblog'] !== null && $detailData['cover_newsandblog'] !== '0') {
                $previouscover_newsandblogPath = FCPATH . 'assets/images/NewsAndBlog/' . $detailData['cover_newsandblog'];
                if (file_exists($previouscover_newsandblogPath)) {
                    unlink($previouscover_newsandblogPath);
                }
            }
        }

        $id_kategori_news_and_blog_tambahan = $this->request->getVar('id_kategori_news_and_blog_tambahan') ? $this->request->getVar('id_kategori_news_and_blog_tambahan') : NULL;
        $video_url_newsandblog = $this->request->getVar('video_url_newsandblog') ? $this->request->getVar('video_url_newsandblog') : NULL;
        $video_newsandblog = $this->request->getVar('video_newsandblog') ? $this->request->getVar('video_newsandblog') : NULL;

        $data = [
            'judul_newsandblog' => reduce_multiples($this->request->getVar('judul_newsandblog'), ' ', true),
            'id_kategori_news_and_blog' => $this->request->getPost('id_kategori_news_and_blog'),
            'id_kategori_news_and_blog_tambahan' => $id_kategori_news_and_blog_tambahan,
            'slug_newsandblog' => preg_replace('/-+/', '-', str_replace(' ', '-', strtolower(preg_replace('/[^a-zA-Z0-9\s-]/', '', trim($this->request->getVar('judul_newsandblog')))))),
            'created_at' => $this->request->getPost('created_at'),
            'cover_newsandblog' => $newName,
            'penulis_newsandblog' => $this->request->getPost('penulis_newsandblog'),
            'deskripsi_singkat_newsandblog' => $this->request->getPost('deskripsi_singkat_newsandblog'),
            'isi_newsandblog' => $this->request->getPost('isi_newsandblog'),
            'video_url_newsandblog' => $video_url_newsandblog,
            'video_newsandblog' => $video_newsandblog,
            'status_newsandblog' => 1,
        ];

        // Menggunakan metode updateById untuk mengupdate berdasarkan ID
        $NewsAndBlogModel->update($id_newsandblog, $data);

        return redirect()->to('admin/semua-news-and-blog')->with('berhasil', 'Data berhasil diupdate.');
    }

    public function HapusSementaraNewsAndBlog($id_newsandblog)
    {
        $this->NewsAndBlogModel->where('id_newsandblog', $id_newsandblog)->delete();
        session()->setFlashdata('berhasil', 'Berhasil Di Hapus');
        return redirect()->to('admin/semua-news-and-blog');
    }

    public function AktifNewsAndBlog($id_newsandblog)
    {
        $this->NewsAndBlogModel->set('status_newsandblog', '1')->where('id_newsandblog', $id_newsandblog)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Aktifkan');
        return redirect()->to('admin/semua-news-and-blog');
    }

    public function NonAktifNewsAndBlog($id_newsandblog)
    {
        $this->NewsAndBlogModel->set('status_newsandblog', NULL)->where('id_newsandblog', $id_newsandblog)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Nonaktifkan');
        return redirect()->to('admin/semua-news-and-blog');
    }

    //
    // KATEGORI NEWS AND BLOG
    //

    public function SemuaKategoriNewsAndBlog()
    {
        $data = [
            'title' => 'Semua Kategori',
            'subtitle' => 'News And Blog',
            'AmbilDataKategori' => $this->KategoriNewsAndBlogModel
                ->getKategoryNewsAndBlog(),
        ];

        return view('fv_admin/v_semua_kategori_news_and_blog', $data);
    }

    public function TambahKategoriNewsAndBlog()
    {
        $data = [
            'title' => 'Tambah Kategori',
            'subtitle' => 'News And Blog',
        ];
        return view('fv_admin/v_tambah_kategori_news_and_blog', $data);
    }

    public function SimpanKategoriNewsAndBlog()
    {
        $KategoriNewsAndBlogModel = new KategoriNewsAndBlogModel();

        $status_kategori_news_and_blog = $this->request->getVar('status_kategori_news_and_blog') ? $this->request->getVar('status_kategori_news_and_blog') : NULL;

        $data = [
            'judul_kategori_news_and_blog' => reduce_multiples(ucwords(strtolower($this->request->getVar('judul_kategori_news_and_blog'))), ' ', true),
            'slug_kategori_news_and_blog' => preg_replace('/-+/', '-', str_replace(' ', '-', strtolower(preg_replace('/[^a-zA-Z0-9\s-]/', '', trim($this->request->getVar('judul_kategori_news_and_blog')))))),
            'isi_kategori_news_and_blog' => $this->request->getVar('isi_kategori_news_and_blog'),
            'warna_kategori_news_and_blog' => $this->request->getVar('warna_kategori_news_and_blog'),
            'status_kategori_news_and_blog' => $status_kategori_news_and_blog,
        ];

        $KategoriNewsAndBlogModel->insert($data);

        return redirect()->to('admin/semua-kategori-news-and-blog')->with('berhasil', 'Data berhasil di tambah.');
    }

    public function DetailKategoriNewsAndBlog($id_kategori_news_and_blog)
    {
        $data = [
            'title' => 'Detail Kategori',
            'subtitle' => 'News And Blog',
            'AmbilDetailKategoriNewsAndBlog' => $this->KategoriNewsAndBlogModel
                ->find($id_kategori_news_and_blog),
        ];
        return view('fv_admin/v_detail_kategori_news_and_blog', $data);
    }

    public function UpdateKategoriNewsAndBlog($id_kategori_news_and_blog)
    {
        $KategoriNewsAndBlogModel = new KategoriNewsAndBlogModel();

        // Periksa apakah radio button "Non Aktif" dicentang
        $status_kategori_news_and_blog = $this->request->getVar('status_kategori_news_and_blog');
        if ($status_kategori_news_and_blog == "NULL") {
            $status_kategori_news_and_blog = NULL;
        }

        $data = [
            'judul_kategori_news_and_blog' => reduce_multiples(ucwords(strtolower($this->request->getVar('judul_kategori_news_and_blog'))), ' ', true),
            'slug_kategori_news_and_blog' => preg_replace('/-+/', '-', str_replace(' ', '-', strtolower(preg_replace('/[^a-zA-Z0-9\s-]/', '', trim($this->request->getVar('judul_kategori_news_and_blog')))))),
            'isi_kategori_news_and_blog' => $this->request->getVar('isi_kategori_news_and_blog'),
            'warna_kategori_news_and_blog' => $this->request->getVar('warna_kategori_news_and_blog'),
            'status_kategori_news_and_blog' => $status_kategori_news_and_blog,
        ];

        $KategoriNewsAndBlogModel->update($id_kategori_news_and_blog, $data);

        return redirect()->to('admin/semua-kategori-news-and-blog')->with('berhasil', 'Data berhasil di tambah.');
    }

    public function HapusSementaraKategoriNewsAndBlog($id_kategori_news_and_blog)
    {
        $this->KategoriNewsAndBlogModel->where('id_kategori_news_and_blog', $id_kategori_news_and_blog)->delete();
        session()->setFlashdata('berhasil', 'Berhasil Di Hapus');
        return redirect()->to('admin/semua-kategori-news-and-blog');
    }

    public function AktifKategoriNewsAndBlog($id_kategori_news_and_blog)
    {
        $this->KategoriNewsAndBlogModel->set('status_kategori_news_and_blog', '1')->where('id_kategori_news_and_blog', $id_kategori_news_and_blog)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Aktifkan');
        return redirect()->to('admin/semua-kategori-news-and-blog');
    }

    public function NonAktifKategoriNewsAndBlog($id_kategori_news_and_blog)
    {
        $this->KategoriNewsAndBlogModel->set('status_kategori_news_and_blog', NULL)->where('id_kategori_news_and_blog', $id_kategori_news_and_blog)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Nonaktifkan');
        return redirect()->to('admin/semua-kategori-news-and-blog');
    }

    //
    // KELAS
    //

    public function SemuaKelas()
    {
        $data = [
            'title' => 'Semua',
            'subtitle' => 'Kelas',
            'AmbilDataKelas' => $this->KelasModel->findAll(),
        ];

        return view('fv_admin/v_semua_kelas', $data);
    }

    public function TambahKelas()
    {
        $data = [
            'title' => 'Tambah',
            'subtitle' => 'Kelas',
        ];
        return view('fv_admin/v_tambah_kelas', $data);
    }

    public function SimpanKelas()
    {
        $KelasModel = new KelasModel();

        $status_kelas = $this->request->getVar('status_kelas') ? $this->request->getVar('status_kelas') : NULL;

        $data = [
            'nama_kelas_huruf' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_kelas_huruf'))), ' ', true),
            'nama_kelas_romawi' => $this->request->getVar('nama_kelas_romawi'),
            'nama_kelas_angka' => $this->request->getVar('nama_kelas_angka'),
            'status_kelas' => $status_kelas,
        ];

        $KelasModel->insert($data);

        return redirect()->to('admin/semua-kelas')->with('berhasil', 'Data berhasil di tambah.');
    }

    public function DetailKelas($id_kelas)
    {
        $data = [
            'title' => 'Detail',
            'subtitle' => 'Kelas',
            'AmbilDetailKelas' => $this->KelasModel
                ->find($id_kelas),
        ];
        return view('fv_admin/v_detail_kelas', $data);
    }

    public function UpdateKelas($id_kelas)
    {
        $KelasModel = new KelasModel();

        // Periksa apakah radio button "Non Aktif" dicentang
        $status_kelas = $this->request->getVar('status_kelas');
        if ($status_kelas == "NULL") {
            $status_kelas = NULL;
        }

        $data = [
            'nama_kelas_huruf' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_kelas_huruf'))), ' ', true),
            'nama_kelas_romawi' => $this->request->getVar('nama_kelas_romawi'),
            'nama_kelas_angka' => $this->request->getVar('nama_kelas_angka'),
            'status_kelas' => $status_kelas,
        ];

        $KelasModel->update($id_kelas, $data);

        return redirect()->to('admin/semua-kelas')->with('berhasil', 'Data berhasil di tambah.');
    }

    public function HapusSementaraKelas($id_kelas)
    {
        $this->KelasModel->where('id_kelas', $id_kelas)->delete();
        session()->setFlashdata('berhasil', 'Berhasil Di Hapus');
        return redirect()->to('admin/semua-kelas');
    }

    public function AktifKelas($id_kelas)
    {
        $this->KelasModel->set('status_kelas', '1')->where('id_kelas', $id_kelas)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Aktifkan');
        return redirect()->to('admin/semua-kelas');
    }

    public function NonAktifKelas($id_kelas)
    {
        $this->KelasModel->set('status_kelas', NULL)->where('id_kelas', $id_kelas)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Nonaktifkan');
        return redirect()->to('admin/semua-kelas');
    }

    //
    // JURUSAN
    //

    public function SemuaJurusan()
    {
        $data = [
            'title' => 'Semua',
            'subtitle' => 'Jurusan',
            'AmbilDataJurusan' => $this->JurusanModel->findAll(),
        ];

        return view('fv_admin/v_semua_jurusan', $data);
    }

    public function TambahJurusan()
    {
        $data = [
            'title' => 'Tambah',
            'subtitle' => 'Jurusan',
        ];
        return view('fv_admin/v_tambah_jurusan', $data);
    }

    public function SimpanJurusan()
    {
        $JurusanModel = new JurusanModel();

        $status_jurusan = $this->request->getVar('status_jurusan') ? $this->request->getVar('status_jurusan') : NULL;

        $data = [
            'nama_jurusan' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_jurusan'))), ' ', true),
            'alias_jurusan' => $this->request->getVar('alias_jurusan'),
            'status_jurusan' => $status_jurusan,
        ];

        $JurusanModel->insert($data);

        return redirect()->to('admin/semua-jurusan')->with('berhasil', 'Data berhasil di tambah.');
    }

    public function DetailJurusan($id_jurusan)
    {
        $data = [
            'title' => 'Detail',
            'subtitle' => 'Jurusan',
            'AmbilDetailKelas' => $this->JurusanModel
                ->find($id_jurusan),
        ];
        return view('fv_admin/v_detail_jurusan', $data);
    }

    public function UpdateJurusan($id_jurusan)
    {
        $JurusanModel = new JurusanModel();

        // Periksa apakah radio button "Non Aktif" dicentang
        $status_jurusan = $this->request->getVar('status_jurusan');
        if ($status_jurusan == "NULL") {
            $status_jurusan = NULL;
        }

        $data = [
            'nama_jurusan' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_jurusan'))), ' ', true),
            'alias_jurusan' => $this->request->getVar('alias_jurusan'),
            'status_jurusan' => $status_jurusan,
        ];

        $JurusanModel->update($id_jurusan, $data);

        return redirect()->to('admin/semua-jurusan')->with('berhasil', 'Data berhasil di tambah.');
    }

    public function HapusSementaraJurusan($id_jurusan)
    {
        $this->JurusanModel->where('id_jurusan', $id_jurusan)->delete();
        session()->setFlashdata('berhasil', 'Berhasil Di Hapus');
        return redirect()->to('admin/semua-jurusan');
    }

    public function AktifJurusan($id_jurusan)
    {
        $this->JurusanModel->set('status_jurusan', '1')->where('id_jurusan', $id_jurusan)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Aktifkan');
        return redirect()->to('admin/semua-jurusan');
    }

    public function NonAktifJurusan($id_jurusan)
    {
        $this->JurusanModel->set('status_jurusan', NULL)->where('id_jurusan', $id_jurusan)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Nonaktifkan');
        return redirect()->to('admin/semua-jurusan');
    }

    //
    // PENGATURAN
    //

    public function Pengaturan()
    {
        $data = [
            'title' => 'Pengaturan',
            'AmbilDataWeb' => $this->PengaturanWebModel->findAll(),
        ];
        return view('fv_admin/v_pengaturan', $data);
    }

    //
    // SISWA
    //

    public function SemuaSiswa()
    {
        $data = [
            'title' => 'Semua',
            'subtitle' => 'Taruna/Taruni',
            'AmbilSemuaDataSiswa' => $this->PenggunaModel->getSiswa(),
        ];
        return view('fv_admin/v_semua_siswa', $data);
    }

    public function TambahSiswa()
    {
        $data = [
            'title' => 'Tambah',
            'subtitle' => 'Taruna/Taruni',
            'AmbilDataKelas' => $this->KelasModel->findAll(),
            'AmbilDataJurusan' => $this->JurusanModel->findAll(),
        ];
        return view('fv_admin/v_tambah_siswa', $data);
    }

    public function SimpanSiswa()
    {
        // Validasi form jika diperlukan
        $validationRules = [
            'nama_lengkap' => 'required',
            'nisn' => 'required|numeric',
            'no_hp' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'id_kelas' => 'required|numeric',
            'id_jurusan' => 'required|numeric',
            'password' => 'required|min_length[6]',
            'confirm_password' => 'matches[password]',
        ];
        // Pesan kesalahan validasi yang lebih spesifik
        $validationMessages = [
            'nama_lengkap' => [
                'required' => 'Nama lengkap wajib diisi.'
            ],
            'nisn' => [
                'required' => 'NISN wajib diisi.',
                'numeric' => 'NISN wajib berupa angka.'
            ],
            'no_hp' => [
                'required' => 'Nomor HP wajib diisi.',
                'numeric' => 'Nomor HP wajib berupa angka.'
            ],
            'password' => [
                'required' => 'Kata sandi wajib diisi.',
                'min_length' => 'Minimal 6 karakter.'
            ],
            'confirm_password' => [
                'matches' => 'Ulangi kata sandi wajib sama dengan kata sandi'
            ],
            // Tambahkan pesan kesalahan yang sesuai untuk aturan lainnya
            // ...
        ];
        if (!$this->validate($validationRules, $validationMessages)) {
            // Jika validasi gagal, atur pesan kesalahan validasi ke dalam session
            session()->setFlashdata('errorValidation', \Config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
        $penggunaModel = new PenggunaModel();
        // Periksa apakah ada file gambar yang diunggah
        $foto = 'tidak-ada-gambar.png'; // Default
        $file = $this->request->getFile('foto');
        if ($file && $file->getName() !== '' && $file->getSize() > 0) {
            // Jika ada file yang diunggah, gunakan file yang diunggah
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'assets/images/avatar/', $newName); // Sesuaikan dengan path folder tempat menyimpan gambar
            $foto = $newName;
        }
        $data = [
            'foto' => $foto,
            'nama_lengkap' => ucwords(strtolower($this->request->getVar('nama_lengkap'))),
            'nisn' => $this->request->getPost('nisn'),
            'no_hp' => $this->request->getPost('no_hp'),
            'tempat_lahir' => ucwords(strtolower($this->request->getVar('tempat_lahir'))),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'id_kelas' => $this->request->getPost('id_kelas'),
            'id_jurusan' => $this->request->getPost('id_jurusan'),
            'status' => 1,
        ];
        $penggunaModel->insert($data);
        $lastInsertId = $penggunaModel->getInsertID();
        // Gunakan nilai 'nisn' sebagai 'username'
        $data = [
            'id_pengguna' => $lastInsertId,
            'username' => $this->request->getPost('nisn'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'level' => 5,
        ];
        $loginModel = new LoginModel();
        $loginModel->insert($data);
        // Tampilkan pesan sukses dan redirect ke halaman lain jika perlu
        session()->setFlashdata('berhasil', 'Data siswa berhasil disimpan.');
        return redirect()->to('admin/semua-taruna-taruni');
    }

    public function DetailSiswa($id_pengguna)
    {
        $data = [
            'title' => 'Detail',
            'subtitle' => 'Taruna/Taruni',
            'AmbilDataKelas' => $this->AdminModel->getAllKelas(),
            'AmbilDataJurusan' => $this->AdminModel->getAllJurusan(),
            'AmbilDetailPengguna' => $this->AdminModel->getDetailPengguna($id_pengguna),
            'AmbilDataDetailLogin'  => $this->LoginModel->where('id_pengguna', $id_pengguna)->get()->getRowArray(),
        ];
        return view('fv_admin/v_detail_siswa', $data);
    }

    public function UpdateSiswa($id_pengguna)
    {
        $validationRules = [
            'nama_lengkap' => 'required',
            'nisn' => 'required|numeric',
            'no_hp' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'id_kelas' => 'required|numeric',
            'id_jurusan' => 'required|numeric',
            'password' => 'required|min_length[6]',
            'confirm_password' => 'matches[password]',
        ];

        // Pesan kesalahan validasi yang lebih spesifik
        $validationMessages = [
            'nama_lengkap' => [
                'required' => 'Nama lengkap wajib diisi.'
            ],
            'nisn' => [
                'required' => 'NISN wajib diisi.',
                'numeric' => 'NISN wajib berupa angka.'
            ],
            'no_hp' => [
                'required' => 'Nomor HP wajib diisi.',
                'numeric' => 'Nomor HP wajib berupa angka.'
            ],
            'password' => [
                'required' => 'Kata sandi wajib diisi.',
                'min_length' => 'Kata sandi Minimal 6 karakter.'
            ],
            'confirm_password' => [
                'matches' => 'Ulangi kata sandi wajib sama dengan kata sandi'
            ],
            // Tambahkan pesan kesalahan yang sesuai untuk aturan lainnya
            // ...
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            // Jika validasi gagal, atur pesan kesalahan validasi ke dalam session
            session()->setFlashdata('errorValidation', \Config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        $PenggunaModel = new PenggunaModel();

        // Dapatkan nilai foto yang ada dari database
        $existingFoto = $PenggunaModel->find($id_pengguna)['foto'];

        // Periksa apakah ada file gambar yang diunggah
        $file = $this->request->getFile('foto');
        $foto = $existingFoto; // Use the existing photo value as the default

        if ($file && $file->getName() !== '' && $file->getSize() > 0) {
            // Jika ada file yang diunggah, gunakan file yang diunggah
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'assets/images/avatar/', $newName); // Sesuaikan dengan path folder tempat menyimpan gambar
            $foto = $newName;
        }

        $data1 = [
            'id_kelas' => $this->request->getPost('id_kelas'),
            'id_jurusan' => $this->request->getPost('id_jurusan'),
            'status' => 1,
            'foto' => $foto,
            'nama_lengkap' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_lengkap'))), ' ', true),
            'nisn' => $this->request->getPost('nisn'),
            'no_hp' => $this->request->getPost('no_hp'),
            'tempat_lahir' => reduce_multiples(ucwords(strtolower($this->request->getVar('tempat_lahir'))), ' ', true),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'is_top_1' => NULL,
            'is_top_2' => NULL,
            'is_top_3' => NULL,
            'deleted_at' => NULL,
        ];
        $PenggunaModel->update($id_pengguna, $data1);

        $LoginModel = new LoginModel();

        $data2 = [
            'id_pengguna' => $id_pengguna,
            'username' => $this->request->getVar('nisn'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'level' => 5,
        ];

        $LoginModel->set($data2, $data2)->where('id_pengguna', $id_pengguna)->update();

        session()->setFlashdata('berhasil', 'Data Berhasil Di Ubah');
        return redirect()->to('admin/semua-taruna-taruni');
    }

    public function HapusSementaraSiswa($id_pengguna)
    {
        $this->PenggunaModel->where('id_pengguna', $id_pengguna)->delete();
        session()->setFlashdata('berhasil', 'Berhasil Di Hapus');
        return redirect()->to('admin/semua-taruna-taruni');
    }

    public function AktifSiswa($id_pengguna)
    {
        $this->PenggunaModel->set('status', '1')->where('id_pengguna', $id_pengguna)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Aktifkan');
        return redirect()->to('admin/semua-taruna-taruni');
    }

    public function NonAktifSiswa($id_pengguna)
    {
        $this->PenggunaModel->set('status', NULL)->where('id_pengguna', $id_pengguna)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Nonaktifkan');
        return redirect()->to('admin/semua-taruna-taruni');
    }

    public function isTop1($id_pengguna)
    {
        // Periksa apakah sudah ada yang ditandai sebagai Top 1
        $isTop1Exists = $this->PenggunaModel
            ->where('is_top_1', 1)
            ->where('id_pengguna !=', $id_pengguna)
            ->countAllResults() > 0;

        if ($isTop1Exists) {
            session()->setFlashdata('gagal', 'Sudah ada taruna/i yang ditandai sebagai Top 1.');
            return redirect()->to('admin/semua-taruna-taruni');
        }

        // Lanjutkan penandaan Top 1
        $this->PenggunaModel
            ->set('is_top_1', 1)
            ->set('is_top_2', NULL)
            ->set('is_top_3', NULL)
            ->where('id_pengguna', $id_pengguna)
            ->update();

        session()->setFlashdata('berhasil', 'Top 1 Berhasil Diaktifkan');
        return redirect()->to('admin/semua-taruna-taruni');
    }

    public function isTop2($id_pengguna)
    {
        // Periksa apakah sudah ada yang ditandai sebagai Top 2
        $isTop2Exists = $this->PenggunaModel
            ->where('is_top_2', 1)
            ->where('id_pengguna !=', $id_pengguna)
            ->countAllResults() > 0;

        if ($isTop2Exists) {
            session()->setFlashdata('gagal', 'Sudah ada taruna/i yang ditandai sebagai Top 2.');
            return redirect()->to('admin/semua-taruna-taruni');
        }

        // Lanjutkan penandaan Top 2
        $this->PenggunaModel
            ->set('is_top_1', NULL)
            ->set('is_top_2', 1)
            ->set('is_top_3', NULL)
            ->where('id_pengguna', $id_pengguna)
            ->update();

        session()->setFlashdata('berhasil', 'Top 2 Berhasil Diaktifkan');
        return redirect()->to('admin/semua-taruna-taruni');
    }

    public function isTop3($id_pengguna)
    {
        // Periksa apakah sudah ada yang ditandai sebagai Top 3
        $isTop3Exists = $this->PenggunaModel
            ->where('is_top_3', 1)
            ->where('id_pengguna !=', $id_pengguna)
            ->countAllResults() > 0;

        if ($isTop3Exists) {
            session()->setFlashdata('gagal', 'Sudah ada taruna/i yang ditandai sebagai Top 3.');
            return redirect()->to('admin/semua-taruna-taruni');
        }

        // Lanjutkan penandaan Top 3
        $this->PenggunaModel
            ->set('is_top_1', NULL)
            ->set('is_top_2', NULL)
            ->set('is_top_3', 1)
            ->where('id_pengguna', $id_pengguna)
            ->update();

        session()->setFlashdata('berhasil', 'Top 3 Berhasil Diaktifkan');
        return redirect()->to('admin/semua-taruna-taruni');
    }

    public function noTop($id_pengguna)
    {
        $this->PenggunaModel
            ->set('is_top_1', NULL)
            ->set('is_top_2', NULL)
            ->set('is_top_3', NULL)
            ->where('id_pengguna', $id_pengguna)
            ->update();

        session()->setFlashdata('berhasil', 'Status Top Dihapus');
        return redirect()->to('admin/semua-taruna-taruni');
    }

    //
    // MENU DINAMIS
    //

    public function SemuaMenuDinamis()
    {
        $data = [
            'title' => 'Semua',
            'subtitle' => 'Menu Dinamis',
            'AmbilMenuDinamisModel' => $this->MenuDinamisModel->findAll(),
            'AmbilMenuSubDinamisModel' => $this->MenuSubDinamisModel->findAll(),
            'AmbilMenuSubSubDinamisModel' => $this->MenuSubSubDinamisModel->findAll(),
        ];

        return view('fv_admin/v_semua_menu_dinamis', $data);
    }

    public function TambahMenuDinamis()
    {
        $data = [
            'title' => 'Tambah',
            'subtitle' => 'Menu Dinamis',
        ];
        return view('fv_admin/v_tambah_menu_dinamis', $data);
    }

    public function SimpanMenuDinamis()
    {
        $MenuDinamisModel = new MenuDinamisModel();
    
        $status_menu_dinamis = $this->request->getVar('status_menu_dinamis') ? $this->request->getVar('status_menu_dinamis') : NULL;
    
        $url_menu_dinamis = $this->request->getVar('url_menu_dinamis');
        // Periksa apakah url_menu_dinamis kosong, jika ya, setel menjadi #
        $url_menu_dinamis = empty($url_menu_dinamis) ? '#' : $url_menu_dinamis;
    
        $data = [
            'nama_menu_dinamis' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_menu_dinamis'))), ' ', true),
            'icon_menu_dinamis' => $this->request->getVar('icon_menu_dinamis'),
            'kolom_menu_dinamis' => $this->request->getVar('kolom_menu_dinamis'),
            'url_menu_dinamis' => $url_menu_dinamis,
            'status_menu_dinamis' => $status_menu_dinamis,
        ];
        //dd($data);
    
        $MenuDinamisModel->insert($data);
    
        return redirect()->to('admin/semua-menu-dinamis')->with('berhasil', 'Data berhasil ditambahkan.');
    }

    public function DetailMenuDinamis($id_menu_dinamis)
    {
        $data = [
            'title' => 'Detail',
            'subtitle' => 'Menu Dinamis',
            'AmbilDetailMenuDinamis' => $this->MenuDinamisModel
                ->find($id_menu_dinamis),
            'AmbilDetailMenuSubDinamis' => $this->MenuSubDinamisModel->where('status_menu_sub_dinamis', '1')->findAll(), //Level 1
        ];
        return view('fv_admin/v_detail_menu_dinamis', $data);
    }

    public function UpdateMenuDinamis($id_menu_dinamis)
    {
        $MenuDinamisModel = new MenuDinamisModel();
    
        // Periksa apakah radio button "Non Aktif" dicentang
        $status_menu_dinamis = $this->request->getPost('status_menu_dinamis');
        if ($status_menu_dinamis == "NULL") {
            $status_menu_dinamis = NULL;
        }
    
        $url_menu_dinamis = $this->request->getPost('url_menu_dinamis');
    
        // Periksa apakah ada data di MenuSubDinamisModel
        $menuSubDinamisModel = new MenuSubDinamisModel();
        $isDataExists = $menuSubDinamisModel->where('id_menu_dinamis', $id_menu_dinamis)->countAllResults() > 0;
    
        if ($isDataExists) {
            $url_menu_dinamis = '#';
        }
    
        $data = [
            'id_menu_dinamis' => $this->request->getPost('id_menu_dinamis'),
            'kolom_menu_dinamis' => $this->request->getPost('kolom_menu_dinamis'),
            'nama_menu_dinamis' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_menu_dinamis'))), ' ', true),
            'url_menu_dinamis' => $url_menu_dinamis,
            'status_menu_dinamis' => $status_menu_dinamis,
        ];
        //dd($data);
    
        $MenuDinamisModel->update($id_menu_dinamis, $data);
    
        return redirect()->to('admin/semua-menu-dinamis')->with('berhasil', 'Data berhasil diupdate.');
    }

    public function HapusSementaraMenuDinamis($id_menu_dinamis)
    {
        $this->MenuDinamisModel->where('id_menu_dinamis', $id_menu_dinamis)->delete();
        session()->setFlashdata('berhasil', 'Berhasil Di Hapus');
        return redirect()->to('admin/semua-menu-dinamis');
    }

    public function AktifMenuDinamis($id_menu_dinamis)
    {
        $this->MenuDinamisModel->set('status_kelas', '1')->where('id_menu_dinamis', $id_menu_dinamis)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Aktifkan');
        return redirect()->to('admin/semua-menu-dinamis');
    }

    public function NonAktifMenuDinamis($id_menu_dinamis)
    {
        $this->MenuDinamisModel->set('status_kelas', NULL)->where('id_menu_dinamis', $id_menu_dinamis)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Nonaktifkan');
        return redirect()->to('admin/semua-menu-dinamis');
    }

    //MENU SUB DINAMIS
    public function TambahMenuSubDinamis()
    {
        $data = [
            'title' => 'Tambah Menu',
            'subtitle' => 'Level 2',
            'AmbilMenuDinamisModel' => $this->MenuDinamisModel->where('status_menu_dinamis', '1')->findAll(), //Level 1
        ];
        return view('fv_admin/v_tambah_menu_sub_dinamis', $data);
    }

    public function SimpanMenuSubDinamis()
    {
        $MenuSubDinamisModel = new MenuSubDinamisModel();
    
        $status_menu_sub_dinamis = $this->request->getVar('status_menu_sub_dinamis') ? $this->request->getVar('status_menu_sub_dinamis') : NULL;
    
        $url_menu_sub_dinamis = $this->request->getVar('url_menu_sub_dinamis');
        // Periksa apakah url_menu_dinamis kosong, jika ya, setel menjadi #
        $url_menu_sub_dinamis = empty($url_menu_sub_dinamis) ? '#' : $url_menu_sub_dinamis;
    
        $data = [
            'id_menu_dinamis' => $this->request->getVar('id_menu_dinamis'),
            'nama_menu_sub_dinamis' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_menu_sub_dinamis'))), ' ', true),
            'url_menu_sub_dinamis' => $url_menu_sub_dinamis,
            'status_menu_sub_dinamis' => $status_menu_sub_dinamis,
        ];
        //dd($data);
    
        $MenuSubDinamisModel->insert($data);
    
        return redirect()->to('admin/semua-menu-dinamis')->with('berhasil', 'Data berhasil ditambahkan.');
    }

    public function DetailMenuSubDinamis($id_menu_sub_dinamis)
    {
        $data = [
            'title' => 'Detail',
            'subtitle' => 'Sub Menu Dinamis',
            'AmbilMenuDinamisModel' => $this->MenuDinamisModel->where('status_menu_dinamis', '1')->findAll(), //Level 1
            'AmbilDetailMenuSubDinamis' => $this->MenuSubDinamisModel->find($id_menu_sub_dinamis), //Level 2
            'AmbilMenuSubSubDinamisModel' => $this->MenuSubSubDinamisModel->where('status_menu_sub_sub_dinamis', '1')->findAll(), //Level 3
        ];
        return view('fv_admin/v_detail_menu_sub_dinamis', $data);
    }

    public function UpdateMenuSubDinamis($id_menu_sub_dinamis)
    {
        $MenuSubDinamisModel = new MenuSubDinamisModel();

        // Periksa apakah radio button "Non Aktif" dicentang
        $status_menu_sub_dinamis = $this->request->getPost('status_menu_sub_dinamis');
        if ($status_menu_sub_dinamis == "NULL") {
            $status_menu_sub_dinamis = NULL;
        }

        $data = [
            'id_menu_dinamis' => $this->request->getPost('id_menu_dinamis'),
            'nama_menu_sub_dinamis' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_menu_sub_dinamis'))), ' ', true),
            'url_menu_sub_dinamis' => $this->request->getPost('url_menu_sub_dinamis'),
            'status_menu_sub_dinamis' => $status_menu_sub_dinamis,
        ];

        $MenuSubDinamisModel->update($id_menu_sub_dinamis, $data);

        return redirect()->to('admin/semua-menu-dinamis')->with('berhasil', 'Data berhasil di tambah.');
    }

    public function HapusSementaraMenuSubDinamis($id_menu_sub_dinamis)
    {
        $this->MenuSubDinamisModel->where('id_menu_sub_dinamis', $id_menu_sub_dinamis)->delete();
        session()->setFlashdata('berhasil', 'Berhasil Di Hapus');
        return redirect()->to('admin/semua-menu-dinamis');
    }

    //SUB SUB MENU
    public function TambahMenuSubSubDinamis()
    {
        $data = [
            'title' => 'Tambah Menu',
            'subtitle' => 'Level 3',
            'AmbilMenuSubDinamisModel' => $this->MenuSubDinamisModel->where('status_menu_sub_dinamis', '1')->findAll(), //Level 2
        ];
        return view('fv_admin/v_tambah_menu_sub_sub_dinamis', $data);
    }

    public function SimpanMenuSubSubDinamis()
    {
        $MenuSubSubDinamisModel = new MenuSubSubDinamisModel();
    
        $status_menu_sub_sub_dinamis = $this->request->getVar('status_menu_sub_sub_dinamis') ? $this->request->getVar('status_menu_sub_sub_dinamis') : NULL;
    
        $url_menu_sub_sub_dinamis = $this->request->getVar('url_menu_sub_sub_dinamis');
        // Periksa apakah url_menu_dinamis kosong, jika ya, setel menjadi #
        $url_menu_sub_sub_dinamis = empty($url_menu_sub_sub_dinamis) ? '#' : $url_menu_sub_sub_dinamis;
    
        $data = [
            'id_menu_sub_dinamis' => $this->request->getVar('id_menu_sub_dinamis'),
            'nama_menu_sub_sub_dinamis' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_menu_sub_sub_dinamis'))), ' ', true),
            'url_menu_sub_sub_dinamis' => $url_menu_sub_sub_dinamis,
            'status_menu_sub_sub_dinamis' => $status_menu_sub_sub_dinamis,
        ];
        //dd($data);
    
        $MenuSubSubDinamisModel->insert($data);
    
        return redirect()->to('admin/semua-menu-dinamis')->with('berhasil', 'Data berhasil ditambahkan.');
    }

    public function DetailMenuSubSubDinamis($id_menu_sub_sub_dinamis)
    {
        $data = [
            'title' => 'Detail',
            'subtitle' => 'Menu Sub Sub Dinamis',
            'AmbilDetailMenuSubDinamis' => $this->MenuSubDinamisModel->where('status_menu_sub_dinamis', '1')->findAll(), //Level 2
            'AmbilMenuSubSubDinamis' => $this->MenuSubSubDinamisModel->find($id_menu_sub_sub_dinamis), //Level 3
        ];
        return view('fv_admin/v_detail_menu_sub_sub_dinamis', $data);
    }

    public function UpdateMenuSubSubDinamis($id_menu_sub_sub_dinamis)
    {
        $MenuSubSubDinamisModel = new MenuSubSubDinamisModel();

        // Periksa apakah radio button "Non Aktif" dicentang
        $status_menu_sub_sub_dinamis = $this->request->getPost('status_menu_sub_sub_dinamis');
        if ($status_menu_sub_sub_dinamis == "NULL") {
            $status_menu_sub_sub_dinamis = NULL;
        }

        $data = [
            'id_menu_sub_dinamis' => $this->request->getPost('id_menu_sub_dinamis'),
            'nama_menu_sub_sub_dinamis' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_menu_sub_sub_dinamis'))), ' ', true),
            'url_menu_sub_sub_dinamis' => $this->request->getPost('url_menu_sub_sub_dinamis'),
            'status_menu_sub_sub_dinamis' => $status_menu_sub_sub_dinamis,
        ];

        $MenuSubSubDinamisModel->update($id_menu_sub_sub_dinamis, $data);

        return redirect()->to('admin/semua-menu-dinamis')->with('berhasil', 'Data berhasil di tambah.');
    }

    public function HapusSementaraMenuSubSubDinamis($id_menu_sub_sub_dinamis)
    {
        $this->MenuSubSubDinamisModel->where('id_menu_sub_sub_dinamis', $id_menu_sub_sub_dinamis)->delete();
        session()->setFlashdata('berhasil', 'Berhasil Di Hapus');
        return redirect()->to('admin/semua-menu-dinamis');
    }
}
