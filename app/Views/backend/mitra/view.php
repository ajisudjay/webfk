<div class="container-fluid">
    <div class="card-header">
        <h4 class="mb-0">MITRA</h4>
        <!-- button tambah modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal">
            <span class="feather icon-plus text-light"></span>
        </button>
    </div>
    <!-- tambah modal-->
    <div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah</h5>
                    <button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('mitra/tambah'); ?>" method="post" class="tambah">
                        <?= csrf_field() ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="text-primary">Urutan</label>
                                    <input type="text" name="urutan" class="form-control urutan" placeholder="Urutan">
                                    <div class="invalid-feedback errorurutan"></div>
                                    <br>
                                </div>
                                <div class="col-lg-9">
                                    <label class="text-primary">Nama Instansi</label>
                                    <input type="text" name="nama" class="form-control nama" placeholder="Nama">
                                    <div class="invalid-feedback errorNama"></div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-lg-3">
                                    <label class="text-primary">Jenis</label>
                                    <select name="jenis" class="form-control jenis">
                                        <option value="Dalam Negeri">Dalam Negeri</option>
                                        <option value="Luar Negeri">Luar Negeri</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Pendidikan</label>
                                    <select name="pendidikan" class="form-control">
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Penelitian</label>
                                    <select name="penelitian" class="form-control">
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">PkM</label>
                                    <select name="pkm" class="form-control">
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Mulai Kerjasama</label>
                                    <input type="number" min="0" name="mulai_kerjasama" class="form-control mulai_kerjasama" placeholder="Mulai Kerjasama">
                                    <div class="invalid-feedback errormulai_kerjasama"></div>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Berakhir Kerjasama</label>
                                    <input type="number" min="0" name="berakhir_kerjasama" class="form-control berakhir_kerjasama" placeholder="Berakhir Kerjasama">
                                    <div class="invalid-feedback errorberakhir_kerjasama"></div>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Link Laporan</label>
                                    <input type="text" name="laporan" class="form-control laporan" placeholder="Laporan">
                                    <div class="invalid-feedback errorlaporan"></div>
                                    <br>
                                </div>
                                <div class="col-lg-12">
                                    <label class="text-primary">Hasil dan Manfaat</label>
                                    <textarea name="hasil" rows="7" class="form-control hasil"></textarea>
                                    <div class="invalid-feedback errorhasil"></div>
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
                        <th width="15%">Nama</th>
                        <th width="10%" style="text-align: center;">Jenis</th>
                        <th width="5%" style="text-align: center;">Pendidikan</th>
                        <th width="5%" style="text-align: center;">Penelitian</th>
                        <th width="5%" style="text-align: center;">PkM</th>
                        <th width="5%" style="text-align: center;">Mulai</th>
                        <th width="5%" style="text-align: center;">Berakhir</th>
                        <th width="15%" style="text-align: center;">Hasil</th>
                        <th width="5%" style="text-align: center;">Laporan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mitra as $item) : ?>
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
                                                <form action="<?= base_url('mitra/edit'); ?>" method="post" class="edit">
                                                    <?= csrf_field() ?>
                                                    <div class="modal-body" style="text-align:left ;">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Urutan</label>
                                                                <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                                                                <input type="text" name="urutan" class="form-control urutan" value="<?= $item['urutan'] ?>">
                                                                <div class="invalid-feedback errorurutan"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <label class="text-primary">Nama Instansi</label>
                                                                <input type="text" name="nama" class="form-control nama" value="<?= $item['nama'] ?>">
                                                                <div class="invalid-feedback errorNama"></div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Jenis</label>
                                                                <select name="jenis" class="form-control jenis">
                                                                    <option value="<?= $item['jenis'] ?>"><?= $item['jenis'] ?></option>
                                                                    <option value="Dalam Negeri">Dalam Negeri</option>
                                                                    <option value="Luar Negeri">Luar Negeri</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Pendidikan</label>
                                                                <select name="pendidikan" class="form-control">
                                                                    <option value="<?= $item['pendidikan'] ?>"><?= $item['pendidikan'] ?></option>
                                                                    <option value="Ya">Ya</option>
                                                                    <option value="Tidak">Tidak</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Penelitian</label>
                                                                <select name="penelitian" class="form-control">
                                                                    <option value="<?= $item['penelitian'] ?>"><?= $item['penelitian'] ?></option>
                                                                    <option value="Ya">Ya</option>
                                                                    <option value="Tidak">Tidak</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">PkM</label>
                                                                <select name="pkm" class="form-control">
                                                                    <option value="<?= $item['pkm'] ?>"><?= $item['pkm'] ?></option>
                                                                    <option value="Ya">Ya</option>
                                                                    <option value="Tidak">Tidak</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Mulai Kerjasama</label>
                                                                <input type="number" min="0" name="mulai_kerjasama" class="form-control mulai_kerjasama" value="<?= $item['mulai_kerjasama'] ?>">
                                                                <div class="invalid-feedback errormulai_kerjasama"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Berakhir Kerjasama</label>
                                                                <input type="number" min="0" name="berakhir_kerjasama" class="form-control berakhir_kerjasama" value="<?= $item['berakhir_kerjasama'] ?>">
                                                                <div class="invalid-feedback errorberakhir_kerjasama"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Link Laporan</label>
                                                                <input type="text" name="laporan" class="form-control laporan" value="<?= $item['laporan'] ?>">
                                                                <div class="invalid-feedback errorlaporan"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <label class="text-primary">Hasil dan Manfaat</label>
                                                                <textarea name="hasil" rows="7" class="form-control hasil"><?= $item['laporan'] ?></textarea>
                                                                <div class="invalid-feedback errorhasil"></div>
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
                                <!-- button hapus modal-->
                                <a href="<?= base_url('mitra/hapus/' . $item['id']); ?>" class="hapus">
                                    <span class="btn-sm btn-danger feather icon-trash-2 text-default"></span>
                                </a>
                            <td style="min-width: 200px;max-width: 400px; white-space: normal;"><?= $item['nama'] ?></td>
                            <td><?= $item['jenis'] ?></td>
                            <td><?= $item['pendidikan'] ?></td>
                            <td><?= $item['penelitian'] ?></td>
                            <td><?= $item['pkm'] ?></td>
                            <td><?= $item['mulai_kerjasama'] ?></td>
                            <td><?= $item['berakhir_kerjasama'] ?></td>
                            <td style="min-width: 400px;max-width: 600px; white-space: normal;"><?= $item['hasil'] ?></td>
                            <td><?= $item['laporan'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->include('backend/mitra/ajax') ?>
<?= $this->include('backend/layouts/js_view') ?>