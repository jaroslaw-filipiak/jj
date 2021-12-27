import 'bootstrap';

(() => {
  'use strict';

  let refOffset = 0;
  const bannerHeight = 112;
  const bannerWrapper = document.querySelector('.banner-wrapper');
  const banner = document.querySelector('.banner');

  const handler = () => {
    const newOffset = window.scrollY || window.pageYOffset;

    if (newOffset > bannerHeight) {
      if (newOffset > refOffset) {
        bannerWrapper.classList.remove('animateIn');
        bannerWrapper.classList.add('animateOut');
        bannerWrapper.classList.add('is-sticky');
      } else {
        bannerWrapper.classList.remove('is-sticky');
        bannerWrapper.classList.remove('animateOut');
        ('');
        bannerWrapper.classList.add('animateIn');
      }
      banner.style.background = 'rgba(255, 255, 255, 1)';
      refOffset = newOffset;
    } else {
      banner.style.backgroundColor = 'rgba(255, 255, 255, 1)';
    }
  };

  window.addEventListener('scroll', handler, false);
})();
