<header class="navbar-light navbar-sticky">
    <nav class="navbar navbar-expand-xl z-index-9">
        <div class="container">

            <a class="navbar-brand" href="index.html">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-house me-2"></i>Beranda</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">
                            <li> <a class="dropdown-item" href="index.html">Home Default</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-journals me-2"></i>Pages</a>
                        <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Course</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="course-categories.html">Course Categories</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li> <a class="dropdown-item" href="course-grid.html">Course Grid Classic</a></li>
                                    <li> <a class="dropdown-item" href="course-grid-2.html">Course Grid Minimal</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li> <a class="dropdown-item" href="course-list.html">Course List Classic</a></li>
                                    <li> <a class="dropdown-item" href="course-list-2.html">Course List Minimal</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li> <a class="dropdown-item" href="course-detail.html">Course Detail Classic</a></li>
                                    <li> <a class="dropdown-item" href="course-detail-min.html">Course Detail Minimal</a></li>
                                    <li> <a class="dropdown-item" href="course-detail-adv.html">Course Detail Advance</a></li>
                                    <li> <a class="dropdown-item" href="course-detail-module.html">Course Detail Module</a></li>
                                    <li> <a class="dropdown-item" href="course-video-player.html">Course Full Screen Video</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">About</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="about.html">About Us</a></li>
                                    <li> <a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                                    <li> <a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                                    <li> <a class="dropdown-item" href="blog-masonry.html">Blog Masonry</a></li>
                                    <li> <a class="dropdown-item" href="blog-detail.html">Blog Detail</a></li>
                                    <li> <a class="dropdown-item" href="pricing.html">Pricing</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Hero Banner</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="docs/snippet-hero-12.html">Hero Form</a></li>
                                    <li> <a class="dropdown-item" href="docs/snippet-hero-13.html">Hero Vector</a></li>
                                    <li>
                                        <p class="dropdown-item mb-0">Coming soon....</p>
                                    </li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="instructor-list.html">Instructor List</a></li>
                            <li> <a class="dropdown-item" href="instructor-single.html">Instructor Single</a></li>
                            <li> <a class="dropdown-item" href="become-instructor.html">Become an Instructor</a></li>
                            <li> <a class="dropdown-item" href="abroad-single.html">Abroad Single</a></li>
                            <li> <a class="dropdown-item" href="workshop-detail.html">Workshop Detail</a></li>
                            <li> <a class="dropdown-item" href="event-detail.html">Event Detail <span class="badge bg-success ms-2 smaller">New</span></a></li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Shop</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="shop.html">Shop grid</a></li>
                                    <li> <a class="dropdown-item" href="shop-product-detail.html">Product detail</a></li>
                                    <li> <a class="dropdown-item" href="cart.html">Cart</a></li>
                                    <li> <a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li> <a class="dropdown-item" href="empty-cart.html">Empty Cart</a></li>
                                    <li> <a class="dropdown-item" href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Help</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="help-center.html">Help Center</a></li>
                                    <li> <a class="dropdown-item" href="help-center-detail.html">Help Center Single</a></li>
                                    <li> <a class="dropdown-item" href="faq.html">FAQs</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="sign-in.html">Sign In</a></li>
                                    <li> <a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
                                    <li> <a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Form</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="request-demo.html">Request a demo</a></li>
                                    <li> <a class="dropdown-item" href="book-class.html">Book a Class</a></li>
                                    <li> <a class="dropdown-item" href="request-access.html">Free Access</a></li>
                                    <li> <a class="dropdown-item" href="university-admission-form.html">Admission Form</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Specialty</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="error-404.html">Error 404</a></li>
                                    <li> <a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Nav item 3 Account -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-speedometer2 me-2"></i>Accounts</a>
                        <ul class="dropdown-menu" aria-labelledby="accounntMenu">
                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#"><i class="fas fa-user-tie fa-fw me-1"></i>Instructor</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="instructor-dashboard.html"><i class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-manage-course.html"><i class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-create-course.html"><i class="bi bi-file-earmark-plus-fill fa-fw me-1"></i>Create Course</a> </li>
                                    <li> <a class="dropdown-item" href="course-added.html"><i class="bi bi-file-check-fill fa-fw me-1"></i>Course Added</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-quiz.html"><i class="bi bi-question-diamond fa-fw me-1"></i>Quiz</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-earning.html"><i class="fas fa-chart-line fa-fw me-1"></i>Earnings</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-studentlist.html"><i class="fas fa-user-graduate fa-fw me-1"></i>Students</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-order.html"><i class="bi bi-cart-check-fill fa-fw me-1"></i>Orders</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-review.html"><i class="bi bi-star-fill fa-fw me-1"></i>Reviews</a> </li>
                                    <li> <a class="dropdown-item" href="instructor-payout.html"><i class="fas fa-wallet fa-fw me-1"></i>Payout</a> </li>
                                </ul>
                            </li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#"><i class="fas fa-user-graduate fa-fw me-1"></i>Student</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="student-dashboard.html"><i class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
                                    <li> <a class="dropdown-item" href="student-subscription.html"><i class="bi bi-card-checklist fa-fw me-1"></i>My Subscriptions</a> </li>
                                    <li> <a class="dropdown-item" href="student-course-list.html"><i class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
                                    <li> <a class="dropdown-item" href="student-course-resume.html"><i class="far fa-fw fa-file-alt me-1"></i>Course Resume</a> </li>
                                    <li> <a class="dropdown-item" href="student-quiz.html"><i class="bi bi-question-diamond fa-fw me-1"></i>Quiz </a> </li>
                                    <li> <a class="dropdown-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front-fill fa-fw me-1"></i>Payment Info</a> </li>
                                    <li> <a class="dropdown-item" href="student-bookmark.html"><i class="fas bi-cart-check-fill fa-fw me-1"></i>Wishlist</a> </li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="admin-dashboard.html"><i class="fas fa-user-cog fa-fw me-1"></i>Admin</a> </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a class="dropdown-item" href="instructor-edit-profile.html"><i class="fas fa-fw fa-edit me-1"></i>Edit Profile</a> </li>
                            <li> <a class="dropdown-item" href="instructor-setting.html"><i class="fas fa-fw fa-cog me-1"></i>Settings</a> </li>
                            <li> <a class="dropdown-item" href="instructor-delete-account.html"><i class="fas fa-fw fa-trash-alt me-1"></i>Delete Profile</a> </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- Dropdown Level -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">

                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>

                                    <!-- dropdown submenu open left -->
                                    <li class="dropdown-submenu dropstart">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
                                        <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-headset me-2"></i>Contact</a></li>
                </ul>
            </div>

            <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">
                <?php if (session()->get('level') != "") : ?>
                    <!-- Add to cart START -->
                    <li class="nav-item ms-2 dropdown ">
                        <!-- Cart button -->
                        <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="bi bi-cart3 fa-fw"></i>
                        </a>
                        <!-- badge -->
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-dark mt-xl-2 ms-n1">2
                            <span class="visually-hidden">unread messages</span>
                        </span>

                        <!-- Cart dropdown menu START -->
                        <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                            <div class="card bg-transparent">
                                <div class="card-header bg-transparent border-bottom py-4">
                                    <h5 class="m-0">Cart items</h5>
                                </div>
                                <div class="card-body p-0">

                                    <!-- Cart item START -->
                                    <div class="row p-3 g-2">
                                        <!-- Image -->
                                        <div class="col-3">
                                            <img class="rounded-2" src="<?=base_url();?>assets/images/book/02.jpg" alt="avatar">
                                        </div>

                                        <div class="col-9">
                                            <!-- Title -->
                                            <div class="d-flex justify-content-between">
                                                <h6 class="m-0">Angular 4 Tutorial in audio (Compact Disk)</h6>
                                                <a href="#" class="small text-primary-hover"><i class="bi bi-x-lg"></i></a>
                                            </div>
                                            <!-- Select item -->
                                            <form class="choices-sm pt-2 col-4">
                                                <select class="form-select js-choice border-0 bg-transparent" data-search-enabled="false">
                                                    <option>1</option>
                                                    <option selected>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Cart item END -->

                                    <!-- Divider -->
                                    <hr class="m-0">

                                    <!-- Cart item START -->
                                    <div class="row p-3 g-2">
                                        <!-- Image -->
                                        <div class="col-3">
                                            <img class="rounded-2" src="<?=base_url();?>assets/images/book/04.jpg" alt="avatar">
                                        </div>

                                        <div class="col-9">
                                            <!-- Title -->
                                            <div class="d-flex justify-content-between">
                                                <h6 class="m-0">The Principles of Beautiful Graphics Design (Paperback)</h6>
                                                <a href="#" class="small text-primary-hover"><i class="bi bi-x-lg"></i></a>
                                            </div>
                                            <!-- Select item -->
                                            <form class="choices-sm pt-2 col-4">
                                                <select class="form-select js-choice border-0 bg-transparent" data-search-enabled="false">
                                                    <option selected>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Cart item END -->

                                </div>
                                <!-- Button -->
                                <div class="card-footer bg-transparent border-top py-3 text-center d-flex justify-content-between position-relative">
                                    <a href="#" class="btn btn-sm btn-light mb-0">View Cart</a>
                                    <a href="#" class="btn btn-sm btn-success mb-0">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!-- Cart dropdown menu END -->
                    </li>
                    <!-- Add to cart END -->

                    <!-- Notification dropdown START -->
                    <li class="nav-item ms-2 ms-sm-3 dropdown d-none d-sm-block">
                        <!-- Notification button -->
                        <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="bi bi-bell fa-fw"></i>
                        </a>
                        <!-- Notification dote -->
                        <span class="notif-badge animation-blink"></span>

                        <!-- Notification dropdown menu START -->
                        <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                            <div class="card bg-transparent">
                                <div class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>
                                    <a class="small" href="#">Clear all</a>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-unstyled list-group-flush">
                                        <!-- Notif item -->
                                        <li>
                                            <a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                <div class="me-3">
                                                    <div class="avatar avatar-md">
                                                        <img class="avatar-img rounded-circle" src="<?=base_url();?>assets/images/avatar/03.jpg" alt="avatar">
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
                                <!-- Button -->
                                <div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                    <a href="#" class="stretched-link">See all incoming activity</a>
                                </div>
                            </div>
                        </div>
                        <!-- Notification dropdown menu END -->
                    </li>
                    <!-- Notification dropdown END -->

                    <!-- Profile dropdown START -->
                    <li class="nav-item ms-3 dropdown">
                        <!-- Avatar -->
                        <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="avatar-img rounded-circle" src="<?=base_url();?>assets/images/avatar/01.jpg" alt="avatar">
                        </a>

                        <!-- Profile dropdown START -->
                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                            <!-- Profile info -->
                            <li class="px-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-3">
                                        <img class="avatar-img rounded-circle shadow" src="<?=base_url();?>assets/images/avatar/01.jpg" alt="avatar">
                                    </div>
                                    <div>
                                        <a class="h6" href="#">Lori Ferguson</a>
                                        <p class="small m-0">example@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                            <!-- Links -->
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
                            <li><a class="dropdown-item bg-danger-soft-hover" href="<?=base_url();?>logout"><i class="bi bi-power fa-fw me-2"></i>Logout</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- Dark mode options START -->
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
                            <!-- Dark mode options END-->
                        </ul>
                        <!-- Profile dropdown END -->
                    </li>
                <?php endif; ?>

                <?php if (session()->get('level') == "") : ?>
                    <!-- Sign In START -->
                    <li class="nav-item ms-2 d-none d-md-block">
                        <a href="<?= base_url('login'); ?>" class="btn btn-sm btn-dark mb-0">Login</a>
                    </li>
                    <!-- Sign In END -->
                <?php endif; ?>

            </ul>
            <!-- Profile and notification END -->
        </div>
    </nav>
    <!-- Nav END -->
</header>
<!-- Header END -->