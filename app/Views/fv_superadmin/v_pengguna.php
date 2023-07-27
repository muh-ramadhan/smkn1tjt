<?= $this->extend('fv_superadmin/themplate/layout2') ?>
<?= $this->section('content') ?>
<?= $this->include('fv_superadmin/themplate/header') ?>
<?= $this->include('fv_superadmin/themplate/footer-bar') ?>

<div class="page-content">

    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a><?= $title; ?></h2>
        <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="<?= base_url(); ?>themplate/code/images/avatars/5s.png"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="<?= base_url(); ?>themplate/code/images/pictures/20s.jpg"></div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h3><?= $subtitle; ?></h3>
            <p>
                Ini adalah halaman manajemen pengguna.
            </p>
            <?php $no = 1;
            foreach ($AmbilSemuaDataPengguna as $key => $value) { ?>
                <div data-splide='{"autoplay":false}' class="splide single-slider slider-no-arrows slider-no-dots" id="user-slider-<?= $no++ ?>">

                    <div class="splide__track">
                        <div class="splide__list">

                            <div class="splide__slide mx-3">
                                <div class="d-flex">
                                    <div><img src="<?= base_url(); ?>themplate/code/images/avatars/1s.png" class="me-3 rounded-circle bg-fade-red-light shadow-l" width="50"></div>
                                    <div>
                                        <h5 class="mt-1 mb-0"><?= $value['nama_lengkap'] ?></h5>
                                        <?php foreach ($AmbilSemuaDataLogin as $key => $valueLogin) : ?>
                                            <?php if ($valueLogin['id_pengguna'] == $value['id_pengguna']) : ?>
                                                <?php if ($valueLogin['level'] == 1) : ?>
                                                    <p class="font-10 mt-n1 color-red-dark">Superadmin
                                                    </p>
                                                <?php elseif ($valueLogin['level'] == 2) : ?>
                                                    <p class="font-10 mt-n1 color-pink2-dark">Admin</p>
                                                <?php elseif ($valueLogin['level'] == 3) : ?>
                                                    <p class="font-10 mt-n1 color-green-dark">Operator</p>
                                                <?php elseif ($valueLogin['level'] == 4) : ?>
                                                    <p class="font-10 mt-n1 color-blue-dark">Guru</p>
                                                <?php elseif ($valueLogin['level'] == 5) : ?>
                                                    <p class="font-10 mt-n1 color-yellow-dark">Siswa</p>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="ms-auto">

                                        </h5>
                                        <?php foreach ($AmbilSemuaDataLogin as $key => $valueLogin) : ?>
                                            <?php if ($valueLogin['id_pengguna'] == $value['id_pengguna']) : ?>
                                                <?php if ($valueLogin['level'] == 1) : ?>
                                                    <span class="slider-next badge bg-red-dark mt-2 p-2 font-8">SUPERADMIN</span>
                                                <?php elseif ($valueLogin['level'] == 2) : ?>
                                                    <span class="slider-next badge bg-pink2-dark mt-2 p-2 font-8">ADMIN</span>
                                                <?php elseif ($valueLogin['level'] == 3) : ?>
                                                    <span class="slider-next badge bg-green-dark mt-2 p-2 font-8">OPERATOR</span>
                                                <?php elseif ($valueLogin['level'] == 4) : ?>
                                                    <span class="slider-next badge bg-blue-dark mt-2 p-2 font-8">GURU</span>
                                                <?php elseif ($valueLogin['level'] == 5) : ?>
                                                    <span class="slider-next badge bg-yellow-dark mt-2 p-2 font-8">SISWA</span>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="splide__slide mx-3">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mt-1 mb-0"><?= $value['nama_lengkap'] ?></h5>
                                        <?php foreach ($AmbilSemuaDataLogin as $key => $valueLogin) : ?>
                                            <?php if ($valueLogin['id_pengguna'] == $value['id_pengguna']) : ?>
                                                <?php if ($valueLogin['level'] == 1) : ?>
                                                    <p class="font-10 mt-n1 color-red-dark">Superadmin
                                                    </p>
                                                <?php elseif ($valueLogin['level'] == 2) : ?>
                                                    <p class="font-10 mt-n1 color-pink2-dark">Admin</p>
                                                <?php elseif ($valueLogin['level'] == 3) : ?>
                                                    <p class="font-10 mt-n1 color-green-dark">Operator</p>
                                                <?php elseif ($valueLogin['level'] == 4) : ?>
                                                    <p class="font-10 mt-n1 color-blue-dark">Guru</p>
                                                <?php elseif ($valueLogin['level'] == 5) : ?>
                                                    <p class="font-10 mt-n1 color-yellow-dark">Siswa</p>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#" class="icon icon-xs rounded-circle shadow-l bg-red-dark" data-menu="menu-confirm-delete-<?= $value['id_pengguna'] ?>"><i class="fas fa-trash"></i></i></a>

                                        <?php if ($value['status'] == 1) : ?>
                                            <a href="<?= base_url('Superadmin/Allow/' . $value['id_pengguna']) ?>" class="icon icon-xs rounded-circle shadow-l bg-gray-dark me-2 ms-2" data-menu="menu-confirm-block"><i class="fas fa-ban"></i></a>
                                        <?php elseif ($value['status'] == 2) : ?>
                                            <a href="<?= base_url('Superadmin/Block/' . $value['id_pengguna']) ?>"  class="icon icon-xs rounded-circle shadow-l bg-green-dark me-2 ms-2" data-menu="menu-confirm-allow"><i class="fas fa-check-circle"></i></a>
                                        <?php endif; ?>

                                        <a href="<?= base_url('Superadmin/DetailPengguna/' . $value['id_pengguna']) ?>" class="icon icon-xs rounded-circle shadow-l bg-blue-dark"><i class="fas fa-edit"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="divider mt-3"></div>

            <?php } ?>

            <div class="divider mt-4 mb-0"></div>
        </div>
    </div>

    <!-- footer and footer card-->
    <?= $this->include('fv_superadmin/themplate/menu-footer') ?>
</div>

<!---------------->
<!---------------->
<!--menu-confirm-delete--->
<!---------------->
<!---------------->
<?php foreach ($AmbilSemuaDataPengguna as $key => $valueDelete) { ?>
    <div id="menu-confirm-delete-<?= $valueDelete['id_pengguna'] ?>" class="menu menu-box-modal rounded-m" data-menu-height="200" data-menu-width="320">
        <h1 class="text-center font-700 mt-3 pb-1">Apakah anda yakin?</h1>
        <p class="boxed-text-l">
            Tindakan ini akan menghapus
            <br>
            <b><?= $valueDelete['nama_lengkap'] ?></b>
        </p>
        <div class="row me-3 ms-3 mb-0">
            <div class="col-6">
                <a href="<?= base_url('Superadmin/HapusDataPengguna/' . $valueDelete['id_pengguna']) ?>" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-green-dark">IYA</a>
            </div>
            <div class="col-6">
                <a href="#" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-red-dark">TIDAK</a>
            </div>
        </div>
    </div>
<?php } ?>

<!-- end of page content-->

<?= $this->include('fv_superadmin/themplate/menu-share') ?>
<?= $this->include('fv_superadmin/themplate/menu-color') ?>
<?= $this->include('fv_superadmin/themplate/menu-main') ?>
<?= $this->include('fv_superadmin/themplate/menu-install-android') ?>
<?= $this->include('fv_superadmin/themplate/menu-install-ios') ?>

<?= $this->endSection() ?>