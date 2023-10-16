<?php

namespace App\Controllers;

use App\Models\NewsAndBlogModel;
use App\Models\KategoriNewsAndBlogModel;
use App\Models\PengaturanWebModel;
use App\Models\MenuDinamisModel;
use App\Models\MenuSubDinamisModel;
use App\Models\MenuSubSubDinamisModel;

class Home extends BaseController
{

    public function __construct()
    {
        $this->NewsAndBlogModel = new NewsAndBlogModel();
        $this->KategoriNewsAndBlogModel = new KategoriNewsAndBlogModel();
        $this->PengaturanWebModel = new PengaturanWebModel();
        $this->MenuDinamisModel = new MenuDinamisModel();
        $this->MenuSubDinamisModel = new MenuSubDinamisModel();
        $this->MenuSubSubDinamisModel = new MenuSubSubDinamisModel();
        helper('form', 'url');
    }

    public function index(): string
    {
        $data = [
            'title' => 'SMK Negeri 1 Tanjung Jabung Timur',
            'subtitle' => '',
            'AmbilDataSiswa123' => $this->NewsAndBlogModel->getSiswa123(),
            'AmbilDataJoinKategoriNewsAndBlog1' => $this->NewsAndBlogModel->getNewsAndBlogWithCategoryLimited(1, 0),
            'AmbilDataJoinKategoriNewsAndBlog2' => $this->NewsAndBlogModel->getNewsAndBlogWithCategoryLimited(3, 1),
            'AmbilDataWeb' => $this->PengaturanWebModel->find(),

            'dynamicMenus1' => $this->MenuDinamisModel->findAll(),
            'dynamicMenus2' => $this->MenuSubDinamisModel->findAll(),
            'dynamicMenus3' => $this->MenuSubSubDinamisModel->findAll(),
            'hasSubMenuLevel3' => [$this, 'hasSubMenuLevel3'],

        ];
        //var_dump($data['dynamicMenus3']);
        return view('welcome_message', $data);
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

    public function NewsAndBlog($slug_newsandblog)
    {
        // Ambil data berita
        $newsAndBlog1 = $this->NewsAndBlogModel->getNewsAndBlogBySlug($slug_newsandblog);

        $newsAndBlog2 = $this->NewsAndBlogModel->getNewsAndBlogBySlug2($slug_newsandblog);

        // Update jumlah view
        $this->NewsAndBlogModel->increaseViewCount($newsAndBlog1['id_newsandblog']);
        $data = [
            'title' => 'SMK Negeri 1 Tanjung Jabung Timur',
            'subtitle' => ' - News And Blog',
            'AmbilDataWeb' => $this->PengaturanWebModel->find(),
            'AmbilDataNewsAndBlog' => $newsAndBlog1,
            'AmbilDataNewsAndBlog2' => $newsAndBlog2,
            'AmbilSemuaNewsAndBlog' => $this->NewsAndBlogModel->findAll(),
            'AmbilSemuaKategoriNewsAndBlog' => $this->KategoriNewsAndBlogModel->getKategoryLimitNewsAndBlog(3),

            'dynamicMenus1' => $this->MenuDinamisModel->findAll(),
            'dynamicMenus2' => $this->MenuSubDinamisModel->findAll(),
            'dynamicMenus3' => $this->MenuSubSubDinamisModel->findAll(),
            'hasSubMenuLevel3' => [$this, 'hasSubMenuLevel3'],
        ];

        return view('news_and_blog', $data);
    }

    public function Visi()
    {
        $data = [
            'title' => 'SMK Negeri 1 Tanjung Jabung Timur',
            'subtitle' => '- Visi',
            'AmbilDataWeb' => $this->PengaturanWebModel->find()
        ];
        return view('visi_dan_misi', $data);
    }

    public function Kontak()
    {
        $data = [
            'title' => 'SMK Negeri 1 Tanjung Jabung Timur',
            'subtitle' => '- Hubungi Kami',
            'AmbilDataWeb' => $this->PengaturanWebModel->find(),

            'dynamicMenus1' => $this->MenuDinamisModel->findAll(),
            'dynamicMenus2' => $this->MenuSubDinamisModel->findAll(),
            'dynamicMenus3' => $this->MenuSubSubDinamisModel->findAll(),
            'hasSubMenuLevel3' => [$this, 'hasSubMenuLevel3'],
        ];
        return view('hubungi_kami', $data);
    }
}
