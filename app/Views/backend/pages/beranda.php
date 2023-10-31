<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?= $this->include('backend/layouts/header') ?>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">
    <?= $this->include('backend/layouts/topnavbar') ?>
    <?= $this->include('backend/layouts/sidenavbar/superadmin') ?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="container-fluid p-5" align="center">
                                        <span>
                                            <td><span><img class="round" src="<?= base_url('writable/uploads/content/user/' . $akun['file']); ?>" height="80" width="80"></span></td>
                                        </span>
                                        <h4 class="mb-1">Selamat datang</h4>
                                        <h4 class="mb-1"><?= $admin ?></h4>
                                        <h4 class="mb-1">Anda Login Sebagai <?= $lvl ?></h4>
                                        <h4 class="mb-0">Fakultas Kedokteran Universitas Mulawarman</h4>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <!-- ini isi -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <?= $this->include('backend/layouts/js') ?>
</body>
<!-- END: Body-->

</html>