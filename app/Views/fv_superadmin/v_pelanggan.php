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
                                    <th>No HP</th>
                                    <th>Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($AmbilSemuaDataPelanggan as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['nama_pelanggan'] ?></td>
                                        <td><?= $value['nomor_wa'] ?></td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="<?= base_url('Superadmin/DetailPelanggan/' . $value['id_pelanggan']) ?>">
                                                <i class="fas fa-edit"></i> Ubah
                                            </a>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $value['id_pelanggan'] ?>">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>No HP</th>
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

<!-- Modal Tambah -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Pelanggan Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Batal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('Superadmin/TambahDataDepotAir') ?>
            <?= csrf_field() ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan" required>
                </div>
                <div class="form-group">
                    <label>Nomor WhatsApp</label>
                    <input type="number" name="nomor_wa" class="form-control" placeholder="628191xxxxxx" required>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
<!-- ./Modal Tambah -->

<!-- Modal Hapus -->
<?php foreach ($AmbilSemuaDataPelanggan as $key => $value) { ?>
    <div class="modal fade" id="hapus<?= $value['id_pelanggan'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Pelanggan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Batal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Ingin Menghapus Pelanggan <b><?= $value['nama_pelanggan']; ?></b> ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('Superadmin/HapusDataPelanggan/' . $value['id_pelanggan']) ?>" class="btn btn-primary btn-sm">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- ./Modal Hapus -->
<?= $this->endSection() ?>