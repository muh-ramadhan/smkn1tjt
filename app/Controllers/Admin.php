<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PenggunaModel;
use App\Models\NewsAndBlogModel;
use App\Models\PengaturanWebModel;
use App\Models\KategoriNewsAndBlogModel;
use App\Models\KelasModel;
use App\Models\JurusanModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->LoginModel = new LoginModel();
        $this->PenggunaModel = new PenggunaModel();
        $this->NewsAndBlogModel = new NewsAndBlogModel();
        $this->PengaturanWebModel = new PengaturanWebModel();
        $this->KategoriNewsAndBlogModel = new KategoriNewsAndBlogModel();
        $this->KelasModel = new KelasModel();
        $this->JurusanModel = new JurusanModel();
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
            'cover_newsandblog' => [
                'uploaded' => 'Pilih gambar untuk diunggah.',
                'max_size' => 'Ukuran gambar terlalu besar. Maksimal 1MB.',
                'ext_in' => 'Format gambar tidak valid. Hanya izinkan jpg, jpeg, png.',
            ],
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan kesalahan
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
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
            'judul_newsandblog' => reduce_multiples(ucwords(strtolower($this->request->getVar('judul_newsandblog'))), ' ', true),
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
            'judul_newsandblog' => reduce_multiples(ucwords(strtolower($this->request->getVar('judul_newsandblog'))), ' ', true),
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

    public function Pengaturan()
    {
        $data = [
            'title' => 'Pengaturan',
            'AmbilDataWeb' => $this->PengaturanWebModel->findAll(),
        ];
        return view('fv_admin/v_pengaturan', $data);
    }

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

    public function UpdateSiswa()
    {
        $PenggunaModel = new PenggunaModel();
        $data = [
            'nama_lengkap' => reduce_multiples(ucwords(strtolower($this->request->getVar('nama_lengkap'))), ' ', true),
        ];
        $PenggunaModel->insert($data);
        $last_insert_id = $PenggunaModel->getInsertID();

        $data = [
            'id_pengguna' => $last_insert_id,
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level' => 2,
        ];
        $LoginModel = new LoginModel();
        $LoginModel->insert($data);

        session()->setFlashdata('tambah', 'Data Berhasil Di Tambah');
        return redirect()->to('fv_admin/v_semua_siswa');
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

    public function Jurusan()
    {
        $data = [
            'title' => 'Jurusan',
        ];
        return view('fv_admin/v_jurusan', $data);
    }
}
