<?= $this->extend('fv_admin/themplate/layout') ?>
<?= $this->section('content') ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- Sidebar START -->
    <?= $this->include('fv_admin/themplate/sidebar') ?>
    <!-- Sidebar END -->

    <!-- Page content START -->
    <div class="page-content">

        <!-- Top bar START -->
        <?= $this->include('fv_admin/themplate/top-bar') ?>
        <!-- Top bar END -->

        <!-- Page main content START -->
        <div class="page-content-wrapper border">

            <!-- Title -->
            <div class="row mb-3">
                <div class="col-12 d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-2 mb-sm-0">Tambah Taruna/i</h1>
                </div>
            </div>
            <!-- Form -->
            <form class="row g-4">

                <!-- Profile picture -->
                <div class="col-12 justify-content-center align-items-center">
                    <label class="form-label">Foto Profil</label>
                    <div class="d-flex align-items-center">
                        <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                            <!-- Avatar place holder -->
                            <span class="avatar avatar-xl">
                                <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="<?=base_url();?>assets/images/avatar/07.jpg" alt="">
                            </span>
                            <!-- Remove btn -->
                            <button type="button" class="uploadremove"><i class="bi bi-x text-white"></i></button>
                        </label>
                        <!-- Upload button -->
                        <label class="btn btn-primary-soft mb-0" for="uploadfile-1">Upload Foto</label>
                        <input id="uploadfile-1" class="form-control d-none" type="file">
                    </div>
                </div>

                <!-- Full name -->
                <div class="col-12">
                    <label class="form-label">Nama Lengkap</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" value="">
                    </div>
                </div>

                <!-- Username -->
                <div class="col-md-6">
                    <label class="form-label">NISN</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nomor Induk Siswa Nasional" value="">
                        <span class="input-group-text">@smkn1tanjabtimur.sch.id</span>
                    </div>
                </div>

                <!-- Phone number -->
                <div class="col-md-6">
                    <label class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" value="" placeholder="Nomor Handphone">
                </div>

                <!-- Phone number -->
                <div class="col-md-6">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" value="" placeholder="Tempat Lahir">
                </div>

                <!-- Location -->
                <div class="col-md-6">
                    <label class="form-label">Tanggal Lahir</label>
                    <input class="form-control" type="date" value="">
                </div>

                <!-- Phone number -->
                <div class="col-md-6">
                    <label class="form-label">Kelas</label>
                    <input type="text" class="form-control" value="" placeholder="Kelas">
                </div>

                <!-- Phone number -->
                <div class="col-md-6">
                    <label class="form-label">Jurusan</label>
                    <input type="text" class="form-control" value="" placeholder="Jurusan">
                </div>

                <!-- Phone number -->
                <div class="col-md-6">
                    <label class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Kata Sandi">
                </div>

                <!-- Phone number -->
                <div class="col-md-6">
                    <label class="form-label">Ulangi Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Ulangi Kata Sandi">
                </div>

                <!-- Save button -->
                <div class="d-sm-flex justify-content-end">
                    <button type="button" type="submit" class="btn btn-primary mb-0">Simpan</button>
                </div>
            </form>

        </div>
        <!-- Page main content END -->

    </div>
    <!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<?= $this->include('fv_admin/themplate/back-top') ?>

<?= $this->endSection() ?>