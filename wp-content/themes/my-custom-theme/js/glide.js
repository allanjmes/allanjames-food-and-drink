import Glide from '@glidejs/glide'
import '@glidejs/glide/dist/css/glide.core.min.css';

var glide = new Glide('#food-recipe-carousel', {
  type: 'slider',
  startAt: 0,
  perView: 5,
  gap: 0,
  bound: true,
  autoplay: 2000,
  peek: { before: 10, after: 20 },
  breakpoints: {
    992: {
      perView: 3,
      peek: { before: 14, after: 20 },
    },
    768: {
      perView: 2,
      peek: { before: 14, after: 20 },
    },
    576: {
      perView: 1,
      peek: { before: 14, after: 20 },
    },
    320: {
      perView: 1,
      peek: { before: 14, after: 20 },
    },
  },
})
glide.mount();

var glide2 = new Glide('#food-recipe-carousel-2', {
  type: 'slider',
  startAt: 0,
  perView: 5,
  gap: 0,
  bound: true,
  autoplay: 2000,
  peek: { before: 10, after: 20 },
  breakpoints: {
    992: {
      perView: 3,
      peek: { before: 14, after: 20 },
    },
    768: {
      perView: 2,
      peek: { before: 14, after: 20 },
    },
    576: {
      perView: 1,
      peek: { before: 14, after: 20 },
    },
    320: {
      perView: 1,
      peek: { before: 14, after: 20 },
    },
  },
})
glide2.mount();