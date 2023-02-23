<div class="card-header">
    <h4 class="mb-0">Sub Menu 2</h4><!-- button tambah modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal">
        <span class="feather icon-plus text-light"></span>
    </button>
</div>
<!-- tambah modal-->
<div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('submenu2/tambah'); ?>" method="post" class="tambah">
                    <?php csrf_field() ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="text-primary">Urutan</label>
                                <input type="text" name="urutan" class="form-control urutan" placeholder="Urutan">
                                <div class="invalid-feedback errorUrutan"></div>
                                <br>
                            </div>
                            <div class="col-lg-9">
                                <label class="text-primary">Sub Menu</label>
                                <input type="text" name="submenu" class="form-control submenu" placeholder="Sub Menu">
                                <div class="invalid-feedback errorSubmenu"></div>
                            </div>
                            <div class="col-lg-12">
                                <label class="text-primary">Content</label>
                                <textarea name="isi" id="isi"></textarea>
                                <div class="invalid-feedback errorSubmenu"></div>
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
                    <th width="30%">SUB MENU</th>
                    <th width="60%">Content</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($submenu as $item) : ?>
                    <tr>
                        <!-- ISI VIEW -->
                        <td><?= $item['urutan'] ?></td>
                        <td>
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
                                            <form action="<?= base_url('mainmenu/edit'); ?>" method="post" class="edit">
                                                <?php csrf_field() ?>
                                                <div class="modal-body" style="text-align:left ;">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label class="text-primary">Urutan</label>
                                                            <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                                                            <input type="text" name="urutan" value="<?= $item['urutan'] ?>" class="form-control urutan" placeholder="Urutan">
                                                            <div class="invalid-feedback errorUrutan"></div>
                                                            <br>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <?= $item['content'] ?>

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
                            <a href="<?= base_url('mainmenu/hapus/' . $item['id']); ?>" class="hapus">
                                <span class="btn-sm btn-danger feather icon-trash-2 text-default"></span>
                            </a>
                        <td><?= $item['submenu'] ?></td>
                        <td><?= $item['content'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<script src="<?= base_url('ckeditor7/build/ckeditor.js') ?>"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#isi'), {}).then(editor => {
            console.log(editor);
        }).catch(error => {
            console.log(error);
        });
</script>
<?= $this->include('backend/submenu/ajax') ?>
<?= $this->include('backend/layouts/js_view') ?>