<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Home');
//Home
$routes->get('/', 'Home::index');
$routes->get('home/hubungi-kami', 'Home::Kontak');

//Admin
$routes->get('admin', 'Admin::index');

//Admin News And Blog
$routes->get('admin/semua-news-and-blog', 'Admin::SemuaNewsAndBlog');
$routes->get('admin/tambah-news-and-blog', 'Admin::TambahNewsAndBlog');
$routes->post('admin/simpan-news-and-blog', 'Admin::SimpanNewsAndBlog');
$routes->get('admin/detail-news-and-blog/(:num)', 'Admin::DetailNewsAndBlog/$1');
$routes->match(['get', 'post'], 'admin/update-news-and-blog/(:num)', 'Admin::UpdateNewsAndBlog/$1');
$routes->match(['get', 'put'], 'admin/aktif-news-and-blog/(:num)', 'Admin::AktifNewsAndBlog/$1');
$routes->match(['get', 'put'], 'admin/nonaktif-news-and-blog/(:num)', 'Admin::NonAktifNewsAndBlog/$1');
$routes->match(['get', 'put'], 'admin/hapus-sementara-news-and-blog/(:num)', 'Admin::HapusSementaraNewsAndBlog/$1');

//Admin News And Blog
$routes->get('admin/semua-kategori-news-and-blog', 'Admin::SemuaKategoriNewsAndBlog');
$routes->get('admin/tambah-kategori-news-and-blog', 'Admin::TambahKategoriNewsAndBlog');
$routes->post('admin/simpan-kategori-news-and-blog', 'Admin::SimpanKategoriNewsAndBlog');
$routes->get('admin/detail-kategori-news-and-blog/(:num)', 'Admin::DetailKategoriNewsAndBlog/$1');
$routes->match(['get', 'post'], 'admin/update-kategori-news-and-blog/(:num)', 'Admin::UpdateKategoriNewsAndBlog/$1');
$routes->match(['get', 'put'], 'admin/aktif-kategori-news-and-blog/(:num)', 'Admin::AktifKategoriNewsAndBlog/$1');
$routes->match(['get', 'put'], 'admin/nonaktif-kategori-news-and-blog/(:num)', 'Admin::NonAktifKategoriNewsAndBlog/$1');
$routes->match(['get', 'put'], 'admin/hapus-sementara-kategori-news-and-blog/(:num)', 'Admin::HapusSementaraKategoriNewsAndBlog/$1');

//Admin Taruna / Taruni
$routes->get('admin/semua-taruna-taruni', 'Admin::SemuaSiswa');
$routes->get('admin/tambah-taruna-taruni', 'Admin::TambahSiswa');
$routes->post('admin/simpan-taruna-taruni', 'Admin::SimpanSiswa');
$routes->get('admin/detail-taruna-taruni/(:num)', 'Admin::DetailSiswa/$1');
$routes->match(['get', 'post'], 'admin/update-taruna-taruni/(:num)', 'Admin::UpdateSiswa/$1');
$routes->match(['get', 'put'], 'admin/aktif-taruna-taruni/(:num)', 'Admin::AktifSiswa/$1');
$routes->match(['get', 'put'], 'admin/nonaktif-taruna-taruni/(:num)', 'Admin::NonaktifSiswa/$1');
$routes->match(['get', 'put'], 'admin/hapus-sementara-taruna-taruni/(:num)', 'Admin::HapusSementaraSiswa/$1');

//Login, Register, dan Autentikasi
$routes->get('/login', 'Login::index');
$routes->post('login/auth', 'Login::Auth');
$routes->get('/logout', 'Logout::index');
