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
            <?= form_open_multipart('admin/update-menu-sub-dinamis/' . $AmbilDetailMenuSubDinamis['id_menu_sub_dinamis']); ?>
            <?= csrf_field() ?>
            <div class="row g-4">

                <div class="col-lg-6">
                    <label class="form-label">Pilih Menu Dinamis</label>
                    <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm" name="id_menu_dinamis" required>
                        <option value="NULL" <?= empty($AmbilDetailMenuSubDinamis['id_menu_dinamis']) ? 'selected' : ''; ?> disabled>Pilih Menu Dinamis</option>
                        <?php foreach ($AmbilMenuDinamisModel as $menuDinamis) : ?>
                            <option value="<?= $menuDinamis['id_menu_dinamis']; ?>" <?= ($AmbilDetailMenuSubDinamis['id_menu_dinamis'] == $menuDinamis['id_menu_dinamis']) ? 'selected' : ''; ?>>
                                <?= $menuDinamis['nama_menu_dinamis']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Nama Sub Menu Dinamis</label>
                    <input class="form-control" type="text" name="nama_menu_sub_dinamis" value="<?= $AmbilDetailMenuSubDinamis['nama_menu_sub_dinamis']; ?>">
                    <span class="small">Maksimal 150 karakter termasuk spasi dan tanda baca</span>
                </div>

                <div class="col-md-6">
                    <label class="form-label">URL Sub Menu Dinamis</label>
                    <?php
                    $disabled = in_array($AmbilDetailMenuSubDinamis['id_menu_sub_dinamis'], array_column($AmbilMenuSubSubDinamisModel, 'id_menu_sub_dinamis'));
                    ?>
                    <input class="form-control" type="text" name="url_menu_sub_dinamis" value="<?= $AmbilDetailMenuSubDinamis['url_menu_sub_dinamis']; ?>" <?= $disabled ? 'disabled' : ''; ?>>
                    <span class="small">Disable (Menu Level) / Dapat Di Edit (Menu Level 3)</span>
                </div>

                <div class="col-lg-6">
                    <label class="form-label">Status Sub Menu Dinamis</label>
                    <div class="d-sm-flex">
                        <div class="form-check radio-bg-light me-4">
                            <input class="form-check-input" type="radio" value="1" name="status_menu_sub_dinamis" <?= ($AmbilDetailMenuSubDinamis['status_menu_sub_dinamis'] == 1) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                <p class="text-success">Aktif</p>
                            </label>
                        </div>
                        <div class="form-check radio-bg-light me-4">
                            <input class="form-check-input" type="radio" value="NULL" name="status_menu_sub_dinamis" <?= (is_null($AmbilDetailMenuSubDinamis['status_menu_sub_dinamis'])) ? 'checked' : ''; ?>>
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