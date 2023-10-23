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
                </div>
            </div>
            <?= form_open_multipart('admin/update-menu-dinamis/' . $AmbilDetailMenuDinamis['id_menu_dinamis']); ?>
            <?= csrf_field() ?>
            <div class="row g-4">

                <div class="col-md-6">
                    <label class="form-label">Nama Sub Menu Dinamis</label>
                    <input class="form-control" type="text" name="nama_menu_dinamis" value="<?= $AmbilDetailMenuDinamis['nama_menu_dinamis']; ?>">
                    <span class="small">Maksimal 150 karakter termasuk spasi dan tanda baca</span>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Icon Menu</label>
                    <input class="form-control" type="text" name="icon_menu_dinamis" value="<?= $AmbilDetailMenuDinamis['icon_menu_dinamis']; ?>">
                    <span class="small">Masukkan kode icon untuk menu</span>
                </div>

                <div class="col-md-6">
                    <label class="form-label">URL Sub Menu Dinamis</label>
                    <?php
                    $disabled = false;

                    // Pastikan id_menu_dinamis ada dalam $AmbilDetailMenuDinamis sebelum mengaksesnya
                    if (isset($AmbilDetailMenuDinamis['id_menu_dinamis'])) {
                        $disabled = in_array($AmbilDetailMenuDinamis['id_menu_dinamis'], array_column($AmbilDetailMenuSubDinamis, 'id_menu_dinamis'));
                    }
                    ?>
                    <input class="form-control" type="text" name="url_menu_dinamis" value="<?= $AmbilDetailMenuDinamis['url_menu_dinamis']; ?>" <?= $disabled ? 'disabled' : ''; ?>>
                    <span class="small">Disable (Menu Level) / Dapat Di Edit (Menu Level 3)</span>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Kolom Menu</label>
                    <input class="form-control" type="text" name="kolom_menu_dinamis" value="<?= $AmbilDetailMenuDinamis['kolom_menu_dinamis']; ?>">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Status Sub Menu Dinamis</label>
                    <div class="d-sm-flex">
                        <div class="form-check radio-bg-light me-4">
                            <input class="form-check-input" type="radio" value="1" name="status_menu_dinamis" <?= ($AmbilDetailMenuDinamis['status_menu_dinamis'] == 1) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                <p class="text-success">Aktif</p>
                            </label>
                        </div>
                        <div class="form-check radio-bg-light me-4">
                            <input class="form-check-input" type="radio" value="NULL" name="status_menu_dinamis" <?= (is_null($AmbilDetailMenuDinamis['status_menu_dinamis'])) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexRadioDefault2">
                                <p class="text-danger">Non Aktif</p>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="d-sm-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mb-0">Simpan</button>
                </div>

            </div>
            <?= form_close() ?>
        </div>
    </div>
</main>
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