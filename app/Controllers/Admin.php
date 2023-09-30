<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PenggunaModel;
use App\Models\NewsAndBlogModel;
use App\Models\PengaturanWebModel;
use App\Models\KategoriNewsAndBlogModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->LoginModel = new LoginModel();
        $this->PenggunaModel = new PenggunaModel();
        $this->NewsAndBlogModel = new NewsAndBlogModel();
        $this->PengaturanWebModel = new PengaturanWebModel();
        $this->KategoriNewsAndBlogModel = new KategoriNewsAndBlogModel();
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

    public function NewsAndBlog()
    {
        $data = [
            'title' => 'News And Blog',
            'AmbilDataJoinKategoriNewsAndBlog' => $this->NewsAndBlogModel
                ->getNewsAndBlogWithCategory(),
        ];
        return view('fv_admin/v_news_and_blog', $data);
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

        return redirect()->to('Admin/NewsAndBlog')->with('berhasil', 'Data berhasil ditambahkan.');
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

        return redirect()->to('Admin/NewsAndBlog')->with('berhasil', 'Data berhasil diupdate.');
    }

    public function HapusNewsAndBlog($id_newsandblog)
    {
        $this->NewsAndBlogModel->where('id_newsandblog', $id_newsandblog)->delete();
        session()->setFlashdata('berhasil', 'Berhasil Di Hapus');
        return redirect()->to('Admin/NewsAndBlog');
    }

    public function AktifNewsAndBlog($id_newsandblog)
    {
        $this->NewsAndBlogModel->set('status_newsandblog', '1')->where('id_newsandblog', $id_newsandblog)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Aktifkan');
        return redirect()->to('Admin/NewsAndBlog');
    }

    public function NonAktifNewsAndBlog($id_newsandblog)
    {
        $this->NewsAndBlogModel->set('status_newsandblog', NULL)->where('id_newsandblog', $id_newsandblog)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Nonaktifkan');
        return redirect()->to('Admin/NewsAndBlog');
    }

    public function Pengaturan()
    {
        $data = [
            'title' => 'Pengaturan',
            'AmbilDataWeb' => $this->PengaturanWebModel->findAll(),
        ];
        return view('fv_admin/v_pengaturan', $data);
    }

    public function Siswa()
    {
        $data = [
            'title' => 'Taruna/i',
            'subtitle' => 'Manajemen Taruna/i',
            'AmbilSemuaDataSiswa' => $this->PenggunaModel->getSiswa(),
        ];
        return view('fv_admin/v_siswa', $data);
    }

    public function TambahSiswa()
    {
        $data = [
            'title' => 'Taruna/i',
            'subtitle' => 'Manajemen Taruna/i',
            'AmbilSemuaDataSiswa' => $this->PenggunaModel->getSiswa(),
            //'AmbilSemuaDataLogin' => $this->LoginModel->findAll(),
        ];
        return view('fv_admin/v_tambah_siswa', $data);
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
        return redirect()->to('fv_admin/v_siswa');
    }

    public function Jurusan()
    {
        $data = [
            'title' => 'Jurusan',
        ];
        return view('fv_admin/v_jurusan', $data);
    }

    public function KategoriNewsAndBlog()
    {
        $data = [
            'title' => 'Kategori News And Blog',
            'subtitle' => 'News And Blog',
            'AmbilDataKategori' => $this->KategoriNewsAndBlogModel
                ->getKategoryNewsAndBlog(),
        ];

        return view('fv_admin/v_kategori_news_and_blog', $data);
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

        return redirect()->to('Admin/KategoriNewsAndBlog')->with('berhasil', 'Data berhasil di tambah.');
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

        return redirect()->to('Admin/KategoriNewsAndBlog')->with('berhasil', 'Data berhasil di tambah.');
    }

    public function HapusKategoriNewsAndBlog($id_kategori_news_and_blog)
    {
        $this->KategoriNewsAndBlogModel->where('id_kategori_news_and_blog', $id_kategori_news_and_blog)->delete();
        session()->setFlashdata('berhasil', 'Berhasil Di Hapus');
        return redirect()->to('Admin/KategoriNewsAndBlog');
    }

    public function AktifKategoriNewsAndBlog($id_kategori_news_and_blog)
    {
        $this->KategoriNewsAndBlogModel->set('status_kategori_news_and_blog', '1')->where('id_kategori_news_and_blog', $id_kategori_news_and_blog)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Aktifkan');
        return redirect()->to('Admin/KategoriNewsAndBlog');
    }

    public function NonAktifKategoriNewsAndBlog($id_kategori_news_and_blog)
    {
        $this->KategoriNewsAndBlogModel->set('status_kategori_news_and_blog', NULL)->where('id_kategori_news_and_blog', $id_kategori_news_and_blog)->update();
        session()->setFlashdata('berhasil', 'Berhasil Di Nonaktifkan');
        return redirect()->to('Admin/KategoriNewsAndBlog');
    }
}
