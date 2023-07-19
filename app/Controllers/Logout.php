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
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('username');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Berhasil Logout');
        // Redirect Ke Routing Utama
        return redirect()->to(base_url('/'));
    }
}
