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
            <?= form_open_multipart('admin/simpan-kategori-news-and-blog') ?>
            <?= csrf_field() ?>
            <div class="row g-4">

                <div class="col-md-12">
                    <label class="form-label">Judul Kategori News And Blog</label>
                    <input class="form-control" type="text" placeholder="Judul Kategori News And Blog" name="judul_kategori_news_and_blog">
                    <span class="small">Maksimal 150 karakter termasuk spasi dan tanda baca</span>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Isi Kategori News And Blog</label>
                    <textarea class="form-control" type="text" rows="2" placeholder="Isi Kategori News And Blog" name="isi_kategori_news_and_blog"></textarea>
                    <span class="small">Maksimal 150 karakter termasuk spasi dan tanda baca</span>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Slug Kategori News And Blog</label>
                    <input class="form-control" type="text"  name="slug_kategori_news_and_blog" disabled>
                    <span class="small">Maksimal 150 karakter termasuk spasi dan tanda baca</span>
                </div>

                <div class="col-lg-6">
                    <label class="form-label">Warna Kategori News And Blog</label>
                    <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm" name="warna_kategori_news_and_blog" required>
                        <option value="NULL" disabled selected>Pilih Warna</option>
                        <?php
                        $warnaOptions = [
                            "primary"   => "Primary",
                            "white"     => "White",
                            "secondary" => "Secondary",
                            "success"   => "Success",
                            "info"      => "Info",
                            "warning"   => "Warning",
                            "danger"    => "Danger",
                            "light"     => "Light",
                            "dark"      => "Dark",
                            "orange"    => "Orange",
                            "purple"    => "Purple",
                            "blue"      => "Blue",
                        ];

                        foreach ($warnaOptions as $value => $label) {
                            echo "<option value=\"$value\">$label</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-lg-6">
                    <label class="form-label">Status Kategori News And Blog</label>
                    <div class="d-sm-flex">
                        <div class="form-check radio-bg-light me-4">
                            <input class="form-check-input" type="radio" value="1" name="status_kategori_news_and_blog" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                <p class="text-success">Aktif</p>
                            </label>
                        </div>
                        <div class="form-check radio-bg-light me-4">
                            <input class="form-check-input" type="radio" value="" name="status_kategori_news_and_blog">
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