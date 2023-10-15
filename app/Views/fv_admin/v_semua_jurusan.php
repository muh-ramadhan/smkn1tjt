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
                    <h1 class="h3 mb-2 mb-sm-0"><?= $title; ?> <?= $subtitle; ?></h1>
                    <a href="<?= base_url(); ?>admin/tambah-jurusan" class="btn btn-sm btn-primary mb-0">Tambah</a>
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
                                    <th scope="col" class="border-0 rounded-start">Nama Jurusan</th>
                                    <th scope="col" class="border-0">Alias Jurusan</th>
                                    <th scope="col" class="border-0">Status</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                foreach ($AmbilDataJurusan as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td>
                                            <div class="d-flex align-items-center position-relative">
                                                <h6 class="table-responsive-title mb-0 ms-2">
                                                    <a href="<?= base_url('admin/detail-jurusan/' . $value['id_jurusan']); ?>" class="stretched-link"><?= $value['nama_jurusan']; ?></a>
                                                </h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="ms-2">
                                                    <h6 class="mb-0 fw-light"><?= $value['alias_jurusan']; ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php if ($value['status_jurusan'] == '1') : ?>
                                                <a href="<?= base_url('admin/nonaktif-jurusan/' . $value['id_jurusan']); ?>">
                                                    <span class="badge bg-success bg-opacity-15 text-success">Aktif</span>
                                                </a>
                                            <?php elseif (is_null($value['status_jurusan'])) : ?>
                                                <a href="<?= base_url('admin/aktif-jurusan/' . $value['id_jurusan']); ?>">
                                                    <span class="badge bg-secondary bg-opacity-15 text-secondary">Non Aktif</span>
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('admin/detail-jurusan/' . $value['id_jurusan']); ?>" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Ubah News And Blog" data-bs-original-title="Ubah">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="modal" data-bs-target="#konfirmasiHapus<?= $value['id_jurusan']; ?>"><i class="bi bi-trash"></i></a>
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

<?php foreach ($AmbilDataJurusan as $key => $value) { ?>
    <div class="modal fade" id="konfirmasiHapus<?= $value['id_jurusan']; ?>" tabindex="-1" aria-labelledby="konfirmasiHapusLabel" aria-hidden="true">
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
                            <a href="<?= base_url('admin/hapus-sementara-jurusan/' . $value['id_jurusan']) ?>" class="btn btn-success mx-2">Iya</a>
                            <button type="button" class="btn btn-danger mx-2" data-bs-dismiss="modal">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?= $this->endSection() ?>
<!-- CONTENT -->

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