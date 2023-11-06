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
                        <h3><?= $slug ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <!-- Berita -->
                <!-- View data max 5 per page -->
                <div class="col-lg-9 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="<?= base_url(''); ?>/img/blog/berita2.jpeg" alt="" style="height: 322px;">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="single-blog.html">
                                            <!-- Maksimal tampil 10 kata -->
                                            <h2>
                                                Penerimaan Mahasiswa Baru Jalur Mandiri Tahun Akademik 2022/2023
                                            </h2>
                                        </a>
                                        <p>
                                            <!-- Maksimal tampil 10 kata -->
                                            Penerimaan Mahasiswa Baru Jalur Mandiri Tahun Akademik 2022/2023
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="blog-info-link">
                                                    <li><a href="#"><i class="fa fa-user"></i>By prodikedokteran</a></li>
                                                    <li><a href="#"><i class="fa fa-calendar"></i> 17-09-2022</a></li>
                                                    <li><a href="#"><i class="fa fa-tag"></i> prodikedokteran</a></li>
                                                    <li><a href="#"><i class="fa fa-list"></i> akademik</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="<?= base_url(''); ?>/img/blog/berita2.jpeg" alt="" style="height: 322px;">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="single-blog.html">
                                            <!-- Maksimal tampil 10 kata -->
                                            <h2>
                                                Penerimaan Mahasiswa Baru Jalur Mandiri Tahun Akademik 2022/2023
                                            </h2>
                                        </a>
                                        <p>
                                            <!-- Maksimal tampil 10 kata -->
                                            Penerimaan Mahasiswa Baru Jalur Mandiri Tahun Akademik 2022/2023
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="blog-info-link">
                                                    <li><a href="#"><i class="fa fa-user"></i>By prodikedokteran</a></li>
                                                    <li><a href="#"><i class="fa fa-calendar"></i> 17-09-2022</a></li>
                                                    <li><a href="#"><i class="fa fa-tag"></i> prodikedokteran</a></li>
                                                    <li><a href="#"><i class="fa fa-list"></i> akademik</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Akhir Berita -->

                <!-- Sidebar -->
                <?= $this->include('frontend/layouts/sidebar') ?>
                <!-- akhir sidebar -->

            </div>
        </div>
    </section>

    <!-- Akhir Isi Konten Website -->

    <?= $this->include('frontend/layouts/footer') ?>
</body>

<?= $this->include('frontend/layouts/js') ?>