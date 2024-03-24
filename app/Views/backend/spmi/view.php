<div class="container-fluid">
    <div class="card-header">
        <h4 class="mb-0">SPMI</h4>
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
                    <form action="<?= base_url('spmi/tambah'); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="text-primary">Kategori</label>
                                    <select name="kategori" class="form-control kategori">
                                        <option value="Audit Mutu Internal">Audit Mutu Internal</option>
                                        <option value="Audit Seleksi Maba">Audit Seleksi Maba</option>
                                        <option value="Kebijakan SPMI">Dokumen SPMI - Kebijakan</option>
                                        <option value="Manual SPMI">Dokumen SPMI - Manual</option>
                                        <option value="Standar SPMI">Dokumen SPMI - Standar</option>
                                        <option value="Formulir SPMI">Dokumen SPMI - Formulir</option>
                                        <option value="POB SPMI">Dokumen SPMI - POB</option>
                                        <option value="Dokumen Monev">Dokumen Monev</option>
                                        <option value="Evaluasi TL">Evaluasi TL</option>
                                        <option value="Instruksi Kerja">Instruksi Kerja</option>
                                        <option value="Kalender Sistem Penjaminan Mutu">Kalender Sistem Penjaminan Mutu</option>
                                        <option value="Laporan Survey Kepuasan">Laporan Survey Kepuasan</option>
                                        <option value="RTM">RTM</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-12">
                                    <label class="text-primary">Nama</label>
                                    <input type="text" name="nama" class="form-control nama" placeholder="Nama">
                                    <div class="invalid-feedback errornama"></div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-lg-12">
                                    <label class="text-primary">File <span style="color: red;">*max size 50mb</span></label>
                                    <input type="file" name="file" class="form-control file">
                                    <div class="invalid-feedback errorfile"></div>
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
                        <th width="25%">Kategori</th>
                        <th width="45%">Nama</th>
                        <th width="10%">Download</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php foreach ($spmi as $item) : ?>
                        <tr>
                            <!-- ISI VIEW -->
                            <td><?= $no++ ?></td>
                            <td style="text-align: center;">
                                <!-- button hapus modal-->
                                <a href="<?= base_url('spmi/hapus/' . $item['id']); ?>" class="hapus">
                                    <span class="btn-sm btn-danger feather icon-trash-2 text-default"></span>
                                </a>
                            </td>
                            <td style="min-width: 100px;max-width: 300px; white-space: normal;"><?= htmlspecialchars($item['kategori']) ?></td>
                            <td style="min-width: 70px;max-width: 120px; white-space: normal;"><?= htmlspecialchars($item['nama']) ?></td>
                            <td style="text-align: center;">
                                <!-- button download modal-->
                                <a href="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" download="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" class="btn btn-danger">
                                    <span class="fa fa-download"></span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->include('backend/spmi/ajax') ?>
<?= $this->include('backend/layouts/js_view') ?>