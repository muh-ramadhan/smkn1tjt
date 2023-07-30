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
    <div class="card-bg preload-img" data-src="themplate/code/images/pictures/20s.jpg"></div>
  </div>

  <div class="card card-style">
    <div class="content mt-2 mb-0">

      <?php echo form_open('login/auth'); ?>
      <div class="input-style no-borders has-icon validate-field mb-4">
        <i class="fa fa-user"></i>
        <input name="username" type="text" class="form-control validate-name" id="form1a" placeholder="Username">
        <label for="form1a" class="color-blue-dark font-10 mt-1">Username</label>
        <i class="fa fa-times disabled invalid color-red-dark"></i>
        <i class="fa fa-check disabled valid color-green-dark"></i>
        <em>(wajib)</em>
      </div>

      <div class="input-style no-borders has-icon validate-field mb-4">
        <i class="fa fa-lock"></i>
        <input name="password" type="password" class="form-control validate-password" id="form3a" placeholder="Password">
        <label for="form3a" class="color-blue-dark font-10 mt-1">Password</label>
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
        <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-start"><a href="#" class="color-theme">Buat Akun</a></div>
        <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-end"><a href="#" class="color-theme">Lupa Kata Sandi?</a></div>
      </div>
    </div>

  </div>
  <!-- footer and footer card-->
  
  <?php $errors = session()->getFlashdata('errorValidation');
  //Pesan Validasi Error
  if (!empty($errors)) { ?>
    <!-- Kotak pesan kesalahan yang akan muncul secara otomatis -->
    <div id="overlay-error-validation" style="position: fixed;top: -100px;bottom: -100px; left: 0px;right: 0px;z-index: 100;background-color: rgba(0, 0, 0, 0.35);">
      <div class="menu menu-box-bottom menu-box-detached rounded-m menu-active" data-menu-height="305" data-menu-effect="menu-over" style="display: block; height: 305px;">
        <h1 class="text-center mt-4"><i class="fa fa-3x fa-times color-red-dark"></i></h1>
        <h1 class="text-center mt-3 text-uppercase font-700">Oops!</h1>
        <p class="boxed-text-l">
          <?php foreach ($errors as $error) : ?>
            <?= esc($error); ?><br>
          <?php endforeach ?>
        </p>
        <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-red-light" onclick="hideOverlayErrorValidation()">Kembali</a>
      </div>
    </div>
  <?php }  ?>

  <?php if (session()->getFlashdata('error')) : ?>
    <!-- Kotak pesan kesalahan yang akan muncul secara otomatis -->
    <div id="overlay-error" style="position: fixed;top: -100px;bottom: -100px; left: 0px;right: 0px;z-index: 100;background-color: rgba(0, 0, 0, 0.35);">
      <div class="menu menu-box-bottom menu-box-detached rounded-m menu-active" data-menu-height="305" data-menu-effect="menu-over" style="display: block; height: 305px;">
        <h1 class="text-center mt-4"><i class="fa fa-3x fa-times color-red-dark"></i></h1>
        <h1 class="text-center mt-3 text-uppercase font-700">Oops!</h1>
        <p class="boxed-text-l">
          <?php echo session()->getFlashdata('error'); ?>
        </p>
        <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-red-light" onclick="hideOverlayError()">Kembali</a>
      </div>
    </div>
  <?php endif; ?>

  <?php if (session()->getFlashdata('success')) : ?>
  <div id="overlay-success" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="305" data-menu-effect="menu-over">
    <h1 class="text-center mt-4"><i class="fa fa-3x fa-check-circle color-green-dark"></i></h1>
    <h1 class="text-center mt-3 text-uppercase font-700">All's Good</h1>
    <p class="boxed-text-l">
    <?php echo session()->getFlashdata('success'); ?>
    </p>
    <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-green-light" onclick="hideOverlaySuccess()">Great</a>
  </div>
  <?php endif; ?>

  <?= $this->include('default/themplate/menu-footer') ?>
</div>
<!-- end of page content-->

<?= $this->endSection() ?>