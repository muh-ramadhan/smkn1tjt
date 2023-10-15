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
    <?= $this->include('fv_admin/themplate/sidebar') ?>
    <div class="page-content">
        <?= $this->include('fv_admin/themplate/top-bar') ?>
        <div class="page-content-wrapper border">
            <div class="row mb-3">
                <div class="col-12 d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-2 mb-sm-0"><?= $title; ?> <?= $subtitle; ?></h1>
                </div>
            </div>
            <?php echo form_open_multipart('admin/update-news-and-blog/' . $detailData['id_newsandblog']); ?>
            <?= csrf_field() ?>
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-light border rounded p-4">
                        <h5 class="mb-0">Judul*</h5>
                        <div class="mt-3">
                            <input type="text" class="form-control" name="judul_newsandblog" value="<?= $detailData['judul_newsandblog']; ?>">
                            <span class="small">Maksimal 70 karakter termasuk spasi dan tanda baca</span>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <h4>Cover News and Blog*</h4>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                                <?php
                                // Cek apakah cover_newsandblog ada atau file ditemukan
                                $cover_newsandblogPath = 'assets/images/NewsAndBlog/' . $detailData['cover_newsandblog'];

                                if ($detailData['cover_newsandblog'] !== null && $detailData['cover_newsandblog'] !== '0' && file_exists(FCPATH . $cover_newsandblogPath)) {
                                    $cover_newsandblogImage = base_url($cover_newsandblogPath);
                                } else {
                                    // Jika cover_newsandblog NULL, cover_newsandblog 0, atau file tidak ditemukan, gunakan gambar default
                                    $cover_newsandblogImage = base_url('assets/images/NewsAndBlog/tidak-ada-gambar.png');
                                }
                                ?>
                                <img src="<?= $cover_newsandblogImage; ?>" class="h-250px" alt="<?= $detailData['judul_newsandblog']; ?>">

                                <div>
                                    <h6 class="my-2">Unggah Cover gambar di sini, atau<a href="#!" class="text-primary"> Browse</a></h6>
                                    <label style="cursor:pointer;">
                                        <span>
                                            <input class="form-control" type="file" name="cover_newsandblog" accept="image/jpg, image/jpeg, image/png" />
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
                        <h5 class="mb-0">Penulis*</h5>
                        <div class="mt-3">
                            <input type="text" class="form-control" name="penulis_newsandblog" value="<?= $detailData['penulis_newsandblog']; ?>">
                            <span class="small">Masukkan nama penulis contoh: Admin Web</span>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="bg-light border rounded p-4">
                        <h5 class="mb-0">Kategori Utama*</h5>
                        <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" data-search-enabled="true" name="id_kategori_news_and_blog">
                            <option disabled selected>Pilih Kategori</option>
                            <?php foreach ($kategoriData as $kategori) : ?>
                                <option value="<?= $kategori['id_kategori_news_and_blog']; ?>" <?= ($kategori['id_kategori_news_and_blog'] == $detailData['id_kategori_news_and_blog']) ? 'selected' : ''; ?>>
                                    <?= $kategori['judul_kategori_news_and_blog']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="bg-light border rounded p-4">
                        <h5 class="mb-0">Kategori Tambahan</h5>
                        <select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" data-search-enabled="true" name="id_kategori_news_and_blog_tambahan">
                            <option value="" <?= ($detailData['id_kategori_news_and_blog_tambahan'] == '') ? 'selected' : ''; ?>>Pilih Kategori Tambahan</option>
                            <?php foreach ($kategoriData as $kategori) : ?>
                                <option value="<?= $kategori['id_kategori_news_and_blog']; ?>" <?= ($kategori['id_kategori_news_and_blog'] == $detailData['id_kategori_news_and_blog_tambahan']) ? 'selected' : ''; ?>>
                                    <?= $kategori['judul_kategori_news_and_blog']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <div class="bg-light border rounded p-4">
                        <h5 class="mb-0">Deskripsi Singkat*</h5>
                        <div class="mt-3">
                            <textarea type="text" class="form-control" rows="2" name="deskripsi_singkat_newsandblog"><?= $detailData['deskripsi_singkat_newsandblog']; ?></textarea>
                            <span class="small">Maksimal 150 karakter termasuk spasi dan tanda baca</span>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="bg-light border rounded p-4">
                        <h5 class="mb-0">Isi News and Blogs*</h5>
                        <div class="mt-3">
                            <textarea id="editor" name="isi_newsandblog"><?= $detailData['isi_newsandblog']; ?></textarea>
                            <span class="small">Masukkan isi konten utama</span>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <h5>Upload video</h5>
                    <div class="col-12 mt-4 mb-5">
                        <label class="form-label">Link URL Video</label>
                        <input class="form-control" type="text" placeholder="Contoh https://youtube.com/smkn1tjt" name="video_url_newsandblog" value="<?= $detailData['video_url_newsandblog']; ?>">
                    </div>
                    <div class="position-relative my-4">
                        <hr>
                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0">Atau</p>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Upload File Video</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile01" name="video_newsandblog" value="<?= $detailData['video_newsandblog']; ?>">
                            <label class="input-group-text">.mp4</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Simpan</button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>
<!-- CONTENT -->

<!-- SCRIPT EXTRA -->
<?= $this->section('script-extra') ?>

<?= $this->include('fv_admin/themplate/ckeditor') ?>
<?= $this->include('default/themplate/modal-informasi') ?>

<?= $this->endSection() ?>
<!-- SCRIPT EXTRA -->

<!-- SCRIPT ESSENTIAL -->
<?= $this->section('script-essential') ?>
<?= $this->include('fv_admin/themplate/back-top') ?>
<?= $this->include('fv_admin/themplate/script-essential') ?>
<?= $this->endSection() ?>
<!-- SCRIPT ESSENTIAL -->