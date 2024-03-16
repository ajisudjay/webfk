<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?= $this->include('backend/layouts/header') ?>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="app-assets/images/pages/login.png" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h3 class="mb-2">SPMI</h3>
                                                <span style="font-size: xx-small;">Password bisa didapatkan dari admin</span>
                                            </div>
                                        </div>
                                        <div class="font-weight-bold text-danger errorgagal_user"></div>
                                        <div class="font-weight-bold text-danger errorgagal_user2"></div><br>
                                        <div class="card-content">
                                            <form class="loginspmi-form" action="<?= base_url('auth/spmi_login'); ?>" method="post">
                                                <?= csrf_field() ?>
                                                <fieldset class="form-label-group position-relative has-icon-left">
                                                    <input type="password" name="password" class="form-control password" id="user-password" placeholder="Password" required>
                                                    <div class="invalid-feedback errorPassword"></div>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>
                                                </fieldset>
                                                <div class="capcode" style="margin-left: 100px;margin-right: 100px;margin-top: 10px;margin-bottom: 10px;">
                                                    <?= $captcha ?>
                                                    <input type="text" name="captcha" value=" <?= $captcha ?>" hidden>
                                                </div>
                                                <fieldset class="form-label-group position-relative has-icon-left">
                                                    <input type="text" name="captcha2" class="form-control captcha2" id="user-password" placeholder="Kode Keamanan" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>
                                                    <div class="font-weight-bold text-danger errorgagal_login"></div>
                                                </fieldset>
                                                <br>
                                                <p align="center">
                                                    <button type="submit" class="btn btn-primary btn-inline btnSubmit">Login</button>
                                                </p>
                                            </form>
                                        </div>
                                        <div class="login-footer">
                                            <div class="divider">
                                                <div class="divider-text"><a href="/">FK UNMUL</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <script>
        $('.loginspmi-form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btnSubmit').attr('disable', 'disabled');
                    $('.btnSubmit').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btnSubmit').removeAttr('disable', 'disabled');
                    $('.btnSubmit').html('Login');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.password) {
                            $('.password').addClass('is-invalid');
                            $('.errorPassword').html(response.error.password);
                        } else {
                            $('.password').removeClass('is-invalid');
                            $('.errorPassword').html('');
                        }
                    } else {
                        if (response.title == 'gagaluser') {
                            $('.errorgagal_user').html(response.pesan);
                            $('.errorpassword').html('');
                            $('.errorusername').html('');
                        } else {
                            $('.errorgagal_user').html('');
                            $('.errorpassword').html('');
                            $('.errorusername').html('');
                        }

                        if (response.title == 'gagaluser2') {
                            $('.errorgagal_user2').html(response.pesan);
                            $('.errorpassword').html('');
                            $('.errorusername').html('');
                        } else {
                            $('.errorgagal_user2').html('');
                            $('.errorpassword').html('');
                            $('.errorusername').html('');
                        }

                        if (response.title == 'gagallogin') {
                            $('.errorgagal_login').html(response.pesan);
                            $('.errorpassword').html('');
                            $('.errorusername').html('');
                        } else {
                            $('.errorgagal_login').html('');
                            $('.errorpassword').html('');
                            $('.errorusername').html('');
                        }

                        if (response.title == 'berhasiloperator') {
                            window.location.href = '<?= base_url(''); ?>' + response.urloperator;
                        }
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            })
        })
    </script>
    <?= $this->include('backend/layouts/js') ?>
</body>
<!-- END: Body-->

</html>