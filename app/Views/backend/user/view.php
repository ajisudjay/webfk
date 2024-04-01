<div class="container-fluid">
    <div class="card-header">
        <?php
        if ($lvl === 'Superadmin') {
            $hakakses = '';
        } else {
            $hakakses = 'hidden';
        }
        ?>
        <h4 class="mb-0">Akun</h4>
        <!-- button tambah modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal" <?= $hakakses ?>>
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
                    <form action="<?= base_url('user/tambah'); ?>" method="post" enctype="multipart/form-data" class="tambah">
                        <?= csrf_field() ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="text-primary">Nama</label>
                                    <input type="text" name="nama" class="form-control nama" placeholder="Nama">
                                    <div class="invalid-feedback errornama"></div>
                                    <br>
                                </div>
                                <div class="col-lg-6">
                                    <label class="text-primary">Username</label>
                                    <input type="text" name="username" class="form-control username" placeholder="Username">
                                    <div class="invalid-feedback errorusername"></div>
                                    <br>
                                </div>
                                <div class="col-lg-6">
                                    <label class="text-primary">Level</label>
                                    <select name="level" class="form-control level">
                                        <option value="">Pilih Level</option>
                                        <option value="Pejabat">Pejabat</option>
                                        <option value="Admin Prodi">Admin Prodi</option>
                                        <option value="Admin Fakultas">Admin Fakultas</option>
                                        <option value="Superadmin">Superadmin</option>
                                    </select>
                                    <div class="invalid-feedback errorluevel"></div>
                                    <br>
                                </div>
                                <div class="col-lg-6">
                                    <label class="text-primary">Password</label>
                                    <input type="password" name="password" class="form-control password" placeholder="Password">
                                    <div class="invalid-feedback errorpassword"></div>
                                    <br>
                                </div>
                                <div class="col-lg-6">
                                    <label class="text-primary">Ulangi Password</label>
                                    <input type="password" name="repassword" class="form-control repassword" placeholder="Ulangi Password">
                                    <div class="invalid-feedback errorrepassword"></div>
                                    <br>
                                </div>
                                <hr>
                                <div class="col-lg-12">
                                    <label class="text-primary">Foto <span style="color: red;">*Max-Size : 1 mb | extension : jpg/jpeg/png/PNG</span></label>
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
                        <th width="10%" style="text-align: center;">AKSI</th>
                        <th width="30%">Username</th>
                        <th width="35%">Nama</th>
                        <th width="15%">Level</th>
                        <th width="5%">Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php foreach ($user as $item) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <!-- ISI VIEW -->
                            <td style="text-align: center;">
                                <button type="button" class="btn-sm btn-primary border-0" data-toggle="modal" data-target="#editmodal<?= $id = $item['username'] ?>">
                                    <span class="feather icon-edit-1 text-default"></span>
                                </button>
                                <!-- edit modal-->
                                <div class="modal fade" id="editmodal<?= $id = $item['username'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('user/edit'); ?>" enctype="multipart/form-data" method="post" class="edit">
                                                    <?= csrf_field() ?>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label class="text-primary">Nama</label>
                                                                <input type="text" name="nama" class="form-control nama" value="<?= $item['nama'] ?>">
                                                                <div class="invalid-feedback errorNama"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label class="text-primary">Username</label>
                                                                <input type="text" name="username" class="form-control username" value="<?= $item['username'] ?>" readonly>
                                                                <div class="invalid-feedback errorUsername"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label class="text-primary">Level</label>
                                                                <select name="level" class="form-control level">
                                                                    <option value="<?= $item['level'] ?>"><?= $item['level'] ?></option>
                                                                    <option value="Pejabat" <?= $hakakses ?>>Pejabat</option>
                                                                    <option value="Admin Prodi" <?= $hakakses ?>>Admin Prodi</option>
                                                                    <option value="Admin Fakultas" <?= $hakakses ?>>Admin Fakultas</option>
                                                                    <option value="Superadmin" <?= $hakakses ?>>Superadmin</option>
                                                                </select>
                                                                <div class="invalid-feedback errorLevel"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <label class="text-primary">Foto <span style="color: red;">*Max-Size : 1 mb | extension : jpg/jpeg/png/PNG</span></label>
                                                                <input type="file" name="file" class="form-control gambar" accept="image/*">
                                                                <div class="invalid-feedback errorGambar"></div>
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

                                <!-- editpassword -->
                                <?php
                                if ($item['username'] == session()->get('username')) {
                                    $editpass = '';
                                } elseif (session()->get('level') === "Superadmin") {
                                    $editpass = '';
                                } else {
                                    $editpass = 'hidden';
                                }
                                ?>
                                <button type="button" class="btn-sm btn-warning border-0" data-toggle="modal" data-target="#editpassmodal<?= $id = $item['username'] ?>" <?= $editpass ?>>
                                    <span class="fa fa-key text-default"></span>
                                </button>
                                <!-- editpassword modal-->
                                <div class="modal fade" id="editpassmodal<?= $id = $item['username'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah Password</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('user/editpass'); ?>" method="post" class="editpass">
                                                    <?= csrf_field() ?>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label class="text-primary">Password</label>
                                                                <input type="username" name="username" value="<?= $item['username'] ?>" hidden>
                                                                <input type="password" name="password" class="form-control password">
                                                                <div class="invalid-feedback errorpassword"></div>
                                                                <br>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label class="text-primary">Ulangi Password</label>
                                                                <input type="password" name="repassword" class="form-control repassword">
                                                                <div class="invalid-feedback errorrepassword"></div>
                                                                <br>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                                                        <button type="submit" class="btn btn-primary btnSimpanpass">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- button hapus modal-->
                                <?php
                                if (session()->get('username') === $item['username']) {
                                    $tom_hapus = 'hidden';
                                } else {
                                    $tom_hapus = '';
                                }
                                if ($item['file'] < 1) {
                                    $gambar = 'app-assets/images/profile/user-profile.png';
                                } else {
                                    $gambar = 'content/user/' . $item['file'];
                                }
                                ?>
                                <a href="<?= base_url('user/hapus/' . $item['username']); ?>" class="hapus" <?= $tom_hapus ?>>
                                    <span class="btn-sm btn-danger feather icon-trash-2 text-default"></span>
                                </a>
                            <td><?= $item['username'] ?></td>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['level'] ?></td>
                            <td><span><img class="round" src="<?= base_url('writable/uploads/content/user/' . $item['file']); ?>" height="80" width="80"></span></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->include('backend/user/ajax') ?>
<?= $this->include('backend/layouts/js_view') ?>