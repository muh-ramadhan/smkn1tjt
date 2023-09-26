<?= $this->extend('fv_admin/themplate/layout') ?>
<?= $this->section('content') ?>

<main>
    <?= $this->include('fv_admin/themplate/sidebar') ?>

    <div class="page-content">
        <?= $this->include('fv_admin/themplate/top-bar') ?>
        <div class="page-content-wrapper border">
            <div class="row mb-3">
                <div class="col-12 d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-2 mb-sm-0">Tambah News and Blog</h1>
                </div>
            </div>

            <?php echo form_open('Superadmin/TambahDataDepotAir') ?>
            <?= csrf_field() ?>
            <div class="row g-4">

                <div class="col-12">
                    <div class="bg-light border rounded p-4">
                        <h5 class="mb-0">Judul</h5>

                        <div class="mt-3">
                            <input type="text" class="form-control" placeholder="Judul News and Blog" name="judul_newsandblog">
                            <span class="small">Maksimal 70 karakter termasuk spasi dan tanda baca</span>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <h4>Cover News and Blog</h4>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                                <img src="<?= base_url(); ?>assets/images/element/gallery.svg" class="h-50px" alt="">
                                <div>
                                    <h6 class="my-2">Unggah cover gambar di sini, atau<a href="#!" class="text-primary"> Browse</a></h6>
                                    <label style="cursor:pointer;">
                                        <span>
                                            <input class="form-control stretched-link" type="file" name="cover" id="image" accept="image/gif, image/jpeg, image/png" />
                                        </span>
                                    </label>
                                    <p class="small mb-0 mt-2"><b>Catatan:</b> Hanya JPG, JPEG dan PNG. Dimensi yang kami sarankan adalah 600px * 450px. Gambar yang lebih besar akan dipotong menjadi 4:3 agar sesuai dengan thumbnail/pratinjau.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="bg-light border rounded p-4">
                        <h5 class="mb-0">Penulis</h5>
                        <div class="mt-3">
                            <input type="text" class="form-control" placeholder="Judul News and Blog" name="penulis_newsandblog">
                            <span class="small">Masukkan nama penulis contoh : Admin Web</span>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="bg-light border rounded p-4">
                        <h5 class="mb-0">Kategori Utama</h5>
                        <div class="mt-3">
                            <input type="text" class="form-control js-choice mb-0" data-placeholder="true" data-placeholder-Val="Enter tags" data-max-item-count="14" data-remove-item-button="true" name="id_kategori">
                            <span class="small">Pilih kategori utama</span>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="bg-light border rounded p-4">
                        <h5 class="mb-0">Kategori Tambahan</h5>
                        <div class="mt-3">
                            <input type="text" class="form-control js-choice mb-0" data-placeholder="true" data-placeholder-Val="Enter tags" data-max-item-count="14" data-remove-item-button="true" name="id_kategori_tambahan">
                            <span class="small">Pilih kategori tambahan jika ada</span>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="bg-light border rounded p-4">
                        <h5 class="mb-0">Deskripsi Singkat</h5>
                        <div class="mt-3">
                            <textarea type="text" class="form-control" rows="2" placeholder="Buat Dekripsi Singkat Atau Ringkasan"></textarea name="deskripsi_singkat">
                            <span class="small">Maksimal 150 karakter termasuk spasi dan tanda baca</span>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <h5 class="mb-0">Deskripsi Lengkap</h5>
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

                    <div class="bg-body border rounded-bottom h-400px overflow-hidden" id="quilleditor">

                    </div>
                </div>
                
                <div class="col-12">
                    <h5>Upload video</h5>
                    <div class="col-12 mt-4 mb-5">
                        <label class="form-label">Link URL Video</label>
                        <input class="form-control" type="text" placeholder="Contoh https://youtube.com/smkn1tjt">
                    </div>
                    <div class="position-relative my-4">
                        <hr>
                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0">Atau</p>
                    </div>
                    
                    <div class="col-12">
                        <label class="form-label">Upload File Video</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile01">
                            <label class="input-group-text">.mp4</label>
                        </div>
                    </div>
                    
                    <h5 class="mt-4">Video preview</h5>
                    <div class="position-relative">
                        <img src="<?= base_url(); ?>assets/images/about/04.jpg" class="rounded-4" alt="">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-sm-flex justify-content-end">
                    <button type="button" type="submit" class="btn btn-primary mb-0">Simpan</button>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>

</main>

<?php foreach ($AmbilDataJoinKategoriNewsAndBlog as $key => $value) { ?>
    <div class="modal fade" id="viewReview<?= $value['id_newsandblog']; ?>" tabindex="-1" aria-labelledby="viewReviewLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="viewReviewLabel">Hapus Sementara</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body">
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

<?= $this->include('fv_admin/themplate/back-top') ?>
<?= $this->endSection() ?>