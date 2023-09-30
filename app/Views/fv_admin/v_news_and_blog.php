<?= $this->extend('fv_admin/themplate/layout') ?>
<?= $this->section('content') ?>

<main>

    <!-- Sidebar START -->
    <?= $this->include('fv_admin/themplate/sidebar') ?>
    <!-- Sidebar END -->

    <!-- Page content START -->
    <div class="page-content">

        <!-- Top bar START -->
        <?= $this->include('fv_admin/themplate/top-bar') ?>
        <!-- Top bar END -->

        <div class="page-content-wrapper border">

            <div class="row mb-3">
                <div class="col-12 d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-2 mb-sm-0">News and Blogs</h1>
                    <a href="<?= base_url(); ?>Admin/TambahNewsAndBlog" class="btn btn-sm btn-primary mb-0">Tambah</a>
                </div>
            </div>

            <div class="card bg-transparent border">

                <div class="card-header bg-light border-bottom">

                    <div class="row g-3 align-items-center justify-content-between">

                        <div class="col-md-8">
                            <form class="rounded position-relative">
                                <input class="form-control bg-body" type="search" placeholder="Search" aria-label="Search">
                                <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                                    <i class="fas fa-search fs-6 "></i>
                                </button>
                            </form>
                        </div>

                        <div class="col-md-3">
                            <form>
                                <select class="form-select js-choice border-0 z-index-9" aria-label=".form-select-sm">
                                    <option value="">Sort by</option>
                                    <option>Newest</option>
                                    <option>Oldest</option>
                                    <option>Accepted</option>
                                    <option>Rejected</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive border-0 rounded-3">
                        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0">No</th>
                                    <th scope="col" class="border-0 rounded-start">Judul</th>
                                    <th scope="col" class="border-0">Penulis</th>
                                    <th scope="col" class="border-0">Dibuat</th>
                                    <th scope="col" class="border-0">Kategori</th>
                                    <th scope="col" class="border-0">Status</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                foreach ($AmbilDataJoinKategoriNewsAndBlog as $key => $value) { ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td>
                                            <div class="d-flex align-items-center position-relative">
                                                <?php
                                                // Periksa apakah nilai 'cover_newsandblog' adalah NULL atau 0
                                                if ($value['cover_newsandblog'] == NULL || $value['cover_newsandblog'] == '0') {
                                                    // Jika 'cover_newsandblog' adalah NULL atau 0, gunakan URL gambar default
                                                    $cover_newsandblogImage = base_url('assets/images/NewsAndBlog/tidak-ada-gambar.png');
                                                } else {
                                                    // Periksa apakah file cover_newsandblog ada di direktori
                                                    $cover_newsandblogPath = FCPATH . 'assets/images/NewsAndBlog/' . $value['cover_newsandblog'];
                                                    $cover_newsandblogImage = file_exists($cover_newsandblogPath) ? base_url('assets/images/NewsAndBlog/' . $value['cover_newsandblog']) : base_url('assets/images/NewsAndBlog/tidak-ada-gambar.png');
                                                }
                                                ?>
                                                <div class="w-60px">
                                                    <img src="<?= $cover_newsandblogImage; ?>" class="rounded" alt="">
                                                </div>

                                                <h6 class="table-responsive-title mb-0 ms-2">
                                                    <a href="#" class="stretched-link"><?= (strlen($value['judul_newsandblog']) > 30) ? substr($value['judul_newsandblog'], 0, 30) . '...' : $value['judul_newsandblog']; ?></a>
                                                </h6>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="avatar avatar-xs flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" src="<?= base_url(); ?>assets/images/avatar/09.jpg" alt="avatar">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-0 fw-light"><?= $value['penulis_newsandblog'] ?></h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <?= date_create($value['created_at'])->format('d M Y'); ?>
                                        </td>

                                        <td>
                                            <span class="badge text-bg-<?= $value['warna_kategori_news_and_blog']; ?>"><?= $value['judul_kategori_news_and_blog']; ?></span>
                                        </td>

                                        <td>
                                            <?php if ($value['status_newsandblog'] == '1') : ?>
                                                <a href="<?= base_url('Admin/NonAktifNewsAndBlog/' . $value['id_newsandblog']) ?>">
                                                    <span class="badge bg-success bg-opacity-15 text-success">Aktif</span>
                                                </a>
                                            <?php elseif (is_null($value['status_newsandblog'])) : ?>
                                                <a href="<?= base_url('Admin/AktifNewsAndBlog/' . $value['id_newsandblog']) ?>">
                                                    <span class="badge bg-secondary bg-opacity-15 text-secondary">Nonaktif</span>
                                                </a>
                                            <?php endif; ?>
                                        </td>

                                        <td>
                                            <a href="<?= base_url('Admin/DetailNewsAndBlog/' . $value['id_newsandblog']) ?>" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Ubah News And Blog" data-bs-original-title="Ubah">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <a href="#" class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="modal" data-bs-target="#konfirmasiHapus<?= $value['id_newsandblog']; ?>"><i class="bi bi-trash"></i></a>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer bg-transparent pt-0">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                        <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                            <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<?php foreach ($AmbilDataJoinKategoriNewsAndBlog as $key => $value) { ?>
    <div class="modal fade" id="konfirmasiHapus<?= $value['id_newsandblog']; ?>" tabindex="-1" aria-labelledby="konfirmasiHapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="konfirmasiHapusLabel">Hapus Sementara</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <p class="mb-2">Apakah anda yakin?</p>
                        <div class="btn-group justify-content-center mb-2" role="group" aria-label="Pilihan">
                            <a href="<?= base_url('Admin/HapusNewsAndBlog/' . $value['id_newsandblog']) ?>" class="btn btn-success mx-2">Iya</a>
                            <button type="button" class="btn btn-danger mx-2" data-bs-dismiss="modal">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?= $this->include('fv_admin/themplate/back-top') ?>
<?= $this->include('default/themplate/modal-informasi') ?>
<?= $this->endSection() ?>