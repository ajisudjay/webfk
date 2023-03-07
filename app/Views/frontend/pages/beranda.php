<?= $this->include('frontend/layouts/header') ?>

<body onload="removeLoader();">
    <?= $this->include('frontend/layouts/navbar') ?>
    <?= $this->include('frontend/content/slider') ?>
    <?= $this->include('frontend/content/aplikasi') ?>
    <?= $this->include('frontend/content/visimisi') ?>
    <?= $this->include('frontend/content/berita-artikel') ?>
    <?= $this->include('frontend/content/kerjasama') ?>
    <?= $this->include('frontend/content/pimpinan') ?>
    <?= $this->include('frontend/content/google-maps') ?>
</body>

<?= $this->include('frontend/layouts/footer') ?>
<?= $this->include('frontend/layouts/js') ?>
<?= $this->include('frontend/layouts/home-js') ?>