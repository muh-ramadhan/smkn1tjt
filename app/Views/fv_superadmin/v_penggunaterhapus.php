<?= $this->extend('fv_superadmin/themplate/layout') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <?php
                if (session()->getFlashdata('tambah')) {
                    echo '
                    <div class="toasts-top-right fixed">
                        <div class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                            <div class="toast-header">
                                <i class="mr-2 fas fa-check fa-lg"></i>
                                <strong class="mr-auto">Berhasil</strong>
                                <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        <div class="toast-body">';
                    echo session()->getFlashdata('tambah');
                    echo '</div></div></div>';
                }

                if (session()->getFlashdata('ubah')) {
                    echo '
                    <div class="toasts-top-right fixed">
                        <div class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                            <div class="toast-header">
                                <i class="mr-2 fas fa-check fa-lg"></i>
                                <strong class="mr-auto">Berhasil</strong>
                                <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        <div class="toast-body">';
                    echo session()->getFlashdata('ubah');
                    echo '</div></div></div>';
                }

                if (session()->getFlashdata('hapus')) {
                    echo '
                    <div class="toasts-top-right fixed">
                        <div class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                            <div class="toast-header">
                                <i class="mr-2 fas fa-check fa-lg"></i>
                                <strong class="mr-auto">Berhasil</strong>
                                <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        <div class="toast-body">';
                    echo session()->getFlashdata('hapus');
                    echo '</div></div></div>';
                }
                ?>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title; ?> <?= $subtitle; ?></h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Hak Akses</th>
                                    <th>Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($AmbilSemuaDataLoginTerhapus as $key => $valueLogin) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $valueLogin['username'] ?></td>
                                        <td>
                                            <?php foreach ($AmbilSemuaDataPengguna as $key => $valuePengguna) : ?>
                                                <?= $valueLogin['id_pengguna'] == $valuePengguna['id_pengguna'] ? $valuePengguna['nama_lengkap'] : null ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php if ($valueLogin['level'] == 1) { ?>
                                                Superadmin
                                            <?php } ?>
                                            <?php if ($valueLogin['level'] == 2) { ?>
                                                Admin
                                            <?php } ?>
                                            <?php if ($valueLogin['level'] == 3) { ?>
                                                Operator
                                            <?php } ?>
                                            <?php if ($valueLogin['level'] == 4) { ?>
                                                Guru
                                            <?php } ?>
                                            <?php if ($valueLogin['level'] == 5) { ?>
                                                Siswa
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#restore<?= $valueLogin['id_pengguna'] ?>">
                                                <i class="fas fa-check"></i> Restore
                                            </button>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#purge<?= $valueLogin['id_pengguna'] ?>">
                                                <i class="fas fa-trash"></i> Purge
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Hak Akses</th>
                                    <th>Pilihan</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Restore -->
<?php foreach ($AmbilSemuaDataLoginTerhapus as $key => $valueLogin) { ?>
    <div class="modal fade" id="purge<?= $valueLogin['id_pengguna'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Permanen</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Batal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Ingin Hapus Permanen <b><?= $valueLogin['username']; ?></b> ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('Superadmin/HapusPenggunaTerhapus/' . $valueLogin['id_pengguna']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- ./Modal Restore -->

<!-- Modal Restore -->
<?php foreach ($AmbilSemuaDataLoginTerhapus as $key => $valueLogin) { ?>
    <div class="modal fade" id="restore<?= $valueLogin['id_pengguna'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Restore Transaksi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Batal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Ingin Mengembalikan Pengguna <b>idpengguna <?= $valueLogin['id_pengguna']; ?> idlogin  <?= $valueLogin['id_login']; ?></b> ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('Superadmin/KembalikanPenggunaTerhapus/' . $valueLogin['id_pengguna']) ?>" class="btn btn-success btn-sm">Restore</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- ./Modal Restore -->
<?= $this->endSection() ?>