<?= $this->extend('default/themplate/layout') ?>
<?= $this->section('content') ?>
<?= $this->include('default/themplate/header') ?>
<?= $this->include('default/themplate/footer-bar') ?>

<div class="page-content">
	<div class="page-title page-title-large">
		<h2 data-username="Word!" class="greeting-text"></h2>
		<a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="<?= base_url(); ?>themplate/code/images/avatars/5s.png"></a>
	</div>
	<div class="card header-card shape-rounded" data-card-height="250">
		<div class="card-overlay bg-highlight opacity-95"></div>
		<div class="card-overlay dark-mode-tint"></div>
		<div class="card-bg preload-img" data-src="<?= base_url(); ?>themplate/code/images/pictures/20s.jpg"></div>
	</div>

	<div class="content">

		<div class="search-box  position-relative shadow-xl border-0 bg-white rounded-m">
			<i class="fa fa-search ms-n3"></i>
			<input type="text" class="border-0" placeholder="Apa yang anda fikirkan? " data-search>
		</div>
		<div class="search-results disabled-search-list card card-style mx-0 px-3 mt-4">
			<div class="list-group list-custom-large">
				<a href="#" data-filter-item data-filter-name="all demo smartphone apple iphone ios">
					<i class="fab fa-apple color-gray-dark"></i>
					<span>Apple</span>
					<strong>Works on iOS 10 and Higher</strong>
					<i class="fa fa-angle-right"></i>
				</a>
				<a href="#" data-filter-item data-filter-name="all demo smartphone samsung android htc oneplus">
					<i class="fab fa-android color-green-dark"></i>
					<span>Android</span>
					<strong>Works on Android 5.1.1 and Higher</strong>
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
		<div class="search-no-results disabled mt-4">
			<div class="card card-style mx-0">
				<div class="content">
					<h4>No Results</h4>
					<p>
						Your search brought up no results. Try using a different keyword. Or try typing all
						to see all items in the demo. These can be linked to anything.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="splide single-slider slider-no-arrows slider-no-dots visible-slider" id="single-slider-1">
		<div class="splide__track">
			<div class="splide__list">
				<div class="splide__slide">
					<div class="card card-style bg-14 mb-0" data-card-height="300">
						<div class="card-top p-2">
							<div class="d-flex">
								<div class="align-self-center">
									<span class="bg-white color-black px-3 py-2 rounded-m font-600 font-12">FiberNet</span>
								</div>
								<div class="align-self-center ms-auto">
									<a href="#" class="btn btn-xs bg-white color-black float-end rounded-sm text-uppercase font-700">Lihat</a>
								</div>
							</div>
						</div>
						<div class="card-bottom bg-white p-3">
							<div class="d-flex">
								<div class="align-self-center">
									<span class="font-11 d-block mb-n2 font-500 color-blue-dark">Tersambung Tanpa Batas</span>
									<h1 class="font-20 mb-0 font-700">Kecepatan Fiber Maksimal</h1>
								</div>
							</div>
							<p class="pt-1 mb-0">
								Hadapi Dunia Digital dengan Koneksi Fiber Tercepat, Tanpa Batas Waktu
							</p>
						</div>
						<div class="card-overlay bg-black opacity-40"></div>
					</div>
				</div>
				<div class="splide__slide">
					<div class="card card-style bg-21 mb-0" data-card-height="300">
						<div class="card-top p-2">
							<div class="d-flex">
								<div class="align-self-center">
									<span class="bg-white color-black px-3 py-2 rounded-m font-600 font-12">DediNet</span>
								</div>
								<div class="align-self-center ms-auto">
									<a href="#" class="btn btn-xs bg-white color-black float-end rounded-sm text-uppercase font-700">Lihat</a>
								</div>
							</div>
						</div>
						<div class="card-bottom bg-white p-3">
							<div class="d-flex">
								<div class="align-self-center">
									<span class="font-11 d-block mb-n2 font-500 color-red-dark">Internet Kualitas Premium</span>
									<h1 class="font-20 mb-0 font-700">Koneksi Internet Dedicated</h1>
								</div>
							</div>
							<p class="pt-1 mb-0">
								Koneksi Internet Eksklusif dengan DediNet, Tanpa Batasan dan Gangguan.
							</p>
						</div>
						<div class="card-overlay bg-black opacity-40"></div>
					</div>
				</div>
				<div class="splide__slide">
					<div class="card card-style bg-17 mb-0" data-card-height="300">
						<div class="card-top p-2">
							<div class="d-flex">
								<div class="align-self-center">
									<span class="bg-white color-black px-3 py-2 rounded-m font-600 font-12">PowerServe</span>
								</div>
								<div class="align-self-center ms-auto">
									<a href="#" class="btn btn-xs bg-white color-black float-end rounded-sm text-uppercase font-700">Lihat</a>
								</div>
							</div>
						</div>
						<div class="card-bottom bg-white p-3">
							<div class="d-flex">
								<div class="align-self-center">
									<span class="font-11 d-block mb-n2 font-500 color-yellow-dark">Kinerja Unggul, Terpercaya</span>
									<h1 class="font-20 mb-0 font-700">Solusi Server Optimal</h1>
								</div>
							</div>
							<p class="pt-1 mb-0">
								Performa Unggul, Keandalan Terbaik untuk Bisnis Anda.
							</p>
						</div>
						<div class="card-overlay bg-black opacity-40"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content mb-2 pt-3">
		<h5 class="float-start font-16 font-600">🔥 Artikel Terkini</h5>
		<a class="float-end font-12 color-highlight mt-n1" href="#">Semua</a>
		<div class="clearfix"></div>
	</div>

	<div class="card card-style mb-3 d-flex">

		<div class="d-flex py-3 ps-3 pe-4">
			<div class="align-self-center">
				<img src="<?= base_url(); ?>themplate/code/images/pictures/14t.jpg" width="70" class="rounded-m">
			</div>
			<div class="ps-2 ms-1 align-self-center w-100">
				<h5 class="font-600 mb-0">Berita 1</h5>
				<p class="mt-n1 font-11 mb-0">
					Get Certified in The art of fonts.
				</p>
				<div class="row mb-0">
					<div class="col-6">
						<span class="font-10 color-highlight">By Denada Via</span>
					</div>
					<div class="col-6 text-end">
						<span class="font-10 opacity-50">Selengkapnya</span>
					</div>
				</div>
			</div>
		</div>
		<div class="divider divider-margins mb-0"></div>
		<div class="d-flex py-3 ps-3 pe-4">
			<div class="align-self-center">
				<img src="<?= base_url(); ?>themplate/code/images/pictures/17t.jpg" width="70" class="rounded-m">
			</div>
			<div class="ps-2 ms-1 align-self-center w-100">
				<h5 class="font-600 mb-0">Berita 2</h5>
				<p class="mt-n1 font-11 mb-0">
					Data Structures and Algorithms.
				</p>
				<div class="row mb-0">
					<div class="col-6">
						<span class="font-10 color-highlight">By Rangga P</span>
					</div>
					<div class="col-6 text-end">
						<span class="font-10 opacity-50">Selengkapnya</span>
					</div>
				</div>
			</div>
		</div>
		<div class="divider divider-margins mb-0"></div>
		<div class="d-flex py-3 ps-3 pe-4">
			<div class="align-self-center">
				<img src="<?= base_url(); ?>themplate/code/images/pictures/20t.jpg" width="70" class="rounded-m">
			</div>
			<div class="ps-2 ms-1 align-self-center w-100">
				<h5 class="font-600 mb-0">Pengumuman 1</h5>
				<p class="mt-n1 font-11 mb-0">
					Search Engine Optimization Certificate.
				</p>
				<div class="row mb-0">
					<div class="col-6">
						<span class="font-10 color-highlight">By Vinna</span>
					</div>
					<div class="col-6 text-end">
						<span class="font-10 opacity-50">Selengkapnya</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav aria-label="pagination-demo">
		<ul class="pagination pagination- justify-content-center">
			<li class="page-item">
				<a class="page-link rounded-l line-height-s color-white bg-gray-dark shadow-xl border-0" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-angle-left"></i></a>
			</li>
			<li class="page-item"><a class="page-link rounded-l line-height-s bg-red-dark shadow-xl border-0" href="#">1</a></li>
			<li class="page-item"><a class="page-link rounded-l line-height-s bg-green-dark bg-transparent shadow-xl border-0" href="#">2</a></li>
			<li class="page-item"><a class="page-link rounded-l line-height-s bg-blue-dark shadow-xl border-0" href="#">3</a></li>
			<li class="page-item"><a class="page-link rounded-l line-height-s bg-yellow-dark bg-transparent shadow-xl border-0" href="#">4</a></li>
			<li class="page-item"><a class="page-link rounded-l line-height-s bg-red-dark shadow-xl border-0" href="#">5</a></li>
			<li class="page-item">
				<a class="page-link rounded-l line-height-s color-white bg-gray-dark shadow-xl border-0" href="#"><i class="fa fa-angle-right"></i></a>
			</li>
		</ul>
	</nav>




	<div class="card preload-img" data-src="<?php base_url(); ?>themplate/code/images/pictures/20s.jpg">
		<div class="card-body pt-4 mt-3 ">
			<h2 class="font-24 color-white line-height-l">4 Program, <br>Keahlian</h2>
			<p class="color-white opacity-70">
				Temukan jurusan favoritmu dan capai kesuksesan bersama kami!
			</p>

			<a href="#" class="card card-style mb-3 mx-0" id="accordion-1">
				<div class="d-flex pt-3 pb-3" data-bs-toggle="collapse" data-bs-target="#collapse1">
					<div class="ps-3 ms-2 align-self-center">
						<h1 class="center-text mb-0 pt-2">
							01
						</h1>
					</div>
					<div class="align-self-center mt-1 ps-4">
						<h4 class="color-theme font-600">Teknik Komputer dan Jaringan</h4>
					</div>
					<div class="ms-auto align-self-center me-3">
						<i class="fa fa-chevron-down font-10 accordion-icon"></i>
					</div>
				</div>
			</a>
			<div class="card card-style collapse bg-theme" id="collapse1" data-bs-parent="#accordion-1">
				<div class="card-body">
					<p class="mb-1">
						Teknik Komputer dan Jaringan: Merancang dan mengelola sistem komputer dan jaringan, mengoptimalkan kinerja serta keamanannya. Peluang karier menjanjikan di era digital.
						Jelajahi dunia digital, raih kesempatan karier terbaik! Bergabunglah dengan kami dan menjadi pakar teknologi masa depan.
					</p>
				</div>
			</div>

			<a href="#" class="card card-style mb-3 mx-0" id="accordion-2">
				<div class="d-flex pt-3 pb-3" data-bs-toggle="collapse" data-bs-target="#collapse2">
					<div class="ps-3 ms-2 align-self-center">
						<h1 class="center-text mb-0 pt-2">
							02
						</h1>
					</div>
					<div class="align-self-center mt-1 ps-4">
						<h4 class="color-theme font-600">Teknik Kendaraan Ringan Otomotif</h4>
					</div>
					<div class="ms-auto align-self-center me-3">
						<i class="fa fa-chevron-down font-10 accordion-icon"></i>
					</div>
				</div>
			</a>
			<div class="card card-style collapse bg-theme" id="collapse2" data-bs-parent="#accordion-2">
				<div class="card-body">
					<p class="mb-1">

						Teknik Kendaraan Ringan Otomotif: Menguasai perawatan, perbaikan, dan diagnosis kendaraan bermotor. Menjadi ahli otomotif dengan teknologi terkini.<br>
						Buka pintu menuju passion otomotif! Dapatkan keterampilan yang dibutuhkan industri, dan jadilah ahli perbaikan kendaraan favorit.
					</p>
				</div>
			</div>

			<a href="#" class="card card-style mb-3 mx-0" id="accordion-3">
				<div class="d-flex pt-3 pb-3" data-bs-toggle="collapse" data-bs-target="#collapse3">
					<div class="ps-3 ms-2 align-self-center">
						<h1 class="center-text mb-0 pt-2">
							03
						</h1>
					</div>
					<div class="align-self-center mt-1 ps-4">
						<h4 class="color-theme font-600">Nautika Kapal Penangkap Ikan</h4>
					</div>
					<div class="ms-auto align-self-center me-3">
						<i class="fa fa-chevron-down font-10 accordion-icon"></i>
					</div>
				</div>
			</a>
			<div class="card card-style collapse bg-theme" id="collapse3" data-bs-parent="#accordion-3">
				<div class="card-body">
					<p class="mb-1">
						Nautika Kapal Penangkap Ikan: Mengemban peran penting sebagai nakhoda, mengelola navigasi dan operasi kapal penangkap ikan. Menjadi bagian vital dalam industri perikanan.<br>
						Petualangan di lautan menanti! Bergabunglah dengan nakhoda kapal penangkap ikan kami, raih pengalaman tak terlupakan di laut lepas.
					</p>
				</div>
			</div>

			<a href="#" class="card card-style mb-3 mx-0" id="accordion-4">
				<div class="d-flex pt-3 pb-3" data-bs-toggle="collapse" data-bs-target="#collapse4">
					<div class="ps-3 ms-2 align-self-center">
						<h1 class="center-text mb-0 pt-2">
							04
						</h1>
					</div>
					<div class="align-self-center mt-1 ps-4">
						<h4 class="color-theme font-600">Agribisnis Perikanan Air Tawar</h4>
					</div>
					<div class="ms-auto align-self-center me-3">
						<i class="fa fa-chevron-down font-10 accordion-icon"></i>
					</div>
				</div>
			</a>
			<div class="card card-style collapse bg-theme" id="collapse4" data-bs-parent="#accordion-4">
				<div class="card-body">
					<p class="mb-1">
						Agribisnis Perikanan Air Tawar: Menggabungkan keahlian pertanian dan manajemen untuk mengelola usaha perikanan air tawar. Kontribusi dalam ketahanan pangan dan kesejahteraan petani ikan.<br>
						Suara ikan berbisik, bisnis menguntungkan! Sambut peluang baru di bidang agribisnis perikanan air tawar, dan raih kesuksesan bersama kami.
					</p>
				</div>
			</div>

		</div>
		<div class="card-overlay bg-highlight opacity-90"></div>
		<div class="card-overlay dark-mode-tint"></div>
	</div>


	<div class="content mb-0 pt-3">
		<h5 class="float-start font-16 font-600">✌🏻 Kategori</h5>
		<a class="float-end font-12 color-highlight mt-n1" href="#">Semua</a>
		<div class="clearfix"></div>

		<div class="row text-center mb-0">

			<a href="#" class="col-6 pe-2">
				<div class="card card-style me-0 pt-2 mb-3">
					<h1 class="center-text pt-3">
						<i class="fa fa-solid fa-building fa-xl color-blue-dark"></i>
					</h1>
					<h4 class="color-theme font-600">Profil Sekolah</h4>
					<p class="mt-n2 font-11 color-highlight mb-2">
						Discover Excellence
					</p>
					<p class="font-10 opacity-30 mb-1">Cek Detailnya</p>
				</div>
			</a>

			<a href="#" class="col-6 ps-2">
				<div class="card card-style ms-0 pt-2 mb-3">
					<h1 class="center-text pt-3">
						<i class="fa fa-solid fa-graduation-cap fa-xl color-green-dark"></i>
					</h1>
					<h4 class="color-theme font-600">Program Studi</h4>
					<p class="mt-n2 font-11 color-highlight mb-2">
						Future Focus
					</p>
					<p class="font-10 opacity-30 mb-1">Cek Detailnya</p>
				</div>
			</a>

			<a href="#" class="col-6 pe-2">
				<div class="card card-style me-0  pt-2 mb-3">
					<h1 class="center-text pt-3">
						<i class="fa fa-solid fa-shield fa-xl color-red-dark"></i>
					</h1>
					<h4 class="color-theme font-600">Ekstrakurikuler</h4>
					<p class="mt-n2 font-11 color-highlight mb-2">
						Passion Pursuit
					</p>
					<p class="font-10 opacity-30 mb-1">Cek Detailnya</p>
				</div>
			</a>

			<a href="#" class="col-6 ps-2">
				<div class="card card-style ms-0  pt-2 mb-3">
					<h1 class="center-text pt-3">
						<i class="fa fa-solid fa-shield fa-xl color-yellow-dark"></i>
					</h1>
					<h4 class="color-theme font-600">Fasilitas</h4>
					<p class="mt-n2 font-11 color-highlight mb-2">
						Premium Comfort
					</p>
					<p class="font-10 opacity-30 mb-1">Cek Detailnya</p>
				</div>
			</a>

		</div>
	</div>

	<div class="col-12 ">
		<a href="#" data-card-height="100" class="card card-style mb-1 mx-0">
			<div class="card-center ps-2 ms-2">
				<i class="fa fa-seedling color-green-dark font-40 pe-3 ps-2"></i>
			</div>
			<div class="card-center ps-4 ms-5">
				<h4 class="ps-2 font-20">Tenaga Ahli</h4>
				<p class="ps-2 mt-n1 font-12 color-highlight mb-0">Belajar dari para ahli, raih kesuksesan.</p>
			</div>
			<div class="card-center opacity-30">
				<i class="fa fa-arrow-right opacity-50 float-end color-theme pe-3"></i>
			</div>
		</a>
	</div>

	<div class="content mb-0 mt-0 pt-3">
		<div class="row text-center mb-0">
			<div class="col-4">
				<a href="#" data-card-height="125" class="card card-style mb-4 mx-0">
					<div class="card-center text-center">
						<i class="fa fa-solid fa-book fa-xl color-mint-dark"></i>
						<h6 class="pt-2">Kurikulum</h6>
						<span class="font-10 opacity-30 color-theme pt-2 d-block">Cek Detailnya</span>
					</div>
				</a>
			</div>

			<div class="col-4">
				<a href="#" data-card-height="125" class="card card-style mb-4 mx-0">
					<div class="card-center text-center">
						<i class="fa fa-solid fa-trophy fa-xl color-pink2-dark"></i>
						<h5 class="pt-2">Prestasi</h5>
						<span class="font-10 opacity-30 color-theme pt-2 d-block">Cek Detailnya</span>
					</div>
				</a>
			</div>

			<div class="col-4">
				<a href="#" data-card-height="125" class="card card-style mb-4 mx-0">
					<div class="card-center text-center">
						<i class="fa fa-solid fa-camera-retro fa-xl color-orange-dark"></i>
						<h5 class="pt-2">Galeri</h5>
						<span class="font-10 opacity-30 color-theme pt-2 d-block">Cek Detailnya</span>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="mt-4"></div>

	<div class="divider divider-small mt-3 mb-3 bg-highlight"></div>
	<div class="card card-style text-center">
		<div class="content pb-2">
			<h1>
				<i data-feather="award" data-feather-line="1" data-feather-size="55" data-feather-color="yellow-dark" data-feather-bg="yellow-fade-light">
				</i>
			</h1>
			<h3 class="font-700 mt-2">Wujudkan Masa Depanmu!</h3>
			<p class="font-12 mt-n1 color-highlight mb-3">Ayo Raih Impianmu Bersama Kami</p>
			<p class="boxed-text-xl">
				Bergabunglah dan Raih Prestasi yang Gemilang di Sekolah Menengah Kejuruan Negeri 1 Tanjung Jabung Timur!
			</p>
			<a href="#" class="btn btn-center-xl btn-m text-uppercase font-900 bg-highlight rounded-sm shadow-l">Daftar Sekarang</a>
		</div>
	</div>
	<!-- footer and footer card-->
	<?= $this->include('default/themplate/menu-footer') ?>
</div>
<!-- end of page content-->

<?= $this->include('default/themplate/menu-share') ?>
<?= $this->include('default/themplate/menu-color') ?>
<?= $this->include('default/themplate/menu-main') ?>
<?= $this->include('default/themplate/menu-install-android') ?>
<?= $this->include('default/themplate/menu-install-ios') ?>

<?= $this->endSection() ?>