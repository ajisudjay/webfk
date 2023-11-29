<script>
    const box = document.querySelector(".box");

    const boxberita = document.querySelector(".box-berita");
    const slideInText = document.querySelector(".slide-in-text");
    const slideInText2 = document.querySelector(".slide-in-text-2");

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