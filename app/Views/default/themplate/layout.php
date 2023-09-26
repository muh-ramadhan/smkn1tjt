<!DOCTYPE html>
<html lang="id">

<head>
<?php foreach ($AmbilDataWeb as $value) : ?>
  <title><?= $value['nama_web']; ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="smkn1tanjabtimur.sch.id">
  <meta name="description" content="<?= $value['nama_web']; ?> - <?= $value['nama_web']; ?>">

  <?php endforeach; ?>

  <script>
    const storedTheme = localStorage.getItem('theme')

    const getPreferredTheme = () => {
      if (storedTheme) {
        return storedTheme
      }
      return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
    }

    const setTheme = function(theme) {
      if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.setAttribute('data-bs-theme', 'dark')
      } else {
        document.documentElement.setAttribute('data-bs-theme', theme)
      }
    }

    setTheme(getPreferredTheme())

    window.addEventListener('DOMContentLoaded', () => {
      var el = document.querySelector('.theme-icon-active');
      if (el != 'undefined' && el != null) {
        const showActiveTheme = theme => {
          const activeThemeIcon = document.querySelector('.theme-icon-active use')
          const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
          const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

          document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
            element.classList.remove('active')
          })

          btnToActive.classList.add('active')
          activeThemeIcon.setAttribute('href', svgOfActiveBtn)
        }

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
          if (storedTheme !== 'light' || storedTheme !== 'dark') {
            setTheme(getPreferredTheme())
          }
        })

        showActiveTheme(getPreferredTheme())

        document.querySelectorAll('[data-bs-theme-value]')
          .forEach(toggle => {
            toggle.addEventListener('click', () => {
              const theme = toggle.getAttribute('data-bs-theme-value')
              localStorage.setItem('theme', theme)
              setTheme(theme)
              showActiveTheme(theme)
            })
          })

      }
    })
  </script>

  <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/font-awesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/glightbox/css/glightbox.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/choices/css/choices.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">

</head>

<body>

  <?= $this->renderSection('content') ?>

  <script src="<?= base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/glightbox/js/glightbox.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/choices/js/choices.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/functions.js"></script>

</body>

</html>