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
                            $('.errorNama').html(response.error.nama);
                        } else {
                            $('.nama').removeClass('is-invalid');
                            $('.errorNama').html('');
                        }
                        if (response.error.mulai_kerjasama) {
                            $('.mulai_kerjasama').addClass('is-invalid');
                            $('.errormulai_kerjasama').html(response.error.mulai_kerjasama);
                        } else {
                            $('.mulai_kerjasama').removeClass('is-invalid');
                            $('.errormulai_kerjasama').html('');
                        }
                        if (response.error.berakhir_kerjasama) {
                            $('.berakhir_kerjasama').addClass('is-invalid');
                            $('.errorberakhir_kerjasama').html(response.error.berakhir_kerjasama);
                        } else {
                            $('.berakhir_kerjasama').removeClass('is-invalid');
                            $('.errorberakhir_kerjasama').html('');
                        }
                        if (response.error.hasil) {
                            $('.hasil').addClass('is-invalid');
                            $('.errorhasil').html(response.error.hasil);
                        } else {
                            $('.hasil').removeClass('is-invalid');
                            $('.errorhasil').html('');
                        }
                        if (response.error.laporan) {
                            $('.laporan').addClass('is-invalid');
                            $('.errorlaporan').html(response.error.laporan);
                        } else {
                            $('.laporan').removeClass('is-invalid');
                            $('.errorlaporan').html('');
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
        $('.edit').submit(function(e) {
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
                            $('.errorNama').html(response.error.nama);
                        } else {
                            $('.nama').removeClass('is-invalid');
                            $('.errorNama').html('');
                        }
                        if (response.error.mulai_kerjasama) {
                            $('.mulai_kerjasama').addClass('is-invalid');
                            $('.errormulai_kerjasama').html(response.error.mulai_kerjasama);
                        } else {
                            $('.mulai_kerjasama').removeClass('is-invalid');
                            $('.errormulai_kerjasama').html('');
                        }
                        if (response.error.berakhir_kerjasama) {
                            $('.berakhir_kerjasama').addClass('is-invalid');
                            $('.errorberakhir_kerjasama').html(response.error.berakhir_kerjasama);
                        } else {
                            $('.berakhir_kerjasama').removeClass('is-invalid');
                            $('.errorberakhir_kerjasama').html('');
                        }
                        if (response.error.hasil) {
                            $('.hasil').addClass('is-invalid');
                            $('.errorhasil').html(response.error.hasil);
                        } else {
                            $('.hasil').removeClass('is-invalid');
                            $('.errorhasil').html('');
                        }
                        if (response.error.laporan) {
                            $('.laporan').addClass('is-invalid');
                            $('.errorlaporan').html(response.error.laporan);
                        } else {
                            $('.laporan').removeClass('is-invalid');
                            $('.errorlaporan').html('');
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

    });
</script>