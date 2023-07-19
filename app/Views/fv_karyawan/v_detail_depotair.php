<?= $this->extend('fv_karyawan/themplate/layout') ?>
<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

              
                      <?php $errors = session()->getFlashdata('errors');
        //Pesan Validasi Error
        if (!empty($errors)) { ?>
          <?php foreach ($errors as $error) : ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?= esc($error); ?>
            </div>
          <?php endforeach ?>
        <?php } ?>
              
              
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
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-sticky-note"></i> Nota
                                            </a>
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

            <?php echo form_open('Karyawan/TambahDataTransaksiPelanggan/' . $AmbilDataDetailDepotAir['id_pelanggan']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input name="tanggal_transaksi" type="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Galon Keluar</label>
                    <input name="galon_keluar" type="number" class="form-control" placeholder="Galon Keluar" required>
                </div>
                <div class="form-group">
                    <label>Galon Kosong</label>
                    <input name="galon_kosong" type="number" class="form-control" placeholder="Galon Kosong" required>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input name="total_harga" type="number" class="form-control" placeholder="Harga" required>
                </div>
                <div class="form-group">
                    <label>Dibayar</label>
                    <input name="dibayar" type="number" class="form-control" placeholder="Dibayar" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input name="keterangan" type="text" class="form-control" placeholder="Keterangan">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option selected="selected" disabled value="">-- Status --</option>
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

<?= $this->endSection() ?>