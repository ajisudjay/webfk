 <header>
     <div class="header-area">
         <div class="header-top_area">
             <div class="container">
                 <div class="row">
                     <div class="col-xl-6 col-md-6 ">
                         <div class="social_media_links">
                             <a href="http://instagram.com/<?= $konfigurasi['ig'] ?>" target="_blank">
                                 <i class="fa fa-instagram"></i>
                             </a>
                             <a href="http://facebook.com/<?= $konfigurasi['fb'] ?>" target="_blank">
                                 <i class="fa fa-facebook"></i>
                             </a>
                             <a href="http://youtube.com/<?= $konfigurasi['yt'] ?>" target="_blank">
                                 <i class="fa fa-youtube-play"></i>
                             </a>
                         </div>
                     </div>
                     <div class="col-xl-6 col-md-6">
                         <div class="short_contact_list">
                             <ul>
                                 <li><a href="#"> <i class="fa fa-envelope"></i><?= $konfigurasi['email'] ?></a></li>
                                 <li><a href="#"> <i class="fa fa-phone"></i><?= $konfigurasi['telepon'] ?></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div id="sticky-header" class="main-header-area">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-xl-1 col-lg-1">
                         <div class="logo">
                             <a href="https://unmul.ac.id/">
                                 <img src="<?= base_url('/img/unmul.png'); ?>" width="70">
                             </a>
                         </div>
                     </div>
                     <div class="col-xl-10 col-lg-10">
                         <div class="main-menu d-none d-lg-block">
                             <nav>
                                 <ul id="navigation">
                                     <li><a class="<?= $title == 'Beranda' ? 'text-primary' : '' ?>" href="<?= base_url('/'); ?>">Beranda</a></li>
                                     <?php foreach ($menu as $item_mainmenu) : ?>
                                         <?php $menu = $item_mainmenu['mainmenu'] ?>
                                         <li><a href="#" class="<?= $title_pages == $menu ? 'text-primary' : '' ?>"> <?= $menu ?> <i class="ti-angle-down"></i></a>
                                             <ul class="submenu">
                                                 <?php foreach ($submenu as $item_submenu) : ?>
                                                     <?php if ($item_submenu['mainmenu'] == $menu) { ?>
                                                         <li><a href="<?= base_url('pages/' . $item_submenu['slug']); ?>"><?= $item_submenu['submenu'] ?></a></li>
                                                     <?php } ?>
                                                 <?php endforeach ?>
                                             </ul>
                                         </li>
                                     <?php endforeach ?>
                                     <br>
                                     <hr style="width: 60%;">
                                     <?php foreach ($menu2 as $item_mainmenu2) : ?>
                                         <?php $menu2 = $item_mainmenu2['mainmenu'] ?>
                                         <li><a href="#" class="<?= $title_pages == $menu2 ? 'text-primary' : '' ?>"> <?= $menu2 ?> <i class="ti-angle-down"></i></a>
                                             <ul class="submenu">
                                                 <?php foreach ($submenu as $item_submenu) : ?>
                                                     <?php if ($item_submenu['mainmenu'] == $menu2) { ?>
                                                         <li><a href="<?= base_url('pages/' . $item_submenu['slug']); ?>"><?= $item_submenu['submenu'] ?></a></li>
                                                     <?php } ?>
                                                 <?php endforeach ?>
                                             </ul>
                                         </li>
                                     <?php endforeach ?>
                                 </ul>
                             </nav>
                         </div>
                     </div>
                     <div class="col-xl-1 col-lg-1 d-none d-lg-block">
                         <div class="Appointment">
                             <div class="book_btn d-none d-lg-block">
                                 <a href="<?= base_url('/login'); ?>">Login</a>
                             </div>
                         </div>
                     </div>
                     <div class="col-12">
                         <div class="mobile_menu d-block d-lg-none"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>