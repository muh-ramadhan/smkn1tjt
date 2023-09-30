<?= $this->extend('fv_admin/themplate/layout') ?>
<?= $this->section('content') ?>

<main>

    <?= $this->include('fv_admin/themplate/sidebar') ?>

    <div class="page-content">

        <?= $this->include('fv_admin/themplate/top-bar') ?>

        <div class="page-content-wrapper border">

        </div>

    </div>

</main>

<?= $this->include('fv_admin/themplate/back-top') ?>

<?= $this->endSection() ?>