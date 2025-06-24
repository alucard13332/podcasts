var swiper = new Swiper(".swiper_reviews", {
    navigation: {
        prevEl: ".swiper-button-prev_reviews",
        nextEl: ".swiper-button-next_reviews",
        enabled: true,
    },
    loop: true,
    direction: "horizontal",
    autoplay: {
        delay: 10000,
    },
    breakpoints: {
        768: {
            slidesPerView: 1,
        },
        1024: {
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
        1280: {
            slidesPerView: 1,
        },
        1920: {
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
    },
});