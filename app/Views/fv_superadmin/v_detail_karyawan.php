<?= $this->extend('fv_superadmin/themplate/layout') ?>
<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title;?> <?= $subtitle;?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    
                <?php echo form_open('Superadmin/UbahDataKaryawan/' . $AmbilDataDetailKaryawan['id_karyawan']) ?>
                <?= csrf_field() ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_karyawan">Nama Lengkap</label>
                                <input type="text" name="nama_karyawan" value="<?= $AmbilDataDetailKaryawan['nama_karyawan'] ?>" class="form-control" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                <?php echo form_close() ?>
                </div>

                

            </div>
            <!--/.col (left) -->

            
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title;?> <?= $subtitle;?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <?php echo form_open('Superadmin/UbahDataLoginKaryawan/' . $AmbilDataDetailLogin['id_login']) ?>
                <?= csrf_field() ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_pengguna">Nama Pengguna</label>
                                <input type="text" name="nama_pengguna" value="<?= $AmbilDataDetailLogin['nama_pengguna'] ?>" class="form-control" placeholder="Nama Pengguna">
                            </div>
                            <div class="form-group">
                                <label for="kata_sandi">Kata Sandi</label>
                                <input type="password" name="kata_sandi" value="<?= $AmbilDataDetailLogin['kata_sandi'] ?>" class="form-control" placeholder="Nama Pengguna">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                <?php echo form_close() ?>
                <!-- /.card -->
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection() ?>