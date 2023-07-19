<?= $this->extend('fv_superadmin/themplate/layout') ?>
<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Transaksi</h3>
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
                                    <th>Tanggal</th>
                                    <th>Galon Keluar</th>
                                    <th>Galon Kosong</th>
                                    <th>+/- Galon</th>
                                    <th>Harga</th>
                                    <th>Dibayar</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($AmbilDataDetailTransaksi as $key => $value) {; ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['tanggal_transaksi']; ?></td>
                                        <td><?= $value['galon_keluar']; ?></td>
                                        <td><?= $value['galon_kosong']; ?></td>
                                        <td><?= $value['plus_minus_galon']; ?></td>
                                        <td><?= number_to_currency($value['total_harga'], 'IDR', 'id_ID', 0); ?></td>
                                        <td><?= number_to_currency($value['dibayar'], 'IDR', 'id_ID', 0); ?></td>
                                        <td><?= $value['keterangan'];?></td>
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
                                            <a class="btn btn-info btn-sm" href="<?= base_url('Superadmin/UbahDetailDepotAir/' . $value['id_transaksi']) ?>">
                                                <i class="fas fa-eye"></i> Ubah
                                            </a>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $value['id_transaksi'] ?>">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Galon Keluar</th>
                                    <th>Galon Kosong</th>
                                    <th>+/- Galon</th>
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

<!-- Modal Tambah -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Transaksi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Batal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php echo form_open('Superadmin/TambahDataTransaksiPelanggan/' . $AmbilDataDetailDepotAir['id_pelanggan']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal_transaksi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Galon Keluar</label>
                    <input type="number" name="galon_keluar" class="form-control" placeholder="Galon Keluar" required>
                </div>
                <div class="form-group">
                    <label>Galon Kosong</label>
                    <input type="number" name="galon_kosong" class="form-control" placeholder="Galon Kosong" required>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="total_harga" class="form-control" placeholder="Harga" required>
                </div>
                <div class="form-group">
                    <label>Dibayar</label>
                    <input type="number" name="dibayar" class="form-control" placeholder="Dibayar" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="">-- Status --</option>
                        <option value="1" class="bg-danger">Belum Bayar</option>
                        <option value="2" class="bg-warning">Kurang Bayar</option>
                        <option value="3" class="bg-success">Lunas</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- ./Modal Tambah -->

<!-- Modal Hapus -->
<?php foreach ($AmbilDataDetailTransaksi as $key => $value) { ?>
    <div class="modal fade" id="hapus<?= $value['id_transaksi'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Transaksi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Batal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Ingin Menghapus Transaksi <b><?= date("d/m/Y", strtotime($value['tanggal_transaksi'])); ?></b> ?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('Superadmin/HapusDetailTransaksi/' . $value['id_transaksi']) ?>" class="btn btn-primary btn-sm">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- ./Modal Hapus -->
<?= $this->endSection() ?>