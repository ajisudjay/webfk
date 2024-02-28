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
                        <h3 style="font-size: 30px;"><?= $dosen['nama'] ?>
                        </h3>
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
                    <div class="col-lg-4">
                        <img src="<?= base_url('/writable/uploads/content/dosen/thumb/' . $dosen['gambar']); ?>" width="300" height="300">
                    </div>
                    <div class="col-lg-2">
                        <p style="font-weight: bold;">Nama Lengkap</p>
                        <p style="font-weight: bold;">Jenis Kelamin</p>
                        <p style="font-weight: bold;">NIP</p>
                        <p style="font-weight: bold;">NIDN</p>
                        <p style="font-weight: bold;">Bidang Ilmu</p>
                        <p style="font-weight: bold;">Program Studi</p>
                        <p style="font-weight: bold;">Jabatan Fungsional</p>
                    </div>
                    <div class="col-lg-1">
                        <p> : </p>
                        <p> : </p>
                        <p> : </p>
                        <p> : </p>
                        <p> : </p>
                        <p> : </p>
                        <p> : </p>
                    </div>
                    <div class="col-lg-5">
                        <p><?= $dosen['nama'] ?></p>
                        <p><?= $dosen['jk'] ?></p>
                        <p><?= $dosen['nip'] ?></p>
                        <p><?= $dosen['nidn'] ?></p>
                        <p><?= $dosen['bidang'] ?></p>
                        <p><?= $dosen['homebase'] ?></p>
                        <p><?= $dosen['jabatan'] ?></p>
                    </div>
                    <div class="col-lg-12" align="center">
                        <a target="_blank" style="color: #60B3FD;" href="<?= $dosen['sinta'] ?>"><button class="btn btn-primary">Sinta</button> </a> | <a target="_blank" style="color: #60B3FD;" href="<?= $dosen['gs'] ?>"><button class="btn btn-warning">Google Scholar</button></a>
                    </div>
                </div>
                <br>
                <div class="row" align="center">
                    <div class="col-lg-4">
                        <h4>S1</h4>
                        <p class="small"><?= $dosen['s1'] ?></p>
                    </div>
                    <div class="col-lg-4">
                        <h4>S2 /Sp</h4>
                        <p class="small"><?= $dosen['s2'] ?></p>
                    </div>
                    <div class="col-lg-4">
                        <h4>S3</h4>
                        <p class="small"><?= $dosen['s3'] ?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Akhir Isi Konten Website -->
    <?= $this->include('frontend/layouts/footer') ?>
</body>

<?= $this->include('frontend/layouts/js') ?>