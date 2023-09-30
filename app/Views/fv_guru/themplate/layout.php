<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover_newsandblog" />
    <title>SMKN 1 TJT</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>themplate/code/styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>themplate/code/styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>themplate/code/fonts/css/fontawesome-all.min.css">
    <link rel="manifest" href="<?= base_url(); ?>themplate/code/_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>themplate/code/app/icons/icon-192x192.png">
</head>

<body class="theme-light" data-highlight="blue2">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">
        <!--OPEN::PAGE-->
        <?= $this->renderSection('content') ?>
        <!--CLOSE::PAGE-->
    </div>

    <script type="text/javascript" src="<?= base_url(); ?>themplate/code/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>themplate/code/scripts/custom.js"></script>

</body>