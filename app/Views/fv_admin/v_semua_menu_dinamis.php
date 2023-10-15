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








            <!-- Title -->
            <div class="row mb-3">
                <div class="col-12 d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-2 mb-sm-0"><?= $title; ?> <?= $subtitle; ?></h1>
                    <a href="#" class="btn btn-sm btn-primary mb-0">Tambah</a>
                </div>
            </div>

            <!-- Course boxes START -->
            <div class="row g-4 mb-4">

                <?php foreach ($AmbilMenuDinamisModel as $menu) : ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-transparent border h-100">
                            <div class="card-header bg-transparent border-bottom d-flex justify-content-between">
                                <div class="d-sm-flex align-items-center">
                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                        <h4 class="mb-0"><a href="<?= $menu['url_menu_dinamis']; ?>"><?= $menu['nama_menu_dinamis']; ?></a></h4>
                                    </div>
                                </div>

                                <div class="dropdown text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownMenuDinamis" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots fa-fw"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownMenuDinamis">
                                        <li><a class="dropdown-item" href="<?= base_url('admin/detail-menu-dinamis/' . $menu['id_menu_dinamis']) ?>"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#konfirmasiHapus<?= $menu['id_menu_dinamis']; ?>"><i class="bi bi-trash fa-fw me-2"></i>Hapus</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <?php foreach ($AmbilMenuSubDinamisModel as $submenu) : ?>
                                    <?php if ($submenu['id_menu_dinamis'] == $menu['id_menu_dinamis']) : ?>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div class="d-flex align-items-center">
                                                <h5 class="mb-0 ms-2 fw-light"><a href="<?= $submenu['url_sub_menu_dinamis']; ?>">+ <?= $submenu['nama_sub_menu_dinamis']; ?></a></h5>
                                            </div>
                                            <div class="dropdown text-end">
                                                <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownMenuSubDinamis" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots fa-fw"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownMenuSubDinamis">
                                                    <li><a class="dropdown-item" href="<?= base_url('admin/detail-menu-sub-dinamis/' . $submenu['id_sub_menu_dinamis']) ?>"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#konfirmasiHapusSub<?= $submenu['id_sub_menu_dinamis']; ?>"><i class="bi bi-trash fa-fw me-2"></i>Hapus</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <?php foreach ($AmbilMenuSubSubDinamisModel as $subsubmenu) : ?>
                                            <?php if ($subsubmenu['id_sub_menu_dinamis'] == $submenu['id_sub_menu_dinamis']) : ?>
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0 ms-2 fw-light"><a href="#">--- <?= $subsubmenu['nama_sub_sub_menu_dinamis']; ?></a></h6>
                                                    </div>
                                                    <div class="dropdown text-end">
                                                        <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownMenuSubSubDinamis" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots fa-fw"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownMenuSubSubDinamis">
                                                            <li><a class="dropdown-item" href="<?= base_url('admin/detail-menu-sub-sub-dinamis/' . $subsubmenu['id_sub_sub_menu_dinamis']) ?>"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                                                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#konfirmasiHapusSubSub<?= $subsubmenu['id_sub_sub_menu_dinamis']; ?>"><i class="bi bi-trash fa-fw me-2"></i>Hapus</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>

                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
</main>




<?php foreach ($AmbilMenuDinamisModel as $key => $menu) { ?>
    <div class="modal fade" id="konfirmasiHapus<?= $menu['id_menu_dinamis']; ?>" tabindex="-1" aria-labelledby="konfirmasiHapusLabelMenu" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="konfirmasiHapusLabelMenu">Hapus Sementara</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <p class="mb-2">Apakah anda yakin?</p>
                        <div class="btn-group justify-content-center mb-2" role="group" aria-label="Pilihan">
                            <a href="<?= base_url('admin/hapus-sementara-menu-dinamis/' . $menu['id_menu_dinamis']) ?>" class="btn btn-success mx-2">Iya</a>
                            <button type="button" class="btn btn-danger mx-2" data-bs-dismiss="modal">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>



<?php foreach ($AmbilMenuSubDinamisModel as $key => $submenu) { ?>
    <div class="modal fade" id="konfirmasiHapusSub<?= $submenu['id_sub_menu_dinamis']; ?>" tabindex="-1" aria-labelledby="konfirmasiHapusLabelSubMenu" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="konfirmasiHapusLabelSubMenu">Hapus Sementara</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <p class="mb-2">Apakah anda yakin?</p>
                        <div class="btn-group justify-content-center mb-2" role="group" aria-label="Pilihan">
                            <a href="<?= base_url('admin/hapus-sementara-menu-sub-dinamis/' . $submenu['id_sub_menu_dinamis']) ?>" class="btn btn-success mx-2">Iya</a>
                            <button type="button" class="btn btn-danger mx-2" data-bs-dismiss="modal">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>



<?php foreach ($AmbilMenuSubSubDinamisModel as $key => $subsubmenu) { ?>
    <div class="modal fade" id="konfirmasiHapusSubSub<?= $subsubmenu['id_sub_sub_menu_dinamis']; ?>" tabindex="-1" aria-labelledby="konfirmasiHapusLabelSubSubMenu" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="konfirmasiHapusLabelSubSubMenu">Hapus Sementara</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <p class="mb-2">Apakah anda yakin?</p>
                        <div class="btn-group justify-content-center mb-2" role="group" aria-label="Pilihan">
                            <a href="<?= base_url('admin/hapus-sementara-menu-sub-sub-dinamis/' . $subsubmenu['id_sub_sub_menu_dinamis']) ?>" class="btn btn-success mx-2">Iya</a>
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