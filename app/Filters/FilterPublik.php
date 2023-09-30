<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class FilterPublik implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Jika pengguna belum login
        if (session()->get('level') === null) {
            // Periksa apakah mereka mencoba mengakses Controller selain Home
            if (!$this->isHome($request->uri->getSegment(1))) {
                session()->setFlashdata('error', 'Anda Belum Login');
                return redirect()->to(base_url('login'));
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Jika pengguna telah login, arahkan mereka ke halaman tertentu jika diperlukan
        if (session()->get('level') !== null) {
            // Periksa apakah pengguna mencoba mengakses Controller selain Home
            if (!$this->isHome($request->uri->getSegment(1))) {
                return redirect()->to(base_url('Home'));
            }
        }
    }

    private function isHome($controller)
    {
        // Ubah sesuai dengan Controller Home yang Anda gunakan
        return empty($controller) || strtolower($controller) === 'home';
    }
}
