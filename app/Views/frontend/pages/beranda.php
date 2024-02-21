<?= $this->include('frontend/layouts/header') ?>

<body onload="removeLoader();">
    <?= $this->include('frontend/layouts/navbar') ?>
    <!-- Aplikasi -->
    <div class="service_area">
        <div class="container p-0">
            <div class="row no-gutters" style="text-align:center;border-color: red;">
                <?php foreach ($data_prodi as $item_prodi) : ?>
                    <div class="col-xl-3" style="margin-top: 5px;margin-bottom: 5px;">
                        <h5 style="color: white;">
                            <?php
                            if ($item_prodi['akreditasi'] == "A") {
                                $logo = 'a.png';
                            } elseif ($item_prodi['akreditasi'] == "Baik Sekali") {
                                $logo = 'baiksekali.png';
                            } else {
                                $logo = 'baik.png';
                            }
                            ?>
                            <img src="<?= base_url('/img/logo_akre/' . $logo); ?>" width="75px" height="75px"> <br>
                            <?= $item_prodi['prodi'] ?>
                        </h5>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- Akhir Aplikasi -->
    <!-- Slider Beranda -->
    <div align="center">
        <video width="95%" autoplay muted loop>
            <source src="img/video/profilkecil.mp4" type="video/mp4">
        </video>
    </div>
    <!-- akhir slider beranda -->
    <?php
    $jarak = 1;
    if ($jum_app > 6) {
        $jarak = 2;
    } else {
        $jarak = 12 / $jum_app;
    }
    ?>
    <!-- Aplikasi -->
    <div class="service_area">
        <div class="container p-0">
            <div class="row no-gutters" style="text-align:center;border-color: red;">
                <?php foreach ($aplikasi as $item) : ?>
                    <div class="col-xl-<?= $jarak ?>" style="margin-top: 5px;margin-bottom: 5px;">
                        <a target="_blank" href="<?= $item['link'] ?>" class="boxed-btn3-white"><img src="<?= base_url('writable/uploads/content/aplikasi/' . $item['gambar']); ?>" width="100px" height="100px"></a>
                    </div>
                <?php endforeach ?>
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
                                        <a href="<?= base_url('informasi-detail/' . $item['slug']); ?>" target="_blank">
                                            <img src="<?= base_url('writable/uploads/content/berita/' . $item['banner']); ?>" width="300px" height="300px">
                                        </a>
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
    <div class="section_title text-center mb-55 mt-5">
        <h3>Mitra Kerjasama</h3>
    </div>
    <div class="testmonial_area">
        <div class="testmonial_active owl-carousel">
            <?php foreach ($mitra as $item_mitra) : ?>
                <div class="single-testmonial overlay2" style="background-size: auto; background-image: url(<?= base_url('writable/uploads/content/konfigurasi/' . $konfigurasi['foto']); ?>);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 offset-xl-1">
                                <div class="testmonial_info text-center">
                                    <h3><?= $item_mitra['nama'] ?></h3><br>
                                    <h5>Hasil atau Manfaat yang diperoleh</h5>
                                    <h5>"<?= $item_mitra['hasil'] ?>"</h5><br>
                                    <table align="center" class="table">
                                        <tr>
                                            <th align="center">
                                                Pendidikan
                                            </th>
                                            <th>
                                                Penelitian
                                            </th>
                                            <th>
                                                Pengabdian kepada Masyarakat
                                            </th>
                                            <th>
                                                Jenis
                                            </th>
                                            <th>
                                                Masa Kerjasama
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?= $item_mitra['pendidikan'] ?>
                                            </td>
                                            <td>
                                                <?= $item_mitra['penelitian'] ?>
                                            </td>
                                            <td>
                                                <?= $item_mitra['pkm'] ?>
                                            </td>
                                            <td>
                                                <?= $item_mitra['jenis'] ?>
                                            </td>
                                            <td>
                                                <?= $item_mitra['mulai_kerjasama'] . ' - ' . $item_mitra['berakhir_kerjasama'] ?>
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <!-- Lihat Semua Kerjasama -->
        <center class="mt-5">
            <a href="<?= base_url('/mitra-lengkap'); ?>" class="boxed-btn3">Lihat Semua</a>
        </center>
    </div>
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
                                        <div class="expert_thumb" align="center">
                                            <img src="<?= base_url('writable/uploads/content/pejabat/' . $itempejabat['gambar']); ?>" style="height:250px;width:250px;">
                                        </div>
                                        <div class="experts_name text-center">
                                            <h4><?= $itempejabat['nama'] ?></h4>
                                            <span><?= $itempejabat['jabatan'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Akhir Pimpinan Fakultas -->
</body>

<?= $this->include('frontend/layouts/footer') ?>
<?= $this->include('frontend/layouts/js') ?>
<?= $this->include('frontend/layouts/home-js') ?>