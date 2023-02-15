    <?php
    $uri = current_url(true);
    $url = substr($uri, 32);

    switch ($url) {
        case "beranda":
            $menu1 = 'active';
            $menu2 = '';
            $menu3 = '';
            break;
        case "mainmenu":
            $menu1 = '';
            $menu2 = 'active';
            $menu3 = '';
            break;
        case "submenu":
            $menu1 = '';
            $menu2 = '';
            $menu3 = 'active';
            break;
        default:
            $menu1 = '';
            $menu2 = '';
            $menu3 = '';
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
                <li class="<?= $menu1 ?>"><a href="<?= base_url('beranda'); ?>"><i class="feather icon-home"></i><span class="menu-item" data-i18n="Analytics">Beranda</span></a>
                </li>
                <li class="navigation-header"><span>Data</span>
                </li>
                <li class=""><a href="#"><i class="feather icon-menu"></i><span class="menu-title" data-i18n="Dashboard">Menu</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li class="<?= $menu2 ?>"><a href="<?= base_url('mainmenu'); ?>"><i class="feather icon-menu"></i><span class="menu-item" data-i18n="Analytics">Menu</span></a>
                        </li>
                        <li class="<?= $menu3 ?>"><a href="<?= base_url('submenu'); ?>"><i class="feather icon-list"></i><span class="menu-item" data-i18n="eCommerce">Sub Menu</span></a>
                        </li>
                    </ul>
                </li>
                <li class="navigation-header"><span>Pengguna</span>
                </li>
                <li><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">User</span></a>
                    <ul class="menu-content">
                        <li><a href="<?= base_url('menu'); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a href="<?= base_url('menu'); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">View</span></a>
                        </li>
                        <li><a href="<?= base_url('menu'); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->