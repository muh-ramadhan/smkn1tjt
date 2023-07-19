<?= $this->extend('default/themplate/layout') ?>
<?= $this->section('content') ?>
<div class="page-content">
  <div class="page-title page-title-small">
    <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a><?= $tittle; ?></h2>
    <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="<?= base_url(); ?>themplate/code/images/avatars/5s.png"></a>
  </div>
  <div class="card header-card shape-rounded" data-card-height="150">
    <div class="card-overlay bg-highlight opacity-95"></div>
    <div class="card-overlay dark-mode-tint"></div>
    <div class="card-bg preload-img" data-src="<?= base_url(); ?>themplate/code/images/pictures/20s.jpg"></div>
  </div>

  <?php $errors = session()->getFlashdata('errors');
  //Pesan Validasi Error
  if (!empty($errors)) { ?>
    <?php foreach ($errors as $error) : ?>
      <div class="ms-3 me-3 mb-1 alert alert-small rounded-s shadow-xl bg-red-dark" role="alert">
        <span><i class="fa fa-times"></i></span>
        <strong><?= esc($error); ?></strong>
        <button type="button" class="close color-white opacity-60 font-16" data-bs-dismiss="alert" aria-label="Close">&times;</button>
      </div>
    <?php endforeach ?>
  <?php }  ?>

  <?php
  if (session()->getFlashdata('pesan')) {
    echo '<div class="ms-3 me-3 mb-1 alert alert-small rounded-s shadow-xl bg-green-dark" role="alert">';
    echo '<span><i class="fa fa-check"></i></span>';
    echo '<strong>';
    echo session()->getFlashdata('pesan');
    echo '</strong>';
    echo '<button type="button" class="close color-white opacity-60 font-16" data-bs-dismiss="alert" aria-label="Close">&times;</button>';
    echo '</div>';
  }; ?>
  <div class="card card-style">
    <div class="content mt-2 mb-0">

      <?php echo form_open('login/auth'); ?>
      <div class="input-style no-borders has-icon validate-field mb-4">
        <i class="fa fa-user"></i>
        <input name="nama_pengguna" type="name" class="form-control validate-name" id="form1a" placeholder="Nama Pengguna">
        <label for="form1a" class="color-blue-dark font-10 mt-1">Nama Pengguna</label>
        <i class="fa fa-times disabled invalid color-red-dark"></i>
        <i class="fa fa-check disabled valid color-green-dark"></i>
        <em>(wajib)</em>
      </div>

      <div class="input-style no-borders has-icon validate-field mb-4">
        <i class="fa fa-lock"></i>
        <input name="kata_sandi" type="password" class="form-control validate-password" id="form3a" placeholder="Kata Sandi">
        <label for="form3a" class="color-blue-dark font-10 mt-1">Kata Sandi</label>
        <i class="fa fa-times disabled invalid color-red-dark"></i>
        <i class="fa fa-check disabled valid color-green-dark"></i>
        <em>(wajib)</em>
      </div>
      <div class="d-grid gap-2">
        <button type="submit" class="btn btn-m mt-4 mb-4 btn-full bg-green-dark rounded-sm text-uppercase font-900">Masuk</button>
      </div>
      <?php echo form_close(); ?>
      <div class="divider"></div>
      <div class="d-flex">
        <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-start"><a href="system-signup-1.html" class="color-theme">Buat Akun</a></div>
        <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-end"><a href="system-forgot-1.html" class="color-theme">Lupa Kata Sandi?</a></div>
      </div>
    </div>

  </div>
  <!-- footer and footer card-->

  <?= $this->include('default/themplate/menu-footer') ?>
</div>
<!-- end of page content-->

<?= $this->endSection() ?>