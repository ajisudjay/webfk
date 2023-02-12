<!-- JS here -->
<script src="<?= base_url(''); ?>/app-assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?= base_url(''); ?>/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?= base_url(''); ?>/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?= base_url(''); ?>/js/popper.min.js"></script>
<script src="<?= base_url(''); ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url(''); ?>/js/owl.carousel.min.js"></script>
<script src="<?= base_url(''); ?>/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url(''); ?>/js/ajax-form.js"></script>
<script src="<?= base_url(''); ?>/js/waypoints.min.js"></script>
<script src="<?= base_url(''); ?>/js/jquery.counterup.min.js"></script>
<script src="<?= base_url(''); ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url(''); ?>/js/scrollIt.js"></script>
<script src="<?= base_url(''); ?>/js/jquery.scrollUp.min.js"></script>
<script src="<?= base_url(''); ?>/js/wow.min.js"></script>
<script src="<?= base_url(''); ?>/js/nice-select.min.js"></script>
<script src="<?= base_url(''); ?>/js/jquery.slicknav.min.js"></script>
<script src="<?= base_url(''); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url(''); ?>/js/plugins.js"></script>
<script src="<?= base_url(''); ?>/js/gijgo.min.js"></script>
<!--contact js-->
<script src="<?= base_url(''); ?>/js/contact.js"></script>
<script src="<?= base_url(''); ?>/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url(''); ?>/js/jquery.form.js"></script>
<script src="<?= base_url(''); ?>/js/jquery.validate.min.js"></script>
<script src="<?= base_url(''); ?>/js/mail-script.js"></script>

<script src="<?= base_url(''); ?>/js/main.js"></script>
<script>
    window.addEventListener("load", function() {
        removeLoader();
    });

    function removeLoader() {
        setTimeout(() => {
                let loader = document.getElementById('loader');
                // hide the loader
                loader.style = 'display: none;';
            },
            1000);
    }

    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });


    const box = document.querySelector(".box");
    const boxvisi = document.querySelector(".box-visi");
    const boxberita = document.querySelector(".box-berita");
    const slideInText = document.querySelector(".slide-in-text");

    function checkIfBoxIsInView() {
        const windowHeight = window.innerHeight;
        const boxTop = box.getBoundingClientRect().top;
        const boxBottom = box.getBoundingClientRect().bottom;

        if (boxTop <= windowHeight && boxBottom >= 0) {
            box.classList.add("active");
            setTimeout(function() {
                box.classList.add("show");
                boxvisi.classList.add("show");
            }, 500);

            setTimeout(function() {
                slideInText.classList.add("show");
            }, 1000);
        }
    }

    window.addEventListener("scroll", checkIfBoxIsInView);


    const cards = document.querySelectorAll(".box-berita");

    function checkIfCardIsInView(card, index) {
        const windowHeight = window.innerHeight;
        const cardTop = card.getBoundingClientRect().top;
        const cardBottom = card.getBoundingClientRect().bottom;

        if (cardTop <= windowHeight && cardBottom >= 0) {
            setTimeout(function() {
                card.classList.add("active");
            }, index * 500);
        }
    }

    cards.forEach((card, index) => {
        window.addEventListener("scroll", function() {
            checkIfCardIsInView(card, index);
        });
    });

    const gambar = document.querySelectorAll(".box-gambar");

    function checkIfCardIsInView(card, index) {
        const windowHeight = window.innerHeight;
        const cardTop = card.getBoundingClientRect().top;
        const cardBottom = card.getBoundingClientRect().bottom;

        if (cardTop <= windowHeight && cardBottom >= 0) {
            setTimeout(function() {
                card.classList.add("active");
            }, index * 100);
        }
    }

    gambar.forEach((card, index) => {
        window.addEventListener("scroll", function() {
            checkIfCardIsInView(card, index);
        });
    });

    const text = document.querySelectorAll(".box-text");

    function checkIfCardIsInView(card, index) {
        const windowHeight = window.innerHeight;
        const cardTop = card.getBoundingClientRect().top;
        const cardBottom = card.getBoundingClientRect().bottom;

        if (cardTop <= windowHeight && cardBottom >= 0) {
            setTimeout(function() {
                card.classList.add("active");
            }, index * 100);
        }
    }

    text.forEach((card, index) => {
        window.addEventListener("scroll", function() {
            checkIfCardIsInView(card, index);
        });
    });
</script>