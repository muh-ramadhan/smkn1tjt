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

            <h1 class="h3 mb-3"><?=$title;?> <?=$subtitle;?></h1>

            <!-- Card START -->
            <div class="card border rounded-3 mb-5">
                <div id="stepper" class="bs-stepper stepper-outline">
                    <!-- Card header -->
                    <div class="card-header bg-light border-bottom px-lg-5">
                        <!-- Step Buttons START -->
                        <div class="bs-stepper-header" role="tablist">
                            <!-- Step 1 -->
                            <div class="step" data-target="#step-1">
                                <div class="d-grid text-center align-items-center">
                                    <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger1" aria-controls="step-1">
                                        <span class="bs-stepper-circle">1</span>
                                    </button>
                                    <h6 class="bs-stepper-label d-none d-md-block">Detail <?=$subtitle;?></h6>
                                </div>
                            </div>
                            <div class="line"></div>

                            <!-- Step 2 -->
                            <div class="step" data-target="#step-2">
                                <div class="d-grid text-center align-items-center">
                                    <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger2" aria-controls="step-2">
                                        <span class="bs-stepper-circle">2</span>
                                    </button>
                                    <h6 class="bs-stepper-label d-none d-md-block">Media Tambahan</h6>
                                </div>
                            </div>
                            <div class="line"></div>

                            <!-- Step 3 -->
                            <div class="step" data-target="#step-3">
                                <div class="d-grid text-center align-items-center">
                                    <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger3" aria-controls="step-3">
                                        <span class="bs-stepper-circle">3</span>
                                    </button>
                                    <h6 class="bs-stepper-label d-none d-md-block">Curriculum</h6>
                                </div>
                            </div>
                            <div class="line"></div>

                            <!-- Step 4 -->
                            <div class="step" data-target="#step-4">
                                <div class="d-grid text-center align-items-center">
                                    <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger4" aria-controls="step-4">
                                        <span class="bs-stepper-circle">4</span>
                                    </button>
                                    <h6 class="bs-stepper-label d-none d-md-block">Additional information</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Step Buttons END -->
                    </div>

                    <!-- Card body START -->
                    <div class="card-body px-1 px-sm-4">
                        <!-- Step content START -->
                        <div class="bs-stepper-content">
                            <form onsubmit="return false">

                                <!-- Step 1 content START -->
                                <div id="step-1" role="tabpanel" class="content fade" aria-labelledby="steppertrigger1">
                                    <!-- Title -->
                                    <h4>Detail <?=$subtitle;?></h4>

                                    <hr> <!-- Divider -->

                                    <!-- Basic information START -->
                                    <div class="row g-4">
                                        <!-- Course title -->
                                        <div class="col-12">
                                            <label class="form-label">Judul <?=$subtitle;?></label>
                                            <input class="form-control" type="text" placeholder="Enter course title" value="The Complete Digital Marketing Course - 12 Courses in 1">
                                        </div>

                                        <!-- Language -->
                                        <div class="col-md-12">
                                            <label class="form-label">Kategori <?=$subtitle;?></label>
                                            <select class="form-select js-choice border-0 z-index-9 bg-transparent" multiple="multiple" aria-label=".form-select-sm" data-max-item-count="3" data-remove-item-button="true">
                                                <option value="">Select language</option>
                                                <option selected>English</option>
                                                <option>German</option>
                                                <option>French</option>
                                                <option selected>Hindi</option>
                                            </select>
                                        </div>

                                        <!-- Course description -->
                                        <div class="col-12">
                                            <label class="form-label">Deskripsi <?=$subtitle;?></label>
                                            <!-- Editor toolbar -->
                                            <div class="bg-light border border-bottom-0 rounded-top py-3" id="quilltoolbar">
                                                <span class="ql-formats">
                                                    <select class="ql-size"></select>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-bold"></button>
                                                    <button class="ql-italic"></button>
                                                    <button class="ql-underline"></button>
                                                    <button class="ql-strike"></button>
                                                </span>
                                                <span class="ql-formats">
                                                    <select class="ql-color"></select>
                                                    <select class="ql-background"></select>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-code-block"></button>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-list" value="ordered"></button>
                                                    <button class="ql-list" value="bullet"></button>
                                                    <button class="ql-indent" value="-1"></button>
                                                    <button class="ql-indent" value="+1"></button>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-link"></button>
                                                    <button class="ql-image"></button>
                                                </span>
                                                <span class="ql-formats">
                                                    <button class="ql-clean"></button>
                                                </span>
                                            </div>

                                            <!-- Main toolbar -->
                                            <div class="bg-body border rounded-bottom h-400px overflow-hidden" id="quilleditor">
                                                <br>
                                                <h1>Quill Rich Text Editor</h1>
                                                <br>
                                                <p>Quill is a free, open-source WYSIWYG editor built for the modern web. With its modular architecture and expressive API, it is completely customizable to fit any need.</p>
                                                <br>
                                            </div>
                                        </div>

                                        <!-- Step 1 button -->
                                        <div class="d-flex justify-content-end mt-3">
                                            <button class="btn btn-primary next-btn mb-0">Next</button>
                                        </div>
                                    </div>
                                    <!-- Basic information START -->
                                </div>
                                <!-- Step 1 content END -->

                                <!-- Step 2 content START -->
                                <div id="step-2" role="tabpanel" class="content fade" aria-labelledby="steppertrigger2">
                                    <!-- Title -->
                                    <h4>Media Tambahan</h4>

                                    <hr> <!-- Divider -->

                                    <div class="row">
                                        <!-- Upload image START -->
                                        <div class="col-12">
                                            <div class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                                                <!-- Image -->
                                                <img src="assets/images/element/gallery.svg" class="h-50px" alt="">
                                                <div>
                                                    <h6 class="my-2">UUnggah gambar tambahan di sini, atau<a href="#!" class="text-primary"> Browse</a></h6>
                                                    <label style="cursor:pointer;">
                                                        <span>
                                                            <input class="form-control stretched-link" type="file" name="my-image" id="image" accept="image/gif, image/jpeg, image/png" />
                                                        </span>
                                                    </label>
                                                    <p class="small mb-0 mt-2"><b>Catatan:</b> Hanya JPG, JPEG dan PNG. Dimensi yang sarankan adalah 600px * 450px. Gambar yang lebih besar akan dipotong menjadi 4:3 agar sesuai dengan thumbnail/pratinjau.</p>
                                                </div>
                                            </div>

                                            <!-- Button -->
                                            <div class="d-sm-flex justify-content-end mt-2">
                                                <button type="button" class="btn btn-sm btn-danger-soft mb-3">Hapus Gambar</button>
                                            </div>
                                        </div>
                                        <!-- Upload image END -->

                                        <!-- Upload video START -->
                                        <div class="col-12">
                                            <h5>Unggah video</h5>
                                            <!-- Input -->
                                            <div class="col-12 mt-4 mb-5">
                                                <label class="form-label">URL Link Video</label>
                                                <input class="form-control" type="text" placeholder="Enter video url" value="https://www.youtube.com/embed/tXHviS-4ygo">
                                            </div>
                                            <div class="position-relative my-4">
                                                <hr>
                                                <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0">Or</p>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Unggah video spesifik</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile01">
                                                    <label class="input-group-text">.mp4</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text">.WebM</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile03">
                                                    <label class="input-group-text">.OGG</label>
                                                </div>
                                            </div>

                                            <!-- Preview -->
                                            <h5 class="mt-4">Pratinjau Video</h5>
                                            <div class="position-relative">
                                                <!-- Image -->
                                                <img src="<?=base_url();?>assets/images/about/04.jpg" class="rounded-4" alt="">
                                                <div class="position-absolute top-50 start-50 translate-middle">
                                                    <!-- Video link -->
                                                    <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
                                                        <i class="fas fa-play"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Upload video END -->

                                        <!-- Step 2 button -->
                                        <div class="d-flex justify-content-between mt-3">
                                            <button class="btn btn-secondary prev-btn mb-0">Previous</button>
                                            <button class="btn btn-primary next-btn mb-0">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2 content END -->

                                <!-- Step 3 content START -->
                                <div id="step-3" role="tabpanel" class="content fade" aria-labelledby="steppertrigger3">
                                    <!-- Title -->
                                </div>
                                <!-- Step 3 content END -->

                                <!-- Step 4 content START -->
                                <div id="step-4" role="tabpanel" class="content fade" aria-labelledby="steppertrigger4">
                                    <!-- Title -->
                                    <h4>Additional information</h4>

                                    <hr> <!-- Divider -->

                                    <div class="row g-4">

                                        <!-- Edit faq START -->
                                        <div class="col-12">
                                            <div class="bg-light border rounded p-2 p-sm-4">
                                                <div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
                                                    <h5 class="mb-2 mb-sm-0">Upload FAQs</h5>
                                                    <a href="#" class="btn btn-sm btn-primary-soft mb-0" data-bs-toggle="modal" data-bs-target="#addQuestion"><i class="bi bi-plus-circle me-2"></i>Add Question</a>
                                                </div>

                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="bg-body p-3 p-sm-4 border rounded">
                                                            <!-- Item 1 -->
                                                            <div class="d-sm-flex justify-content-sm-between align-items-center mb-2">
                                                                <!-- Question -->
                                                                <h6 class="mb-0">How Digital Marketing Work?</h6>
                                                                <!-- Button -->
                                                                <div class="align-middle">
                                                                    <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
                                                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
                                                                </div>
                                                            </div>
                                                            <!-- Content -->
                                                            <p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed.</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="bg-body p-4 border rounded">
                                                            <!-- Item 2 -->
                                                            <div class="d-sm-flex justify-content-sm-between align-items-center mb-2">
                                                                <!-- Question -->
                                                                <h6 class="mb-0">How Digital Marketing Work?</h6>
                                                                <!-- Button -->
                                                                <div class="align-middle">
                                                                    <a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
                                                                    <button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
                                                                </div>
                                                            </div>
                                                            <!-- Content -->
                                                            <p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit faq END -->

                                        <!-- Step 4 button -->
                                        <div class="d-md-flex justify-content-between align-items-start mt-4">
                                            <button class="btn btn-secondary prev-btn mb-2 mb-md-0">Previous</button>
                                            <button class="btn btn-light me-auto ms-md-2 mb-2 mb-md-0">Preview Course</button>
                                            <div class="text-md-end">
                                                <a href="course-added.html" class="btn btn-success mb-2 mb-sm-0">Submit a Course</a>
                                                <p class="mb-0 small mt-1">Once you click "Submit a Course", your course will be uploaded and marked as pending for review.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 4 content END -->

                            </form>
                        </div>
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
            <!-- Card END -->
        </div>
        <!-- Page main content END -->
    </div>
    <!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
<!-- Popup modal for reviwe START -->
<?php foreach ($AmbilDataJoinKategoriNewsAndBlog as $key => $value) { ?>
    <div class="modal fade" id="viewReview<?= $value['id_newsandblog']; ?>" tabindex="-1" aria-labelledby="viewReviewLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal header -->
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="viewReviewLabel">Hapus Sementara</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <!-- Text -->
                    <div class="text-center">
                        <p class="mb-2">Apakah anda yakin?</p>
                        <div class="btn-group justify-content-center mb-2" role="group" aria-label="Pilihan">
                            <a href="<?= base_url('Admin/HapusNewsAndBlog/' . $value['id_newsandblog']) ?>" class="btn btn-success mx-2">Iya</a>
                            <button type="button" class="btn btn-danger mx-2" data-bs-dismiss="modal">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Popup modal for reviwe END -->


<?= $this->include('fv_admin/themplate/back-top') ?>

<?= $this->endSection() ?>