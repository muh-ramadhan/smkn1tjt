<?= $this->extend('fv_superadmin/themplate/layout') ?>
<?= $this->section('content') ?>
<section class="content">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"><?= $title; ?> <?= $subtitle; ?></h3>
        </div>
        <?php echo form_open('Superadmin/UbahDataPelanggan/' . $AmbilDataDetailPelanggan['id_pelanggan']) ?>
        <?= csrf_field() ?>
        <div class="card-body">
            <div class="form-group row">
                <label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_pelanggan" value="<?= $AmbilDataDetailPelanggan['nama_pelanggan'] ?>" class="form-control" placeholder="Nama Pelanggan">
                </div>
            </div>
            <div class="form-group row">
                <label for="nomor_wa" class="col-sm-2 col-form-label">No. Handphone</label>
                <div class="col-sm-10">
                    <input type="number" name="nomor_wa" value="<?= $AmbilDataDetailPelanggan['nomor_wa'] ?>" class="form-control" placeholder="No. Handphone">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Simpan</button>
            <button class="btn btn-default float-right">Batal</button>
        </div>
        <?php echo form_close() ?>
    </div>
</section>
<?= $this->endSection() ?>