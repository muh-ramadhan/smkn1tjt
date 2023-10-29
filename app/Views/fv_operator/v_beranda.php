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
                    <h1 class="h3 mb-2 mb-sm-0">Beranda</h1>
                </div>
            </div>
            <div class="row g-4 mb-2">


                <div class="col-md-6 d-grid">
                    <a href="<?= base_url(); ?>operator/pinjam-buku/" id="pinjamLink" class="text-decoration-none">
                        <div class="p-4 bg-info bg-opacity-10 rounded-3 text-center">
                            <h5 class="mb-0 fs-5 text-info">PINJAM BUKU</h5>
                            <span id="log1"></span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 d-grid">
                    <a href="<?= base_url(); ?>operator/kembalikan-buku/" id="kembaliLink" class="text-decoration-none">
                        <div class="p-4 bg-success bg-opacity-10 rounded-3 text-center">
                            <h5 class="mb-0 fs-5 text-success">KEMBALIKAN BUKU</h5>
                            <span id="log2"></span>
                        </div>
                    </a>
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
                            log('Tempelkan Kartu Anggota', 'log1');
                            log('Tempelkan Kartu Anggota', 'log2');

                            ndef.addEventListener('readingerror', () => {
                                log('Argh! Cannot read data from the NFC tag. Try another one?', 'log1');
                                log('Argh! Cannot read data from the NFC tag. Try another one?', 'log2');
                            });

                            ndef.addEventListener('reading', ({
                                message,
                                serialNumber
                            }) => {
                                log(`${serialNumber}`, 'log1');
                                log(`${serialNumber}`, 'log2');

                                // Update links with serialNumber
                                document.getElementById('pinjamLink').href = `<?= base_url(); ?>operator/pinjam-buku/${serialNumber}`;
                                document.getElementById('kembaliLink').href = `<?= base_url(); ?>operator/kembalikan-buku/${serialNumber}`;
                            });
                        } catch (error) {
                            log('Argh! ' + error, 'log1');
                            log('Argh! ' + error, 'log2');
                        }
                    };

                    // Call the function to initiate NFC scan when the page loads
                    initiateNFCScan();
                </script>





            </div>

            <hr class="divider">

            <!-- Counter boxes START -->
            <div class="row g-4 mb-4">
                <!-- Counter item -->
                <div class="col-md-6 col-xxl-3">
                    <div class="card card-body bg-warning bg-opacity-15 p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Digit -->
                            <div>
                                <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="1958" data-purecounter-delay="200">0</h2>
                                <span class="mb-0 h6 fw-light">Buku Sedang Digunakan</span>
                            </div>
                            <!-- Icon -->
                            <div class="icon-lg rounded-circle bg-warning text-white mb-0"><i class="fas fa-tv fa-fw"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-md-6 col-xxl-3">
                    <div class="card card-body bg-danger bg-opacity-10 p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Digit -->
                            <div>
                                <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="1600" data-purecounter-delay="200">0</h2>
                                <span class="mb-0 h6 fw-light">Buku Belum Dikembalikan</span>
                            </div>
                            <!-- Icon -->
                            <div class="icon-lg rounded-circle bg-danger text-white mb-0"><i class="fas fa-user-tie fa-fw"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-md-6 col-xxl-3">
                    <div class="card card-body bg-primary bg-opacity-10 p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Digit -->
                            <div>
                                <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="1235" data-purecounter-delay="200">0</h2>
                                <span class="mb-0 h6 fw-light">Anggota Terdaftar</span>
                            </div>
                            <!-- Icon -->
                            <div class="icon-lg rounded-circle bg-primary text-white mb-0"><i class="fas fa-user-graduate fa-fw"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-md-6 col-xxl-3">
                    <div class="card card-body bg-success bg-opacity-10 p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Digit -->
                            <div>
                                <div class="d-flex">
                                    <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="845" data-purecounter-delay="200">0</h2>
                                    <span class="mb-0 h2 ms-1">hrs</span>
                                </div>
                                <span class="mb-0 h6 fw-light">Buku Tersedia</span>
                            </div>
                            <!-- Icon -->
                            <div class="icon-lg rounded-circle bg-success text-white mb-0"><i class="bi bi-stopwatch-fill fa-fw"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter boxes END -->




        </div>

    </div>

</main>
<?= $this->endSection() ?>
<!-- CONTENT -->

<!-- SCRIPT EXTRA -->
<?= $this->section('script-extra') ?>
<?= $this->include('fv_operator/themplate/modal-informasi') ?>
<?= $this->include('fv_operator/themplate/nfc.js') ?>
<?= $this->endSection() ?>
<!-- SCRIPT EXTRA -->

<!-- SCRIPT ESSENTIAL -->
<?= $this->section('script-essential') ?>
<?= $this->include('fv_operator/themplate/back-top') ?>
<?= $this->include('fv_operator/themplate/script-essential') ?>
<?= $this->endSection() ?>
<!-- SCRIPT ESSENTIAL -->