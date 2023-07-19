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
                        <div class="card-tools">
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Galon Keluar</th>
                                    <th>Galon Kosong</th>
                                    <th>Harga</th>
                                    <th>Dibayar</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($AmbilSemuaDataTransaksiTerhapus as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td>
                                            <?php foreach ($AmbilSemuaDataDepotAir as $key => $valuex) : ?>
                                                <?= $value['id_pelanggan'] == $valuex['id_pelanggan'] ? $valuex['nama_pelanggan'] : null ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td><?= $value['tanggal_transaksi'] ?></td>
                                        <td><?= $value['galon_keluar'] ?></td>
                                        <td><?= $value['galon_kosong'] ?></td>
                                        <td><?= $value['total_harga'] ?></td>
                                        <td><?= $value['dibayar'] ?></td>
                                        <td><?= $value['keterangan'] ?></td>
                                        <td>
                                            <?php if ($value['status'] == 1) { ?>
                                                <span class="right badge badge-danger">Belum Bayar</span>
                                            <?php } ?>
                                            <?php if ($value['status'] == 2) { ?>
                                                <span class="right badge badge-warning">Kurang Bayar</span>
                                            <?php } ?>
                                            <?php if ($value['status'] == 3) { ?>
                                                <span class="right badge badge-success">Lunas</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#restore<?= $value['id_transaksi'] ?>">
                                                <i class="fas fa-check"></i> Restore
                                            </button>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#purge<?= $value['id_transaksi'] ?>">
                                                <i class="fas fa-trash"></i> Purge
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Galon Keluar</th>
                                    <th>Galon Kosong</th>
                                    <th>Harga</th>
                                    <th>Dibayar</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
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
<?php foreach ($AmbilSemuaDataTransaksiTerhapus as $key => $value) { ?>
    <div class="modal fade" id="purge<?= $value['id_transaksi'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Permanen</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Batal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Ingin Hapus Permanen <b><?= date("d/m/Y", strtotime($value['tanggal_transaksi'])); ?></b> ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('Superadmin/HapusTransaksiTerhapus/' . $value['id_transaksi']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- ./Modal Restore -->

<!-- Modal Restore -->
<?php foreach ($AmbilSemuaDataTransaksiTerhapus as $key => $value) { ?>
    <div class="modal fade" id="restore<?= $value['id_transaksi'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Restore Transaksi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Batal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Ingin Mengembalikan Transaksi <b><?= date("d/m/Y", strtotime($value['tanggal_transaksi'])); ?></b> ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('Superadmin/KembalikanTransaksiTerhapus/' . $value['id_transaksi']) ?>" class="btn btn-success btn-sm">Restore</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- ./Modal Restore -->
<?= $this->endSection() ?>