<?= $this->include('frontend/layouts/header') ?>

<body onload="removeLoader();">
    <?= $this->include('frontend/layouts/navbar') ?>

    <!-- Slider Beranda -->
    <video width="100%" height="70%" autoplay muted>
        <source src="img/video/profil.mp4" type="video/mp4">
    </video>
    <!-- akhir slider beranda -->

    <!-- Aplikasi -->
    <div class="box">
        <div class="service_area">
            <div class="container p-0">
                <div class="row no-gutters" style="text-align:center">
                    <div class="col-xl-2">
                        <div class="single_service">
                            <div class="icon">
                                <i class="flaticon-electrocardiogram"></i>
                            </div>
                            <h3>E-lib</h3>

                            <a target="_blank" href="https://elib.fk.unmul.ac.id/" class="boxed-btn3-white">Klik Disini</a>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single_service">
                            <div class="icon">
                                <i class="flaticon-electrocardiogram"></i>
                            </div>
                            <h3>eResource</h3>

                            <a target="_blank" href="https://e-resources.perpusnas.go.id/" class="boxed-btn3-white">Klik Disini</a>
                        </div>
                    </div>
                    <div class="col-xl-2" style="background-color: #53ADFE">
                        <div class="single_service">
                            <div class="icon">
                                <i class="flaticon-electrocardiogram"></i>
                            </div>
                            <h3>E-Lib Univ</h3>

                            <a href="https://perpustakaan.unmul.ac.id/" class="boxed-btn3-white">Klik Disini</a>
                        </div>
                    </div>
                    <div class="col-xl-2" style="background-color: #53ADFE">
                        <div class="single_service">
                            <div class="icon">
                                <i class="flaticon-electrocardiogram"></i>
                            </div>
                            <h3>Lab FK</h3>

                            <a href="https://lab.fk.unmul.ac.id/" class="boxed-btn3-white">Klik Disini</a>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single_service">
                            <div class="icon">
                                <i class="flaticon-electrocardiogram"></i>
                            </div>
                            <h3>Portofolio</h3>

                            <a href="https://portofolio.fk.unmul.ac.id" class="boxed-btn3-white">Klik Disini</a>
                        </div>
                    </div>

                    <div class="col-xl-2">
                        <div class="single_service">
                            <div class="icon">
                                <i class="flaticon-electrocardiogram"></i>
                            </div>
                            <h3>Medfis</h3>

                            <a href="https://medfis.fk.unmul.ac.id/" class="boxed-btn3-white">Klik Disini</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Aplikasi -->

    <!-- Visi MisiArea -->
    <div class="welcome_docmed_area" style="height: 500px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="welcome_docmed_info">
                        <div class="box-berita">
                            <h3>Visi</h3>
                            <br>
                            <p style="margin-top: -25px;"><?= $konfigurasi['visi'] ?></p>
                            <h3>Misi</h3>
                            <br>
                            <p style="margin-top: -25px;"><?= $konfigurasi['misi'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Berita dan Artikel -->
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Berita Terbaru</h3>
                        <p>Berita dan Artikel Terbaru</p>
                    </div>
                </div>
            </div>
            <!-- Limit Tampilkan max 6 berita -->
            <div class="row">
                <div class="cards">
                    <?php foreach ($berita as $item) : ?>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="box-berita">
                                <div class="single_department">
                                    <div class="department_thumb">
                                        <img src="<?= base_url('writable/uploads/content/berita/' . $item['banner']); ?>" width="300px" height="300px">
                                        <div class="col-lg-12" align="center">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-eye mr-1"></i>
                                                <?= $item['dilihat'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="department_content">
                                        <!-- limit Judul max 6 kata -->
                                        <?php
                                        if (strlen($item['judul']) < 60) {
                                            $judul = $item['judul'];
                                        } else {
                                            $judul = substr($item['judul'], 0, 60) . ' ...';
                                        }

                                        ?>
                                        <h3><a href="<?= base_url('informasi-detail/' . $item['slug']); ?>" target="_blank"><?= $judul ?></a></h3>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <p style="font-size: 12px;">
                                                    <i class="fa fa-calendar mr-1"></i>
                                                    <?= $item['tanggal'] ?>
                                                </p>
                                            </div>
                                            <div class="col-lg-7">
                                                <p style="font-size: 12px;">
                                                    <i class="fa fa-user mr-1"></i>
                                                    <?= $item['penulis'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <!-- Lihat Semua Berita -->
        <center class="mt-5">
            <a href="<?= base_url('informasi'); ?>" class="boxed-btn3">Lihat Semua</a>
        </center>
    </div>
    <!-- Akhir Berita dan Artikel -->

    <!-- Kerjasama Fakultas -->
    <!-- <div class="section_title text-center mb-55 mt-5">
        <h3>Mitra Kerjasama</h3>
    </div>
    <div class="testmonial_area">
        <div class="testmonial_active owl-carousel">
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <p>Judul Kerjasama Fakultas kedokteran dengan Rumah Sakit Judul Kerjasama Fakultas kedokteran dengan Rumah Sakit Judul Kerjasama Fakultas kedokteran dengan Rumah Sakit Judul Kerjasama Fakultas kedokteran dengan Rumah Sakit
                                </p>
                                <div class="testmonial_author">
                                    <h4>Rumah Sakit IA Moeis</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <p>Judul Kerjasama Fakultas kedokteran dengan Rumah Sakit Judul Kerjasama Fakultas kedokteran dengan Rumah Sakit Judul Kerjasama Fakultas kedokteran dengan Rumah Sakit Judul Kerjasama Fakultas kedokteran dengan Rumah Sakit
                                </p>
                                <div class="testmonial_author">
                                    <h4>Rumah Sakit IA Moeis</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <p>Judul Kerjasama Fakultas kedokteran dengan Rumah Sakit Judul Kerjasama Fakultas kedokteran dengan Rumah Sakit Judul Kerjasama Fakultas kedokteran dengan Rumah Sakit Judul Kerjasama Fakultas kedokteran dengan Rumah Sakit
                                </p>
                                <div class="testmonial_author">
                                    <h4>Rumah Sakit IA Moeis</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Lihat Semua Kerjasama -->
    <!-- <center class="mt-5">
            <a href="<?= base_url('/mitra'); ?>" class="boxed-btn3">Lihat Semua</a>
        </center>
    </div> -->
    <!-- Akhir Kerjasama Fakultas-->

    <!-- Pimpinan Fakultas -->
    <div class="expert_doctors_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="doctors_title mb-55">
                        <h3>Tentang Kami</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="cards">
                        <div class="expert_active owl-carousel">

                            <?php foreach ($pejabat as $itempejabat) : ?>
                                <div class="single_expert">
                                    <div class="box-berita">
                                        <div class="expert_thumb">
                                            <img src="<?= base_url('writable/uploads/content/pejabat/' . $itempejabat['gambar']); ?>">
                                        </div>
                                        <div class="experts_name text-center">
                                            <h3><?= $itempejabat['nama'] ?></h3>
                                            <span><?= $itempejabat['jabatan'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Lihat Semua Pegawai -->
            <center class="mt-5">
                <a href="<?= base_url('profil-sdm/dosen'); ?>" class="boxed-btn3">Lihat Semua</a>
            </center>
        </div>
    </div>
    <!--Akhir Pimpinan Fakultas -->

    <!-- Google Maps -->
    <div class="Emergency_contact">
        <div class="conatiner-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="single_emergency d-flex align-items-center justify-content-center  overlay_skyblue">
                        <div class="info" style="margin-right: 100px;">
                            <i class="fa fa-map-marker text-white" style="font-size: 100px;"></i>
                        </div>
                        <br>
                        <div class="info" style="margin-right: 100px;">
                            <h1 class="text-white">Temukan Kami</h1>
                            <h4 class="text-white">Fakultas Kedokteran <br> Universitas Mulawarman </h4>
                        </div>
                        <br>
                        <div class="info_button">
                            <a target="_blank" href="https://goo.gl/maps/aRWabkRXjMW7wDMC9" class="boxed-btn3-white">Buka Maps</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Google Maps -->
</body>

<?= $this->include('frontend/layouts/footer') ?>
<?= $this->include('frontend/layouts/js') ?>
<?= $this->include('frontend/layouts/home-js') ?>