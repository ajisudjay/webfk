<div class="container-fluid">
    <div class="card-header">
        <h4 class="mb-0">Tenaga Pendidik</h4>
        <!-- button tambah modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal">
            <span class="feather icon-plus text-light"></span>
        </button>
    </div>
    <!-- tambah modal-->
    <div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('dosen/tambah'); ?>" method="post" enctype="multipart/form-data" class="input">
                        <?= csrf_field() ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-1">
                                    <label class="text-primary">Urutan</label>
                                    <input type="text" name="urutan" class="form-control urutan" placeholder="Urutan">
                                    <div class="invalid-feedback errorurutan"></div>
                                    <br>
                                </div>
                                <div class="col-lg-2">
                                    <label class="text-primary">NIP</label>
                                    <input type="text" name="nip" class="form-control nip" placeholder="NIP">
                                    <div class="invalid-feedback errornip"></div>
                                    <br>
                                </div>
                                <div class="col-lg-2">
                                    <label class="text-primary">NIDN</label>
                                    <input type="text" name="nidn" class="form-control nidn" placeholder="NIDN">
                                    <div class="invalid-feedback errornidn"></div>
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
                                    <label class="text-primary">Bidang</label>
                                    <input type="text" name="bidang" class="form-control bidang" placeholder="Bidang Ilmu">
                                    <div class="invalid-feedback errorbidang"></div>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Homebase</label>
                                    <input type="text" name="homebase" class="form-control homebase" placeholder="Homebase">
                                    <div class="invalid-feedback errorhomebase"></div>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Jabatan Fungsional</label>
                                    <select name="jabatan" class="form-control jabatan">
                                        <option value="Non Fungsional">Non Fungsional</option>
                                        <option value="Tenaga Pengajar">Tenaga Pengajar</option>
                                        <option value="Asisten Ahli">Asisten Ahli</option>
                                        <option value="Lektor">Lektor</option>
                                        <option value="Lektor Kepala">Lektor Kepala</option>
                                        <option value="Guru Besar">Guru Besar</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Golongan</label>
                                    <select name="golongan" class="form-control golongan">
                                        <option value="X">X</option>
                                        <option value="III/b">III/b</option>
                                        <option value="III/c">III/c</option>
                                        <option value="III/d">III/d</option>
                                        <option value="IV/a">IV/a</option>
                                        <option value="IV/b">IV/b</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Pangkat</label>
                                    <select name="pangkat" class="form-control pangkat">
                                        <option value="Penata Muda">Penata Muda</option>
                                        <option value="Penata Muda Tk. I">Penata Muda Tk. I</option>
                                        <option value="Penata">Penata</option>
                                        <option value="Penata Tk. I">Penata Tk. I</option>
                                        <option value="Pembina">Pembina</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Pendidikan</label>
                                    <select name="pendidikan" class="form-control pendidikan">
                                        <option value="Sp">Sp</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Asal S1</label>
                                    <input type="text" name="s1" class="form-control s1" placeholder="Asal S1">
                                    <div class="invalid-feedback errors1"></div>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Asal S2 / Spesialis</label>
                                    <input type="text" name="s2" class="form-control s2" placeholder="Asal S2/Spesialis">
                                    <div class="invalid-feedback errors2"></div>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Asal S3</label>
                                    <input type="text" name="s3" class="form-control s3" placeholder="Asal S3">
                                    <div class="invalid-feedback errors3"></div>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Jenis Kelamin</label>
                                    <select name="jk" class="form-control jk">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="col-lg-2">
                                    <label class="text-primary">Tempat, Tanggal Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control tempat_lahir" placeholder="Tempat Lahir">
                                    <div class="invalid-feedback errortempat_lahir"></div>
                                    <br>
                                </div>
                                <div class="col-lg-2">
                                    <label class="text-primary">&nbsp;</label>
                                    <input type="date" name="tanggal_lahir" class="form-control tanggal_lahir">
                                    <div class="invalid-feedback errortanggal_lahir"></div>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Telepon</label>
                                    <input type="text" name="telp" class="form-control telp" placeholder="Telepon">
                                    <div class="invalid-feedback errortelp"></div>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-primary">Email</label>
                                    <input type="email" name="email" class="form-control email" placeholder="Email">
                                    <div class="invalid-feedback erroremail"></div>
                                    <br>
                                </div>
                                <div class="col-lg-6">
                                    <label class="text-primary">Alamat</label>
                                    <input type="text" name="alamat" class="form-control alamat" placeholder="Alamat">
                                    <div class="invalid-feedback erroralamat"></div>
                                    <br>
                                </div>
                                <div class="col-lg-3">
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
                    <?php foreach ($dosen as $item) : ?>
                        <tr>
                            <td><?= $item['urutan'] ?></td>
                            <!-- ISI VIEW -->
                            <td style="text-align: center;">
                                <button type="button" class="btn-sm btn-primary border-0" data-toggle="modal" data-target="#editmodal<?= $id = $item['id'] ?>">
                                    <span class="feather icon-edit-1 text-default"></span>
                                </button>
                                <!-- edit modal-->
                                <div class="modal fade" id="editmodal<?= $id = $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('dosen/edit'); ?>" enctype="multipart/form-data" method="post" class="input">
                                                    <?= csrf_field() ?>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-1">
                                                                <label class="text-primary">Urutan</label>
                                                                <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                                                                <input type="text" required name="urutan" class="form-control urutan" value="<?= $item['urutan'] ?>">
                                                                <div class="invalid-feedback errorurutan"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="text-primary">NIP</label>
                                                                <input type="text" required name="nip" class="form-control nip" value="<?= $item['nip'] ?>">
                                                                <div class="invalid-feedback errornip"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="text-primary">NIDN</label>
                                                                <input type="text" required name="nidn" class="form-control nidn" value="<?= $item['nidn'] ?>">
                                                                <div class="invalid-feedback errornidn"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label class="text-primary">Nama</label>
                                                                <input type="text" required name="nama" class="form-control nama" value="<?= $item['nama'] ?>">
                                                                <div class="invalid-feedback errornama"></div>
                                                                <br>
                                                            </div>
                                                            <br>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Bidang</label>
                                                                <input type="text" required name="bidang" class="form-control bidang" value="<?= $item['bidang'] ?>">
                                                                <div class="invalid-feedback errorbidang"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Homebase</label>
                                                                <input type="text" required name="homebase" class="form-control homebase" value="<?= $item['homebase'] ?>">
                                                                <div class="invalid-feedback errorhomebase"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Jabatan Fungsional</label>
                                                                <select name="jabatan" class="form-control jabatan">
                                                                    <option value="<?= $item['jabatan'] ?>"><?= $item['jabatan'] ?></option>
                                                                    <option value="Non Fungsional">Non Fungsional</option>
                                                                    <option value="Tenaga Pengajar">Tenaga Pengajar</option>
                                                                    <option value="Asisten Ahli">Asisten Ahli</option>
                                                                    <option value="Lektor">Lektor</option>
                                                                    <option value="Lektor Kepala">Lektor Kepala</option>
                                                                    <option value="Guru Besar">Guru Besar</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Golongan</label>
                                                                <select name="golongan" class="form-control golongan">
                                                                    <option value="<?= $item['golongan'] ?>"><?= $item['golongan'] ?></option>
                                                                    <option value="X">X</option>
                                                                    <option value="III/b">III/b</option>
                                                                    <option value="III/c">III/c</option>
                                                                    <option value="III/d">III/d</option>
                                                                    <option value="IV/a">IV/a</option>
                                                                    <option value="IV/b">IV/b</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Pangkat</label>
                                                                <select name="pangkat" class="form-control pangkat">
                                                                    <option value="<?= $item['pangkat'] ?>"><?= $item['pangkat'] ?></option>
                                                                    <option value="Penata Muda">Penata Muda</option>
                                                                    <option value="Penata Muda Tk. I">Penata Muda Tk. I</option>
                                                                    <option value="Penata">Penata</option>
                                                                    <option value="Penata Tk. I">Penata Tk. I</option>
                                                                    <option value="Pembina">Pembina</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Pendidikan</label>
                                                                <select name="pendidikan" class="form-control pendidikan">
                                                                    <option value="<?= $item['pendidikan'] ?>"><?= $item['pendidikan'] ?></option>
                                                                    <option value="Sp">Sp</option>
                                                                    <option value="S2">S2</option>
                                                                    <option value="S3">S3</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Asal S1</label>
                                                                <input type="text" required name="s1" class="form-control s1" value="<?= $item['s1'] ?> S1">
                                                                <div class="invalid-feedback errors1"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Asal S2 / Spesialis</label>
                                                                <input type="text" required name="s2" class="form-control s2" value="<?= $item['s2'] ?>">
                                                                <div class="invalid-feedback errors2"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Asal S3</label>
                                                                <input type="text" required name="s3" class="form-control s3" value="<?= $item['s3'] ?>">
                                                                <div class="invalid-feedback errors3"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Jenis Kelamin</label>
                                                                <select name="jk" class="form-control jk">
                                                                    <option value="Laki-laki">Laki-laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="text-primary">Tempat, Tanggal Lahir</label>
                                                                <input type="text" required name="tempat_lahir" class="form-control tempat_lahir" value="<?= $item['tempat_lahir'] ?>">
                                                                <div class="invalid-feedback errortempat_lahir"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <label class="text-primary">&nbsp;</label>
                                                                <input type="date" required name="tanggal_lahir" class="form-control tanggal_lahir" value="<?= $item['tanggal_lahir'] ?>">
                                                                <div class="invalid-feedback errortanggal_lahir"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Telepon</label>
                                                                <input type="text" required name="telp" class="form-control telp" value="<?= $item['telp'] ?>">
                                                                <div class="invalid-feedback errortelp"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label class="text-primary">Email</label>
                                                                <input type="email" required name="email" class="form-control email" value="<?= $item['email'] ?>">
                                                                <div class="invalid-feedback erroremail"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label class="text-primary">Alamat</label>
                                                                <input type="text" required name="alamat" class="form-control alamat" value="<?= $item['alamat'] ?>">
                                                                <div class="invalid-feedback erroralamat"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <label class="text-primary">Foto</label><br>
                                                                <img src="<?= base_url('writable/uploads/content/dosen/thumb/' . $item['gambar'] . ''); ?>" width="125px">
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
                                <a href="<?= base_url('dosen/hapus/' . $item['id']); ?>" class="hapus">
                                    <span class="btn-sm btn-danger feather icon-trash-2 text-default"></span>
                                </a>
                            <td><?= $item['nip'] ?></td>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['bidang'] ?></td>
                            <td><?= $item['pendidikan'] ?></td>
                            <td style="text-align: center;"><img src="<?= base_url('writable/uploads/content/dosen/thumb/' . $item['gambar'] . ''); ?>" width="100%"></td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->include('backend/dosen/ajax') ?>
<?= $this->include('backend/layouts/js_view') ?>