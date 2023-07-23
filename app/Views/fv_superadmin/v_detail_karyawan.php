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
                    
                <?php echo form_open('Superadmin/UbahDataPengguna/' . $AmbilDataDetailPengguna['id_pengguna']) ?>
                <?= csrf_field() ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_pengguna">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" value="<?= $AmbilDataDetailPengguna['nama_lengkap'] ?>" class="form-control" placeholder="Nama Lengkap">
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

                    <?php echo form_open('Superadmin/UbahDataLoginPengguna/' . $AmbilDataDetailLogin['id_login']) ?>
                <?= csrf_field() ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" value="<?= $AmbilDataDetailLogin['username'] ?>" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" value="<?= $AmbilDataDetailLogin['password'] ?>" class="form-control" placeholder="Password">
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