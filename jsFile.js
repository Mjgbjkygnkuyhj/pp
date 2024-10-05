
var swiper = new Swiper(".swiper-1", {
    slidesPerView: 3,
    spaceBetween: 25,
        centerSlide: 'true',

    loop: true,
    fade: 'true',
    grabCursor: 'true',
    navigation: {
        nextEl: "#arrow-next",
        prevEl: "#arrow-prev",
    },
  
    breakpoints:{
        0: {
            slidesPerView: 3,
        },
    },
  });
var swiper1 = new Swiper(".swiper-2", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    fade: 'true',
    grabCursor: 'true',
    navigation: {
      nextEl: "#arrow-next-2",
      prevEl: "#arrow-prev-2",
    },
  
    breakpoints:{
        0: {
            slidesPerView: 3,
        },
    },
  });