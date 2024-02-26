<div class="container-fluid">
    <div class="card-header">
        <h4 class="mb-0">Tenaga Kependidikan</h4>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('tendik/tambah'); ?>" method="post" enctype="multipart/form-data" class="input">
                        <?= csrf_field() ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-2">
                                    <label class="text-primary">Urutan</label>
                                    <input type="text" name="urutan" class="form-control urutan" placeholder="Urutan">
                                    <div class="invalid-feedback errorurutan"></div>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">NIP</label>
                                    <input type="text" name="nip" class="form-control nip" placeholder="NIP">
                                    <div class="invalid-feedback errornip"></div>
                                    <br>
                                </div>
                                <div class="col-lg-4">
                                    <label class="text-primary">Nama</label>
                                    <input type="text" name="nama" class="form-control nama" placeholder="Nama">
                                    <div class="invalid-feedback errornama"></div>
                                    <br>
                                </div>
                                <br>
                                <div class="col-lg-3">
                                    <label class="text-primary">Bagian Unit</label>
                                    <input type="text" name="bagian_unit" class="form-control bagian_unit" placeholder="Bagian Unit">
                                    <div class="invalid-feedback errorbagian_unit"></div>
                                    <br>
                                </div>
                                <div class="col-lg-4">
                                    <label class="text-primary">Ruangan</label>
                                    <input type="text" name="ruangan" class="form-control ruangan" placeholder="Ruangan">
                                    <div class="invalid-feedback errorruangan"></div>
                                    <br>
                                </div>
                                <div class="col-lg-4">
                                    <label class="text-primary">Jenis Kelamin</label>
                                    <select name="jk" class="form-control jk">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-4">
                                    <label class="text-primary">Pendidikan</label>
                                    <select name="pendidikan" class="form-control pendidikan">
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                    <br>
                                </div>
                                <br>
                                <div class="col-lg-3">
                                    <label class="text-primary">Tempat, Tanggal Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control tempat_lahir" placeholder="Tempat Lahir">
                                    <div class="invalid-feedback errortempat_lahir"></div>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">&nbsp;</label>
                                    <input type="date" name="tanggal_lahir" class="form-control tanggal_lahir">
                                    <div class="invalid-feedback errortanggal_lahir"></div>
                                    <br>
                                </div>
                                <div class="col-lg-6">
                                    <label class="text-primary">Alamat</label>
                                    <input type="text" name="alamat" class="form-control alamat" placeholder="Alamat">
                                    <div class="invalid-feedback erroralamat"></div>
                                    <br>
                                </div>
                                <div class="col-lg-4">
                                    <label class="text-primary">Telepon</label>
                                    <input type="text" name="telp" class="form-control telp" placeholder="Telepon">
                                    <div class="invalid-feedback errortelp"></div>
                                    <br>
                                </div>
                                <div class="col-lg-4">
                                    <label class="text-primary">Email</label>
                                    <input type="email" name="email" class="form-control email" placeholder="Email">
                                    <div class="invalid-feedback erroremail"></div>
                                    <br>
                                </div>
                                <div class="col-lg-4">
                                    <label class="text-primary">Status</label>
                                    <select name="status" class="form-control status">
                                        <option value="Non-ASN">Non-ASN</option>
                                        <option value="PNS">PNS</option>
                                        <option value="PPPK">PPPK</option>
                                    </select>
                                    <div class="invalid-feedback errorstatus"></div>
                                    <br>
                                </div>
                                <div class="col-lg-12">
                                    <label class="text-primary">Foto</label>
                                    <input type="file" name="file" class="form-control file" accept="image/*">
                                    <div class="invalid-feedback errorfile"></div>
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
                        <th width="20%">NIP</th>
                        <th width="40%">NAMA</th>
                        <th width="10%">BAGIAN UNIT</th>
                        <th width="10%">PEND. TERAKHIR</th>
                        <th width="20%" style="text-align: center;">FOTO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tendik as $item) : ?>
                        <tr>
                            <td><?= $item['urutan'] ?></td>
                            <!-- ISI VIEW -->
                            <td style="text-align: center;">
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
                                                <form action="<?= base_url('tendik/edit'); ?>" enctype="multipart/form-data" method="post" class="input">
                                                    <?= csrf_field() ?>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <label class="text-primary">Urutan</label>
                                                                <input type="text" name="id" required value="<?= $item['id'] ?>" hidden>
                                                                <input type="text" name="urutan" class="form-control urutan" required value="<?= $item['urutan'] ?>">
                                                                <div class="invalid-feedback errorurutan"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">NIP</label>
                                                                <input type="text" name="nip" class="form-control nip" required value="<?= $item['nip'] ?>">
                                                                <div class="invalid-feedback errornip"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="text-primary">Nama</label>
                                                                <input type="text" name="nama" class="form-control nama" required value="<?= $item['nama'] ?>">
                                                                <div class="invalid-feedback errornama"></div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Bagian Unit</label>
                                                                <input type="text" name="bagian_unit" class="form-control bagian_unit" required value="<?= $item['bagian_unit'] ?>">
                                                                <div class="invalid-feedback errorbagian_unit"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="text-primary">Ruangan</label>
                                                                <input type="text" name="ruangan" class="form-control ruangan" required value="<?= $item['ruangan'] ?>">
                                                                <div class="invalid-feedback errorruangan"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="text-primary">Jenis Kelamin</label>
                                                                <select name="jk" class="form-control jk">
                                                                    <option value="<?= $item['jk'] ?>"><?= $item['jk'] ?></option>
                                                                    <option value="Laki-laki">Laki-laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="text-primary">Pendidikan</label>
                                                                <select name="pendidikan" class="form-control pendidikan">
                                                                    <option value="<?= $item['pendidikan'] ?>"><?= $item['pendidikan'] ?></option>
                                                                    <option value="SMP">SMP</option>
                                                                    <option value="SMA">SMA</option>
                                                                    <option value="D3">D3</option>
                                                                    <option value="D4">D4</option>
                                                                    <option value="S1">S1</option>
                                                                    <option value="S2">S2</option>
                                                                    <option value="S3">S3</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Tempat, Tanggal Lahir</label>
                                                                <input type="text" name="tempat_lahir" class="form-control tempat_lahir" required value="<?= $item['tempat_lahir'] ?>">
                                                                <div class="invalid-feedback errortempat_lahir"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">&nbsp;</label>
                                                                <input type="date" name="tanggal_lahir" class="form-control tanggal_lahir" required value="<?= $item['tanggal_lahir'] ?>">
                                                                <div class="invalid-feedback errortanggal_lahir"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label class="text-primary">Alamat</label>
                                                                <input type="text" name="alamat" class="form-control alamat" required value="<?= $item['alamat'] ?>">
                                                                <div class="invalid-feedback erroralamat"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="text-primary">Telepon</label>
                                                                <input type="text" name="telp" class="form-control telp" required value="<?= $item['telp'] ?>">
                                                                <div class="invalid-feedback errortelp"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="text-primary">Email</label>
                                                                <input type="email" name="email" class="form-control email" required value="<?= $item['email'] ?>">
                                                                <div class="invalid-feedback erroremail"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="text-primary">Status</label>
                                                                <select name="status" class="form-control status">
                                                                    <option value="<?= $item['status'] ?>"><?= $item['status'] ?></option>
                                                                    <option value="Non-ASN">Non-ASN</option>
                                                                    <option value="PNS">PNS</option>
                                                                    <option value="PPPK">PPPK</option>
                                                                </select>
                                                                <div class="invalid-feedback errorstatus"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <label class="text-primary">Foto</label><br>
                                                                <img src="<?= base_url('writable/uploads/content/tendik/thumb/' . $item['gambar'] . ''); ?>" width="150px">
                                                                <input type="file" name="file" class="form-control file" accept="image/*">
                                                                <div class="invalid-feedback errorfile"></div>
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
                                <!-- button hapus modal-->
                                <a href="<?= base_url('tendik/hapus/' . $item['id']); ?>" class="hapus">
                                    <span class="btn-sm btn-danger feather icon-trash-2 text-default"></span>
                                </a>
                            <td><?= $item['nip'] ?></td>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['bagian_unit'] ?></td>
                            <td><?= $item['pendidikan'] ?></td>
                            <td style="text-align: center;"><img src="<?= base_url('writable/uploads/content/tendik/thumb/' . $item['gambar'] . ''); ?>" width="100%"></td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->include('backend/tendik/ajax') ?>
<?= $this->include('backend/layouts/js_view') ?>