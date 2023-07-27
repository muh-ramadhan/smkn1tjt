<?= $this->extend('fv_superadmin/themplate/layout2') ?>
<?= $this->section('content') ?>
<?= $this->include('fv_superadmin/themplate/header') ?>
<?= $this->include('fv_superadmin/themplate/footer-bar') ?>

<div class="page-content">
    
	<div class="page-title page-title-large">
		<h2 data-username="Word!" class="greeting-text"></h2>
		<a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="<?= base_url(); ?>themplate/code/images/avatars/5s.png"></a>
	</div>
	<div class="card header-card shape-rounded" data-card-height="250">
		<div class="card-overlay bg-highlight opacity-95"></div>
		<div class="card-overlay dark-mode-tint"></div>
		<div class="card-bg preload-img" data-src="themplate/code/images/pictures/20s.jpg"></div>
	</div>

    <div class="content mb-0">
            <div class="row mb-0">
                <div class="col-12">
                    <a href="<?= base_url('Superadmin/Pengguna'); ?>" data-card-height="120" class="card card-style mb-4 mx-0">
                        <div class="card-center ps-2 ms-2">
                            <i class="fa fa-mobile-alt font-40 ps-3"></i>
                        </div>
                        <div class="card-center ps-4 ms-5">
                            <h4 class="ps-2">Pengguna</h4>
                            <p class="ps-2 mt-n2 font-12 color-highlight mb-0">Management Pengguna </p>
                        </div>
                        <div class="card-center opacity-30">
                            <i class="fa fa-arrow-right opacity-50 float-end color-theme pe-3"></i>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="#" data-card-height="125" class="card card-style mb-4 mx-0">
                        <div class="card-center text-center">
                            <i class="fa fa-laptop font-30 pt-3 color-red-dark"></i>
                            <h5 class="pt-2">Slider</h5>
                            <span class="font-10 opacity-30 color-theme pt-2 d-block">Tap to View</span>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="#" data-card-height="125" class="card card-style mb-4 mx-0">
                        <div class="card-center text-center">
                            <i class="fa fa-desktop font-30 pt-3 color-green-dark"></i>
                            <h5 class="pt-2">Artikel</h5>
                            <span class="font-10 opacity-30 color-theme pt-2 d-block">Tap to View</span>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="#" data-card-height="125" class="card card-style mb-4 mx-0">
                        <div class="card-center text-center">
                            <i class="fa fa-tablet-alt font-30 pt-3 color-magenta-dark"></i>
                            <h5 class="pt-2">Statis</h5>
                            <span class="font-10 opacity-30 color-theme pt-2 d-block">Tap to View</span>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="#" data-card-height="125" class="card card-style mb-4 mx-0">
                        <div class="card-center text-center">
                            <i class="fa fa-tv font-30 pt-3 color-orange-dark"></i>
                            <h5 class="pt-2">4k TV's</h5>
                            <span class="font-10 opacity-30 color-theme pt-2 d-block">Tap to View</span>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#" data-card-height="125" class="card card-style mb-4 mx-0">
                        <div class="card-center text-center">
                            <i class="fa fa-credit-card pt-3 font-30 color-gray-dark"></i>
                            <h6 class="pt-2">Cards</h6>
                            <span class="font-10 opacity-30 color-theme pt-2 d-block">Tap to View</span>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#" data-card-height="125" class="card card-style mb-4 mx-0">
                        <div class="card-center text-center">
                            <i class="fa fa-cog font-30 pt-3 color-blue-dark"></i>
                            <h5 class="pt-2">Service</h5>
                            <span class="font-10 opacity-30 color-theme pt-2 d-block">Tap to View</span>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="#" data-card-height="125" class="card card-style mb-4 mx-0">
                        <div class="card-center text-center">
                            <i class="fab fa-usb font-30 pt-3 color-dark-dark"></i>
                            <h5 class="pt-2">Storage</h5>
                            <span class="font-10 opacity-30 color-theme pt-2 d-block">Tap to View</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>


	<!-- footer and footer card-->
	
    <?= $this->include('fv_superadmin/themplate/menu-footer') ?>
</div>
<!-- end of page content-->

<?= $this->include('fv_superadmin/themplate/menu-share') ?>
<?= $this->include('fv_superadmin/themplate/menu-color') ?>
<?= $this->include('fv_superadmin/themplate/menu-main') ?>

<?= $this->endSection() ?>