<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PenggunaModel;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
        $this->PenggunaModel = new PenggunaModel();
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
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],
        ])) {
            //Jika Valid
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $dataLogin = $this->LoginModel->where([
                'username' => $username,
                'password' => $password
            ])->get()->getRowArray();

            if ($dataLogin) {
                // Jika data login ditemukan, kita mengambil id_pengguna dari tabel login
                $id_pengguna = $dataLogin['id_pengguna'];

                // Melakukan query ke tabel pengguna berdasarkan id_pengguna dari tabel login
                $dataPengguna = $this->PenggunaModel->where('id_pengguna', $id_pengguna)->get()->getRowArray();
                if ($dataPengguna) {
                    // Periksa Data Jika Datanya Cocok Di Tabel Login dan Tabel Pengguna
                    session()->set('log', true);
                    session()->set('id_login', $dataLogin['id_login']);
                    session()->set('id_pengguna', $dataLogin['id_pengguna']);
                    session()->set('username', $dataLogin['username']);
                    session()->set('level', $dataLogin['level']);

                    // Mengatur session berdasarkan data dari tabel pengguna
                    session()->set('status', $dataPengguna['status']); // sesuaikan dengan kolom status yang sesuai di tabel pengguna
                    session()->set('nama_lengkap', $dataPengguna['nama_lengkap']);
                    session()->set('deleted_at', $dataPengguna['deleted_at']); // tambahkan session untuk kolom deleted_at

                    // Cek apakah akun telah dihapus berdasarkan kolom deleted_at
                    if ($dataPengguna['deleted_at'] != NULL) {
                        session()->setFlashdata('pesan', 'Akun Anda telah dihapus. Silakan hubungi admin jika ini adalah kesalahan.');
                        return redirect()->to(base_url('login'));
                    }

                    if ($dataPengguna['status'] == 1) {
                        // Akun pengguna diblokir
                        // Lakukan tindakan sesuai kebijakan aplikasi Anda, seperti menampilkan pesan kesalahan atau mengarahkan ke halaman tertentu
                        // Misalnya:
                        session()->setFlashdata('pesan', 'Akun Anda telah diblokir. Silakan hubungi admin.');
                        return redirect()->to(base_url('login'));
                    }

                    //Login Direct Ke Halaman Beranda
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
                            session()->setFlashdata('pesan', 'Maaf Anda tidak memiliki akses apapun. Hubungi admin.');
                            return redirect()->to(base_url('login'));
                            break;
                    }
                } else {
                    // Jika data pengguna tidak ditemukan di tabel pengguna
                    session()->setFlashdata('pesan', 'Data pengguna tidak ditemukan');
                    return redirect()->to(base_url('login'));
                }
            } else {
                //Jika Periksa Gagal
                session()->setFlashdata('pesan', 'Username atau Password Salah');
                return redirect()->to(base_url('login'));
            }
        } else {
            //Jika Tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('login'));
        }
    }
}
