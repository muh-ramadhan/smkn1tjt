<?= $this->extend('default/themplate/layout') ?>
<?= $this->section('content') ?>
<?= $this->include('default/themplate/header') ?>

<!-- MAIN CONTENT START -->
<main>
  <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

    <div class="container-fluid">

      <div class="row">
        <!-- left -->
        <div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
          
          <div class="p-3 p-lg-5">
            
            <!-- Title -->
            <div class="text-center">
              <h2 class="fw-bold">Selamat datang di komunitas terbesar kami</h2>
              <p class="mb-0 h6 fw-light">Mari belajar sesuatu yang baru hari ini!</p>
            </div>
            <!-- SVG Image -->
            <img src="assets/images/element/02.svg" class="mt-5" alt="">
            <!-- Info -->
            <div class="d-sm-flex mt-5 align-items-center justify-content-center">
              <!-- Avatar group -->
              <ul class="avatar-group mb-2 mb-sm-0">
                <li class="avatar avatar-sm">
                  <img class="avatar-img rounded-circle" src="<?=base_url();?>assets/images/avatar/01.jpg" alt="avatar">
                </li>
                <li class="avatar avatar-sm">
                  <img class="avatar-img rounded-circle" src="<?=base_url();?>assets/images/avatar/02.jpg" alt="avatar">
                </li>
                <li class="avatar avatar-sm">
                  <img class="avatar-img rounded-circle" src="<?=base_url();?>assets/images/avatar/03.jpg" alt="avatar">
                </li>
                <li class="avatar avatar-sm">
                  <img class="avatar-img rounded-circle" src="<?=base_url();?>assets/images/avatar/04.jpg" alt="avatar">
                </li>
              </ul>
              <!-- Content -->
              <p class="mb-0 h6 fw-light ms-0 ms-sm-3">4k+ Taruna/Taruni bergabung dengan kami, sekarang giliran Anda.</p>
            </div>
          </div>
        </div>

        <!-- Right -->
        <div class="col-12 col-lg-6 m-auto">
          <div class="row my-5">
            <div class="col-sm-10 col-xl-8 m-auto">
              <!-- Title -->
              <span class="mb-0 fs-1">👋</span>
              <h1 class="fs-2">Masuk ke SMKN 1 TJT!</h1>
              <p class="lead mb-4">Senang bertemu Anda! Silakan masuk dengan akun Anda.</p>

              <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong><?php echo session()->getFlashdata('error'); ?></strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>

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

              <!-- Form START -->
              <?php echo form_open('login/auth'); ?>
              <!-- Email -->
              <div class="mb-4">
                <label for="username" class="form-label">Nama Pengguna *</label>
                <div class="input-group input-group-lg">
                  <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3">
                    <i class="bi bi-envelope-fill"></i>
                  </span>
                  <input name="username" type="username" class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail" id="username">
                </div>
                <div id="usernameHelpBlock" class="form-text">
                  Username Anda minimal harus 8 karakter
                </div>
              </div>
              <!-- Password -->
              <div class="mb-4">
                <label for="password" class="form-label">Kata Sandi *</label>
                <div class="input-group input-group-lg">
                  <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                  <input name="password" type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="password" id="password">
                </div>
                <div id="passwordHelpBlock" class="form-text">
                  Kata sandi Anda minimal harus 8 karakter
                </div>
              </div>
              <!-- Check box -->
              <div class="mb-4 d-flex justify-content-between mb-4">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                </div>
                <div class="text-primary-hover">
                  <a href="forgot-password.html" class="text-secondary">
                    <u>Tidak ingat kata sandi?</u>
                  </a>
                </div>
              </div>
              <!-- Button -->
              <div class="align-items-center mt-0">
                <div class="d-grid">
                  <button class="btn btn-primary mb-0" type="submit">Login</button>
                </div>
              </div>
              <!-- Form END -->
              <?php echo form_close(); ?>

              <!-- Sign up link -->
              <div class="mt-4 text-center">
                <span>Tidak punya akun? <a href="<?=base_url();?>Register">Buat Akun</a></span>
              </div>
            </div>
          </div> <!-- Row END -->
        </div>
      </div> <!-- Row END -->
    </div>
  </section>

</main>
<!-- MAIN CONTENT END -->


<?= $this->include('default/themplate/footer') ?>
<?= $this->include('default/themplate/back-top') ?>
<? //= $this->include('default/themplate/admision-open') 
?>

<?= $this->endSection() ?>