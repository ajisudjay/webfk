<!-- SCRIPT AJAX -->
<script>
    $(document).ready(function() {
        //  function tambah
        $('.tambah').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
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
                            $('.errorurutan').html(response.error.urutan);
                        } else {
                            $('.urutan').removeClass('is-invalid');
                            $('.errorurutan').html('');
                        }
                        if (response.error.nama) {
                            $('.nama').addClass('is-invalid');
                            $('.errornama').html(response.error.nama);
                        } else {
                            $('.nama').removeClass('is-invalid');
                            $('.errornama').html('');
                        }
                        if (response.error.jabatan) {
                            $('.jabatan').addClass('is-invalid');
                            $('.errorjabatan').html(response.error.jabatan);
                        } else {
                            $('.jabatan').removeClass('is-invalid');
                            $('.errorjabatan').html('');
                        }
                        if (response.error.file) {
                            $('.file').addClass('is-invalid');
                            $('.errorfile').html(response.error.file);
                        } else {
                            $('.file').removeClass('is-invalid');
                            $('.errorfile').html('');
                        }
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.sukses,
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 1500);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            })
        });

        //  function edit
        $('.edit').submit(function() {
            var nama = $('#nama').val();
            var jabatan = $('#jabatan').val();
            var urutan = $('#urutan').val();
            var files = $('#file')[0].files;
            var fd = new FormData();

            fd.append('file', files[0]);
            fd.append('nama', nama);
            fd.append('jabatan', jabatan);
            fd.append('urutan', urutan);
            $.ajax({
                type: "post",
                data: fd,
                dataType: "json",
                contentType: false,
                processData: false,
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
                        if (response.error.nama) {
                            $('.nama').addClass('is-invalid');
                            $('.errorNama').html(response.error.nama);
                        } else {
                            $('.nama').removeClass('is-invalid');
                            $('.errorNama').html('');
                        }
                        if (response.error.jabatan) {
                            $('.jabatan').addClass('is-invalid');
                            $('.errorJabatan').html(response.error.jabatan);
                        } else {
                            $('.jabatan').removeClass('is-invalid');
                            $('.errorJabatan').html('');
                        }
                        if (response.error.file) {
                            $('.file').addClass('is-invalid');
                            $('.errorFile').html(response.error.file);
                        } else {
                            $('.file').removeClass('is-invalid');
                            $('.errorFile').html('');
                        }
                        if (response.error.urutan) {
                            $('.urutan').addClass('is-invalid');
                            $('.errorUrutan').html(response.error.urutan);
                        } else {
                            $('.urutan').removeClass('is-invalid');
                            $('.errorUrutan').html('');
                        }
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'berhasil',
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