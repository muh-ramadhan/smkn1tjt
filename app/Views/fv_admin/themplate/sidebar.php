<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="<?= base_url(); ?>">
            <img class="navbar-brand-item" src="<?= base_url(); ?>assets/images/logo-light.png" alt="">
        </a>
    </div>

    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

            <ul class="navbar-nav flex-column" id="navbar-sidebar">

                <li class="nav-item">
                    <a href="<?= base_url('admin'); ?>" class="nav-link">
                        <i class="bi bi-house fa-fw me-2"></i>Beranda
                    </a>
                </li>

                <li class="nav-item ms-2 my-2">News and Blogs</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsenewsandblog" role="button" aria-expanded="false" aria-controls="collapsenewsandblog">
                        <i class="bi bi-basket fa-fw me-2"></i>News and Blogs
                    </a>
                    <ul class="nav collapse flex-column" id="collapsenewsandblog" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>admin/semua-news-and-blog">Semua</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>admin/semua-kategori-news-and-blog">Kategori</a></li>
                    </ul>
                </li>

                <li class="nav-item ms-2 my-2">Manajemen Sekolah</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseinstructors" role="button" aria-expanded="false" aria-controls="collapseinstructors">
                        <i class="fas fa-user-tie fa-fw me-2"></i>Taruna/Taruni
                    </a>
                    <ul class="nav collapse flex-column" id="collapseinstructors" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>admin/semua-taruna-taruni">Semua</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>admin/">TKJ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>admin/">TKRO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>admin/">NKPI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>admin/">APAT</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>admin/kelas">
                        <i class="fas fa-user-cog fa-fw me-2"></i>Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>admin/jurusan">
                        <i class="fas fa-user-cog fa-fw me-2"></i>Jurusan</a>
                </li>
                

                <li class="nav-item ms-2 my-2">Manajemen Website</li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>Admin/Pengaturan">
                        <i class="fas fa-user-cog fa-fw me-2"></i>Pengaturan</a>
                </li>

                <div class="px-3 mt-auto pt-3">
                    <div class="d-flex align-items-center justify-content-between text-primary-hover">
                        <a class="h5 mb-0 text-body" href="<?= base_url(); ?>admin/pengaturan-web" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
                            <i class="bi bi-gear-fill"></i>
                        </a>
                        <a class="h5 mb-0 text-body" href="<?= base_url(); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Home">
                            <i class="bi bi-globe"></i>
                        </a>
                        <a class="h5 mb-0 text-body" href="<?= base_url(); ?>logout" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout/Keluar">
                            <i class="bi bi-power"></i>
                        </a>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>