<?php

namespace App\Controllers;

use App\Models\NewsAndBlogModel;
use App\Models\KategoriNewsAndBlogModel;
use App\Models\PengaturanWebModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->NewsAndBlogModel = new NewsAndBlogModel();
        $this->KategoriNewsAndBlogModel = new KategoriNewsAndBlogModel();
        $this->PengaturanWebModel = new PengaturanWebModel();
        helper('form', 'url');
    }

    public function index(): string
    {
        $data = [
            'title' => 'Home',
            'AmbilDataSiswa123' => $this->NewsAndBlogModel->getSiswa123(),
            'AmbilDataJoinKategoriNewsAndBlog1' => $this->NewsAndBlogModel->getNewsAndBlogWithCategoryLimited(1, 0),
            'AmbilDataJoinKategoriNewsAndBlog2' => $this->NewsAndBlogModel->getNewsAndBlogWithCategoryLimited(3, 1),
            'AmbilDataWeb' => $this->PengaturanWebModel->find(),
        ];
        return view('welcome_message', $data);
    }

    public function Kontak()
    {
        $data = [
            'title' => 'Hubungi Kami',
            'AmbilDataWeb' => $this->PengaturanWebModel->find()
        ];
        return view('hubungi_kami', $data);
    }
}
