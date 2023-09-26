<?= $this->extend('fv_admin/themplate/layout') ?>
<?= $this->section('content') ?>

<!-- **************** MAIN CONTENT START **************** -->
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
            <div class="row mb-3">
                <div class="col-12 d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-2 mb-sm-0">Taruna/Taruni</h1>
                    <a href="<?=base_url();?>Admin/TambahSiswa" class="btn btn-sm btn-primary mb-0">Tambah</a>
                </div>
            </div>

            <div class="card bg-transparent">

                <!-- Card header START -->
                <div class="card-header bg-transparent border-bottom px-0">
                    <!-- Search and select START -->
                    <div class="row g-3 align-items-center justify-content-between">

                        <!-- Search bar -->
                        <div class="col-md-8">
                            <form class="rounded position-relative">
                                <input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
                                <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                                    <i class="fas fa-search fs-6 "></i>
                                </button>
                            </form>
                        </div>

                        <!-- Tab button -->
                        <div class="col-md-3">
                            <!-- Tabs START -->
                            <ul class="list-inline mb-0 nav nav-pills nav-pill-dark-soft border-0 justify-content-end" id="pills-tab" role="tablist">
                                <!-- Grid tab -->
                                <li class="nav-item">
                                    <a href="#nav-preview-tab-1" class="nav-link mb-0 me-2 active" data-bs-toggle="tab">
                                        <i class="fas fa-fw fa-th-large"></i>
                                    </a>
                                </li>
                                <!-- List tab -->
                                <li class="nav-item">
                                    <a href="#nav-html-tab-1" class="nav-link mb-0" data-bs-toggle="tab">
                                        <i class="fas fa-fw fa-list-ul"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tabs end -->
                        </div>
                    </div>
                    <!-- Search and select END -->
                </div>
                <!-- Card header END -->

                <!-- Card body START -->
                <div class="card-body px-0">

                    <!-- Tabs content START -->
                    <div class="tab-content">

                        <!-- Tabs content item START -->
                        <div class="tab-pane fade show active" id="nav-preview-tab-1">
                            <div class="row g-4">

                                <?php foreach ($AmbilSemuaDataSiswa as $value) : ?>
                                    <!-- Card item START -->
                                    <div class="col-md-6 col-xxl-4">
                                        <div class="card bg-transparent border h-100">
                                            <!-- Card header -->
                                            <div class="card-header bg-transparent border-bottom d-flex justify-content-between">
                                                <div class="d-sm-flex align-items-center">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-md flex-shrink-0">
                                                        <img class="avatar-img rounded-circle" src="<?= base_url(); ?>assets/images/avatar/01.jpg" alt="avatar">
                                                    </div>
                                                    <!-- Info -->
                                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                                        <h5 class="mb-0"><a href="#"><?= $value['nama_lengkap']; ?></a></h5>
                                                        <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i><?= $value['nisn']; ?></span>
                                                    </div>
                                                </div>

                                                <!-- Edit dropdown -->
                                                <div class="dropdown text-end">
                                                    <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots fa-fw"></i>
                                                    </a>
                                                    <!-- dropdown button -->
                                                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare2">
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <!-- Payments -->
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-md bg-success bg-opacity-10 text-success rounded-circle flex-shrink-0"><i class="bi bi-currency-dollar fa-fw"></i></div>
                                                        <h6 class="mb-0 ms-2 fw-light"><?= $value['tempat_lahir']; ?>, <?= date('d F Y', strtotime($value['tanggal_lahir'])); ?>
                                                        </h6>
                                                    </div>
                                                </div>

                                                <!-- Total courses -->
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0"><i class="fas fa-book fa-fw"></i></div>
                                                        <h6 class="mb-0 ms-2 fw-light"><?= $value['jurusan']; ?></h6>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Card footer -->
                                            <div class="card-footer bg-transparent border-top">
                                                <div class="d-sm-flex justify-content-between align-items-center">
                                                    <!-- Rating star -->
                                                    <h6 class="mb-2 mb-sm-0">
                                                        <i class="bi bi-calendar fa-fw text-orange me-2"></i><span class="text-body">Status :</span>
                                                        <?php
                                                        $isTop1 = $value['is_top_1'];
                                                        $isTop2 = $value['is_top_2'];
                                                        $isTop3 = $value['is_top_3'];
                                                        $status = $value['status'];
                                                        ?>

                                                        <?php if ($isTop1 == 1) : ?>
                                                            <span class="badge text-bg-primary  rounded-circle ms-2">Top 1</span>
                                                        <?php elseif ($isTop2 == 1) : ?>
                                                            <span class="badge text-bg-orange  rounded-circle ms-2">Top 2</span>
                                                        <?php elseif ($isTop3 == 1) : ?>
                                                            <span class="badge text-bg-info rounded-circle ms-2">Top 3</span>
                                                        <?php elseif ($status == 1) : ?>
                                                            <span class="badge text-bg-success rounded-circle ms-2">Aktif</span>
                                                        <?php elseif ($status == 2) : ?>
                                                            <span class="badge text-bg-danger rounded-circle ms-2">Diblokir</span>
                                                        <?php elseif (is_null($status)) : ?>
                                                            <span class="badge text-bg-warning rounded-circle ms-2">Tidak Aktif</span>
                                                        <?php endif; ?>


                                                    </h6>
                                                    <!-- Buttons -->
                                                    <div class="text-end text-primary-hover">
                                                        <a href="#" class="btn btn-link text-body p-0 mb-0 me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
                                                            <i class="bi bi-envelope-fill"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Block" aria-label="Block">
                                                            <i class="fas fa-ban"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card item END -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- Tabs content item END -->

                        <!-- Tabs content item START -->
                        <div class="tab-pane fade" id="nav-html-tab-1">
                            <div class="table-responsive border-0">
                                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                    <!-- Table head -->
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 rounded-start">Nama Lengkap</th>
                                            <th scope="col" class="border-0">NISN</th>
                                            <th scope="col" class="border-0">Tempat, Tanggal Lahir</th>
                                            <th scope="col" class="border-0">Kelas</th>
                                            <th scope="col" class="border-0">Jurusan</th>
                                            <th scope="col" class="border-0 rounded-end">Action</th>
                                        </tr>
                                    </thead>

                                    <!-- Table body START -->
                                    <tbody>

                                        <?php foreach ($AmbilSemuaDataSiswa as $value) : ?>
                                            <!-- Table row -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center position-relative">
                                                        <!-- Image -->
                                                        <div class="avatar avatar-md">
                                                            <img src="<?= base_url(); ?>assets/images/avatar/09.jpg" class="rounded-circle" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-3">
                                                            <!-- Title -->
                                                            <h6 class="mb-0"><a href="#" class="stretched-link"><?= $value['nama_lengkap']; ?></a></h6>
                                                            <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i><?= $value['nisn']; ?></span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td><?= $value['nisn']; ?></td>
                                                <td><?= $value['tempat_lahir']; ?>, <?= date('d F Y', strtotime($value['tanggal_lahir'])); ?></td>

                                                <!-- Table data -->
                                                <td><?= $value['kelas']; ?></td>
                                                <!-- Table data -->
                                                <td>
                                                    <?php
                                                    $rawJurusan = $value['jurusan'];

                                                    $replacements = [
                                                        'Teknik Komputer dan Jaringan' => 'TKJ',
                                                        'Teknik Kendaraan Ringan Otomotif' => 'TKRO',
                                                        'Nautika Kapal Penangkap Ikan' => 'NKPI',
                                                        'Agribisnis Perikanan Air Tawar' => 'APAT',
                                                    ];

                                                    $rawJurusan = strtr($rawJurusan, $replacements);

                                                    echo $rawJurusan;
                                                    ?>
                                                </td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
                                                        <i class="bi bi-envelope"></i>
                                                    </a>
                                                    <button class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block">
                                                        <i class="fas fa-ban"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                            </div>
                        </div>
                        <!-- Tabs content item END -->

                    </div>
                    <!-- Tabs content END -->
                </div>
                <!-- Card body END -->

                <!-- Card footer START -->
                <div class="card-footer bg-transparent pt-0 px-0">
                    <!-- Pagination START -->
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                        <!-- Content -->
                        <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                        <!-- Pagination -->
                        <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                            <ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0 px-0">
                                <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination END -->
                </div>
                <!-- Card footer END -->
            </div>
        </div>
        <!-- Page main content END -->

    </div>
    <!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<?= $this->include('fv_admin/themplate/back-top') ?>

<?= $this->endSection() ?>