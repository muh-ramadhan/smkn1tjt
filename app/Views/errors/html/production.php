<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">

    <title><?= lang('Errors.whoops') ?></title>

    <style>
        <?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'debug.css')) ?>
    </style>
    <style>
        .button {
            padding: 8px 20px;
            border-radius: 5px;
            border: 0;
            display: inline-block;
            cursor: pointer;
            text-decoration: none; /* Tambahkan ini untuk menghapus garis bawah pada teks */
        }

        .button.button--large {
            padding: 9px 22px;
            font-size: 1.2em;
        }

        .button.button--primary-alt-light {
            background: #FCCC00;
            border: 1px solid #FCCC00;
            color: #04051A;
            transition: all 250ms ease;
        }

        .button.button--primary-alt-light:hover {
            border: 1px solid #FCCC00;
            color: #FCCC00;
            background: #040416;
        }
    </style>
</head>

<body>

    <div class="container text-center">
        <h1 class="headline">Eh... Kok Hilang!!!</h1>
        <p class="lead">Sepertinya Anda Nyasar, Saatnya</p>
        <a href="<?= base_url(); ?>" class="button button--primary-alt-light button--large"><b>Kembali Ke Rumah</b></a>
    </div>

</body>

</html>
