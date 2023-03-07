 <footer class="footer">
     <div class="footer_top">
         <div class="container">
             <div class="row">
                 <div class="col-xl-4 col-md-6 col-lg-4">
                     <div class="footer_widget">
                         <div class="footer_logo">
                             <a href="#">
                                 <img src="<?= base_url(''); ?>/img/unmul.png" alt="" width="100">
                             </a>
                         </div>
                         <p>
                             Fakultas Kedokteran
                             <br>
                             Universitas Mulawarman
                         </p>
                         <div class="socail_links">
                             <?php foreach ($konfigurasi as $konf) : ?>
                                 <ul>
                                     <li>
                                         <a href="<?= $konf['fb'] ?>">
                                             <i class="ti-facebook"></i>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="<?= $konf['yt'] ?>">
                                             <i class="fa fa-youtube-play"></i>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="<?= $konf['ig'] ?>">
                                             <i class="fa fa-instagram"></i>
                                         </a>
                                     </li>
                                 </ul>
                             <?php endforeach ?>
                         </div>

                     </div>
                 </div>
                 <div class="col-xl-3 offset-xl-1 col-md-6 col-lg-3">
                     <div class="footer_widget">
                         <h3 class="footer_title">
                             Program Studi
                         </h3>
                         <ul>
                             <?php foreach ($prodi as $pd) : ?>
                                 <li><a href="<?= base_url('pages/' . $pd['slug']); ?>"><?= $pd['submenu'] ?></a></li>
                             <?php endforeach ?>
                         </ul>

                     </div>
                 </div>
                 <div class="col-xl-3 col-md-6 col-lg-3">
                     <div class="footer_widget">
                         <h3 class="footer_title">
                             Alamat
                         </h3>
                         <p>
                             <?php foreach ($konfigurasi as $konf) : ?>
                                 <?= $konf['alamat'] ?>
                                 <br><br>
                                 Phone: <?= $konf['telepon'] ?>
                                 <br><br>
                                 Email:
                                 <br>
                                 <?= $konf['email'] ?>
                             <?php endforeach ?>
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
                         <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                         Copyright &copy; - 2023 Fakultas Kedokteran | Universitas Mulawarman
                         <!-- <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                         <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </footer>