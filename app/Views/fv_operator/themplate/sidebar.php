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
                    <a href="<?= base_url('operator'); ?>" class="nav-link">
                        <i class="bi bi-house fa-fw me-2"></i>Beranda
                    </a>
                </li>

                <div class="px-3 mt-auto pt-3">
                    <div class="d-flex align-items-center justify-content-between text-primary-hover">
                        <a class="h5 mb-0 text-body" href="<?= base_url(); ?>operator/pengaturan-web" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
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