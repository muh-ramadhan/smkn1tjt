<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PenggunaModel;
use App\Models\PengaturanWebModel;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
        $this->PenggunaModel = new PenggunaModel();
        $this->PengaturanWebModel = new PengaturanWebModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login', // Ganti 'tittle' menjadi 'title'
            'AmbilDataWeb' => $this->PengaturanWebModel->find(),
        ];
        return view('v_login', $data);
    }

    public function auth()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if ($this->validate($rules)) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $dataLogin = $this->LoginModel->where([
                'username' => $username,
                'password' => $password,
            ])->first();

            if ($dataLogin) {
                $id_pengguna = $dataLogin['id_pengguna'];

                $dataPengguna = $this->PenggunaModel->find($id_pengguna);

                if ($dataPengguna) {
                    session()->set([
                        'log' => true,
                        'id_login' => $dataLogin['id_login'],
                        'id_pengguna' => $dataLogin['id_pengguna'],
                        'username' => $dataLogin['username'],
                        'level' => $dataLogin['level'],
                        'status' => $dataPengguna['status'],
                        'nama_lengkap' => $dataPengguna['nama_lengkap'],
                        'deleted_at' => $dataPengguna['deleted_at'],
                    ]);

                    if ($dataPengguna['deleted_at'] != NULL) {
                        session()->setFlashdata('gagal', 'Akun Anda telah dihapus. Silakan hubungi admin jika ini adalah kesalahan.');
                        return redirect()->to(base_url('login'));
                    }

                    if ($dataPengguna['status'] == 1) {
                        session()->setFlashdata('gagal', 'Akun Anda telah diblokir. Silakan hubungi admin.');
                        return redirect()->to(base_url('login'));
                    }

                    $level = $dataLogin['level'];
                    switch ($level) {
                        case 1:
                            return redirect()->to(base_url('superadmin'));
                            break;
                        case 2:
                            return redirect()->to(base_url('admin'));
                            break;
                        case 3:
                            return redirect()->to(base_url('operator'));
                            break;
                        case 4:
                            return redirect()->to(base_url('guru'));
                            break;
                        case 5:
                            return redirect()->to(base_url('siswa'));
                            break;
                        default:
                            session()->setFlashdata('gagal', 'Maaf Anda tidak memiliki akses apapun. Hubungi admin.');
                            return redirect()->to(base_url('login'));
                            break;
                    }
                } else {
                    session()->setFlashdata('gagal', 'Data pengguna tidak ditemukan');
                    return redirect()->to(base_url('login'));
                }
            } else {
                session()->setFlashdata('gagal', 'Username atau Password Salah');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashdata('errorValidation', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('login'));
        }
    }
}
