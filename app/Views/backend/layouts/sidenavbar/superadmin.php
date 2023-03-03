    <?php
    $uri = current_url(true);
    $url = substr($uri, 32);

    switch ($url) {
        case "beranda":
            $menu1 = 'active';
            $menu2 = '';
            $menu3 = '';
            $menu4 = '';
            $menu5 = '';
            $menu6 = '';
            break;
        case "mainmenu":
            $menu1 = '';
            $menu2 = 'active';
            $menu3 = '';
            $menu4 = '';
            $menu5 = '';
            $menu6 = '';
            break;
        case "submenu":
            $menu1 = '';
            $menu2 = '';
            $menu3 = 'active';
            $menu4 = '';
            $menu5 = '';
            $menu6 = '';
            break;
        case "berita":
            $menu1 = '';
            $menu2 = '';
            $menu3 = '';
            $menu4 = 'active';
            $menu5 = '';
            $menu6 = '';
            break;
        case "galeri":
            $menu1 = '';
            $menu2 = '';
            $menu3 = '';
            $menu4 = '';
            $menu5 = 'active';
            $menu6 = '';
            break;
        case "user":
            $menu1 = '';
            $menu2 = '';
            $menu3 = '';
            $menu4 = '';
            $menu5 = '';
            $menu6 = 'active';
            break;
        default:
            $menu1 = '';
            $menu2 = '';
            $menu3 = '';
            $menu4 = '';
            $menu5 = '';
            $menu6 = '';
    }
    ?>

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
                <li class="navigation-header"><span>Superadmin</span>
                <li class="<?= $menu1 ?>"><a href="<?= base_url('beranda'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Beranda</span></a>
                </li>
                <li class="navigation-header"><span>Menu</span>
                </li>
                <li class=""><a href="#"><i class="feather icon-menu"></i><span class="menu-title" data-i18n="Dashboard">Menu</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li class="<?= $menu2 ?>"><a href="<?= base_url('mainmenu'); ?>"><i class="feather icon-menu"></i><span class="menu-item" data-i18n="Analytics">Main Menu</span></a>
                        </li>
                        <li class="<?= $menu3 ?>"><a href="<?= base_url('submenu'); ?>"><i class="feather icon-list"></i><span class="menu-item" data-i18n="eCommerce">Sub Menu</span></a>
                        </li>
                    </ul>
                </li>
                <li class="navigation-header"><span>Data</span>
                </li>
                <li class="<?= $menu4 ?>"><a href="<?= base_url('berita'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Berita</span></a>
                </li>
                <li class="<?= $menu5 ?>"><a href="<?= base_url('galeri'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Galeri</span></a>
                </li>
                </li>
                <li class="navigation-header"><span>Pengguna</span>
                </li>
                <li class="<?= $menu6 ?>"><a href="<?= base_url('user'); ?>"><i class="feather icon-users"></i><span class="menu-item" data-i18n="Analytics">Akun</span></a>
                </li>
                <li><a href="<?= base_url('auth/logout'); ?>"><i class="feather icon-log-out"></i><span class="menu-item" data-i18n="Analytics">Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->