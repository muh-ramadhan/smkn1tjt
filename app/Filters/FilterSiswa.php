<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class FilterSiswa implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (session()->get('level') == "") {
            session()->setFlashdata('pesan', 'Anda Belum Login');
            return redirect()->to(base_url('login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        if (session()->get('level') == 5 && session()->get('status') == 2 && session()->get('deleted_at') == NULL) {
            // Jika pengguna memiliki level 1 (Siswa) dan status 2 (belum diblokir), biarkan mereka berada di halaman Siswa.
            // Tidak perlu mengarahkan mereka ke halaman lain.
            //return;
            return redirect()->to(base_url('operator'));
        }
    }
}
