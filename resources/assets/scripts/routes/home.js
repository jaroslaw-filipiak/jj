export default {
  init() {
    const swiper = new Swiper('.hero', {
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-custom-arrow-next',
        prevEl: '.swiper-custom-arrow-prev',
      },

      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });

    $('.section-faq .collapse').on('show.bs.collapse', function () {
      const plusMinus = $(this).parent().find('.plusminus');
      plusMinus[0].classList.add('active');
    });

    $('.section-faq .collapse').on('hide.bs.collapse', function () {
      const plusMinus = $(this).parent().find('.plusminus');
      plusMinus[0].classList.remove('active');
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
