<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
        $data   = [
            'tittle'    => 'Login',
        ];
        return view('v_login', $data);
    }

    public function auth()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Nama Pengguna',
                'rules' => 'required',
                'errors'    => [
                    'required'  => '{field} Wajib Diisi'
                ]
            ],
            'password' => [
                'label' => 'Kata Sandi',
                'rules' => 'required',
                'errors'    => [
                    'required'  => '{field} Wajib Diisi'
                ]
            ],
        ])) {
            //Jika Valid
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $cek = $this->LoginModel->where([
                'username'  => $username,
                'password'  => $password
            ])
                ->get()
                ->getRowArray();
            if ($cek) {
                //Periksa Data Jika Datanya Cocok
                session()->set('log', true);
                session()->set('id_pengguna', $cek['id_pengguna']);
                session()->set('username', $cek['username']);
                session()->set('level', $cek['level']);
                //Login Direct Ke Halaman Beranda
                //return redirect()->to(base_url('beranda'));
            } else {
                //Jika Periksa Gagal
                session()->setFlashdata('pesan', 'Username atau Kata Sandi Salah');
                return redirect()->to(base_url('login'));
            }
        } else {
            //Jika Tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('login'));
        }
    }
}
