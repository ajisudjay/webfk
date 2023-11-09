<div class="container-fluid">
    <div class="card-header">
        <h4 class="mb-0"><?= $title ?></h4>
        <!-- button tambah modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal">
            <span class="feather icon-plus text-light"></span>
        </button>
    </div>
    <!-- tambah modal-->
    <div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah</h5>
                    <button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('aplikasi/tambah'); ?>" method="post" enctype="multipart/form-data" class="tambah">
                        <?= csrf_field() ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="text-primary">Urutan</label>
                                    <input type="number" name="urutan" class="form-control urutan" placeholder="Urutan">
                                    <div class="invalid-feedback errorurutan"></div>
                                    <br>
                                </div>
                                <div class="col-lg-12">
                                    <label class="text-primary">Nama</label>
                                    <input type="text" name="nama" class="form-control nama" placeholder="Nama">
                                    <div class="invalid-feedback errornama"></div>
                                    <br>
                                </div>
                                <div class="col-lg-12">
                                    <label class="text-primary">Link</label>
                                    <input type="text" name="link" class="form-control link" placeholder="Link">
                                    <div class="invalid-feedback errorlink"></div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-lg-12">
                                    <label class="text-primary">Gambar</label>
                                    <input type="file" name="gambar" class="form-control gambar" accept="image/*">
                                    <div class="invalid-feedback errorGambar"></div>
                                    <br>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                            <button type="submit" class="btn btn-primary btnSimpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="simpletable" class="table table-striped table-hover-animation nowrap">
                <thead>
                    <tr>
                        <th width="5%">Urutan</th>
                        <th width="5%" style="text-align: center;">AKSI</th>
                        <th width="30%">Nama</th>
                        <th width="25%">Link</th>
                        <th width="30%" style="text-align: center;">Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($aplikasi as $item) : ?>
                        <tr>
                            <!-- ISI VIEW -->
                            <td><?= $item['urutan'] ?></td>
                            <td style="text-align: center;">
                                <!-- edit button-->
                                <button type="button" class="btn-sm btn-primary border-0" data-toggle="modal" data-target="#editmodal<?= $id = $item['id'] ?>">
                                    <span class="feather icon-edit-1 text-default"></span>
                                </button>
                                <!-- edit modal-->
                                <div class="modal fade" id="editmodal<?= $id = $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('aplikasi/edit'); ?>" method="post" class="edit">
                                                    <?php csrf_field() ?>
                                                    <div class="modal-body" style="text-align:left ;">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Urutan</label>
                                                                <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                                                                <input type="number" name="urutan" class="form-control urutan" value="<?= $item['urutan'] ?>">
                                                                <div class="invalid-feedback errorurutan"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <label class="text-primary">Nama</label>
                                                                <input type="text" name="nama" class="form-control nama" value="<?= $item['nama'] ?>">
                                                                <div class="invalid-feedback errornama"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <label class="text-primary">Link</label>
                                                                <input type="text" name="link" class="form-control link" value="<?= $item['link'] ?>">
                                                                <div class="invalid-feedback errorlink"></div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                                                        <button type="submit" class="btn btn-primary btnSimpan">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- button hapus modal-->
                                <a href="<?= base_url('aplikasi/hapus/' . $item['id']); ?>" class="hapus">
                                    <span class="btn-sm btn-danger feather icon-trash-2 text-default"></span>
                                </a>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['link'] ?></td>

                            <td style="text-align: center;"><img src="<?= base_url('writable/uploads/content/aplikasi/' . $item['gambar']); ?>" width="100%"></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->include('backend/aplikasi/ajax') ?>
<?= $this->include('backend/layouts/js_view') ?>