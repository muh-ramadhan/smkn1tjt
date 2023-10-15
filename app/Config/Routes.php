<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Home');
// Tambahkan rute untuk halaman 404
$routes->set404Override(function(){
    return view('errors/html/production');
});

//PUBLIK HOME
$routes->get('/', 'Home::index');
$routes->get('home/hubungi-kami', 'Home::Kontak');
$routes->get('home/visi', 'Home::visi');
$routes->get('home/news-and-blog/(:segment)', 'Home::NewsAndBlog/$1');

//ADMIN BERANDA
$routes->get('admin', 'Admin::index');

//ADMIN NEWS AND BLOG
$routes->get('admin/semua-news-and-blog', 'Admin::SemuaNewsAndBlog');
$routes->get('admin/tambah-news-and-blog', 'Admin::TambahNewsAndBlog');
$routes->post('admin/simpan-news-and-blog', 'Admin::SimpanNewsAndBlog');
$routes->get('admin/detail-news-and-blog/(:num)', 'Admin::DetailNewsAndBlog/$1');
$routes->match(['get', 'post'], 'admin/update-news-and-blog/(:num)', 'Admin::UpdateNewsAndBlog/$1');
$routes->match(['get', 'put'], 'admin/aktif-news-and-blog/(:num)', 'Admin::AktifNewsAndBlog/$1');
$routes->match(['get', 'put'], 'admin/nonaktif-news-and-blog/(:num)', 'Admin::NonAktifNewsAndBlog/$1');
$routes->match(['get', 'put'], 'admin/hapus-sementara-news-and-blog/(:num)', 'Admin::HapusSementaraNewsAndBlog/$1');

//ADMIN KATEGORI NEWS AND BLOG
$routes->get('admin/semua-kategori-news-and-blog', 'Admin::SemuaKategoriNewsAndBlog');
$routes->get('admin/tambah-kategori-news-and-blog', 'Admin::TambahKategoriNewsAndBlog');
$routes->post('admin/simpan-kategori-news-and-blog', 'Admin::SimpanKategoriNewsAndBlog');
$routes->get('admin/detail-kategori-news-and-blog/(:num)', 'Admin::DetailKategoriNewsAndBlog/$1');
$routes->match(['get', 'post'], 'admin/update-kategori-news-and-blog/(:num)', 'Admin::UpdateKategoriNewsAndBlog/$1');
$routes->match(['get', 'put'], 'admin/aktif-kategori-news-and-blog/(:num)', 'Admin::AktifKategoriNewsAndBlog/$1');
$routes->match(['get', 'put'], 'admin/nonaktif-kategori-news-and-blog/(:num)', 'Admin::NonAktifKategoriNewsAndBlog/$1');
$routes->match(['get', 'put'], 'admin/hapus-sementara-kategori-news-and-blog/(:num)', 'Admin::HapusSementaraKategoriNewsAndBlog/$1');

//ADMIN TARUNA DAN TARUNI
$routes->get('admin/semua-taruna-taruni', 'Admin::SemuaSiswa');
$routes->get('admin/tambah-taruna-taruni', 'Admin::TambahSiswa');
$routes->post('admin/simpan-taruna-taruni', 'Admin::SimpanSiswa');
$routes->get('admin/detail-taruna-taruni/(:num)', 'Admin::DetailSiswa/$1');
$routes->match(['get', 'post'], 'admin/update-taruna-taruni/(:num)', 'Admin::UpdateSiswa/$1');
$routes->match(['get', 'put'], 'admin/hapus-sementara-taruna-taruni/(:num)', 'Admin::HapusSementaraSiswa/$1');
$routes->match(['get', 'put'], 'admin/aktif-taruna-taruni/(:num)', 'Admin::AktifSiswa/$1');
$routes->match(['get', 'put'], 'admin/nonaktif-taruna-taruni/(:num)', 'Admin::NonaktifSiswa/$1');
$routes->match(['get', 'put'], 'admin/top-1/(:num)', 'Admin::isTop1/$1');
$routes->match(['get', 'put'], 'admin/top-2/(:num)', 'Admin::isTop2/$1');
$routes->match(['get', 'put'], 'admin/top-3/(:num)', 'Admin::isTop3/$1');
$routes->match(['get', 'put'], 'admin/no-top/(:num)', 'Admin::noTop/$1');

//ADMIN KELAS
$routes->get('admin/semua-kelas', 'Admin::SemuaKelas');
$routes->get('admin/tambah-kelas', 'Admin::TambahKelas');
$routes->post('admin/simpan-kelas', 'Admin::SimpanKelas');
$routes->get('admin/detail-kelas/(:num)', 'Admin::DetailKelas/$1');
$routes->match(['get', 'post'], 'admin/update-kelas/(:num)', 'Admin::UpdateKelas/$1');
$routes->match(['get', 'put'], 'admin/aktif-kelas/(:num)', 'Admin::AktifKelas/$1');
$routes->match(['get', 'put'], 'admin/nonaktif-kelas/(:num)', 'Admin::NonAktifKelas/$1');
$routes->match(['get', 'put'], 'admin/hapus-sementara-kelas/(:num)', 'Admin::HapusSementaraKelas/$1');

//ADMIN JURUSAN
$routes->get('admin/semua-jurusan', 'Admin::SemuaJurusan');
$routes->get('admin/tambah-jurusan', 'Admin::TambahJurusan');
$routes->post('admin/simpan-jurusan', 'Admin::SimpanJurusan');
$routes->get('admin/detail-jurusan/(:num)', 'Admin::DetailJurusan/$1');
$routes->match(['get', 'post'], 'admin/update-jurusan/(:num)', 'Admin::UpdateJurusan/$1');
$routes->match(['get', 'put'], 'admin/aktif-jurusan/(:num)', 'Admin::AktifJurusan/$1');
$routes->match(['get', 'put'], 'admin/nonaktif-jurusan/(:num)', 'Admin::NonAktifJurusan/$1');
$routes->match(['get', 'put'], 'admin/hapus-sementara-jurusan/(:num)', 'Admin::HapusSementaraJurusan/$1');

//ADMIN MENU DINAMIS
$routes->get('admin/semua-menu-dinamis', 'Admin::SemuaMenuDinamis');
$routes->get('admin/tambah-menu-dinamis', 'Admin::TambahMenuDinamis');
$routes->post('admin/simpan-menu-dinamis', 'Admin::SimpanMenuDinamis');
$routes->get('admin/detail-menu-dinamis/(:num)', 'Admin::DetailMenuDinamis/$1');
$routes->match(['get', 'post'], 'admin/update-menu-dinamis/(:num)', 'Admin::UpdateMenuDinamis/$1');
$routes->match(['get', 'put'], 'admin/aktif-menu-dinamis/(:num)', 'Admin::AktifMenuDinamis/$1');
$routes->match(['get', 'put'], 'admin/nonaktif-menu-dinamis/(:num)', 'Admin::NonAktifMenuDinamis/$1');
$routes->match(['get', 'put'], 'admin/hapus-sementara-menu-dinamis/(:num)', 'Admin::HapusSementaraMenuDinamis/$1');

//ADMIN MENU SUB DINAMIS
$routes->get('admin/semua-menu-sub-dinamis', 'Admin::SemuaMenuSubDinamis');
$routes->get('admin/tambah-menu-sub-dinamis', 'Admin::TambahMenuSubDinamis');
$routes->post('admin/simpan-menu-sub-dinamis', 'Admin::SimpanMenuSubDinamis');
$routes->get('admin/detail-menu-sub-dinamis/(:num)', 'Admin::DetailMenuSubDinamis/$1');
$routes->match(['get', 'post'], 'admin/update-menu-sub-dinamis/(:num)', 'Admin::UpdateMenuSubDinamis/$1');
$routes->match(['get', 'put'], 'admin/aktif-menu-sub-dinamis/(:num)', 'Admin::AktifMenuSubDinamis/$1');
$routes->match(['get', 'put'], 'admin/nonaktif-menu-sub-dinamis/(:num)', 'Admin::NonAktifMenuSubDinamis/$1');
$routes->match(['get', 'put'], 'admin/hapus-sementara-menu-sub-dinamis/(:num)', 'Admin::HapusSementaraMenuSubDinamis/$1');

//ADMIN MENU SUB SUB DINAMIS
$routes->get('admin/semua-menu-sub-sub-dinamis', 'Admin::SemuaMenuSubSubDinamis');
$routes->get('admin/tambah-menu-sub-sub-dinamis', 'Admin::TambahMenuSubSubDinamis');
$routes->post('admin/simpan-menu-sub-sub-dinamis', 'Admin::SimpanMenuSubSubDinamis');
$routes->get('admin/detail-menu-sub-sub-dinamis/(:num)', 'Admin::DetailMenuSubSubDinamis/$1');
$routes->match(['get', 'post'], 'admin/update-menu-sub-sub-dinamis/(:num)', 'Admin::UpdateMenuSubSubDinamis/$1');
$routes->match(['get', 'put'], 'admin/aktif-menu-sub-sub-dinamis/(:num)', 'Admin::AktifMenuSubSubDinamis/$1');
$routes->match(['get', 'put'], 'admin/nonaktif-menu-sub-sub-dinamis/(:num)', 'Admin::NonAktifMenuSubSubDinamis/$1');
$routes->match(['get', 'put'], 'admin/hapus-sementara-menu-sub-sub-dinamis/(:num)', 'Admin::HapusSementaraMenuSubSubDinamis/$1');


//Login, Register, dan Autentikasi
$routes->get('login', 'Login::index');
$routes->post('login/auth', 'Login::Auth');
$routes->get('logout', 'Logout::index');
