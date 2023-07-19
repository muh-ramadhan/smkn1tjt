<?= $this->extend('fv_superadmin/themplate/layout') ?>
<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <?php echo form_open('Superadmin/UbahDetailTransaksi/' . $AmbilUbahDataDetailTransaksi['id_transaksi']) ?>
        <?= csrf_field() ?>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?= $title; ?> <?= $subtitle; ?></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_transaksi">Tanggal Transaksi</label>
                            <input type="date" name="tanggal_transaksi" value="<?= $AmbilUbahDataDetailTransaksi['tanggal_transaksi'] ?>" class="form-control" placeholder="Tanggal Transaksi">
                        </div>
                        <div class="form-group">
                            <label for="galon_keluar">Galon Keluar</label>
                            <input type="number" name="galon_keluar" value="<?= $AmbilUbahDataDetailTransaksi['galon_keluar'] ?>" class="form-control" placeholder="Galon Keluar">
                        </div>
                        <div class="form-group">
                            <label for="galon_kosong">Galon Masuk</label>
                            <input type="number" name="galon_kosong" value="<?= $AmbilUbahDataDetailTransaksi['galon_kosong'] ?>" class="form-control" placeholder="Galon Masuk">
                        </div>
                        <div class="form-group">
                            <label for="plus_minus_galon">+- Galon</label>
                            <input type="number" name="plus_minus_galon" value="<?= $AmbilUbahDataDetailTransaksi['plus_minus_galon'] ?>" class="form-control" placeholder="+- Galon" disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="total_harga">Total Harga</label>
                            <input type="number" name="total_harga" value="<?= $AmbilUbahDataDetailTransaksi['total_harga'] ?>" class="form-control" placeholder="Total Harga">
                        </div>
                        <div class="form-group">
                            <label for="dibayar">Dibayar</label>
                            <input type="number" name="dibayar" value="<?= $AmbilUbahDataDetailTransaksi['dibayar'] ?>" class="form-control" placeholder="Dibayar">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" value="<?= $AmbilUbahDataDetailTransaksi['keterangan'] ?>" class="form-control" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <?php if ($AmbilUbahDataDetailTransaksi['status'] == 1) { ?>
                                    <option value="1" class="bg-danger" selected>Belum Bayar</option>
                                    <option value="2" class="bg-warning">Kurang Bayar</option>
                                    <option value="3" class="bg-success">Lunas</option>
                                <?php } ?>
                                <?php if ($AmbilUbahDataDetailTransaksi['status'] == 2) { ?>
                                    <option value="2" class="bg-warning" selected>Kurang Bayar</option>
                                    <option value="1" class="bg-danger">Belum Bayar</option>
                                    <option value="3" class="bg-success">Lunas</option>
                                <?php } ?>
                                <?php if ($AmbilUbahDataDetailTransaksi['status'] == 3) { ?>
                                    <option value="3" class="bg-success" selected>Lunas</option>
                                    <option value="1" class="bg-danger">Belum Bayar</option>
                                    <option value="2" class="bg-warning">Kurang Bayar</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info">Simpan</button>
                    <button type="submit" class="btn btn-default">Batal</button>
                </div>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</section>

<?= $this->endSection() ?>