<?= $this->include('frontend/layouts/header') ?>
<style>
    .dropbtn {
        color: black;
        font-weight: bold;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #F5FBFF;
    }
</style>

<body>
    <?= $this->include('frontend/layouts/navbar') ?>
    <!-- Isi Konten Website -->
    <!-- bradcam_area_start  -->
    <div class="bradcam_area bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3><?= $title ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
    <div class="business_expert_area">
        <div class="business_tabs_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link" style="font-size: small;font-weight: bold;"><button class="dropbtn">Dokumen SPMI</button></a>
                                    <div class="dropdown-content">
                                        <a class="nav-link" id="kebijakan-tab" data-toggle="tab" href="#kebijakan" role="tab" aria-controls="kebijakan" aria-selected="false" style="font-size: small;font-weight: bold;">Kebijakan SPMI</a>
                                        <a class="nav-link" id="manual-tab" data-toggle="tab" href="#manual" role="tab" aria-controls="manual" aria-selected="false" style="font-size: small;font-weight: bold;">Manual SPMI</a>
                                        <a class="nav-link" id="standar-tab" data-toggle="tab" href="#standar" role="tab" aria-controls="standar" aria-selected="false" style="font-size: small;font-weight: bold;">Standar SPMI</a><a class="nav-link" id="formulir-tab" data-toggle="tab" href="#formulir" role="tab" aria-controls="formulir" aria-selected="false" style="font-size: small;font-weight: bold;">Formulir SPMI</a>
                                    </div>
                                </div>
                            </li>
                            <li class=" nav-item">
                                <a class="nav-link" id="audit-tab" data-toggle="tab" href="#audit" role="tab" aria-controls="audit" aria-selected="false" style="font-size: small;font-weight: bold;">Audit Mutu Internal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rtm-tab" data-toggle="tab" href="#rtm" role="tab" aria-controls="rtm" aria-selected="false" style="font-size: small;font-weight: bold;">Laporan Tinjauan Manajemen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="skp-tab" data-toggle="tab" href="#skp" role="tab" aria-controls="skp" aria-selected="false" style="font-size: small;font-weight: bold;">Laporan Survey Kepuasan</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="border_bottom">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="kebijakan" role="tabpanel" aria-labelledby="kebijakan-tab">
                        <div class="col-xl-12 col-md-12">
                            <h3>Kebijakan SPMI</h3>
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped table-hover-animation nowrap">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="55%">Nama</th>
                                            <th width="5%" align="center">Unduh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($spmi2 as $item) : ?>
                                            <tr>
                                                <!-- ISI VIEW -->
                                                <td><?= $no++ ?></td>
                                                <td style="min-width: 100px;max-width: 200px; white-space: normal;"><?= $item['nama'] ?></td>
                                                <td align="center"><a href="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" download="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" class="btn btn-danger">
                                                        <span class="fa fa-download"></span>
                                                    </a></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="manual" role="tabpanel" aria-labelledby="manual-tab">
                        <div class="col-xl-12 col-md-12">
                            <h3>Manual SPMI</h3>
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped table-hover-animation nowrap">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="55%">Nama</th>
                                            <th width="5%" align="center">Unduh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($spmi2 as $item) : ?>
                                            <tr>
                                                <!-- ISI VIEW -->
                                                <td><?= $no++ ?></td>
                                                <td style="min-width: 100px;max-width: 200px; white-space: normal;"><?= $item['nama'] ?></td>
                                                <td align="center"><a href="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" download="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" class="btn btn-danger">
                                                        <span class="fa fa-download"></span>
                                                    </a></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="standar" role="tabpanel" aria-labelledby="standar-tab">
                        <div class="col-xl-12 col-md-12">
                            <h3>Standar SPMI</h3>
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped table-hover-animation nowrap">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="55%">Nama</th>
                                            <th width="5%" align="center">Unduh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($spmi2 as $item) : ?>
                                            <tr>
                                                <!-- ISI VIEW -->
                                                <td><?= $no++ ?></td>
                                                <td style="min-width: 100px;max-width: 200px; white-space: normal;"><?= $item['nama'] ?></td>
                                                <td align="center"><a href="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" download="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" class="btn btn-danger">
                                                        <span class="fa fa-download"></span>
                                                    </a></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="formulir" role="tabpanel" aria-labelledby="formulir-tab">
                        <div class="col-xl-12 col-md-12">
                            <h3>Formulir SPMI</h3>
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped table-hover-animation nowrap">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="55%">Nama</th>
                                            <th width="5%" align="center">Unduh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($spmi2 as $item) : ?>
                                            <tr>
                                                <!-- ISI VIEW -->
                                                <td><?= $no++ ?></td>
                                                <td style="min-width: 100px;max-width: 200px; white-space: normal;"><?= $item['nama'] ?></td>
                                                <td align="center"><a href="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" download="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" class="btn btn-danger">
                                                        <span class="fa fa-download"></span>
                                                    </a></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="audit" role="tabpanel" aria-labelledby="audit-tab">
                        <div class="col-xl-12 col-md-12">
                            <h3>Audit Mutu Internal</h3>
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped table-hover-animation nowrap">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="55%">Nama</th>
                                            <th width="5%" align="center">Unduh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($spmi2 as $item) : ?>
                                            <tr>
                                                <!-- ISI VIEW -->
                                                <td><?= $no++ ?></td>
                                                <td style="min-width: 100px;max-width: 200px; white-space: normal;"><?= $item['nama'] ?></td>
                                                <td align="center"><a href="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" download="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" class="btn btn-danger">
                                                        <span class="fa fa-download"></span>
                                                    </a></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="rtm" role="tabpanel" aria-labelledby="rtm-tab">
                        <div class="col-xl-12 col-md-12">
                            <h3>Laporan Tinjauan Manajemen</h3>
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped table-hover-animation nowrap">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="55%">Nama</th>
                                            <th width="5%" align="center">Unduh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($spmi3 as $item) : ?>
                                            <tr>
                                                <!-- ISI VIEW -->
                                                <td><?= $no++ ?></td>
                                                <td style="min-width: 100px;max-width: 200px; white-space: normal;"><?= $item['nama'] ?></td>
                                                <td align="center"><a href="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" download="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" class="btn btn-danger">
                                                        <span class="fa fa-download"></span>
                                                    </a></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="skp" role="tabpanel" aria-labelledby="skp-tab">
                        <div class="col-xl-12 col-md-12">
                            <h3>Laporan Survey Kepuasan</h3>
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped table-hover-animation nowrap">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="55%">Nama</th>
                                            <th width="5%" align="center">Unduh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($spmi4 as $item) : ?>
                                            <tr>
                                                <!-- ISI VIEW -->
                                                <td><?= $no++ ?></td>
                                                <td style="min-width: 100px;max-width: 200px; white-space: normal;"><?= $item['nama'] ?></td>
                                                <td align="center"><a href="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" download="<?= base_url('writable/uploads/content/spmi/' . $item['file'] . '') ?>" class="btn btn-danger">
                                                        <span class="fa fa-download"></span>
                                                    </a></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Isi Konten Website -->
    <?= $this->include('frontend/layouts/footer') ?>
</body>

<?= $this->include('frontend/layouts/js') ?>