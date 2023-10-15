<header class="navbar-light navbar-sticky">
    <nav class="navbar navbar-expand-xl z-index-9">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                <img class="light-mode-item navbar-brand-item" src="<?= base_url(); ?>assets/images/logo.png" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="<?= base_url(); ?>assets/images/logo-light.png" alt="logo">
            </a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url(); ?>"><i class="bi bi-house me-2"></i>Home</a>
                    </li>

                    <?php foreach ($dynamicMenus1 as $menu1) : ?>
                        <?php if ($menu1['status_menu_dinamis'] == 1) : ?>
                            <?php $kolom_menu_dinamis = $menu1['kolom_menu_dinamis']; ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="pagesMenu<?= esc($menu1['id_menu_dinamis']); ?>" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-<?= esc($menu1['icon_menu_dinamis']); ?> me-2"></i><?= esc($menu1['nama_menu_dinamis']); ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="pagesMenu<?= esc($menu1['id_menu_dinamis']); ?>">
                                    <?php foreach ($dynamicMenus2 as $menu2) : ?>
                                        <?php if ($menu2['id_menu_dinamis'] == $menu1['id_menu_dinamis']) : ?>
                                            <?php if ($hasSubMenuLevel3($menu2['id_sub_menu_dinamis'])) : ?>
                                                <li class="dropdown-submenu dropend">
                                                    <a class="dropdown-item dropdown-toggle" href="<?= esc($menu2['url_sub_menu_dinamis']); ?>">
                                                        <?= esc($menu2['nama_sub_menu_dinamis']); ?>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                                        <?php foreach ($dynamicMenus3 as $menu3) : ?>
                                                            <?php if ($menu3['id_sub_menu_dinamis'] == $menu2['id_sub_menu_dinamis']) : ?>
                                                                <li>
                                                                    <a class="dropdown-item" href="<?= base_url($menu3['url_sub_sub_menu_dinamis']); ?>">
                                                                        <?= esc($menu3['nama_sub_sub_menu_dinamis']); ?>
                                                                    </a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                            <?php else : ?>
                                                <li>
                                                    <a class="dropdown-item" href="<?= base_url($menu2['url_sub_menu_dinamis']); ?>">
                                                        <?= esc($menu2['nama_sub_menu_dinamis']); ?>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>home/hubungi-kami"><i class="bi bi-headset me-2"></i>Hubungi Kami</a></li>
                </ul>
            </div>

            <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">
                <?php if (session()->get('level') != "") : ?>
                    <li class="nav-item ms-2 ms-sm-3 dropdown d-none d-sm-block">
                        <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="bi bi-bell fa-fw"></i>
                        </a>
                        <span class="notif-badge animation-blink"></span>

                        <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                            <div class="card bg-transparent">
                                <div class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>
                                    <a class="small" href="#">Clear all</a>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-unstyled list-group-flush">
                                        <li>
                                            <a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                <div class="me-3">
                                                    <div class="avatar avatar-md">
                                                        <img class="avatar-img rounded-circle" src="<?= base_url(); ?>assets/images/avatar/03.jpg" alt="avatar">
                                                    </div>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1">Update v2.3 completed successfully</h6>
                                                    <p class="small text-body m-0">What's new! Find out about new features</p>
                                                    <small class="text-body">5 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                    <a href="#" class="stretched-link">See all incoming activity</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item ms-3 dropdown">
                        <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="avatar-img rounded-circle" src="<?= base_url(); ?>assets/images/avatar/01.jpg" alt="avatar">
                        </a>

                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                            <li class="px-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-3">
                                        <img class="avatar-img rounded-circle shadow" src="<?= base_url(); ?>assets/images/avatar/01.jpg" alt="avatar">
                                    </div>
                                    <div>
                                        <a class="h6" href="#"><?= esc(session('nama_lengkap')); ?></a>
                                        <p class="small m-0"><?= esc(session('username')); ?></p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <?php
                            $levels = [
                                '1' => 'superadmin',
                                '2' => 'admin',
                                '3' => 'operator',
                                '4' => 'guru',
                                '5' => 'siswa',
                            ];

                            $userLevel = session()->get('level');

                            if (isset($levels[$userLevel])) :
                            ?>
                                <li>
                                    <a class="dropdown-item" href="<?= base_url($levels[$userLevel]); ?>">
                                        <i class="bi bi-person fa-fw me-2"></i>Beranda
                                    </a>
                                </li>
                            <?php endif; ?>

                            <li>
                                <a class="dropdown-item bg-danger-soft-hover" href="<?= base_url(); ?>logout">
                                    <i class="bi bi-power fa-fw me-2"></i>Logout
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <div class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                    <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                            <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                            <use href="#"></use>
                                        </svg> Light
                                    </button>
                                    <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
                                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                                            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                                            <use href="#"></use>
                                        </svg> Dark
                                    </button>
                                    <button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                            <use href="#"></use>
                                        </svg> Auto
                                    </button>
                                </div>
                            </li>

                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (session()->get('level') == "") : ?>
                    <li>
                        <div class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                            <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    <use href="#"></use>
                                </svg>
                            </button>

                            <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
                                    <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                                    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                                    <use href="#"></use>
                                </svg>
                            </button>

                            <button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                    <use href="#"></use>
                                </svg>
                            </button>
                        </div>
                    </li>
                    <li class="nav-item ms-2 d-none d-md-block">
                        <a href="<?= base_url('login'); ?>" class="btn btn-sm btn-dark mb-0">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>