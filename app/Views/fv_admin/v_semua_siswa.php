<?= $this->extend('fv_admin/themplate/layout') ?>
<!-- HEAD DESCRIPTION -->
<?= $this->section('head-description') ?>
<?= $this->include('fv_admin/themplate/head-description') ?>
<?= $this->endSection() ?>
<!-- HEAD DESCRIPTION -->

<!-- HEAD SCRIPT -->
<?= $this->section('head-script') ?>
<?= $this->include('fv_admin/themplate/head-script') ?>
<?= $this->endSection() ?>
<!-- HEAD SCRIPT -->

<!-- HEAD CSS -->
<?= $this->section('head-css') ?>
<?= $this->include('fv_admin/themplate/head-css') ?>
<?= $this->endSection() ?>
<!-- HEAD CSS -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<main>
    <?= $this->include('fv_admin/themplate/sidebar') ?>
    <div class="page-content">
        <?= $this->include('fv_admin/themplate/top-bar') ?>
        <div class="page-content-wrapper border">
            <div class="row mb-3">
                <div class="col-12 d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-2 mb-sm-0"><?= $title; ?> <?= $subtitle; ?></h1>
                    <a href="<?= base_url(); ?>admin/tambah-taruna-taruni" class="btn btn-sm btn-primary mb-0">Tambah</a>
                </div>
            </div>
            <div class="card bg-transparent">
                <div class="card-header bg-transparent border-bottom px-0">
                    <div class="row g-3 align-items-center justify-content-between">
                        <div class="col-md-8">
                            <form class="rounded position-relative">
                                <input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
                                <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                                    <i class="fas fa-search fs-6 "></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-inline mb-0 nav nav-pills nav-pill-dark-soft border-0 justify-content-end" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a href="#nav-preview-tab-1" class="nav-link mb-0 me-2 active" data-bs-toggle="tab">
                                        <i class="fas fa-fw fa-th-large"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#nav-html-tab-1" class="nav-link mb-0" data-bs-toggle="tab">
                                        <i class="fas fa-fw fa-list-ul"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-preview-tab-1">
                            <div class="row g-4">
                                <?php foreach ($AmbilSemuaDataSiswa as $value) : ?>
                                    <div class="col-md-6 col-xxl-4">
                                        <div class="card bg-transparent border h-100">
                                            <div class="card-header bg-transparent border-bottom d-flex justify-content-between">
                                                <div class="d-sm-flex align-items-center">
                                                    <div class="avatar avatar-md flex-shrink-0">
                                                        <?php
                                                        $foto = $value['foto'];

                                                        // Periksa apakah foto ada atau tidak
                                                        if ($foto && file_exists(FCPATH . 'assets/images/avatar/' . $foto)) {
                                                            // Jika foto ada, tampilkan foto
                                                            echo '<img src="' . base_url('assets/images/avatar/') . $foto . '" class="avatar-img rounded-circle" alt="' . $foto . '">';
                                                        } else {
                                                            // Jika foto tidak ada, tampilkan foto default
                                                            echo '<img src="' . base_url('assets/images/avatar/tidak-ada-gambar.png') . '" class="avatar-img rounded-circle" alt="Foto Default">';
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                                        <h5 class="mb-0">
                                                            <a href="<?= base_url('admin/detail-taruna-taruni/' . $value['id_pengguna']) ?>"><?= $value['nama_lengkap']; ?></a>
                                                        </h5>
                                                        <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i><?= $value['nisn']; ?></span>
                                                    </div>
                                                </div>
                                                <div class="dropdown text-end">
                                                    <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots fa-fw"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare2">
                                                        <li>
                                                            <a class="dropdown-item" href="<?= base_url('admin/detail-taruna-taruni/' . $value['id_pengguna']) ?>"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#konfirmasiHapus<?= $value['id_pengguna']; ?>"><i class="bi bi-trash fa-fw me-2"></i>Hapus</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-md bg-success bg-opacity-10 text-success rounded-circle flex-shrink-0">
                                                            <i class="bi bi-currency-dollar fa-fw"></i>
                                                        </div>
                                                        <h6 class="mb-0 ms-2 fw-light"><?= $value['tempat_lahir']; ?>, <?= date('d M Y', strtotime($value['tanggal_lahir'])); ?>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0">
                                                            <i class="fas fa-book fa-fw"></i>
                                                        </div>
                                                        <h6 class="mb-0 ms-2 fw-light"><?= $value['alias_jurusan']; ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent border-top">
                                                <div class="d-sm-flex justify-content-between align-items-center">
                                                    <h6 class="mb-2 mb-sm-0">
                                                        <i class="bi bi-calendar fa-fw text-orange me-2"></i>
                                                        <span class="text-body">Status :</span>
                                                        <?php
                                                        $isTop1 = $value['is_top_1'];
                                                        $isTop2 = $value['is_top_2'];
                                                        $isTop3 = $value['is_top_3'];
                                                        $status = $value['status'];
                                                        ?>
                                                        <?php if ($isTop1 == 1) : ?>
                                                            <a class="badge btn-success-soft" href="<?= base_url('admin/no-top/' . $value['id_pengguna']) ?>">Top 1</a>
                                                        <?php else : ?>
                                                            <a class="badge btn-secondary-soft" href="<?= base_url('admin/top-1/' . $value['id_pengguna']) ?>">Top 1</a>
                                                        <?php endif; ?>
                                                        <?php if ($isTop2 == 1) : ?>
                                                            <a class="badge btn-success-soft" href="<?= base_url('admin/no-top/' . $value['id_pengguna']) ?>">Top 2</a>
                                                        <?php else : ?>
                                                            <a class="badge btn-secondary-soft" href="<?= base_url('admin/top-2/' . $value['id_pengguna']) ?>">Top 2</a>
                                                        <?php endif; ?>
                                                        <?php if ($isTop3 == 1) : ?>
                                                            <a class="badge btn-success-soft" href="<?= base_url('admin/no-top/' . $value['id_pengguna']) ?>">Top 3</a>
                                                        <?php else : ?>
                                                            <a class="badge btn-secondary-soft" href="<?= base_url('admin/top-3/' . $value['id_pengguna']) ?>">Top 3</a>
                                                        <?php endif; ?>
                                                        <?php if ($status == 1) : ?>
                                                            <span class="text-success">Aktif </span>
                                                        <?php elseif (is_null($status)) : ?>
                                                            <span class="text-danger">Tidak Aktif </span>
                                                        <?php endif; ?>
                                                    </h6>
                                                    <div class="text-end text-primary-hover">
                                                        <a href="#" class="btn btn-link text-body p-0 mb-0 me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Kirim Pesan" aria-label="Kirim Pesan">
                                                            <i class="bi bi-envelope-fill"></i>
                                                        </a>
                                                        <?php if ($value['status'] == 1) : ?>
                                                            <a href="<?= base_url('admin/nonaktif-taruna-taruni/' . $value['id_pengguna']) ?>" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Nom Aktif" data-bs-original-title="Non Aktif" aria-label="Non Aktif">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        <?php elseif (is_null($value['status'])) : ?>
                                                            <a href="<?= base_url('admin/aktif-taruna-taruni/' . $value['id_pengguna']) ?>" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Aktif" data-bs-original-title="Aktif" aria-label="Aktif">
                                                                <i class="fas fa-check"></i>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-html-tab-1">
                            <div class="table-responsive border-0">
                                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 rounded-start">Nama Lengkap</th>
                                            <th scope="col" class="border-0">NISN</th>
                                            <th scope="col" class="border-0">Tempat, Tanggal Lahir</th>
                                            <th scope="col" class="border-0">Kelas</th>
                                            <th scope="col" class="border-0">Jurusan</th>
                                            <th scope="col" class="border-0 rounded-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($AmbilSemuaDataSiswa as $value) : ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-md">
                                                            <?php
                                                            $foto = $value['foto'];
                                                            // Periksa apakah foto ada atau tidak
                                                            if ($foto && file_exists(FCPATH . 'assets/images/avatar/' . $foto)) {
                                                                // Jika foto ada, tampilkan foto
                                                                echo '<img src="' . base_url('assets/images/avatar/') . $foto . '" class="avatar-img rounded-circle" alt="' . $foto . '">';
                                                            } else {
                                                                // Jika foto tidak ada, tampilkan foto default
                                                                echo '<img src="' . base_url('assets/images/avatar/tidak-ada-gambar.png') . '" class="avatar-img rounded-circle" alt="Foto Default">';
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="mb-0 ms-3">
                                                            <h6 class="mb-0">
                                                                <a href="<?= base_url('admin/detail-taruna-taruni/' . $value['id_pengguna']) ?>" class="stretched-link"><?= $value['nama_lengkap']; ?></a>
                                                            </h6>
                                                            <span class="text-body small">
                                                                <i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i><?= $value['nisn']; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?= $value['nisn']; ?>
                                                </td>
                                                <td>
                                                    <?= $value['tempat_lahir']; ?>, <?= date('d M Y', strtotime($value['tanggal_lahir'])); ?>
                                                </td>
                                                <td>
                                                    <?= $value['nama_kelas_angka']; ?>
                                                </td>
                                                <td>
                                                    <?= $value['alias_jurusan']; ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('admin/detail-taruna-taruni/' . $value['id_pengguna']) ?>" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <?php if ($value['status'] == 1) : ?>
                                                        <a href="<?= base_url('admin/nonaktif-taruna-taruni/' . $value['id_pengguna']) ?>" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Non Aktif">
                                                            <i class="fas fa-ban"></i>
                                                        </a>
                                                    <?php elseif (is_null($value['status'])) : ?>
                                                        <a href="<?= base_url('admin/aktif-taruna-taruni/' . $value['id_pengguna']) ?>" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Aktif">
                                                            <i class="fas fa-check"></i>
                                                        </a>
                                                    <?php endif; ?>
                                                    <button class="btn btn-light btn-round mb-0" data-bs-placement="top" data-bs-toggle="modal" data-bs-target="#konfirmasiHapus<?= $value['id_pengguna']; ?>" title="Hapus">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent pt-0 px-0">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                        <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                            <ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0 px-0">
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

<?php foreach ($AmbilSemuaDataSiswa as $key => $value) { ?>
    <div class="modal fade" id="konfirmasiHapus<?= $value['id_pengguna']; ?>" tabindex="-1" aria-labelledby="konfirmasiHapusLabel" aria-hidden="true">
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
                            <a href="<?= base_url('admin/hapus-sementara-taruna-taruni/' . $value['id_pengguna']) ?>" class="btn btn-success mx-2">Iya</a>
                            <button type="button" class="btn btn-danger mx-2" data-bs-dismiss="modal">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?= $this->endSection() ?>
<!-- SCRIPT EXTRA -->
<?= $this->section('script-extra') ?>
<?= $this->include('default/themplate/modal-informasi') ?>
<?= $this->endSection() ?>
<!-- SCRIPT EXTRA -->

<!-- SCRIPT ESSENTIAL -->
<?= $this->section('script-essential') ?>
<?= $this->include('fv_admin/themplate/back-top') ?>
<?= $this->include('fv_admin/themplate/script-essential') ?>
<?= $this->endSection() ?>
<!-- SCRIPT ESSENTIAL -->