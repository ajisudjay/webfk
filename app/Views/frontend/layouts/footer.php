 <footer class="footer">
     <div class="footer_top">
         <div class="container">
             <div class="row">
                 <div class="col-lg-3">
                     <div class="footer_widget">
                         <div class="footer_logo">
                             <div align="center">
                                 <a href="https://unmul.ac.id/" target="_blank">
                                     <img src="<?= base_url(''); ?>/img/unmul.png" alt="" width="100">
                                 </a>
                                 <p>
                                     Fakultas Kedokteran
                                     <br>
                                     Universitas Mulawarman
                                 </p>
                                 <i class="fa fa-map-marker text-white" style="font-size: 50px;"></i>
                                 <br>
                                 <a target="_blank" href="https://goo.gl/maps/aRWabkRXjMW7wDMC9" class="boxed-btn3-white">Buka Maps</a>
                                 <div class="socail_links">
                                     <ul>
                                         <li>
                                             <a href="http://facebook.com/<?= $konfigurasi['fb'] ?>">
                                                 <i class="ti-facebook"></i>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="http://youtube.com/<?= $konfigurasi['yt'] ?>">
                                                 <i class="fa fa-youtube-play"></i>
                                             </a>
                                         </li>
                                         <li>
                                             <a href="http://instagram.com/<?= $konfigurasi['ig'] ?>">
                                                 <i class="fa fa-instagram"></i>
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="col-lg-2">
                     <div class="footer_widget">
                         <h3 class="footer_title">
                             Link Partner
                         </h3>
                         <ul>
                             <?php foreach ($link_partner as $link_p) : ?>
                                 <li><a href="<?= $link_p['link'] ?>" target="_blank"><?= $link_p['judul'] ?></a></li>
                             <?php endforeach ?>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="footer_widget">
                         <h3 class="footer_title">
                             e-Journal & e-Library
                         </h3>
                         <ul>
                             <?php foreach ($link_lib as $link_l) : ?>
                                 <li><a href="<?= $link_l['link'] ?>" target="_blank"><?= $link_l['judul'] ?></a></li>
                             <?php endforeach ?>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="footer_widget">
                         <h3 class="footer_title">
                             Alamat
                         </h3>
                         <p>
                             <?= $konfigurasi['alamat'] ?>
                             <br><br>
                             Phone: <?= $konfigurasi['telepon'] ?>
                             <br><br>
                             Email:
                             <br>
                             <?= $konfigurasi['email'] ?>
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="copy-right_text">
         <div class="container">
             <div class="footer_border"></div>
             <div class="row">
                 <div class="col-xl-12">
                     <p class="copy_right text-center">
                         Copyright &copy; - 2023 Fakultas Kedokteran | <a href="https://unmul.ac.id/" target="_blank">Universitas Mulawarman</a>
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </footer>