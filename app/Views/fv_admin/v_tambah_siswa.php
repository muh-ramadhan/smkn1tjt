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
            <?php echo form_open_multipart('admin/simpan-taruna-taruni') ?>
            <?= csrf_field() ?>
            <div class="row g-4">

                <!-- HTML Form -->
                <div class="col-6 justify-content-center align-items-center">
                    <label class="form-label">Foto Profil</label>
                    <div class="d-flex align-items-center">
                        <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                            <span class="avatar avatar-xl">
                                <img id="uploadfile-1-preview" class="avatar-img rounded border border-white border-3 shadow" src="<?= base_url(); ?>assets/images/avatar/tidak-ada-gambar.png" alt="">
                            </span>
                            <button type="button" class="uploadremove" onclick="removeImage()"><i class="bi bi-x text-white"></i></button>
                        </label>
                        <label class="btn btn-primary-soft mb-0" for="uploadfile-1">Upload Foto</label>
                        <input id="uploadfile-1" class="form-control d-none" type="file" name="foto" onchange="previewImage(this)">
                    </div>
                </div>

                <!-- JavaScript -->
                <script>
                    function previewImage(input) {
                        var preview = document.getElementById('uploadfile-1-preview');
                        var file = input.files[0];
                        var reader = new FileReader();

                        reader.onloadend = function() {
                            preview.src = reader.result;
                        };

                        if (file) {
                            reader.readAsDataURL(file);
                        } else {
                            preview.src = "<?= base_url(); ?>assets/images/avatar/tidak-ada-gambar.png";
                        }
                    }

                    function removeImage() {
                        var preview = document.getElementById('uploadfile-1-preview');
                        preview.src = "<?= base_url(); ?>assets/images/avatar/tidak-ada-gambar.png";

                        // Reset input file
                        var input = document.getElementById('uploadfile-1');
                        input.value = null;
                    }
                </script>


                <div class="col-6">
                    <label class="form-label">Nama Lengkap</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap">
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">NISN</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nomor Induk Siswa Nasional" name="nisn">
                        <span class="input-group-text">@smkn1tanjabtimur.sch.id</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" placeholder="Nomor Handphone" name="no_hp">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tanggal_lahir">
                </div>

                <div class="col-lg-6">
                    <label class="form-label">Pilih Kelas</label>
                    <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm" name="id_kelas" required>
                        <option value="NULL" disabled selected>Pilih Kelas</option>
                        <?php foreach ($AmbilDataKelas as $kelasItem) : ?>
                            <option value="<?= $kelasItem['id_kelas']; ?>"><?= $kelasItem['nama_kelas_angka']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-lg-6">
                    <label class="form-label">Pilih Jurusan</label>
                    <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm" name="id_jurusan" required>
                        <option value="NULL" disabled selected>Pilih Jurusan</option>
                        <?php foreach ($AmbilDataJurusan as $jurusanItem) : ?>
                            <option value="<?= $jurusanItem['id_jurusan']; ?>"><?= $jurusanItem['alias_jurusan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Kata Sandi" name="password">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Ulangi Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Ulangi Kata Sandi" name="confirm_password">
                </div>

                <div class="d-sm-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mb-0">Simpan</button>
                </div>

            </div>
            <?php echo form_close() ?>
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