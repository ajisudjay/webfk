<?= $this->include('frontend/layouts/header') ?>

<body>
    <?= $this->include('frontend/layouts/navbar') ?>
    <!-- Isi Konten Website -->
    <!-- bradcam_area_start  -->
    <div class="bradcam_area bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Semua Mitra</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <div class="single-post">
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-hover-animation nowrap">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="95%">Nama Instansi</th>
                                        <!-- <th width="10%" style="text-align: center;">Jenis</th>
                                        <th width="5%" style="text-align: center;">Pendidikan</th>
                                        <th width="5%" style="text-align: center;">Penelitian</th>
                                        <th width="5%" style="text-align: center;">PkM</th>
                                        <th width="15%" style="text-align: center;">Masa Kerjasama</th>
                                        <th width="25%" style="text-align: center;">Hasil</th>
                                        <th width="5%" style="text-align: center;">Laporan</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mitra as $item) : ?>
                                        <tr>
                                            <!-- ISI VIEW -->
                                            <td><?= $item['urutan'] ?></td>
                                            <td style="min-width: 100px;max-width: 200px; white-space: normal;"><?= $item['nama'] ?></td>
                                            <!-- <td><?= $item['jenis'] ?></td>
                                            <td><?= $item['pendidikan'] ?></td>
                                            <td><?= $item['penelitian'] ?></td>
                                            <td><?= $item['pkm'] ?></td>
                                            <td><?= $item['mulai_kerjasama'] . '-' . $item['berakhir_kerjasama'] ?></td>
                                            <td style="min-width: 300px;max-width: 500px; white-space: normal;"><?= $item['hasil'] ?></td>
                                            <td><a href="<?= $item['laporan'] ?>" target="_blank"><i class="fa fa-download"></i></a></td> -->
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Akhir Isi Konten Website -->
    <?= $this->include('frontend/layouts/footer') ?>
</body>

<?= $this->include('frontend/layouts/js') ?>