<?= $this->extend('fv_operator/themplate/layout') ?>
<!-- HEAD DESCRIPTION -->
<?= $this->section('head-description') ?>
<?= $this->include('fv_operator/themplate/head-description') ?>
<?= $this->endSection() ?>
<!-- HEAD DESCRIPTION -->

<!-- HEAD SCRIPT -->
<?= $this->section('head-script') ?>
<?= $this->include('fv_operator/themplate/head-script') ?>
<?= $this->endSection() ?>
<!-- HEAD SCRIPT -->

<!-- HEAD CSS -->
<?= $this->section('head-css') ?>
<?= $this->include('fv_operator/themplate/head-css') ?>
<?= $this->endSection() ?>
<!-- HEAD CSS -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<main>

    <?= $this->include('fv_operator/themplate/sidebar') ?>

    <div class="page-content">

        <?= $this->include('fv_operator/themplate/top-bar') ?>

        <div class="page-content-wrapper border">

            <div class="row">
                <div class="col-12 mb-3">
                    <h3 class="h3 mb-2 mb-sm-0"><?= $title; ?> | <?= $subtitle; ?></h3>
                </div>
            </div>






            <div class="row g-4">
                <div class="col-md-12 d-grid">
                    <a href="<?= base_url(); ?>operator/get-book-info/" id="linkBuku" class="text-decoration-none">
                        <div class="p-4 bg-info bg-opacity-10 rounded-3 text-center">
                            <h5 class="mb-0 fs-5 text-info">Selanjutnya</h5>
                            <span id="logBuku"></span>
                        </div>
                    </a>
                </div>

                <!-- Card item START -->
                <div class="col-md-12 col-xxl-6">
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
                                    <h6 class="mb-0"><a href="#"><?= $DetailIdNfcPengguna['nama_lengkap']; ?></a></h6>
                                    <span class="text-body small"><?= $DetailIdNfcPengguna['nama_kelas_romawi'] ?? ''; ?> | <?= $DetailIdNfcPengguna['alias_jurusan'] ?? ''; ?></span>
                                </div>

                            </div>

                            <!-- Edit dropdown -->
                            <div class="dropdown text-end">
                                <?= $DetailIdNfcPengguna['nisn']; ?>
                            </div>
                        </div>

                        <div class="card-body">
                            <!-- Informasi Buku -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 ms-0 fw-light">Judul Buku</h6>
                                </div>
                                <span class="mb-0" id="judulBukuInput"></span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 ms-0 fw-light">Pengarang</h6>
                                </div>
                                <span class="mb-0" id="pengarangInput"></span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 ms-0 fw-light">Stok</h6>
                                </div>
                                <span class="mb-0" id="stokInput"></span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="mb-0 ms-0 fw-light" id="sinopsisInput"></span>
                                </div>
                            </div>
                        </div>

                        <!-- Card footer -->
                        <div class="card-footer bg-transparent border-top">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <!-- Rating star -->
                                <h6 class="mb-2 mb-sm-0">
                                    <span class="text-body" id="penerbitInput"></span>
                                    <span class="text-body" id="tahunTerbitInput"></span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
            </div>

            <script>
                const log = (message, logId) => {
                    document.getElementById(logId).innerHTML += `<p>${message}</p>`;
                };

                // Function to initiate NFC scan
                const initiateNFCScan = async () => {
                    try {
                        const ndef = new NDEFReader();
                        await ndef.scan();
                        log('Dekatkan Stiker Buku', 'logBuku');

                        ndef.addEventListener('readingerror', () => {
                            log('Argh! Cannot read data from the NFC tag. Try another one?', 'logBuku');
                        });

                        ndef.addEventListener('reading', async ({
                            message,
                            serialNumber
                        }) => {
                            //log(`${serialNumber}`, 'logBuku');

                            try {
                                // Fetch book info based on serial number
                                const response = await fetch(`<?= base_url(); ?>operator/ambil-detail-nfc-buku/${serialNumber}`);
                                const bookInfo = await response.json();

                                // Update input fields with book information
                                document.getElementById('judulBukuInput').textContent = bookInfo.judul_buku;
                                document.getElementById('pengarangInput').textContent = bookInfo.pengarang_buku;
                                document.getElementById('penerbitInput').textContent = bookInfo.penerbit_buku;
                                document.getElementById('tahunTerbitInput').textContent = bookInfo.tahun_terbit_buku;
                                document.getElementById('sinopsisInput').textContent = bookInfo.sinopsis_buku;
                                document.getElementById('stokInput').textContent = bookInfo.stok_buku;
                            } catch (error) {
                                log('Argh! ' + error, 'logBuku');
                            }
                        });
                    } catch (error) {
                        log('Argh! ' + error, 'logBuku');
                    }
                };

                // Call the function to initiate NFC scan when the page loads
                initiateNFCScan();
            </script>






        </div>
    </div>

</main>
<?= $this->endSection() ?>
<!-- CONTENT -->

<!-- SCRIPT EXTRA -->
<?= $this->section('script-extra') ?>
<?= $this->include('fv_operator/themplate/modal-informasi') ?>
<?= $this->endSection() ?>
<!-- SCRIPT EXTRA -->


<!-- SCRIPT ESSENTIAL -->
<?= $this->section('script-essential') ?>
<?= $this->include('fv_operator/themplate/back-top') ?>
<?= $this->include('fv_operator/themplate/script-essential') ?>
<?= $this->endSection() ?>
<!-- SCRIPT ESSENTIAL -->