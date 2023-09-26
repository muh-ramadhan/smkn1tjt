<?= $this->extend('fv_admin/themplate/layout') ?>
<?= $this->section('content') ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- Sidebar START -->
    <?= $this->include('fv_admin/themplate/sidebar') ?>
    <!-- Sidebar END -->

    <!-- Page content START -->
    <div class="page-content">

        <!-- Top bar START -->
        <?= $this->include('fv_admin/themplate/top-bar') ?>
        <!-- Top bar END -->

        <!-- Page main content START -->
        <div class="page-content-wrapper border">

        </div>
        <!-- Page main content END -->

    </div>
    <!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<?= $this->include('fv_admin/themplate/back-top') ?>

<?= $this->endSection() ?>