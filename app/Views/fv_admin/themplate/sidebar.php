<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

    <!-- Navbar brand for xl START -->
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="index.html">
            <img class="navbar-brand-item" src="<?= base_url(); ?>assets/images/logo-light.png" alt="">
        </a>
    </div>
    <!-- Navbar brand for xl END -->

    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

            <!-- Sidebar menu START -->
            <ul class="navbar-nav flex-column" id="navbar-sidebar">

                <!-- Menu item 1 -->
                <li class="nav-item"><a href="<?= base_url(); ?>Admin" class="nav-link active"><i class="bi bi-house fa-fw me-2"></i>Dashboard</a></li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Headline News and Blogs</li>

                <!-- menu item 2 -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsepage" role="button" aria-expanded="false" aria-controls="collapsepage">
                        <i class="bi bi-basket fa-fw me-2"></i>News and Blogs
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column show" id="collapsepage" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/NewsAndBlog">Semua</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/KategoriNewsAndBlog">Kategori</a></li>
                    </ul>
                </li>

                <!-- Menu item 7 -->
                <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/Siswa"><i class="fas fa-user-graduate fa-fw me-2"></i>Taruna/i</a></li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Halaman Statis</li>

                <!-- menu item 2 -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsepage1" role="button" aria-expanded="false" aria-controls="collapsepage">
                        <i class="bi bi-basket fa-fw me-2"></i>Halaman Statis
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsepage1" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/NewsAndBlog">Beranda</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/KategoriNewsAndBlog">Kategori</a></li>
                    </ul>
                </li>

                <!-- Menu item 7 -->
                <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>Admin/Pengaturan"><i class="fas fa-user-cog fa-fw me-2"></i>Pengaturan</a></li>

                <!-- Sidebar footer START -->
                <div class="px-3 mt-auto pt-3">
                    <div class="d-flex align-items-center justify-content-between text-primary-hover">
                        <a class="h5 mb-0 text-body" href="<?= base_url(); ?>Admin/Pengaturan" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
                            <i class="bi bi-gear-fill"></i>
                        </a>
                        <a class="h5 mb-0 text-body" href="<?= base_url(); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Home">
                            <i class="bi bi-globe"></i>
                        </a>
                        <a class="h5 mb-0 text-body" href="<?= base_url(); ?>Logout" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout">
                            <i class="bi bi-power"></i>
                        </a>
                    </div>
                </div>
                <!-- Sidebar footer END -->
        </div>
    </div>
</nav>