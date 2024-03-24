<?= $this->include('frontend/layouts/header') ?>

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
                                <a class="nav-link" id="monev-tab" data-toggle="tab" href="#monev" role="tab" aria-controls="monev" aria-selected="false" style="font-size: medium;font-weight: bold;"><span class="badge">Dokumen Monev</span></a>
                            </li>

                            <li class=" nav-item">
                                <a class="nav-link" id="audit-tab" data-toggle="tab" href="#audit" role="tab" aria-controls="audit" aria-selected="false" style="font-size: medium;font-weight: bold;"><span class="badge">Audit Mutu Internal</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="rtm-tab" data-toggle="tab" href="#rtm" role="tab" aria-controls="rtm" aria-selected="false" style="font-size: medium;font-weight: bold;"><span class="badge">RTM</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tl-tab" data-toggle="tab" href="#tl" role="tab" aria-controls="tl" aria-selected="false" style="font-size: medium;font-weight: bold;"><span class="badge">Evaluasi TL</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="dokumen-tab" data-toggle="tab" href="#dokumen" role="tab" aria-controls="dokumen" aria-selected="false" style="font-size: medium;font-weight: bold;"><span class="badge">Dokumen SPMI</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="maba-tab" data-toggle="tab" href="#maba" role="tab" aria-controls="maba" aria-selected="false" style="font-size: medium;font-weight: bold;"><span class="badge">Audit Seleksi Maba</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="instruksikerja-tab" data-toggle="tab" href="#instruksikerja" role="tab" aria-controls="instruksikerja" aria-selected="false" style="font-size: medium;font-weight: bold;"><span class="badge">Instruksi Kerja</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="skp-tab" data-toggle="tab" href="#skp" role="tab" aria-controls="skp" aria-selected="false" style="font-size: medium;font-weight: bold;"><span class="badge">Lap. Survey Kepuasan</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="kalender-tab" data-toggle="tab" href="#kalender" role="tab" aria-controls="kalender" aria-selected="false" style="font-size: medium;font-weight: bold;"><span class="badge">Kalender SPMI</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="border_bottom">
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade" id="monev" role="tabpanel" aria-labelledby="monev-tab">
                        <div class="col-xl-12 col-md-12">
                            <h3>Dokumen Monev</h3>
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
                                        <?php foreach ($spmi6 as $item) : ?>
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
                            <h3>RTM</h3>
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

                    <div class="tab-pane fade" id="tl" role="tabpanel" aria-labelledby="tl-tab">
                        <div class="col-xl-12 col-md-12">
                            <h3>Evaluasi TL</h3>
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
                                        <?php foreach ($spmi7 as $item) : ?>
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

                    <div class="tab-pane fade" id="dokumen" role="tabpanel" aria-labelledby="dokumen-tab">
                        <div class="col-xl-12 col-md-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="nav" id="myTab" role="tablist">
                                        <li class=" nav-item">
                                            <a class="nav-link" id="kebijakan-tab" data-toggle="tab" href="#kebijakan" role="tab" aria-controls="kebijakan" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Kebijakan SPMI</span></a>
                                        </li>
                                        <li class=" nav-item">
                                            <a class="nav-link" id="manual-tab" data-toggle="tab" href="#manual" role="tab" aria-controls="manual" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Manual SPMI</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="standar-tab" data-toggle="tab" href="#standar" role="tab" aria-controls="standar" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Standar SPMI</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="formulir-tab" data-toggle="tab" href="#formulir" role="tab" aria-controls="formulir" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Formulir SPMI</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pob-tab" data-toggle="tab" href="#pob" role="tab" aria-controls="pob" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">POB SPMI</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kebijakan" role="tabpanel" aria-labelledby="kebijakan-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="nav" id="myTab" role="tablist">
                                    <li class=" nav-item">
                                        <a class="nav-link" id="kebijakan-tab" data-toggle="tab" href="#kebijakan" role="tab" aria-controls="kebijakan" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Kebijakan SPMI</span></a>
                                    </li>
                                    <li class=" nav-item">
                                        <a class="nav-link" id="manual-tab" data-toggle="tab" href="#manual" role="tab" aria-controls="manual" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Manual SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="standar-tab" data-toggle="tab" href="#standar" role="tab" aria-controls="standar" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Standar SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="formulir-tab" data-toggle="tab" href="#formulir" role="tab" aria-controls="formulir" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Formulir SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pob-tab" data-toggle="tab" href="#pob" role="tab" aria-controls="pob" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">POB SPMI</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                                        <?php foreach ($spmi1_1 as $item) : ?>
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
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="nav" id="myTab" role="tablist">
                                    <li class=" nav-item">
                                        <a class="nav-link" id="kebijakan-tab" data-toggle="tab" href="#kebijakan" role="tab" aria-controls="kebijakan" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Kebijakan SPMI</span></a>
                                    </li>
                                    <li class=" nav-item">
                                        <a class="nav-link" id="manual-tab" data-toggle="tab" href="#manual" role="tab" aria-controls="manual" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Manual SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="standar-tab" data-toggle="tab" href="#standar" role="tab" aria-controls="standar" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Standar SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="formulir-tab" data-toggle="tab" href="#formulir" role="tab" aria-controls="formulir" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Formulir SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pob-tab" data-toggle="tab" href="#pob" role="tab" aria-controls="pob" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">POB SPMI</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                                        <?php foreach ($spmi1_2 as $item) : ?>
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
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="nav" id="myTab" role="tablist">
                                    <li class=" nav-item">
                                        <a class="nav-link" id="kebijakan-tab" data-toggle="tab" href="#kebijakan" role="tab" aria-controls="kebijakan" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Kebijakan SPMI</span></a>
                                    </li>
                                    <li class=" nav-item">
                                        <a class="nav-link" id="manual-tab" data-toggle="tab" href="#manual" role="tab" aria-controls="manual" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Manual SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="standar-tab" data-toggle="tab" href="#standar" role="tab" aria-controls="standar" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Standar SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="formulir-tab" data-toggle="tab" href="#formulir" role="tab" aria-controls="formulir" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Formulir SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pob-tab" data-toggle="tab" href="#pob" role="tab" aria-controls="pob" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">POB SPMI</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                                        <?php foreach ($spmi1_3 as $item) : ?>
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
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="nav" id="myTab" role="tablist">
                                    <li class=" nav-item">
                                        <a class="nav-link" id="kebijakan-tab" data-toggle="tab" href="#kebijakan" role="tab" aria-controls="kebijakan" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Kebijakan SPMI</span></a>
                                    </li>
                                    <li class=" nav-item">
                                        <a class="nav-link" id="manual-tab" data-toggle="tab" href="#manual" role="tab" aria-controls="manual" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Manual SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="standar-tab" data-toggle="tab" href="#standar" role="tab" aria-controls="standar" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Standar SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="formulir-tab" data-toggle="tab" href="#formulir" role="tab" aria-controls="formulir" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Formulir SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pob-tab" data-toggle="tab" href="#pob" role="tab" aria-controls="pob" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">POB SPMI</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                                        <?php foreach ($spmi1_4 as $item) : ?>
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

                    <div class="tab-pane fade" id="pob" role="tabpanel" aria-labelledby="pob-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="nav" id="myTab" role="tablist">
                                    <li class=" nav-item">
                                        <a class="nav-link" id="kebijakan-tab" data-toggle="tab" href="#kebijakan" role="tab" aria-controls="kebijakan" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Kebijakan SPMI</span></a>
                                    </li>
                                    <li class=" nav-item">
                                        <a class="nav-link" id="manual-tab" data-toggle="tab" href="#manual" role="tab" aria-controls="manual" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Manual SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="standar-tab" data-toggle="tab" href="#standar" role="tab" aria-controls="standar" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Standar SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="formulir-tab" data-toggle="tab" href="#formulir" role="tab" aria-controls="formulir" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">Formulir SPMI</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pob-tab" data-toggle="tab" href="#pob" role="tab" aria-controls="pob" aria-selected="false" style="font-size: small;font-weight: bold;"><span class="badge-muda">POB SPMI</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <h3>POB SPMI</h3>
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
                                        <?php foreach ($spmi1_5 as $item) : ?>
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

                    <div class="tab-pane fade" id="maba" role="tabpanel" aria-labelledby="maba-tab">
                        <div class="col-xl-12 col-md-12">
                            <h3>Audit Seleksi Maba</h3>
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

                    <div class="tab-pane fade" id="instruksikerja" role="tabpanel" aria-labelledby="instruksikerja-tab">
                        <div class="col-xl-12 col-md-12">
                            <h3>Instruksi Kerja</h3>
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
                                        <?php foreach ($spmi8 as $item) : ?>
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
                                        <?php foreach ($spmi5 as $item) : ?>
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

                    <div class="tab-pane fade" id="kalender" role="tabpanel" aria-labelledby="kalender-tab">
                        <div class="col-xl-12 col-md-12">
                            <h3>Kalender SPMI</h3>
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
                                        <?php foreach ($spmi9 as $item) : ?>
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