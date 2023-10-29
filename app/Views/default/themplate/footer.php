<footer class="bg-light pt-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3">
                <a class="me-0" href="<?= base_url(); ?>">
                    <img class="light-mode-item h-40px" src="<?= base_url(); ?>assets/images/logo.png" alt="logo">
                    <img class="dark-mode-item h-40px" src="<?= base_url(); ?>assets/images/logo-light.png" alt="logo">
                </a>
                <p class="my-3"><?= $AmbilDataWeb['slogan_web']; ?></p>
                <ul class="list-inline mb-0 mt-3">
                    <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="https://facebook.com/<?= $AmbilDataWeb['facebook_web']; ?>"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="https://instagram.com/<?= $AmbilDataWeb['instagram_web']; ?>"><i class="fab fa-fw fa-instagram"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="https://twitter.com/<?= $AmbilDataWeb['twitter_web']; ?>"><i class="fab fa-fw fa-twitter"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-youtube" href="https://youtube.com/channel/<?= $AmbilDataWeb['youtube_web']; ?>"><i class="fab fa-fw fa-youtube"></i></a> </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-6 col-md-4">
                        <h5 class="mb-2 mb-md-4">Tentang Kami</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>home/news-and-blog/profil-smk-negeri-1-tanjung-jabung-timur">Profil</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>home/news-and-blog/jejak-sejarah-smk-negeri-1-tanjung-jabung-timur">Sejarah</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>home/news-and-blog/visi-dan-misi-smk-negeri-1-tanjung-jabung-timur">Visi dan Misi</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Hubungi Kami</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4">
                        <h5 class="mb-2 mb-md-4">Komunitas</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#">Dokumentasi</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4">
                        <h5 class="mb-2 mb-md-4">Bantuan</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#">Buku Pedoman</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>home/pertanyaan-umum">Pertanyaan Umum</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>home/syarat-dan-ketentuan">Syarat &amp; Ketentuan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <h5 class="mb-2 mb-md-4">Hubungi Kami</h5>
                <p class="mb-2">
                    Telephone:<span class="h6 fw-light ms-2"><?= $AmbilDataWeb['kontak_hp_web']; ?></span>
                    <span class="d-block small"><?= $AmbilDataWeb['alamat_web']; ?></span>
                </p>

                <p class="mb-0">Email:<span class="h6 fw-light ms-2"><?= $AmbilDataWeb['email_bantuan_web']; ?></span></p>

                <div class="row g-2 mt-2">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                        <a href="#"> <img src="<?= base_url(); ?>assets/images/client/google-play.svg" alt=""> </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                        <a href="#"> <img src="<?= base_url(); ?>assets/images/client/app-store.svg" alt="app-store"> </a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-4 mb-0">
        <div class="py-3">
            <div class="container px-0">
                <div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
                    <div class="text-primary-hover"> Copyrights <a href="https://smkn1tanjabtimur.sch.id/" target="_blank" class="text-body">©2023 <?= $AmbilDataWeb['hak_cipta_web']; ?></a>. All rights reserved. </div>
                    <div class="justify-content-center mt-3 mt-lg-0">
                        <ul class="nav list-inline justify-content-center mb-0">
                            <li class="list-inline-item">
                                <div class="dropup mt-0 text-center text-sm-end">
                                    <a class="dropdown-toggle nav-link" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-globe me-2"></i>Ganti Bahasa
                                    </a>
                                    <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
                                        <li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/uk.svg" alt="">English</a></li>
                                        <li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/gr.svg" alt="">German </a></li>
                                        <li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/sp.svg" alt="">French</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="list-inline-item"><a class="nav-link" href="#">Syarat Penggunaan</a></li>
                            <li class="list-inline-item"><a class="nav-link pe-0" href="#">Kebijakan Privasi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>