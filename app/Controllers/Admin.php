<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PenggunaModel;
use App\Models\NewsAndBlogModel;
use App\Models\PengaturanWebModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->LoginModel = new LoginModel();
        $this->PenggunaModel = new PenggunaModel();
        $this->NewsAndBlogModel = new NewsAndBlogModel();
        $this->PengaturanWebModel = new PengaturanWebModel();
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
            ->where('deleted_at', null)
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
        ];
        return view('fv_admin/v_tambah_news_and_blog', $data);
    }

    public function SimpanNewsAndBlog()
    {
        $PenggunaModel = new PenggunaModel();
        $data = [
            'judul_newsandblog' => reduce_multiples(ucwords(strtolower($this->request->getVar('judul_newsandblog'))), ' ', true),
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
        return redirect()->to('Admin/NewsAndBlog');
    }

    public function HapusNewsAndBlog($id_newsandblog)
    {
        $this->NewsAndBlogModel->where('id_newsandblog', $id_newsandblog)->delete();
        session()->setFlashdata('hapus', 'Berhasil Di Hapus');
        return redirect()->to('Admin/NewsAndBlog');
    }

    public function AktifNewsAndBlog($id_newsandblog)
    {
        $this->NewsAndBlogModel->set('status_newsandblog', '1')->where('id_newsandblog', $id_newsandblog)->update();
        session()->setFlashdata('aktif', 'Berhasil Di Aktifkan');
        return redirect()->to('Admin/NewsAndBlog');
    }

    public function NonAktifNewsAndBlog($id_newsandblog)
    {
        $this->NewsAndBlogModel->set('status_newsandblog', NULL)->where('id_newsandblog', $id_newsandblog)->update();
        session()->setFlashdata('nonaktif', 'Berhasil Di Nonaktifkan');
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
            //'AmbilSemuaDataLogin' => $this->LoginModel->findAll(),
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
}
