<?= $this->include('frontend/layouts/header') ?>

<body>
    <?= $this->include('frontend/layouts/navbar') ?>
    <!-- Isi Konten Website -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class=" col-xl-12">
                    <div class="bradcam_text">
                        <h3><?= $title_pages ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- Start Content-->
    <div class="card">
        <section class="sample-text-area">
            <div class="container box_1170">
                <div class="row">
                    <?php foreach ($dosen as $item) : ?>
                        <div class="col-lg-4" align="center">
                            <img src="<?= base_url('/writable/uploads/content/dosen/thumb/' . $item['gambar']); ?>" width="350px" height="350px">
                            <br>
                            <b style="color: #60B3FD;"><?= $item['nama'] ?></b>
                            <p>NIP. <?= $item['nip'] ?></p>
                            <p style="margin-bottom:5px;line-height:16px;" style="margin-bottom:0px;line-height:16px;"><i span class="fa fa-id-badge text-primary"></i> <?= $item['bidang'] ?></p>
                            <br>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </div>
    <!-- Akhir Isi Konten Website -->
    <?= $this->include('frontend/layouts/footer') ?>
</body>

<?= $this->include('frontend/layouts/js') ?>