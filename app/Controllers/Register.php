<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Register extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }

    public function index()
    {
        $data   = [
            'tittle'    => 'Buat Akun',
        ];
        return view('v_register', $data);
    }

    public function auth()
    {
        if ($this->validate([
            'nama_user' => [
                'label' => 'Nama User',
                'rules' => 'required',
                'errors'    => [
                    'required'  => '{field} Wajib Diisi'
                ]
            ],
            'username' => [
                'label' => 'Username',
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
            'repassword' => [
                'label' => 'Ulangi Kata Sandi',
                'rules' => 'required|matches[password]',
                'errors'    => [
                    'required'  => '{field} Wajib Diisi',
                    'matches'  => '{field} Tidak Sama'
                ]
            ],
        ])) {
            //Jika Valid
            $data = [
                'nama_user' => $this->request->getPost('nama_user'),
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
                'level' => 1
            ];
            $this->ModelAuth->save_register($data);
            session()->setFlashdata('success', 'Registrasi berhasil! Silakan login dengan akun yang telah dibuat.');

            return redirect()->to(base_url('register'));
        } else {
            //Jika Tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('register'));
        }
    }
}
