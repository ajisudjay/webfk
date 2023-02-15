<!-- button tambah modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal">
    <span class="feather icon-plus text-light"></span>
</button>
<!-- tambah modal-->
<div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Jenis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('jenis/tambah'); ?>" method="post" class="tambah">
                    <?php csrf_field() ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="text-primary">Jenis</label>
                                <input type="text" name="jenis" class="form-control jenis" placeholder="Jenis">
                                <div class="invalid-feedback errorJenis"></div>
                                <br>
                            </div>
                            <div class="col-lg-5">
                                <label class="text-primary">Latitude</label>
                                <input type="text" name="latitude" class="form-control latitude" placeholder="Latitude">
                                <div class="invalid-feedback errorLongitude"></div>
                            </div>
                            <div class="col-lg-5">
                                <label class="text-primary">Longitude</label>
                                <input type="text" name="longitude" class="form-control longitude" placeholder="Longitude">
                                <div class="invalid-feedback errorLongitude"></div>
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
<div class="card-content">
    <div class="table-responsive">
        <table class="table table-striped table-hover-animation">
            <thead>
                <tr>
                    <th width="5%" style="text-align:center;">URUTAN</th>
                    <th width="5%" style="text-align:center;">AKSI</th>
                    <th width="10%">SUB MENU</th>
                    <th width="80%">MAIN MENU</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($submenu as $item) : ?>
                    <tr>
                        <!-- ISI VIEW -->
                        <td style="text-align:center;"><?= $item['submenu_urutan'] ?></td>
                        <td style="text-align:center;">
                            <!-- button edit modal -->
                            <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#editmodal<?= $id = $item['id'] ?>">
                                <span class="feather icon-edit-1 text-primary"></span>
                            </button>
                            <!-- edit modal-->
                            <div class="modal fade" id="editmodal<?= $id = $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Ubah Jenis</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('jenis/edit'); ?>" method="post" class="edit">
                                                <?php csrf_field() ?>
                                                <div class="modal-body" style="text-align:left ;">
                                                    <div class="row">
                                                        <div class="col-lg-11">
                                                            <label class="text-primary">Jenis</label>
                                                            <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                                                            <input type="text" name="jenis" value="<?= $item['submenu'] ?>" class="form-control jenis" placeholder="Jenis">
                                                            <div class="invalid-feedback errorJenis"></div>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                                                    <button type="submit" class="btn btn-primary btnEdit">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- button hapus modal-->
                            <a href="<?= base_url('jenis/hapus/' . $item['id']); ?>" class="hapus">
                                <span class="feather icon-trash-2 text-danger"></span>
                            </a>
                        <td><?= $item['submenu'] ?></td>
                        <td><?= $item['mainmenu_nama'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>