<?= $this->extend('fv_admin/themplate/layout') ?>
<!-- HEAD DESCRIPTION -->
<?= $this->section('head-description') ?>
<?= $this->include('fv_admin/themplate/head-description') ?>
<?= $this->endSection() ?>
<!-- HEAD DESCRIPTION -->

<!-- HEAD SCRIPT -->
<?= $this->section('head-script') ?>
<?= $this->include('fv_admin/themplate/head-script') ?>
<?= $this->endSection() ?>
<!-- HEAD SCRIPT -->

<!-- HEAD CSS -->
<?= $this->section('head-css') ?>
<?= $this->include('fv_admin/themplate/head-css') ?>
<?= $this->endSection() ?>
<!-- HEAD CSS -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<main>

    <!-- Sidebar START -->
    <?= $this->include('fv_admin/themplate/sidebar') ?>
    <!-- Sidebar END -->

    <!-- Page content START -->
    <div class="page-content">

        <!-- Top bar START -->
        <?= $this->include('fv_admin/themplate/top-bar') ?>
        <!-- Top bar END -->

        <!-- Page main content START -->
        <div class="page-content-wrapper border">

            <!-- Title -->
            <div class="row">
                <div class="col-12 mb-3">
                    <h1 class="h3 mb-2 mb-sm-0"><?= $title; ?> Web</h1>
                </div>
            </div>

            <div class="row g-4">
                <!-- Left side START -->
                <div class="col-xl-3">
                    <!-- Tab START -->
                    <ul class="nav nav-pills nav-tabs-bg-dark flex-column">
                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab-1"><i class="fas fa-globe fa-fw me-2"></i>Website Settings</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-2"><i class="fas fa-cog fa-fw me-2"></i>General Settings</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-3"><i class="fas fa-bell fa-fw me-2"></i>Notification Settings</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-4"><i class="fas fa-user-circle fa-fw me-2"></i>Account Settings</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-5"><i class="fas fa-sliders-h fa-fw me-2"></i>Social Settings</a> </li>
                        <li class="nav-item"> <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-6"><i class="fas fa-envelope-open-text fa-fw me-2"></i>Email Settings</a> </li>
                    </ul>
                    <!-- Tab END -->
                </div>
                <!-- Left side END -->

                <!-- Right side START -->
                <div class="col-xl-9">

                    <!-- Tab Content START -->
                    <div class="tab-content">

                        <!-- Personal Information content START -->
                        <div class="tab-pane show active" id="tab-1">
                            <div class="card shadow">

                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Website Settings</h5>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body">
                                    <?php foreach ($AmbilDataWeb as $value) : ?>
                                        <div class="row g-4 align-items-center">
                                            <!-- Input item -->
                                            <div class="col-lg-4">
                                                <label class="form-label">Nama Situs</label>
                                                <input type="text" class="form-control" placeholder="Nama Situs" value="<?= $value['nama_web']; ?>">
                                                <div class="form-text">Masukkan Nama Situs Web. Ini Ditampilkan di Situs Web dan Email.</div>
                                            </div>

                                            <!-- Input item -->
                                            <div class="col-lg-4">
                                                <label class="form-label">Hak Cipta Situs</label>
                                                <input type="text" class="form-control" placeholder="Hak Cipta Situs" value="<?= $value['hak_cipta_web']; ?>">
                                                <div class="form-text">Menggunakan untuk Kontak dan Kirim Email</div>
                                            </div>

                                            <!-- Input item -->
                                            <div class="col-lg-4">
                                                <label class="form-label">Email Situs</label>
                                                <input type="email" class="form-control" placeholder="Email Situs" value="<?= $value['email_web']; ?>">
                                                <div class="form-text">Untuk Teks Hak Cipta</div>
                                            </div>

                                            <!-- Textarea item -->
                                            <div class="col-12">
                                                <label class="form-label">Deskripsi Situs</label>
                                                <textarea class="form-control" rows="3"><?= $value['deskripsi_web']; ?></textarea>
                                                <div class="form-text">Untuk menulis deskripsi singkat tentang organisasi Anda, atau Situs Web.</div>
                                            </div>

                                            <!-- Input item -->
                                            <div class="col-lg-6">
                                                <label class="form-label">Hubungi Telepon</label>
                                                <input type="text" class="form-control" placeholder="Contact Phone" value="<?= $value['kontak_hp_web']; ?>">
                                                <div class="form-text">Menggunakan untuk Kontak dan Dukungan</div>
                                            </div>

                                            <!-- Input item -->
                                            <div class="col-lg-6">
                                                <label class="form-label">Email Dukungan</label>
                                                <input type="email" class="form-control" placeholder="Support Email" value="<?= $value['email_bantuan_web']; ?>">
                                                <div class="form-text">Untuk Email Dukungan</div>
                                            </div>

                                            <!-- Radio items -->
                                            <div class="col-lg-6">
                                                <label class="form-label">Izinkan Pendaftaran</label>
                                                <div class="d-sm-flex">
                                                    <!-- Radio -->
                                                    <div class="form-check radio-bg-light me-4">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Enable
                                                        </label>
                                                    </div>
                                                    <!-- Radio -->
                                                    <div class="form-check radio-bg-light me-4">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Disable
                                                        </label>
                                                    </div>
                                                    <!-- Radio -->
                                                    <div class="form-check radio-bg-light">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                        <label class="form-check-label" for="flexRadioDefault3">
                                                            On Request
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Textarea item -->
                                            <div class="col-12">
                                                <label class="form-label">Kontak Alamat</label>
                                                <textarea class="form-control" rows="3"><?= $value['alamat_web']; ?></textarea>
                                                <div class="form-text">Masukkan Alamat dukungan</div>
                                            </div>

                                            <!-- Save button -->
                                            <div class="d-sm-flex justify-content-end">
                                                <button type="button" class="btn btn-primary mb-0">Simpan</button>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <!-- Card body END -->

                            </div>
                        </div>
                        <!-- Personal Information content END -->

                        <!-- General Settings content START -->
                        <div class="tab-pane" id="tab-2">

                            <div class="card shadow">

                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">General Settings</h5>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body">
                                    <form class="row g-4">

                                        <!-- Input item -->
                                        <div class="col-12">
                                            <label class="form-label">Main Site URL</label>
                                            <input type="text" class="form-control" placeholder="Site URL">
                                            <div class="form-text">Set your main website url.</div>
                                        </div>

                                        <!-- Choice item -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Select Currency</label>
                                            <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                                <option value="">Select Currency</option>
                                                <option>USD</option>
                                                <option>Indian Rupee</option>
                                                <option>Euro</option>
                                                <option>British Pound</option>
                                            </select>
                                            <div class="form-text">Select currency as per Country</div>
                                        </div>

                                        <!-- Choice item -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Select Language</label>
                                            <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                                <option value="">Select Language</option>
                                                <option>English</option>
                                                <option>Hindi</option>
                                                <option>German</option>
                                                <option>Spanish</option>
                                            </select>
                                            <div class="form-text">Select language as per Country</div>
                                        </div>

                                        <!-- Switch item -->
                                        <div class="col-lg-3">
                                            <label class="form-label">Maintainance mode</label>
                                            <div class="form-check form-switch form-check-lg mb-0">
                                                <input class="form-check-input mt-0 price-toggle me-2" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label mt-1" for="flexSwitchCheckDefault">Make Site Offline</label>
                                            </div>
                                        </div>

                                        <!-- Textarea item -->
                                        <div class="col-lg-9">
                                            <label class="form-label">Maintainance Text</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                            <div class="form-text">Admin login on maintenance mode:<a href="#" class="ms-2">http://example.xyz/admin/login</a></div>
                                        </div>

                                        <!-- Save button -->
                                        <div class="d-sm-flex justify-content-end">
                                            <button type="button" class="btn btn-primary mb-0">Update</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Card body END -->

                            </div>
                        </div>
                        <!-- General Settings content END -->

                        <!-- Notification setting content START -->
                        <div class="tab-pane" id="tab-3">
                            <!-- Notification START -->
                            <div class="card shadow">
                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Notifications Settings</h5>
                                </div>

                                <!-- Card body -->
                                <div class="card-body">
                                    <!-- General nofification -->
                                    <h6 class="mb-2">Choose type of notifications you want to receive</h6>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy12" checked="">
                                        <label class="form-check-label" for="checkPrivacy12">Withdrawal activity</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy2">
                                        <label class="form-check-label" for="checkPrivacy2">Weekly report</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy3" checked="">
                                        <label class="form-check-label" for="checkPrivacy3">Password change</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-0">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy4">
                                        <label class="form-check-label" for="checkPrivacy4">Play sound on a message</label>
                                    </div>

                                    <!-- Instructor notification -->
                                    <h6 class="mb-2 mt-4">Instructor Related Notification</h6>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy11" checked="">
                                        <label class="form-check-label" for="checkPrivacy5">Joining new instructors</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy5">
                                        <label class="form-check-label" for="checkPrivacy5">Notify when the instructorss added new courses</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy6" checked="">
                                        <label class="form-check-label" for="checkPrivacy6">Notify when instructors update courses</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-0">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy7">
                                        <label class="form-check-label" for="checkPrivacy7">Course weekly report</label>
                                    </div>

                                    <!-- Student notification -->
                                    <h6 class="mb-2 mt-4">Student Related Notification</h6>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy8" checked="">
                                        <label class="form-check-label" for="checkPrivacy8">Joining new student</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-3">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy9">
                                        <label class="form-check-label" for="checkPrivacy9">Notify when students purchase new courses</label>
                                    </div>
                                    <div class="form-check form-switch form-check-md mb-0">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy10">
                                        <label class="form-check-label" for="checkPrivacy10">Course weekly report</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification START -->
                        </div>
                        <!-- Notification setting content END -->

                        <!-- Account setting content START -->
                        <div class="tab-pane" id="tab-4">
                            <!-- Activity logs -->
                            <div class="bg-light rounded-3 p-4 mb-3">
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <!-- Content -->
                                    <div>
                                        <h6 class="h5">Activity Logs</h6>
                                        <p class="mb-1 mb-md-0">You can save your all activity logs including unusual activity detected.</p>
                                    </div>
                                    <!-- Switch -->
                                    <div class="form-check form-switch form-check-md mb-0">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy1" checked>
                                    </div>
                                </div>
                            </div>

                            <!-- Change password -->
                            <div class="bg-light rounded-3 p-4 mb-3">
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <!-- Content -->
                                    <div>
                                        <h6 class="h5">Change Password</h6>
                                        <p class="mb-1 mb-md-0">Set a unique password to protect your account.</p>
                                    </div>
                                    <!-- Button -->
                                    <div>
                                        <a href="#" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#changePassword">Change Password</a>
                                        <p class="mb-0 small h6">Last change 10 Aug 2020</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 2 Step Verification -->
                            <div class="bg-light rounded-3 p-4">
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <!-- Content -->
                                    <div>
                                        <h6 class="h5">2 Step Verification</h6>
                                        <p class="mb-1 mb-md-0">Secure your account with 2 Step security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app.</p>
                                    </div>
                                    <!-- Switch -->
                                    <div class="form-check form-switch form-check-md mb-0">
                                        <input class="form-check-input" type="checkbox" id="checkPrivacy13" checked>
                                    </div>
                                </div>
                            </div>

                            <!-- Active Logs START -->
                            <div class="card border mt-4">

                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title">Active Logs</h5>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Table START -->
                                    <div class="table-responsive border-0">
                                        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">

                                            <!-- Table head -->
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="border-0 rounded-start">Browser</th>
                                                    <th scope="col" class="border-0">IP</th>
                                                    <th scope="col" class="border-0">Time</th>
                                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                                </tr>
                                            </thead>

                                            <!-- Table body START -->
                                            <tbody>

                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>Chrome On Window</td>

                                                    <!-- Table data -->
                                                    <td>173.238.198.108</td>

                                                    <!-- Table data -->
                                                    <td>12 Nov 2021</td>

                                                    <!-- Table data -->
                                                    <td>
                                                        <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign out</button>
                                                    </td>
                                                </tr>

                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>Mozilla On Window</td>

                                                    <!-- Table data -->
                                                    <td>107.222.146.90</td>

                                                    <!-- Table data -->
                                                    <td>08 Nov 2021</td>

                                                    <!-- Table data -->
                                                    <td>
                                                        <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign out</button>
                                                    </td>
                                                </tr>

                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>Chrome On iMac</td>

                                                    <!-- Table data -->
                                                    <td>231.213.125.55</td>

                                                    <!-- Table data -->
                                                    <td>06 Nov 2021</td>

                                                    <!-- Table data -->
                                                    <td>
                                                        <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign out</button>
                                                    </td>
                                                </tr>

                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>Mozilla On Window</td>

                                                    <!-- Table data -->
                                                    <td>37.242.105.138</td>

                                                    <!-- Table data -->
                                                    <td>02 Nov 2021</td>

                                                    <!-- Table data -->
                                                    <td>
                                                        <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign out</button>
                                                    </td>
                                                </tr>


                                            </tbody>
                                            <!-- Table body END -->
                                        </table>
                                    </div>
                                    <!-- Table END -->
                                </div>
                                <!-- Card body END -->
                            </div>
                            <!-- Active Logs END -->
                        </div>
                        <!-- Account setting content END -->

                        <!-- Social Settings content START -->
                        <div class="tab-pane" id="tab-5">
                            <div class="card shadow">
                                <!-- Card header -->
                                <div class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
                                    <h5 class="card-header-title mb-0">Social Media Settings</h5>
                                    <a href="#" class="btn btn-sm btn-primary mb-0">Add new</a>
                                </div>
                                <!-- Card body START -->
                                <div class="card-body">
                                    <form class="row g-4">
                                        <!-- Input item -->
                                        <div class="col-sm-6">
                                            <label class="form-label"><i class="fab fa-google text-google-icon me-2"></i>Enter google client ID</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-sm-6">
                                            <label class="form-label"><i class="fab fa-google text-google-icon me-2"></i>Enter google API</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-sm-6">
                                            <label class="form-label"><i class="fab fa-facebook text-facebook me-2"></i>Enter facebook client ID</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-sm-6">
                                            <label class="form-label"><i class="fab fa-facebook text-facebook me-2"></i>Enter facebook API</label>
                                            <input class="form-control" type="text">
                                        </div>

                                        <!-- Note -->
                                        <p class="mb-0"><b>In your app set all redirect URL like:</b> <u class="text-primary">https://app.eduport.abc/google/callback</u></p>

                                        <!-- Button -->
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary mb-0">Update</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Social Settings content END -->

                        <!-- Email Settings content START -->
                        <div class="tab-pane" id="tab-6">
                            <div class="card shadow">

                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="card-header-title mb-0">Email Settings</h5>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body">
                                    <div class="row g-4">

                                        <!-- Radio group items -->
                                        <div class="col-xl-8">
                                            <label class="form-label">Choose Email Drive</label>
                                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                <!-- Radio -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioEmail" id="flexRadioEmail1">
                                                    <label class="form-check-label" for="flexRadioEmail1">Send Mail</label>
                                                </div>

                                                <!-- Radio -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioEmail" id="flexRadioEmail2" checked>
                                                    <label class="form-check-label" for="flexRadioEmail2">SMTP</label>
                                                </div>

                                                <!-- Radio -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioEmail" id="flexRadioEmail3">
                                                    <label class="form-check-label" for="flexRadioEmail3">Mail</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6">
                                            <label class="form-label">SMTP HOST</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6 col-xl-3">
                                            <label class="form-label">SMTP Port</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6 col-xl-3">
                                            <label class="form-label">SMTP Secure</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6">
                                            <label class="form-label">SMTP Username</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6">
                                            <label class="form-label">SMTP Passwod</label>
                                            <input type="password" class="form-control">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6">
                                            <label class="form-label">Email From Address</label>
                                            <input type="email" class="form-control">
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6">
                                            <label class="form-label">Email From Name</label>
                                            <input type="email" class="form-control">
                                        </div>

                                        <!-- Choice item -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Email Send To</label>
                                            <select class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
                                                <option value="">Email Send to</option>
                                                <option>All Admin</option>
                                                <option>Instructors</option>
                                                <option>Students</option>
                                                <option>Visitors</option>
                                            </select>
                                        </div>

                                        <!-- Input item -->
                                        <div class="col-md-6">
                                            <label class="form-label">Email External Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Email Template -->
                                    <div class="row g-4 mt-4">
                                        <div class="d-sm-flex justify-content-between align-items-center">
                                            <h5 class="mb-0">Edit Email Template</h5>
                                            <a href="#" class="btn btn-sm btn-primary mb-0">Add Template</a>
                                        </div>
                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Welcome Email</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Send Email to User</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Password Change</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Unusual Login Email</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Password Reset Email by Admin</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">KYC Approve Email</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">KYC Reject Email</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">KYC Missing Email</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">KYC Submitted Email</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Token Purchase - Cancel by User</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Token Purchase - Order Placed</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Template Item -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="bg-light rounded-3 d-flex justify-content-between align-items-center p-2">
                                                <h6 class="mb-0"><a href="#">Token Purchase - Order Successfully</a></h6>
                                                <a href="#" class="btn btn-sm btn-round btn-dark flex-shrink-0 mb-0"><i class="far fa-edit fa-fw"></i></a>
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary mb-0">Update</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Email Settings content END -->

                    </div>
                    <!-- Tab Content END -->
                </div>
                <!-- Right side END -->
            </div> <!-- Row END -->
        </div>
        <!-- Page main content END -->

    </div>
    <!-- Page content END -->

</main>
<?= $this->endSection() ?>
<!-- CONTENT -->

<!-- SCRIPT EXTRA -->
<?= $this->section('script-extra') ?>
<?= $this->include('default/themplate/modal-informasi') ?>
<?= $this->endSection() ?>
<!-- SCRIPT EXTRA -->

<!-- SCRIPT ESSENTIAL -->
<?= $this->section('script-essential') ?>
<?= $this->include('fv_admin/themplate/back-top') ?>
<?= $this->include('fv_admin/themplate/script-essential') ?>
<?= $this->endSection() ?>
<!-- SCRIPT ESSENTIAL -->