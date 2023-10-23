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
            <?= form_open_multipart('admin/update-menu-sub-sub-dinamis/' . $AmbilMenuSubSubDinamis['id_menu_sub_sub_dinamis']); ?>
            <?= csrf_field() ?>
            <div class="row g-4">

                <div class="col-lg-6">
                    <label class="form-label">Pilih Induk Menu Level 2</label>
                    <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm" name="id_menu_sub_dinamis" required>
                        <option value="NULL" disabled>Pilih Menu Sub Dinamis</option>
                        <?php foreach ($AmbilDetailMenuSubDinamis as $menuSubDinamis) : ?>
                            <option value="<?= $menuSubDinamis['id_menu_sub_dinamis']; ?>" <?= ($menuSubDinamis['id_menu_sub_dinamis'] == $AmbilMenuSubSubDinamis['id_menu_sub_dinamis']) ? 'selected' : ''; ?>>
                                <?= $menuSubDinamis['nama_menu_sub_dinamis']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <span class="small">Pilih Induk Menu Level 2</span>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Nama Menu Level 3</label>
                    <input class="form-control" type="text" name="nama_menu_sub_sub_dinamis" value="<?= $AmbilMenuSubSubDinamis['nama_menu_sub_sub_dinamis']; ?>">
                    <span class="small">Masukkan Nama Menu Level 3</span>
                </div>

                <div class="col-md-6">
                    <label class="form-label">URL Menu Level 3</label>
                    <input class="form-control" type="text" name="url_menu_sub_sub_dinamis" value="<?= $AmbilMenuSubSubDinamis['url_menu_sub_sub_dinamis']; ?>">
                    <span class="small">Masukkan Link Berita</span>
                </div>


                <div class="col-lg-6">
                    <label class="form-label">Status Menu Level 3</label>
                    <div class="d-sm-flex">
                        <div class="form-check radio-bg-light me-4">
                            <input class="form-check-input" type="radio" value="1" name="status_menu_sub_sub_dinamis" <?= ($AmbilMenuSubSubDinamis['status_menu_sub_sub_dinamis'] == 1) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                <p class="text-success">Aktif</p>
                            </label>
                        </div>
                        <div class="form-check radio-bg-light me-4">
                            <input class="form-check-input" type="radio" value="NULL" name="status_menu_sub_sub_dinamis" <?= (is_null($AmbilMenuSubSubDinamis['status_menu_sub_sub_dinamis'])) ? 'checked' : ''; ?>>
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