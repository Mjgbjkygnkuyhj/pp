var swiper = new Swiper(".swiper", {
  slidesPerView: 3,
  spaceBetween: 25,
  loop: true,
  fade: 'true',
  grabCursor: 'true',
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints:{
      0: {
          slidesPerView: 3,
      },
  },
});