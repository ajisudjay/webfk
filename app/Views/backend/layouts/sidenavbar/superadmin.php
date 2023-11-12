    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="html/ltr/vertical-menu-template-semi-dark/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">FK UNMUL</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="navigation-header"><span><?= $lvl ?></span>
                <li class="<?= $title == 'Beranda' ? 'active' : '' ?>"><a href="<?= base_url('beranda'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Beranda</span></a>
                </li>
                <?php
                if ($lvl === 'Superadmin') { ?>
                    <li class="navigation-header"><span>WEBSITE</span>
                    </li>
                    <li class=""><a href="#"><i class="feather icon-menu"></i><span class="menu-title" data-i18n="Dashboard">Menu</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                        <ul class="menu-content">
                            <li class="<?= $title == 'Main Menu' ? 'active' : '' ?>"><a href="<?= base_url('mainmenu'); ?>"><i class="feather icon-menu"></i><span class="menu-item" data-i18n="Analytics">Main Menu</span></a>
                            </li>
                            <li class="<?= $title == 'Submenu' ? 'active' : '' ?>"><a href="<?= base_url('submenu'); ?>"><i class="feather icon-list"></i><span class="menu-item" data-i18n="eCommerce">Sub Menu</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class=""><a href="#"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Dashboard">Konfigurasi</span><span class="badge badge badge-warning badge-pill float-right mr-2">6</span></a>
                        <ul class="menu-content">
                            <li class="<?= $title == 'Konfigurasi' ? 'active' : '' ?>"><a href="<?= base_url('konfigurasi'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Atur Beranda</span></a>
                            </li>
                            <!-- <li class="<?= $title == 'Slideshow' ? 'active' : '' ?>"><a href="<?= base_url('slideshow'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Slideshow</span></a>
                                </li> -->
                            <li class="<?= $title == 'Aplikasi' ? 'active' : '' ?>"><a href="<?= base_url('aplikasi'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Aplikasi</span></a>
                            </li>
                            <li class="<?= $title == 'Mitra' ? 'active' : '' ?>"><a href="<?= base_url('mitra'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Mitra</span></a>
                            </li>
                            <li class="<?= $title == 'Pejabat' ? 'active' : '' ?>"><a href="<?= base_url('pejabat'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Pejabat</span></a>
                            </li>
                            <li class="<?= $title == 'Link Partner' ? 'active' : '' ?>"><a href="<?= base_url('link'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Link Partner</span></a>
                            </li>
                            <!-- <li class="<?= $title == 'Laboratorium' ? 'active' : '' ?>"><a href="<?= base_url('laboratorium'); ?>"><i class="feather icon-octagon"></i><span class="menu-item" data-i18n="Analytics">Laboratorium</span></a>
                        </li> -->
                        </ul>
                    </li>
                    <li class="<?= $title == 'Berita' ? 'active' : '' ?>"><a href="<?= base_url('berita'); ?>"><i class="feather icon-file-text"></i><span class="menu-item" data-i18n="Analytics">Berita</span></a>
                    </li>
                    <li class="<?= $title == 'Galeri' ? 'active' : '' ?>"><a href="<?= base_url('galeri'); ?>"><i class="feather icon-image"></i><span class="menu-item" data-i18n="Analytics">Galeri</span></a>
                    </li>
                    </li>
                    <!-- <li class="navigation-header"><span>BANK DATA</span>
                <li class="<?= $title == 'Surat Keputusan' ? 'active' : '' ?>"><a href="<?= base_url('sk'); ?>"><i class="feather icon-book"></i><span class="menu-item" data-i18n="Analytics">Surat Keputusan</span></a>
                </li>
                <li class="<?= $title == 'Surat Masuk' ? 'active' : '' ?>"><a href="<?= base_url('dosen'); ?>"><i class="feather icon-database"></i><span class="menu-item" data-i18n="Analytics">Repository</span></a>
                </li>
                <li class=""><a href="#"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Dashboard">SDM</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li class="<?= $title == 'Dosen' ? 'active' : '' ?>"><a href="<?= base_url('dosen'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Dosen</span></a>
                        </li>
                        <li class="<?= $title == 'Tendik' ? 'active' : '' ?>"><a href="<?= base_url('tendik'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Tendik</span></a>
                        </li>
                        <li class="<?= $title == 'Student Body' ? 'active' : '' ?>"><a href="<?= base_url('tendik'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Student Body</span></a>
                        </li>
                    </ul>
                </li>
                <li class=""><a href="#"><i class="feather icon-feather"></i><span class="menu-title" data-i18n="Dashboard">Penelitian</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li class="<?= $title == 'Dosen' ? 'active' : '' ?>"><a href="<?= base_url('dosen'); ?>"><i class="feather icon-feather"></i><span class="menu-item" data-i18n="Analytics">Penelitian</span></a>
                        </li>
                        <li class="<?= $title == 'Tendik' ? 'active' : '' ?>"><a href="<?= base_url('tendik'); ?>"><i class="feather icon-feather"></i><span class="menu-item" data-i18n="Analytics">Luaran</span></a>
                        </li>
                    </ul>
                </li>
                <li class=""><a href="#"><i class="feather icon-heart"></i><span class="menu-title" data-i18n="Dashboard">Pengabdian</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li class="<?= $title == 'Dosen' ? 'active' : '' ?>"><a href="<?= base_url('dosen'); ?>"><i class="feather icon-heart"></i><span class="menu-item" data-i18n="Analytics">PkM</span></a>
                        </li>
                        <li class="<?= $title == 'Tendik' ? 'active' : '' ?>"><a href="<?= base_url('tendik'); ?>"><i class="feather icon-heart"></i><span class="menu-item" data-i18n="Analytics">Luaran</span></a>
                        </li>
                    </ul>
                </li> -->
                    <li class=" navigation-header"><span>AKUN</span>
                    </li>
                    <li class="<?= $title == 'Akun' ? 'active' : '' ?>"><a href="<?= base_url('user'); ?>"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Analytics">Akun</span></a>
                    </li>
                    <li><a href="<?= base_url('auth/logout'); ?>"><i class="feather icon-log-out"></i><span class="menu-item" data-i18n="Analytics">Logout</span></a>
                    </li>

                    <!-- level admin -->
                <?php } else { ?>
                    <li class="navigation-header"><span>WEBSITE</span>
                    </li>
                    <li class=""><a href="#"><i class="feather icon-menu"></i><span class="menu-title" data-i18n="Dashboard">Menu</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                        <ul class="menu-content">
                            <li class="<?= $title == 'Main Menu' ? 'active' : '' ?>"><a href="<?= base_url('mainmenu'); ?>"><i class="feather icon-menu"></i><span class="menu-item" data-i18n="Analytics">Main Menu</span></a>
                            </li>
                            <li class="<?= $title == 'Submenu' ? 'active' : '' ?>"><a href="<?= base_url('submenu'); ?>"><i class="feather icon-list"></i><span class="menu-item" data-i18n="eCommerce">Sub Menu</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class=""><a href="#"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Dashboard">Konfigurasi</span><span class="badge badge badge-warning badge-pill float-right mr-2">6</span></a>
                        <ul class="menu-content">
                            <li class="<?= $title == 'Konfigurasi' ? 'active' : '' ?>"><a href="<?= base_url('konfigurasi'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Atur Beranda</span></a>
                            </li>
                            <!-- <li class="<?= $title == 'Slideshow' ? 'active' : '' ?>"><a href="<?= base_url('slideshow'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Slideshow</span></a>
                                </li> -->
                            <li class="<?= $title == 'Aplikasi' ? 'active' : '' ?>"><a href="<?= base_url('aplikasi'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Aplikasi</span></a>
                            </li>
                            <li class="<?= $title == 'Mitra' ? 'active' : '' ?>"><a href="<?= base_url('mitra'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Mitra</span></a>
                            </li>
                            <li class="<?= $title == 'Pejabat' ? 'active' : '' ?>"><a href="<?= base_url('pejabat'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Pejabat</span></a>
                            </li>
                            <li class="<?= $title == 'Link Partner' ? 'active' : '' ?>"><a href="<?= base_url('link'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Link Partner</span></a>
                            </li>
                            <!-- <li class="<?= $title == 'Laboratorium' ? 'active' : '' ?>"><a href="<?= base_url('laboratorium'); ?>"><i class="feather icon-octagon"></i><span class="menu-item" data-i18n="Analytics">Laboratorium</span></a>
                        </li> -->
                        </ul>
                    </li>
                    <li class="<?= $title == 'Berita' ? 'active' : '' ?>"><a href="<?= base_url('berita'); ?>"><i class="feather icon-file-text"></i><span class="menu-item" data-i18n="Analytics">Berita</span></a>
                    </li>
                    <li class="<?= $title == 'Galeri' ? 'active' : '' ?>"><a href="<?= base_url('galeri'); ?>"><i class="feather icon-image"></i><span class="menu-item" data-i18n="Analytics">Galeri</span></a>
                    </li>
                    </li>
                    <li class=" navigation-header"><span>AKUN</span>
                    </li>
                    <li class="<?= $title == 'Akun' ? 'active' : '' ?>"><a href="<?= base_url('user'); ?>"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Analytics">Akun</span></a>
                    </li>
                    <li><a href="<?= base_url('auth/logout'); ?>"><i class="feather icon-log-out"></i><span class="menu-item" data-i18n="Analytics">Logout</span></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->