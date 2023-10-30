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
                        <div class="slide-in-text">
                            <h3>Visi</h3>
                            <br>
                            <p style="margin-top: -25px;"><?= $konfigurasi['visi'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visi MisiArea -->

        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="welcome_docmed_info">
                        <div class="box-berita">
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
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="box-berita">
                            <div class="single_department">
                                <div class="department_thumb">
                                    <img src="img/department/1.png" alt="">
                                </div>
                                <div class="department_content">
                                    <!-- limit Judul max 6 kata -->
                                    <h3><a href="<?= base_url('informasi-detail/bulan-kesehatan-gigi-nasional-tahun-2022'); ?>">BULAN KESEHATAN GIGI NASIONAL TAHUN 2022</a></h3>
                                    <!-- Limit Deskripsi 25 kata -->
                                    <p>Pada tanggal 5 hingga 7 Desember 2022 Program Studi Kedokteran Gigi Fakultas Kedokteran, Universitas Mulawarman bekerjasama dengan Unilever mengadakan acara Bulan Kesehatan Gigi ...</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-calendar mr-1"></i>
                                                2022-12-05
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-user mr-1"></i>
                                                prodikedokteran
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="box-berita">
                            <div class="single_department">
                                <div class="department_thumb">
                                    <img src="img/department/2.png" alt="">
                                </div>
                                <div class="department_content">
                                    <!-- limit Judul max 6 kata -->
                                    <h3><a href="<?= base_url('informasi-detail/bulan-kesehatan-gigi-nasional-tahun-2022'); ?>">BULAN KESEHATAN GIGI NASIONAL TAHUN 2022</a></h3>
                                    <!-- Limit Deskripsi 25 kata -->
                                    <p>Pada tanggal 5 hingga 7 Desember 2022 Program Studi Kedokteran Gigi Fakultas Kedokteran, Universitas Mulawarman bekerjasama dengan Unilever mengadakan acara Bulan Kesehatan Gigi ...</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-calendar mr-1"></i>
                                                2022-12-05
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-user mr-1"></i>
                                                prodikedokteran
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="box-berita">
                            <div class="single_department">
                                <div class="department_thumb">
                                    <img src="img/department/3.png" alt="">
                                </div>
                                <div class="department_content">
                                    <!-- limit Judul max 6 kata -->
                                    <h3><a href="<?= base_url('informasi-detail/bulan-kesehatan-gigi-nasional-tahun-2022'); ?>">BULAN KESEHATAN GIGI NASIONAL TAHUN 2022</a></h3>
                                    <!-- Limit Deskripsi 25 kata -->
                                    <p>Pada tanggal 5 hingga 7 Desember 2022 Program Studi Kedokteran Gigi Fakultas Kedokteran, Universitas Mulawarman bekerjasama dengan Unilever mengadakan acara Bulan Kesehatan Gigi ...</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-calendar mr-1"></i>
                                                2022-12-05
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-user mr-1"></i>
                                                prodikedokteran
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="box-berita">
                            <div class="single_department">
                                <div class="department_thumb">
                                    <img src="img/department/4.png" alt="">
                                </div>
                                <div class="department_content">
                                    <!-- limit Judul max 6 kata -->
                                    <h3><a href="<?= base_url('informasi-detail/bulan-kesehatan-gigi-nasional-tahun-2022'); ?>">BULAN KESEHATAN GIGI NASIONAL TAHUN 2022</a></h3>
                                    <!-- Limit Deskripsi 25 kata -->
                                    <p>Pada tanggal 5 hingga 7 Desember 2022 Program Studi Kedokteran Gigi Fakultas Kedokteran, Universitas Mulawarman bekerjasama dengan Unilever mengadakan acara Bulan Kesehatan Gigi ...</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-calendar mr-1"></i>
                                                2022-12-05
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-user mr-1"></i>
                                                prodikedokteran
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="box-berita">
                            <div class="single_department">
                                <div class="department_thumb">
                                    <img src="img/department/5.png" alt="">
                                </div>
                                <div class="department_content">
                                    <!-- limit Judul max 6 kata -->
                                    <h3><a href="<?= base_url('informasi-detail/bulan-kesehatan-gigi-nasional-tahun-2022'); ?>">BULAN KESEHATAN GIGI NASIONAL TAHUN 2022</a></h3>
                                    <!-- Limit Deskripsi 25 kata -->
                                    <p>Pada tanggal 5 hingga 7 Desember 2022 Program Studi Kedokteran Gigi Fakultas Kedokteran, Universitas Mulawarman bekerjasama dengan Unilever mengadakan acara Bulan Kesehatan Gigi ...</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-calendar mr-1"></i>
                                                2022-12-05
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-user mr-1"></i>
                                                prodikedokteran
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="box-berita">
                            <div class="single_department">
                                <div class="department_thumb">
                                    <img src="img/department/6.png" alt="">
                                </div>
                                <div class="department_content">
                                    <!-- limit Judul max 6 kata -->
                                    <h3><a href="<?= base_url('informasi-detail/bulan-kesehatan-gigi-nasional-tahun-2022'); ?>">BULAN KESEHATAN GIGI NASIONAL TAHUN 2022</a></h3>
                                    <!-- Limit Deskripsi 25 kata -->
                                    <p>Pada tanggal 5 hingga 7 Desember 2022 Program Studi Kedokteran Gigi Fakultas Kedokteran, Universitas Mulawarman bekerjasama dengan Unilever mengadakan acara Bulan Kesehatan Gigi ...</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-calendar mr-1"></i>
                                                2022-12-05
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p style="font-size: 12px;">
                                                <i class="fa fa-user mr-1"></i>
                                                prodikedokteran
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <div class="single_expert">
                                <div class="box-berita">
                                    <div class="expert_thumb">
                                        <img src="img/experts/1.png" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Dekan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="box-berita">
                                    <div class="expert_thumb">
                                        <img src="img/experts/2.png" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Wakil Dekan I</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="box-berita">
                                    <div class="expert_thumb">
                                        <img src="img/experts/3.png" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Wakil Dekan II</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="box-berita">
                                    <div class="expert_thumb">
                                        <img src="img/experts/4.png" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Kaprodi S-1 Kedokteran</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="box-berita">
                                    <div class="expert_thumb">
                                        <img src="img/experts/1.png" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Kaprodi Profesi Kedokteran</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="box-berita">
                                    <div class="expert_thumb">
                                        <img src="img/experts/2.png" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Kaprodi Profesi Gigi</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="box-berita">
                                    <div class="expert_thumb">
                                        <img src="img/experts/2.png" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Kaprodi S-1 Kedokteran Gigi</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="box-berita">
                                    <div class="expert_thumb">
                                        <img src="img/experts/2.png" alt="">
                                    </div>
                                    <div class="experts_name text-center">
                                        <h3>Mirazul Alom</h3>
                                        <span>Kaprodi D-3 Keperawatan</span>
                                    </div>
                                </div>
                            </div>
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