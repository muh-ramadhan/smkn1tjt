<?= $this->extend('default/themplate/layout') ?>
<!-- HEAD DESCRIPTION -->
<?= $this->section('head-description') ?>
<?= $this->include('default/themplate/head-description-news-and-blog') ?>
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

<?= $this->section('content') ?>
<?= $this->include('default/themplate/header') ?>

<?php if (!empty($AmbilDataNewsAndBlog)) : ?>
  <main>
    <section class="pb-0 pt-4 pb-md-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row">

              <div class="col-lg-12 order-1">

                <span><?= $AmbilDataNewsAndBlog['penulis_newsandblog']; ?></span>
                <span class="mx-2">-</span>

                <span><?= date('d F Y', strtotime($AmbilDataNewsAndBlog['created_at'])); ?></span>
                <span class="mx-2">|</span>

                <div class="badge text-bg-info"><i class="far text-white fa-eye me-1"></i><?= number_format($AmbilDataNewsAndBlog['jumlah_view'], 0, ',', '.'); ?>
                </div>

                <div class="badge text-bg-<?= $AmbilDataNewsAndBlog['warna_kategori_news_and_blog']; ?>">
                  <?= $AmbilDataNewsAndBlog['judul_kategori_news_and_blog']; ?>
                </div>

                <?php if (!empty($AmbilDataNewsAndBlog2['warna_kategori_news_and_blog'])) : ?>
                  <div class="badge text-bg-<?= $AmbilDataNewsAndBlog2['warna_kategori_news_and_blog']; ?>">
                    <?= $AmbilDataNewsAndBlog2['judul_kategori_news_and_blog']; ?>
                  </div>
                <?php endif; ?>
                <h2 class="mt-2 mb-0 display-5"><?= $AmbilDataNewsAndBlog['judul_newsandblog']; ?></h2>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-12 mt-4 mt-lg-0 mb-4">
                <?= $AmbilDataNewsAndBlog['isi_newsandblog']; ?>
              </div>
            </div>

            <div class="d-lg-flex justify-content-lg-between mb-4">


              <div class="align-items-center mb-3 mb-lg-0">
                <h6 class="mb-2 me-4 d-inline-block">Bagikan Ke:</h6>
                <ul class="list-inline mb-0 mb-2 mb-sm-0">
                  <li class="list-inline-item">
                    <a class="btn px-2 btn-sm bg-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= (base_url('home/news-and-blog/')); ?><?= $AmbilDataNewsAndBlog['slug_newsandblog']; ?>" target="_blank" rel="nofollow">
                      <i class="fab fa-fw fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="btn px-2 btn-sm text-white bg-#25D366" style="background-color: #25D366;"  href="https://api.whatsapp.com/send?text=<?= (base_url('home/news-and-blog/')); ?><?= $AmbilDataNewsAndBlog['slug_newsandblog']; ?>" target="_blank" rel="nofollow">
                      <i class="fab fa-fw fa-whatsapp"></i>
                    </a>
                  </li>

                  <li class="list-inline-item">
                    <a class="btn px-2 btn-sm bg-twitter" href="https://twitter.com/intent/tweet?url=<?= (base_url('home/news-and-blog/')); ?><?= $AmbilDataNewsAndBlog['slug_newsandblog']; ?>" target="_blank" rel="nofollow">
                      <i class="fab fa-fw fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="btn px-2 btn-sm bg-linkedin" href="https://www.linkedin.com/shareArticle?url=<?= (base_url('home/news-and-blog/')); ?><?= $AmbilDataNewsAndBlog['slug_newsandblog']; ?>" target="_blank" rel="nofollow">
                      <i class="fab fa-fw fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>


              <div class="align-items-center">
                <h6 class="mb-2 me-4 d-inline-block">Kategori Populer:</h6>
                <ul class="list-inline mb-0 social-media-btn">
                  <?php foreach ($AmbilSemuaKategoriNewsAndBlog as $valuex) : ?>
                    <li class="list-inline-item">
                      <a class="btn btn-outline-light btn-sm mb-lg-0" href="#"><?= $valuex['judul_kategori_news_and_blog']; ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-0">
      <div class="container">
        <div class="row mb-4">
          <div class="col-12">
            <h2 class="mb-0">Anda mungkin juga menyukainya</h2>
          </div>
        </div>

        <div class="tiny-slider arrow-round arrow-hover arrow-dark">
          <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false" data-items="3" data-items-lg="2" data-items-sm="1">

            <?php foreach ($AmbilSemuaNewsAndBlog as $value) : ?>
              <div class="card bg-transparent">
                <div class="row g-0">
                  <div class="col-md-4">
                    <?php
                    if ($value['cover_newsandblog'] == NULL || $value['cover_newsandblog'] == '0') {
                      $cover_newsandblogImage = base_url('assets/images/NewsAndBlog/tidak-ada-gambar.png');
                    } else {
                      $cover_newsandblogPath = FCPATH . 'assets/images/NewsAndBlog/' . $value['cover_newsandblog'];
                      $cover_newsandblogImage = file_exists($cover_newsandblogPath) ? base_url('assets/images/NewsAndBlog/' . $value['cover_newsandblog']) : base_url('assets/images/NewsAndBlog/tidak-ada-gambar.png');
                    }
                    ?>
                    <img src="<?= $cover_newsandblogImage; ?>" class="img-fluid rounded-start" alt="<?= $value['judul_newsandblog']; ?>">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-title"><a href="<?= base_url('home/news-and-blog/' . $value['slug_newsandblog']); ?>"><?= $value['judul_newsandblog']; ?></a></h6>
                      <?php
                      $createdAt = $value['created_at'] !== null ? date_create($value['created_at']) : null;
                      ?>
                      <span class="small"><?= $createdAt !== null ? $createdAt->format('d M Y') : 'NA'; ?></span>
                    </div>
                  </div>
                </div>
              </div>

            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

  </main>
<?php else : ?>
  <div class="col-lg-10 col-xl-8 mx-auto mt-4">
    <div class="bg-light rounded-3 p-3 p-md-4">
      <!-- Content -->
      <q class="lead">Data tidak tersedia.</q>
    </div>
  </div>
<?php endif; ?>

<?= $this->include('default/themplate/footer') ?>
<?= $this->include('default/themplate/back-top') ?>
<?= $this->endSection() ?>


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