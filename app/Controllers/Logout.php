<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        // Hapus semua data sesi yang telah di-set pada login
        session()->remove('log');
        session()->remove('id_login');
        session()->remove('id_pengguna');
        session()->remove('username');
        session()->remove('level');
        session()->remove('status');
        session()->remove('nama_lengkap');
        session()->remove('deleted_at');

        session()->setFlashdata('pesan', 'Berhasil Logout');
        // Redirect Ke Routing Utama
        return redirect()->to(base_url('/'));
    }
}
