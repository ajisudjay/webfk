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
                    <form action="<?= base_url('prodi/tambah'); ?>" method="post" class="tambah">
                        <?= csrf_field() ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="text-primary">Urutan</label>
                                    <input type="number" min="1" name="urutan" class="form-control urutan" placeholder="Urutan">
                                    <div class="invalid-feedback errorurutan"></div>
                                    <br>
                                </div>
                                <div class="col-lg-12">
                                    <label class="text-primary">Program Studi</label>
                                    <input type="text" name="prodi" class="form-control prodi" placeholder="Program Studi">
                                    <div class="invalid-feedback errorprodi"></div>
                                    <br>
                                </div>
                                <div class="col-lg-12">
                                    <label class="text-primary">Akreditasi</label>
                                    <select name="akreditasi" class="form-control akreditasi">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="Unggul">Unggul</option>
                                        <option value="Sangat Baik">Sangat Baik</option>
                                        <option value="Baik Sekali">Baik Sekali</option>
                                        <option value="Baik">Baik</option>
                                    </select>
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
                        <th width="5%">No</th>
                        <th width="5%" style="text-align: center;">AKSI</th>
                        <th width="45%">Prodi</th>
                        <th width="35%">Akreditasi</th>
                        <th width="10%">Log</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($prodi as $item) : ?>
                        <tr>
                            <!-- ISI VIEW -->
                            <td><?= $item['urutan'] ?></td>
                            <td style="text-align: center;">
                                <!-- edit button-->
                                <button type="button" class="btn-sm btn-primary border-0" data-toggle="modal" data-target="#editmodal<?= $id = $item['id'] ?>">
                                    <span class="feather icon-edit-1 text-default"></span>
                                </button>
                                <!-- button hapus modal-->
                                <a href="<?= base_url('prodi/hapus/' . $item['id']); ?>" class="hapus">
                                    <span class="btn-sm btn-danger feather icon-trash-2 text-default"></span>
                                </a>
                                <!-- edit modal-->
                                <div class="modal fade" id="editmodal<?= $id = $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('prodi/edit'); ?>" method="post" class="edit">
                                                    <?= csrf_field() ?>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <label class="text-primary">Urutan</label>
                                                                    <input type="number" min="1" name="urutan" class="form-control urutan" value="<?= $item['urutan'] ?>">
                                                                    <div class="invalid-feedback errorurutan"></div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <label class="text-primary">Program Studi</label>
                                                                    <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                                                                    <input type="text" name="prodi" class="form-control prodi" value="<?= $item['prodi'] ?>">
                                                                    <div class="invalid-feedback errorprodi"></div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <label class="text-primary">Akreditasi</label>
                                                                    <select name="akreditasi" class="form-control akreditasi">
                                                                        <option value="<?= $item['akreditasi'] ?>"><?= $item['akreditasi'] ?></option>
                                                                        <option value="A">A</option>
                                                                        <option value="B">B</option>
                                                                        <option value="C">C</option>
                                                                        <option value="Unggul">Unggul</option>
                                                                        <option value="Sangat Baik">Sangat Baik</option>
                                                                        <option value="Baik Sekali">Baik Sekali</option>
                                                                        <option value="Baik">Baik</option>
                                                                    </select>
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
                            </td>
                            <td><?= $item['prodi'] ?></td>
                            <td><?= $item['akreditasi'] ?></td>
                            <td><?= $item['timestamp'] . ' | ' . $item['admin'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->include('backend/prodi/ajax') ?>
<?= $this->include('backend/layouts/js_view') ?>