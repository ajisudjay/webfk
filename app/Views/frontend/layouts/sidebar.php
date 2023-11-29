<div class="col-lg-3">
    <div class="blog_right_sidebar">

        <!-- Populer -->
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Populer</h4>
            <ul class="list cat-list">
                <?php foreach ($populer as $item) : ?>
                    <li>
                        <a href="<?= base_url('informasi-detail/' . $item['slug']); ?>" class="d-flex">
                            <strong style="color:#1F1F1F;text-align: center;"><?= $item['judul'] ?></strong>
                        </a>
                        <div align="center">
                            <a href="<?= base_url('informasi-detail/' . $item['slug']); ?>">
                                <img src="<?= base_url('/writable/uploads/content/berita/' . $item['banner'] . ''); ?>" width="125px">
                            </a>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </aside>

        <!-- Kategori -->
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Kategori</h4>
            <ul class="list cat-list">
                <li>
                    <a href="/informasi-kategori/berita" class="d-flex">
                        <p>Berita</p>
                        <p>(37)</p>
                    </a>
                </li>
                <li>
                    <a href="/informasi-kategori/pengumuman" class="d-flex">
                        <p>Pengumuman</p>
                        <p>(10)</p>
                    </a>
                </li>
                <li>
                    <a href="/informasi-kategori/kegiatan" class="d-flex">
                        <p>Kegiatan</p>
                        <p>(03)</p>
                    </a>
                </li>
            </ul>
        </aside>
    </div>
</div>