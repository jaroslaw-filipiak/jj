export default {
  init() {
    // JavaScript to be fired on the about us page
    $('.section-faq .collapse').on('show.bs.collapse', function () {
      const plusMinus = $(this).parent().find('.plusminus');
      plusMinus[0].classList.add('active');
    });

    $('.section-faq .collapse').on('hide.bs.collapse', function () {
      const plusMinus = $(this).parent().find('.plusminus');
      plusMinus[0].classList.remove('active');
    });
  },
};
