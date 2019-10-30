var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 50,
        modifier: 1,
        slideShadows : false,
      },
      navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
    },
});

swiper.slideTo(1,false,false);