<title><?= $title; ?> <?= $subtitle; ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="index, follow">
<meta name="title" content="<?= $AmbilDataNewsAndBlog['judul_newsandblog']; ?>">
<meta name="keywords" content="<?= implode(', ', array_map('strtolower', explode(' ', $AmbilDataNewsAndBlog['judul_newsandblog']))); ?>">
<meta name="author" content="<?= $AmbilDataWeb['nama_web']; ?>">
<meta name="description" content="<?= $AmbilDataNewsAndBlog['deskripsi_singkat_newsandblog']; ?>">