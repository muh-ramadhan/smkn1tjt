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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var modal = new bootstrap.Modal(document.getElementById("modalGagalValidasi"));
            modal.show();
        })
    </script>
<?php }  ?>