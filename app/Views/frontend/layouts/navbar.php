 <header>
     <div class="header-area">
         <div class="header-top_area">
             <div class="container">
                 <div class="row">
                     <div class="col-xl-6 col-md-6 ">
                         <div class="social_media_links">
                             <a href="#">
                                 <i class="fa fa-instagram"></i>
                             </a>
                             <a href="#">
                                 <i class="fa fa-facebook"></i>
                             </a>
                             <a href="#">
                                 <i class="fa fa-youtube-play"></i>
                             </a>
                         </div>
                     </div>
                     <div class="col-xl-6 col-md-6">
                         <div class="short_contact_list">
                             <ul>
                                 <li><a href="#"> <i class="fa fa-envelope"></i> office@fk.unmul.ac.id | ppd@unmul.ac.id</a></li>
                                 <li><a href="#"> <i class="fa fa-phone"></i>(0541) 748581</a></li>
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
                             <a href="/">
                                 <img src="<?= base_url('/img/unmul.png'); ?>" alt="" width="70">
                             </a>
                         </div>
                     </div>
                     <div class="col-xl-10 col-lg-10">
                         <div class="main-menu d-none d-lg-block">
                             <nav>
                                 <ul id="navigation">
                                     <li><a class="<?= $title == 'Beranda' ? 'text-primary' : '' ?>" href="<?= base_url('/'); ?>">Beranda</a></li>
                                     <li><a href="#" class="<?= $title == 'Profil' ? 'text-primary' : '' ?>"> Tentang Kami <i class="ti-angle-down"></i></a>
                                         <ul class="submenu">
                                             <li><a href="<?= base_url('profil/Visi-dan-Misi'); ?>">Visi dan Misi</a></li>
                                             <li><a href="<?= base_url('profil/Sejarah'); ?>">Sejarah</a></li>
                                             <li><a href="<?= base_url('profil/Struktur-Organisasi'); ?>">Struktur Organisasi</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="#" class="<?= $title == 'Program Studi' ? 'text-primary' : '' ?>"> Program Studi <i class="ti-angle-down"></i></a>
                                         <ul class="submenu">
                                             <li><a href="<?= base_url('prodi/kedokteran'); ?>">Kedokteran</a></li>
                                             <li><a href="<?= base_url('prodi/profesi-dokter'); ?>">Profesi Dokter</a></li>
                                             <li><a href="<?= base_url('prodi/sp-1-spesialis-bedah'); ?>">Sp-1 Spesialis Bedah</a></li>
                                             <li><a href="<?= base_url('prodi/s-1-kedokteran-gigi'); ?>">S-1 Kedokteran Gigi</a></li>
                                             <li><a href="<?= base_url('prodi/profesidokter-gigi'); ?>">Profesi Dokter Gigi</a></li>
                                             <li><a href="<?= base_url('prodi/d-3-keperawatan'); ?>">D-3 Keperawatan</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="#" class="<?= $title == 'Kepegawaian' ? 'text-primary' : '' ?>">SDM <i class="ti-angle-down"></i></a>
                                         <ul class="submenu">
                                             <li><a href="<?= base_url('profil-sdm/dosen'); ?>">Dosen Pengajar</a></li>
                                             <li><a href="<?= base_url('profil-sdm/tendik'); ?>">Tenaga Kependidikan</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="#" class="<?= $title == 'Laboratorium' ? 'text-primary' : '' ?>">Fasilitas <i class="ti-angle-down"></i></a>
                                         <ul class="submenu">
                                             <li><a class="<?= $title == 'Laboratorium' ? 'text-primary' : '' ?>" href="<?= base_url('/laboratorium'); ?>">Laboratorium</a></li>
                                         </ul>
                                     </li>
                                     <br>
                                     <hr style="width: 60%;">
                                     <li><a href="#" class="<?= $title == 'Kemahasiswaan' ? 'text-primary' : '' ?>">Kemahasiswaan <i class="ti-angle-down"></i></a>
                                         <ul class="submenu">
                                             <li><a class="<?= $title == 'Kemahasiswaan' ? 'text-primary' : '' ?>" href="<?= base_url('/kemahasiswaan'); ?>">Kemahasiswaan</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="<?= base_url('/penelitian'); ?>" class="<?= $title == 'Penelitian' ? 'text-primary' : '' ?>"> Penelitian dan PKM</a> </li>
                                     <li><a href="<?= base_url('/spmi'); ?>" class="<?= $title == 'Spmi' ? 'text-primary' : '' ?>"> SPMI</a> </li>
                                     <li><a href="#" class="<?= $title == 'Akreditasi' ? 'text-primary' : '' ?>">Akreditasi <i class="ti-angle-down"></i></a>
                                         <ul class="submenu">
                                             <li><a class="<?= $title == 'Akreditasi' ? 'text-primary' : '' ?>" href="<?= base_url('/akreditasi'); ?>">Akreditasi</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="<?= base_url('/informasi'); ?>" class="<?= $title == 'Informasi' ? 'text-primary' : '' ?>"> Informasi</a> </li>
                                     <li><a class="<?= $title == 'Menu' ? 'text-primary' : '' ?>" href="<?= base_url('/menu'); ?>">Semua Menu</a></li>
                                 </ul>
                             </nav>
                         </div>
                     </div>
                     <div class="col-xl-1 col-lg-1 d-none d-lg-block">
                         <div class="Appointment">
                             <div class="book_btn d-none d-lg-block">
                                 <a class="popup-with-form" href="#test-form">ApKed</a>
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