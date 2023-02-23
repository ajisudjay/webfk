<div class="card-header">
    <h4 class="mb-0">Galeri</h4>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('galeri/tambah'); ?>" method="post" enctype="multipart/form-data" class="tambah">
                    <?php csrf_field() ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="text-primary">Nama</label>
                                <input type="text" name="nama" class="form-control nama" placeholder="Nama" required>
                                <div class="invalid-feedback errorNama"></div>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <br>
                            <div class="col-lg-6">
                                <label class="text-primary">Gambar</label>
                                <input type="file" name="file" class="form-control gambar" accept="image/*" required>
                                <div class="invalid-feedback errorGambar"></div>
                                <br>
                            </div>
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
                    <th width="25%">Nama</th>
                    <th width="35%" style="text-align: center;">Gambar</th>
                    <th width="30%">URL</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($galeri as $item) : ?>
                    <tr>
                        <!-- ISI VIEW -->
                        <td><?= $no++ ?></td>
                        <td style="text-align: center;">
                            <!-- button hapus modal-->
                            <a href="<?= base_url('galeri/hapus/' . $item['id']); ?>" class="hapus">
                                <span class="btn-sm btn-danger feather icon-trash-2 text-default"></span>
                            </a>
                        <td><?= $item['nama'] ?></td>

                        <td style="text-align: center;"><img src="content/galeri/<?= $item['gambar'] ?>" width="50%"></td>
                        <td>
                            <div class="row">
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="text-copy" value="https://fk.unmul.ac.id/content/galeri/<?= $item['gambar'] ?>">
                                    <br>
                                </div>
                                <div class="col-lg-1">
                                    <button class="btn btn-primary copy-btn" type="button">
                                        <span class="fa fa-copy"></span>
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->include('backend/galeri/ajax') ?>
<?= $this->include('backend/layouts/js_view') ?>