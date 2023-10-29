<?php if (session()->getFlashdata('berhasil')) : ?>
    <div class="modal fade" id="modalBerhasil" tabindex="-1" aria-labelledby="modalBerhasilLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="modalBerhasilLabel">Berhasil</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body text-center">
                    <p class="mb-2">
                        <?php echo session()->getFlashdata('berhasil'); ?>
                    </p>
                    <div class="btn-group" style="justify-content: center;">
                        <button type="button" class="btn btn-success mx-auto" data-bs-dismiss="modal">Baiklah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('gagal')) : ?>
    <div class="modal fade" id="modalGagal" tabindex="-1" aria-labelledby="modalGagalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="modalGagalLabel">Gagal</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body text-center">
                    <p class="mb-2">
                        <?php echo session()->getFlashdata('gagal'); ?>
                    </p>
                    <div class="btn-group" style="justify-content: center;">
                        <button type="button" class="btn btn-success mx-auto" data-bs-dismiss="modal">Baiklah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php $errors = session()->getFlashdata('errorValidation');
if (!empty($errors)) { ?>
    <div class="modal fade" id="modalGagalValidasi" tabindex="-1" aria-labelledby="modalGagalValidasiLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title text-white" id="modalGagalValidasiLabel">Gagal Validasi</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body text-center">
                    <?php foreach ($errors as $gagalValidasi) : ?>
                        <p class="mb-2">
                            <?= esc($gagalValidasi); ?><br>
                        </p>
                    <?php endforeach ?>
                    <div class="btn-group" style="justify-content: center;">
                        <button type="button" class="btn btn-success mx-auto" data-bs-dismiss="modal">Baiklah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }  ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php if (session()->getFlashdata('berhasil')) : ?>
            var modalBerhasil = new bootstrap.Modal(document.getElementById("modalBerhasil"));
            modalBerhasil.show();
        <?php endif; ?>

        <?php if (session()->getFlashdata('gagal')) : ?>
            var modalGagal = new bootstrap.Modal(document.getElementById("modalGagal"));
            modalGagal.show();
        <?php endif; ?>

        <?php
        $errors = session()->getFlashdata('errorValidation');
        if (!empty($errors)) : ?>
            var modalGagalValidasi = new bootstrap.Modal(document.getElementById("modalGagalValidasi"));
            modalGagalValidasi.show();
        <?php endif; ?>
    });
</script>