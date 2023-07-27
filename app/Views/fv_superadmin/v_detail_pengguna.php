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
        <div class="content mb-0">
            <h4><?= $subtitle; ?></h4>
            <p>
                Halaman ini digunakan untuk merubah data pengguna
            </p>
            <?php echo form_open('Superadmin/UbahDataPengguna/' . $AmbilDataDetailPengguna['id_pengguna']) ?>
            <?= csrf_field() ?>

            <div class="input-style has-borders has-icon validate-field mb-4">
                <i class="fa fa-user"></i>
                <input type="name" name="nama_lengkap" value="<?= $AmbilDataDetailPengguna['nama_lengkap'] ?>" class="form-control validate-name" id="form1" placeholder="Nama Lengkap">
                <label for="form1" class="color-highlight">Nama Lengkap</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>

            <?php echo form_open('Superadmin/UbahDataLoginPengguna/' . $AmbilDataDetailLogin['id_login']) ?>
            <div class="input-style has-borders no-icon validate-field mb-4">
                <input type="username" name="username" value="<?= $AmbilDataDetailLogin['username'] ?>" class="form-control validate-text" id="form2" placeholder="Username">
                <label for="form2" class="color-highlight">Username</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>

            <div class="input-style has-borders no-icon validate-field mb-4">
                <input type="password" name="password" value="<?= $AmbilDataDetailLogin['password'] ?>" class="form-control validate-text" id="form3" placeholder="Password">
                <label for="form3" class="color-highlight">Password</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>

            <div class="input-style has-borders no-icon mb-4">
                <label for="form5" class="color-highlight">Hak Akses</label>


                <select name="level" id="form5">
                    <?php if (empty($AmbilDataDetailLogin) || !isset($AmbilDataDetailLogin['id_pengguna'])) : ?>
                        <option value="" disabled selected>Pilih Hak Akses</option>
                    <?php else : ?>
                        <?php $level = $AmbilDataDetailLogin['level']; ?>
                        <option value="1" <?php echo ($level == 1) ? 'selected' : ''; ?>>Superadmin</option>
                        <option value="2" <?php echo ($level == 2) ? 'selected' : ''; ?>>Admin</option>
                        <option value="3" <?php echo ($level == 3) ? 'selected' : ''; ?>>Operator</option>
                        <option value="4" <?php echo ($level == 4) ? 'selected' : ''; ?>>Guru</option>
                        <option value="5" <?php echo ($level == 5) ? 'selected' : ''; ?>>Siswa</option>
                    <?php endif; ?>
                </select>


                <span><i class="fa fa-chevron-down"></i></span>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <i class="fa fa-check disabled invalid color-red-dark"></i>
                <em></em>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-m mt-4 mb-4 btn-full bg-green-dark rounded-sm text-uppercase font-900">SIMPAN</button>
            </div>

            <?php echo form_close() ?>
        </div>
    </div>

    <!-- footer and footer card-->
    <?= $this->include('fv_superadmin/themplate/menu-footer') ?>
</div>

<?= $this->include('fv_superadmin/themplate/menu-share') ?>
<?= $this->include('fv_superadmin/themplate/menu-color') ?>
<?= $this->include('fv_superadmin/themplate/menu-main') ?>
<?= $this->include('fv_superadmin/themplate/menu-install-android') ?>
<?= $this->include('fv_superadmin/themplate/menu-install-ios') ?>

<?= $this->endSection() ?>