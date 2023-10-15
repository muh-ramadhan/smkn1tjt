<?= $this->extend('default/themplate/layout') ?>
<!-- HEAD DESCRIPTION -->
<?= $this->section('head-description') ?>
<?= $this->include('default/themplate/head-description') ?>
<?= $this->endSection() ?>
<!-- HEAD DESCRIPTION -->

<!-- HEAD SCRIPT -->
<?= $this->section('head-script') ?>
<?= $this->include('default/themplate/head-script') ?>
<?= $this->endSection() ?>
<!-- HEAD SCRIPT -->

<!-- HEAD CSS -->
<?= $this->section('head-css') ?>
<?= $this->include('default/themplate/head-css') ?>
<?= $this->endSection() ?>
<!-- HEAD CSS -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<?= $this->include('default/themplate/header') ?>

<main>
  <section class="pt-5 pb-0" style="background-image:url(assets/images/element/map.svg); background-position: center left; background-size: cover_newsandblog;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-xl-6 text-center mx-auto">
          <!-- Title -->
          <h6 class="text-primary">Hubungi Kami</h6>
          <h1 class="mb-4">Kami di sini untuk membantu!</h1>
        </div>
      </div>

      <!-- Contact info box -->
      <div class="row g-4 g-md-5 mt-0 mt-lg-3">
        <!-- Box item -->
        <div class="col-lg-4 mt-lg-0">
          <div class="card card-body bg-primary shadow py-5 text-center h-100">
            <!-- Title -->
            <h5 class="text-white mb-3">Administrasi </h5>
            <ul class="list-inline mb-0">
              <!-- Phone number -->
              <li class="list-item mb-3">
                <a href="#" class="text-white"> <i class="fas fa-fw fa-phone-alt me-2"></i>(423) 733-8222 </a>
              </li>
              <!-- Email id -->
              <li class="list-item mb-0">
                <a href="#" class="text-white"> <i class="far fa-fw fa-envelope me-2"></i>example@email.com </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Box item -->
        <div class="col-lg-4 mt-lg-0">
          <div class="card card-body shadow py-5 text-center h-100">
            <!-- Title -->
            <h5 class="mb-3">Kerjasama dan Kemitraan</h5>
            <ul class="list-inline mb-0">
              <!-- Phone number -->
              <li class="list-item mb-3 h6 fw-light">
                <a href="#"> <i class="fas fa-fw fa-phone-alt me-2"></i>+896-789-546 </a>
              </li>
              <!-- Email id -->
              <li class="list-item mb-0 h6 fw-light">
                <a href="#"> <i class="far fa-fw fa-envelope me-2"></i>example@email.com </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Box item -->
        <div class="col-lg-4 mt-lg-0">
          <div class="card card-body shadow py-5 text-center h-100">
            <!-- Title -->
            <h5 class="mb-3">Akademik</h5>
            <ul class="list-inline mb-0">
              <!-- Phone number -->
              <li class="list-item mb-3 h6 fw-light">
                <a href="#"> <i class="fas fa-fw fa-phone-alt me-2"></i>(+62) 740-7371182 </a>
              </li>
              <!-- Email id -->
              <li class="list-item mb-0 h6 fw-light">
                <a href="#"> <i class="far fa-fw fa-envelope me-2"></i>admin@smkn1tanjabtimur.sch.id </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row g-4 g-lg-0 align-items-center">

        <div class="col-md-6 align-items-center text-center">
          <!-- Image -->
          <img src="<?=base_url();?>assets/images/element/contact.svg" class="h-400px" alt="">

          <!-- Social media button -->
          <div class="d-sm-flex align-items-center justify-content-center mt-2 mt-sm-4">
            <h5 class="mb-0">Ikuti kami di:</h5>
            <ul class="list-inline mb-0 ms-sm-2">
              <?php foreach ($AmbilDataWeb as $value) : ?>
                <li class="list-inline-item"> <a class="fs-5 me-1 text-facebook" href="https://facebook.com/<?= $value['facebook_web']; ?>"><i class="fab fa-fw fa-facebook-square"></i></a> </li>
                <li class="list-inline-item"> <a class="fs-5 me-1 text-instagram" href="https://instagram.com/<?= $value['instagram_web']; ?>"><i class="fab fa-fw fa-instagram"></i></a> </li>
                <li class="list-inline-item"> <a class="fs-5 me-1 text-twitter" href="https://twitter.com/<?= $value['twitter_web']; ?>"><i class="fab fa-fw fa-twitter"></i></a> </li>
                <li class="list-inline-item"> <a class="fs-5 me-1 text-youtube" href="https://youtube.com/channel/<?= $value['youtube_web']; ?>"><i class="fab fa-fw fa-youtube"></i></a> </li>
            </ul>
          <?php endforeach; ?>
          </div>
        </div>

        <!-- Contact form START -->
        <div class="col-md-6">
          <!-- Title -->
          <h2 class="mt-4 mt-md-0">Let's talk</h2>
          <p>Hubungi kami langsung atau isi formulir dan kami akan segera menghubungi Anda kembali</p>

          <form>
            <!-- Name -->
            <div class="mb-4 bg-light-input">
              <label for="yourName" class="form-label">Nama Lengkap *</label>
              <input type="text" class="form-control form-control-lg" id="yourName">
            </div>
            <!-- Email -->
            <div class="mb-4 bg-light-input">
              <label for="emailInput" class="form-label">Alamat Email *</label>
              <input type="email" class="form-control form-control-lg" id="emailInput">
            </div>
            <!-- Message -->
            <div class="mb-4 bg-light-input">
              <label for="textareaBox" class="form-label">Pesan *</label>
              <textarea class="form-control" id="textareaBox" rows="4"></textarea>
            </div>
            <!-- Button -->
            <div class="d-grid">
              <button class="btn btn-lg btn-primary mb-0" type="button">Kirim Pesan</button>
            </div>
          </form>
        </div>
        <!-- Contact form END -->
      </div>
    </div>
  </section>

  <section class="pt-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <iframe class="w-100 h-400px grayscale rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1698.4014213152875!2d103.78524008338992!3d-1.2252409409926563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25e3a536b16273%3A0xe7d45cbacf660975!2sSMK%20Negeri%201%20Muara%20Sabak%20Barat%20Tanjung%20Jabung%20Timur!5e1!3m2!1sen!2sid!4v1695733890860!5m2!1sen!2sid" height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </section>
</main>

<?= $this->include('default/themplate/footer') ?>
<?= $this->include('default/themplate/back-top') ?>
<?= $this->endSection() ?>
<!-- CONTENT -->

<!-- SCRIPT EXTRA -->
<?= $this->section('script-extra') ?>
<?= $this->include('default/themplate/modal-informasi') ?>
<?= $this->endSection() ?>
<!-- SCRIPT EXTRA -->

<!-- SCRIPT ESSENTIAL -->
<?= $this->section('script-essential') ?>
<?= $this->include('default/themplate/script-essential') ?>
<?= $this->endSection() ?>
<!-- SCRIPT ESSENTIAL -->