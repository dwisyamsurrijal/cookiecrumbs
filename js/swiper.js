let product = new Swiper(".product-content", {
  loop: true,

  grabCursor: true,

  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },

  breakpoints: {
    360: {
      slidesPerView: 1,
      spaceBetween: 16,
    },

    430: {
      slidesPerView: 1,
      spaceBetween: 16,
    },

    540: {
      slidesPerView: 1,
      spaceBetween: 16,
    },

    768: {
      slidesPerView: 2,
      spaceBetween: 16,
    },

    912: {
      slidesPerView: 2,
      spaceBetween: 16,
    },

    1024: {
      slidesPerView: 2,
      spaceBetween: 42,
    },

    1280: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
});

let productrecommended = new Swiper(".product-content-recommend", {
  loop: true,

  grabCursor: true,

  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },

  breakpoints: {
    360: {
      slidesPerView: 1,
      spaceBetween: 16,
    },

    430: {
      slidesPerView: 1,
      spaceBetween: 16,
    },

    540: {
      slidesPerView: 1,
      spaceBetween: 16,
    },

    768: {
      slidesPerView: 2,
      spaceBetween: 16,
    },

    912: {
      slidesPerView: 2,
      spaceBetween: 16,
    },

    1024: {
      slidesPerView: 2,
      spaceBetween: 42,
    },

    1280: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
});
