<div class="col-lg-3">
    <div class="blog_right_sidebar">

        <!-- Terbaru -->
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Artikel Terbaru</h4>
            <ul class="list cat-list">
                <?php foreach ($populer_1 as $item) : ?>
                    <li>
                        <span class="small">Berita</span>
                        <a href="<?= base_url('informasi-detail/' . $item['slug']); ?>" class="d-flex">
                            <p style="color:#1F1F1F;text-align: justify;font-size:small"><?= htmlspecialchars($item['judul']) ?></p>
                        </a>
                        <div align="center">
                            <a href="<?= base_url('informasi-detail/' . $item['slug']); ?>">
                                <img src="<?= base_url('/writable/uploads/content/berita/' . $item['banner'] . ''); ?>" width="125px">
                            </a>
                        </div>
                    </li>
                <?php endforeach ?>
                <?php foreach ($populer_2 as $item) : ?>
                    <li>
                        <span class="small">Pengumuman</span>
                        <a href="<?= base_url('informasi-detail/' . $item['slug']); ?>" class="d-flex">
                            <p style="color:#1F1F1F;text-align: justify;font-size:small"><?= htmlspecialchars($item['judul']) ?></p>
                        </a>
                        <div align="center">
                            <a href="<?= base_url('informasi-detail/' . $item['slug']); ?>">
                                <img src="<?= base_url('/writable/uploads/content/berita/' . $item['banner'] . ''); ?>" width="125px">
                            </a>
                        </div>
                    </li>
                <?php endforeach ?>
                <?php foreach ($populer_3 as $item) : ?>
                    <li>
                        <span class="small">Kegiatan</span>
                        <a href="<?= base_url('informasi-detail/' . $item['slug']); ?>" class="d-flex">
                            <p style="color:#1F1F1F;text-align: justify;font-size:small"><?= htmlspecialchars($item['judul']) ?></p>
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