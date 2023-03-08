<script>
    const box = document.querySelector(".box");

    const boxmisi = document.querySelector(".box-misi");
    const boxvisi = document.querySelector(".box-visi");
    const boxberita = document.querySelector(".box-berita");
    const slideInText = document.querySelector(".slide-in-text");
    const slideInText2 = document.querySelector(".slide-in-text-2");

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

    window.addEventListener("scroll", checkIfBoxIsInView2);

    function checkIfBoxIsInView2() {
        const windowHeight = window.innerHeight;
        const boxTop = misi.getBoundingClientRect().top;
        const boxBottom = misi.getBoundingClientRect().bottom;

        if (boxTop <= windowHeight && boxBottom >= 0) {
            misi.classList.add("active");
            setTimeout(function() {
                misi.classList.add("show");
                boxmisi.classList.add("show");
            }, 500);

            setTimeout(function() {
                slideInText2.classList.add("show");
            }, 1000);
        }
    }

    const misi = document.querySelectorAll(".box-misi");

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

    misi.forEach((card, index) => {
        window.addEventListener("scroll", function() {
            checkIfCardIsInView(card, index);
        });
    });

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