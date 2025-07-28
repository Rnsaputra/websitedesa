document.addEventListener("DOMContentLoaded", function () {

    var swiper = new Swiper(".mySwiper", {
        grabcursor: true,
        rewind: true,
        centeredSlides: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 400,
            modifier: 1,
            slideShadow: true
        },
        slidesPerView: "auto",
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 5000,
        },

        breakpoints: {
            // ketika lebar jendela >= 640px

            // ketika lebar jendela >= 768px
            768: {
                centeredSlides: true,
                slidesPerView: "auto",

            },
        },
    });
    var swiper = new Swiper(".berita", {
        spaceBetween: 10,
        slidesPerView: 'auto',
        centeredSlides: true,
        freeMode: true,
        
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 4500,
        },
        breakpoints: {
            // ketika lebar jendela >= 640px

            // ketika lebar jendela >= 768px
            768: {
                centeredSlides: false,
                direction: 'vertical',
                slidesPerView: '3',
                freeMode: true,
                mousewheel: true,

            },
        },
    });
    new Swiper(".mySwiper2", {
        grabcursor: true,
        effect: "coverflow",
        centeredSlides: true,
        rewind: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 400,
            modifier: 1,
            slideShadow: true
        },
        autoplay: {
            delay: 4500,
        },
        slidesPerView: "auto", // 1 card terlihat di layar kecil

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            // 3 card terlihat di layar >= 1024px
        },


    });
    new Swiper(".swiperPerangkat", {
        grabcursor: true,
        rewind: true,
        effect: "coverflow",
        centeredSlides: true,
        coverflowEffect: {
            rotate: 5,
            stretch: 0,
            depth: 50,
            modifier: 1,
            slideShadow: true
        },
        autoplay: {
            delay: 3000,
        },
        slidesPerView: "auto", // 1 card terlihat di layar kecil

        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },


    });

});
