<!-- SCRIPT AJAX -->
<script>
    CKEDITOR.replace('visi');
    CKEDITOR.replace('misi');
</script>
<script>
    $(document).ready(function() {
        $('.editvisi').submit(function(e) {
            e.preventDefault();
            var form = $(this)[0];
            var data = new FormData(form);
            var formData = new FormData(this);
            formData.append('visi', CKEDITOR.instances.visi.getData());
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.btnEditvisi').attr('disable', 'disabled');
                    $('.btnEditvisi').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btnEditvisi').removeAttr('disable', 'disabled');
                    $('.btnEditvisi').html('Perbarui');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.visi) {
                            $('.visi').addClass('is-invalid');
                            $('.errorVisi').html(response.error.visi);
                        } else {
                            $('.visi').removeClass('is-invalid');
                            $('.errorVisi').html('');
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

        $('.editmisi').submit(function(e) {
            e.preventDefault();
            var form = $(this)[0];
            var data = new FormData(form);
            var formData = new FormData(this);
            formData.append('misi', CKEDITOR.instances.misi.getData());
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.btnEditmisi').attr('disable', 'disabled');
                    $('.btnEditmisi').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btnEditmisi').removeAttr('disable', 'disabled');
                    $('.btnEditmisi').html('Perbarui');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.misi) {
                            $('.misi').addClass('is-invalid');
                            $('.errorMisi').html(response.error.misi);
                        } else {
                            $('.misi').removeClass('is-invalid');
                            $('.errorMisi').html('');
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
                    $('.btnEdit').html('Perbarui');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.email) {
                            $('.email').addClass('is-invalid');
                            $('.errorEmail').html(response.error.email);
                        } else {
                            $('.email').removeClass('is-invalid');
                            $('.errorEmail').html('');
                        }
                        if (response.error.telepon) {
                            $('.telepon').addClass('is-invalid');
                            $('.errorTelepon').html(response.error.telepon);
                        } else {
                            $('.telepon').removeClass('is-invalid');
                            $('.errorTelepon').html('');
                        }
                        if (response.error.alamat) {
                            $('.alamat').addClass('is-invalid');
                            $('.errorAlamat').html(response.error.alamat);
                        } else {
                            $('.alamat').removeClass('is-invalid');
                            $('.errorAlamat').html('');
                        }
                        if (response.error.ig) {
                            $('.ig').addClass('is-invalid');
                            $('.errorIg').html(response.error.ig);
                        } else {
                            $('.ig').removeClass('is-invalid');
                            $('.errorIg').html('');
                        }
                        if (response.error.fb) {
                            $('.fb').addClass('is-invalid');
                            $('.errorFb').html(response.error.fb);
                        } else {
                            $('.fb').removeClass('is-invalid');
                            $('.errorFb').html('');
                        }
                        if (response.error.yt) {
                            $('.yt').addClass('is-invalid');
                            $('.errorYt').html(response.error.yt);
                        } else {
                            $('.yt').removeClass('is-invalid');
                            $('.errorYt').html('');
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


        window.setTimeout(function() {
            $(".flashAjax").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 5000);
    });
</script>