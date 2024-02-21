<div class="container-fluid">
    <div class="card-header">
        <h4 class="mb-0">Konfigurasi</h4>
        <br>
        <br>
    </div>
    <div class="card-block">
        <?php foreach ($konfigurasi as $item) : ?>
            <!-- ISI FORM -->
            <div class="row">
                <form action="<?= base_url('konfigurasi/editvisi'); ?>" method="post" class="editvisi">
                    <?= csrf_field() ?>
                    <div class="col-lg-12">
                        <label> Visi :</label>
                        <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                        <textarea name="visi" id="visi" class="form-control visi" rows="5"><?= $item['visi'] ?></textarea>
                        <div class="invalid-feedback errorVisi"></div>
                        <br>
                    </div>
                    <div align="right">
                        <button type="submit" class="btn btn-primary btnEditvisi">Perbarui</button>
                    </div>
                </form>
                <form action="<?= base_url('konfigurasi/editmisi'); ?>" method="post" class="editmisi">
                    <?= csrf_field() ?>
                    <div class="col-lg-12">
                        <label> Misi :</label>
                        <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                        <textarea name="misi" id="misi" class="form-control misi" rows="5"><?= $item['misi'] ?></textarea>
                        <div class="invalid-feedback errorMisi"></div>
                        <br>
                    </div>
                    <div align="right">
                        <button type="submit" class="btn btn-primary btnEditmisi">Perbarui</button>
                    </div>
                </form>
                <br>
                <br>
                <form action="<?= base_url('konfigurasi/editfoto'); ?>" method="post" enctype="multipart/form-data" class="editfoto">
                    <?= csrf_field() ?>
                    <div class="row">
                        <div class="col-lg-12">
                            Background Mitra Kerjasama :
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="<?= base_url('writable/uploads/content/konfigurasi/' . $item['foto']); ?>" width="50%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <br>
                            <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                            <input type="file" name="foto" accept="image/*" class="form-control foto">
                            <div class="invalid-feedback errorfoto"></div>
                        </div>
                        <div class="col-lg-4">
                            <br>
                            <button type="submit" class="btn btn-primary btnEditfoto">Perbarui</button>
                            <br>
                            <br>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <br>
            <form action="<?= base_url('konfigurasi/edit'); ?>" method="post" class="edit">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col-lg-6">
                        <label> Email :</label><br>
                        <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                        <textarea name="email" class="form-control email" rows="2"><?= $item['email'] ?></textarea>
                        <div class="invalid-feedback errorEmail"></div>
                    </div>
                    <div class="col-lg-6">
                        <label> Telepon :</label><br>
                        <textarea name="telepon" class="form-control telepon" rows="2"><?= $item['telepon'] ?></textarea>
                        <div class="invalid-feedback errorTelepon"></div>
                        <br>
                    </div>
                    <div class="col-lg-12">
                        <label> Alamat :</label><br>
                        <textarea name="alamat" class="form-control alamat" rows="5"><?= $item['alamat'] ?></textarea>
                        <div class="invalid-feedback errorAlamat"></div>
                        <br>
                    </div>
                    <div class="col-lg-4">
                        <label> Instagram :</label><br>
                        <input type="text" name="ig" class="form-control ig" value="<?= $item['ig'] ?>">
                        <div class="invalid-feedback errorIg"></div>
                    </div>
                    <div class="col-lg-4">
                        <label> Facebook :</label><br>
                        <input type="text" name="fb" class="form-control fb" value="<?= $item['fb'] ?>">
                        <div class="invalid-feedback errorFb"></div>
                    </div>
                    <div class="col-lg-4">
                        <label> Youtube :</label><br>
                        <input type="text" name="yt" class="form-control yt" value="<?= $item['yt'] ?>">
                        <div class="invalid-feedback errorYt"></div>
                    </div>
                </div>
                <br>
                <div align="right">
                    <button type="submit" class="btn btn-primary btnEdit">Perbarui</button>
                </div>
                <br>
            </form>
        <?php endforeach ?>
    </div>
</div>


<?= $this->include('backend/konfigurasi/ajax') ?>
<?= $this->include('backend/layouts/js_view') ?>