<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->renderSection('head-description') ?>

  <?= $this->renderSection('head-script') ?>

  <?= $this->renderSection('head-css') ?>
</head>

<body>

  <?= $this->renderSection('content') ?>

  <?= $this->renderSection('script-extra') ?>

  <?= $this->renderSection('script-essential') ?>

</body>

</html>