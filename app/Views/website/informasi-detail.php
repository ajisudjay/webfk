<?= $this->include('layouts/header') ?>

<body>
    <?= $this->include('layouts/navbar') ?>
    <!-- Isi Konten Website -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area bradcam_overlay" style="height: 350px;">
        <div class="container">
            <div class="row" style="margin-top: -50px;">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3><?= $slug ?></h3>
                        <p><a href="<?= base_url('/'); ?>">Beranda /</a> <?= $title ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="<?= base_url(''); ?>/img/blog/berita.jpg" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>
                                <?= $slug ?>
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i>By prodikedokteran</a></li>
                                <li><a href="#"><i class="fa fa-calendar"></i> 17-09-2022</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i> prodikedokteran</a></li>
                                <li><a href="#"><i class="fa fa-list"></i> akademik</a></li>
                            </ul>
                            <p class="excert">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower
                            </p>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training. who has the willpower to actually
                            </p>
                            <div class="quote-wrapper">
                                <div class="quotes">
                                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                    should have to spend money on boot camp when you can get the MCSE study materials yourself at
                                    a fraction of the camp price. However, who has the willpower to actually sit through a
                                    self-imposed MCSE training.
                                </div>
                            </div>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower
                            </p>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training. who has the willpower to actually
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <?= $this->include('layouts/sidebar') ?>
                <!-- akhir sidebar -->

            </div>
        </div>
    </section>

    <!-- Akhir Isi Konten Website -->
    <?= $this->include('layouts/footer') ?>
</body>

<?= $this->include('layouts/js') ?>