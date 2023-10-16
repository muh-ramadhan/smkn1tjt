<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PenggunaModel;
use App\Models\PengaturanWebModel;
use App\Models\MenuDinamisModel;
use App\Models\MenuSubDinamisModel;
use App\Models\MenuSubSubDinamisModel;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
        $this->PenggunaModel = new PenggunaModel();
        $this->PengaturanWebModel = new PengaturanWebModel();
        $this->MenuDinamisModel = new MenuDinamisModel();
        $this->MenuSubDinamisModel = new MenuSubDinamisModel();
        $this->MenuSubSubDinamisModel = new MenuSubSubDinamisModel();
    }

    public function index()
    {
        $data = [
            'title' => 'SMK Negeri 1 Tanjung Jabung Timur',
            'subtitle' => '- Login',
            'AmbilDataWeb' => $this->PengaturanWebModel->find(),

            'dynamicMenus1' => $this->MenuDinamisModel->findAll(),
            'dynamicMenus2' => $this->MenuSubDinamisModel->findAll(),
            'dynamicMenus3' => $this->MenuSubSubDinamisModel->findAll(),
            'hasSubMenuLevel3' => [$this, 'hasSubMenuLevel3'],
        ];
        return view('v_login', $data);
    }
    
    //Render Menu Dinamis
    public function hasSubMenuLevel3($idSubMenuDinamis)
    {
        $dynamicMenus3 = $this->MenuSubSubDinamisModel->findAll();

        foreach ($dynamicMenus3 as $menu3) {
            if ($menu3['id_menu_sub_dinamis'] == $idSubMenuDinamis) {
                return true;
            }
        }

        return false;
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
    
            $dataLogin = $this->LoginModel->where('username', $username)->first();
    
            if ($dataLogin && password_verify($password, $dataLogin['password'])) {
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
    
                    if ($dataPengguna['status'] == NULL) {
                        session()->setFlashdata('gagal', 'Akun Anda telah dihapus. Silakan hubungi admin.');
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
                    session()->setFlashdata('gagal', 'Akun Tidak Terdaftar');
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
