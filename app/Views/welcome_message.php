<?= $this->extend('default/themplate/layout') ?>
<?= $this->section('content') ?>
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


	<div class="content mb-2 pt-3">
		<h5 class="float-start font-16 font-600">✌🏻 Kategori</h5>
		<a class="float-end font-12 color-highlight mt-n1" href="#">Semua</a>
		<div class="clearfix"></div>


		<div class="row text-center mb-3">

			<a href="#" class="col-6 pe-2">
				<div class="card card-style me-0 pt-2 mb-3">
					<h1 class="center-text pt-3">
						<i class="fa fa-solid fa-building fa-xl color-blue-dark"></i>
					</h1>
					<h4 class="color-theme font-600">Profil Sekolah</h4>
					<p class="mt-n2 font-11 color-highlight mb-2">
						Beragam Pilihan
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
						Panduan Lengkap
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
						Peta Pengembangan
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
						Cek Kondisi Server
					</p>
					<p class="font-10 opacity-30 mb-1">Cek Detailnya</p>
				</div>
			</a>

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
	</div>
	<!-- footer and footer card-->

	<?= $this->include('default/themplate/menu-footer') ?>
</div>
<!-- end of page content-->

<?= $this->endSection() ?>