<div class="container-fluid">
    <div class="card-header">
        <?php foreach ($konfigurasi as $item) : ?>
            <h4 class="mb-0">Konfigurasi <span style="font-size: x-small">(terakhir diupdate oleh : <?= $item['admin'] . ' | ' . $item['timestamp']  ?>)</span></h4>
        <?php endforeach ?>
        <br>
        <br>
    </div>
    <div class=" card-block">
        <?php foreach ($konfigurasi as $item) : ?>
            <!-- ISI FORM -->
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?= base_url('konfigurasi/editvisi'); ?>" method="post" class="editvisi">
                        <?= csrf_field() ?>
                        <label> Visi :</label>
                        <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                        <textarea name="visi" id="visi" class="form-control visi" rows="5"><?= $item['visi'] ?></textarea>
                        <div class="invalid-feedback errorVisi"></div>
                        <br>
                        <div align="right">
                            <button type="submit" class="btn btn-primary btnEditvisi">Perbarui</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12">
                    <form action="<?= base_url('konfigurasi/editmisi'); ?>" method="post" class="editmisi">
                        <?= csrf_field() ?>
                        <label> Misi :</label>
                        <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                        <textarea name="misi" id="misi" class="form-control misi" rows="5"><?= $item['misi'] ?></textarea>
                        <div class="invalid-feedback errorMisi"></div>
                        <br>
                        <div align="right">
                            <button type="submit" class="btn btn-primary btnEditmisi">Perbarui</button>
                        </div>
                    </form>
                </div>
                <br>
                <br>
                <div class="col-lg-12">
                    <form action="<?= base_url('konfigurasi/editfoto'); ?>" method="post" enctype="multipart/form-data" class="editfoto">
                        <?= csrf_field() ?>
                        <div class="col-lg-4">
                            <p>Background Mitra Kerjasama :</p>
                            <span style="color: red;">*Max-Size : 512 kb | extension : jpg/jpeg/png/PNG</span>
                        </div>
                        <img src="<?= base_url('writable/uploads/content/konfigurasi/' . $item['foto']); ?>" width="50%">
                        <br>
                        <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="file" name="foto" accept="image/*" class="form-control foto">
                                <div class="invalid-feedback errorfoto"></div>
                            </div>
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-primary btnEditfoto">Perbarui</button>
                            </div>
                        </div>
                        <br>
                        <br>
                    </form>
                </div>
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
                        <br>
                    </div>
                    <div class="col-lg-12">
                        <label> Password SPMI :</label><br>
                        <input type="text" name="pass_spmi" class="form-control pass_spmi" value="<?= base64_decode($item['pass_spmi']) ?>">
                        <div class="invalid-feedback errorPass_spmi"></div>
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