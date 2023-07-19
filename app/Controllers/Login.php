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
            'nama_pengguna' => [
                'label' => 'Nama Pengguna',
                'rules' => 'required',
                'errors'    => [
                    'required'  => '{field} Wajib Diisi'
                ]
            ],
            'kata_sandi' => [
                'label' => 'Kata Sandi',
                'rules' => 'required',
                'errors'    => [
                    'required'  => '{field} Wajib Diisi'
                ]
            ],
        ])) {
            //Jika Valid
            $nama_pengguna = $this->request->getVar('nama_pengguna');
            $kata_sandi = $this->request->getVar('kata_sandi');
            $cek = $this->LoginModel->where([
                'nama_pengguna'  => $nama_pengguna,
                'kata_sandi'  => $kata_sandi
            ])
                ->get()
                ->getRowArray();
            if ($cek) {
                //Periksa Data Jika Datanya Cocok
                session()->set('log', true);
                session()->set('id_karyawan', $cek['id_karyawan']);
                session()->set('nama_pengguna', $cek['nama_pengguna']);
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
