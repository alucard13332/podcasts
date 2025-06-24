var swiper = new Swiper(".swiper_location", {
  navigation: {
    prevEl: ".swiper-button-prev_location",
    nextEl: ".swiper-button-next_location",
    enabled: true,
  },
  loop: true,
  direction: "horizontal",
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 16,
    },
    700: {
      slidesPerView: 2,
      spaceBetween: 16,
    },
    980: {
      slidesPerView: 3,
      spaceBetween: 16,
    },
    1024: {
      slidesPerView: 3,
      slidesPerGroup: 1,
      spaceBetween: 32,
    },
    1280: {
      slidesPerView: 3,
      spaceBetween: 48,
    },
    1920: {
      slidesPerView: 3,
      slidesPerGroup: 1,
      spaceBetween: 64,
    },
  },
});
