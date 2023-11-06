<div class="col-lg-3">
    <div class="blog_right_sidebar">

        <!-- Kategori -->
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Populer</h4>
            <ul class="list cat-list">
                <?php foreach ($populer as $item) : ?>
                    <li>
                        <div align="center">
                            <img src="<?= base_url('/writable/uploads/content/berita/' . $item['banner'] . ''); ?>" width="150px"> &nbsp;&nbsp;&nbsp;
                        </div>
                        <a href="<?= base_url('informasi-detail/' . $item['slug']); ?>" class="d-flex">
                            <p style="font-size: small;"><?= $item['judul'] ?></p>
                            &nbsp;&nbsp;&nbsp;
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </aside>

        <!-- Kategori -->
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Kategori</h4>
            <ul class="list cat-list">
                <li>
                    <a href="#" class="d-flex">
                        <p>Berita</p>
                        <p>(37)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Pengumuman</p>
                        <p>(10)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex">
                        <p>Kegiatan</p>
                        <p>(03)</p>
                    </a>
                </li>
            </ul>
        </aside>


        <!-- Akhir Kategori -->

        <!-- Tag -->
        <!-- <aside class="single_sidebar_widget tag_cloud_widget">
            <h4 class="widget_title">Tag Informasi</h4>
            <ul class="list">
                <li>
                    <a href="#">prodikedokteran</a>
                </li>
                <li>
                    <a href="#">prodigigi</a>
                </li>
                <li>
                    <a href="#">prodid3kep</a>
                </li>
                <li>
                    <a href="#">prodiprofesiked</a>
                </li>
                <li>
                    <a href="#">prodiprofesigigi</a>
                </li>
            </ul>
        </aside> -->
        <!-- Akhir Tag -->
    </div>
</div>