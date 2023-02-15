<div class="card-header">
    <h4 class="mb-0">Main Menu</h4><!-- button tambah modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal">
        <span class="feather icon-plus text-light"></span>
    </button>
</div>
<!-- tambah modal-->
<div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('mainmenu/tambah'); ?>" method="post" class="tambah">
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
                                <label class="text-primary">Main Menu</label>
                                <input type="text" name="mainmenu" class="form-control mainmenu" placeholder="Main Menu">
                                <div class="invalid-feedback errorMainmenu"></div>
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
                    <th width="90%">MAIN MENU</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mainmenu as $item) : ?>
                    <tr>
                        <!-- ISI VIEW -->
                        <td><?= $item['urutan'] ?></td>
                        <td>
                            <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#editmodal<?= $id = $item['id'] ?>">
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
                                                        <div class="col-lg-3">
                                                            <label class="text-primary">Urutan</label>
                                                            <input type="text" name="id" value="<?= $item['id'] ?>" hidden>
                                                            <input type="text" name="urutan" value="<?= $item['urutan'] ?>" class="form-control urutan" placeholder="Urutan">
                                                            <div class="invalid-feedback errorUrutan"></div>
                                                            <br>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <label class="text-primary">Main Menu</label>
                                                            <input type="text" name="mainmenu" value="<?= $item['mainmenu'] ?>" class="form-control mainmenu" placeholder="Main Menu">
                                                            <div class="invalid-feedback errorMainmenu"></div>
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
                            <a href="<?= base_url('mainmenu/hapus/' . $item['id']); ?>" class="hapus">
                                <span class="btn-sm btn-danger feather icon-trash-2 text-default"></span>
                            </a>
                        <td><?= $item['mainmenu'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<!-- SCRIPT AJAX -->
<script>
    $(document).ready(function() {
        //  function tambah
        $('.tambah').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btnSimpan').attr('disable', 'disabled');
                    $('.btnSimpan').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btnSimpan').removeAttr('disable', 'disabled');
                    $('.btnSimpan').html('Simpan');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.urutan) {
                            $('.urutan').addClass('is-invalid');
                            $('.errorUrutan').html(response.error.urutan);
                        } else {
                            $('.urutan').removeClass('is-invalid');
                            $('.errorUrutan').html('');
                        }
                        if (response.error.mainmenu) {
                            $('.mainmenu').addClass('is-invalid');
                            $('.errorMainmenu').html(response.error.mainmenu);
                        } else {
                            $('.mainmenu').removeClass('is-invalid');
                            $('.errorMainmenu').html('');
                        }
                    } else {
                        if (response.status == 'gagal') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: response.sukses,
                            })
                        } else if (response.status == 'berhasil') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.sukses,
                            });
                        }
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        $('#result').html(response.data);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            })
        });

        $('.edit').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btnEdit').attr('disable', 'disabled');
                    $('.btnEdit').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btnEdit').removeAttr('disable', 'disabled');
                    $('.btnEdit').html('Simpan');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.urutan) {
                            $('.urutan').addClass('is-invalid');
                            $('.errorUrutan').html(response.error.urutan);
                        } else {
                            $('.urutan').removeClass('is-invalid');
                            $('.errorUrutan').html('');
                        }
                        if (response.error.mainmenu) {
                            $('.mainmenu').addClass('is-invalid');
                            $('.errorMainmenu').html(response.error.mainmenu);
                        } else {
                            $('.mainmenu').removeClass('is-invalid');
                            $('.errorMainmenu').html('');
                        }
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.sukses,
                        });
                        $('body').removeClass('modal-open');
                        //modal-open class is added on body so it has to be removed
                        $('.modal-backdrop').remove();
                        //need to remove div with modal-backdrop class
                        $("#result").html(response.data);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            })
        });

        //  function hapus
        $('.hapus').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href')
            Swal.fire({
                title: 'Anda Yakin?',
                text: "Data Akan Dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!'
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                }
            });
        });
        window.setTimeout(function() {
            $(".flashAjax").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 5000);
    });
</script>
<?= $this->include('backend/layouts/js_view') ?>