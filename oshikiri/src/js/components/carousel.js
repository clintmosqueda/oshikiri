import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

export default function Carousel() {
  const autoPlayDelay = 5000
  const speed = 1500
  const mvSlider = document.querySelector('.js-mv-slider')
  const infoSlider = document.querySelector('.js-info-carousel')
  const aboutSlider = document.querySelector('.js-about-carousel')
  const relatedSlider = document.querySelector('.js-related-cases-carousel')
  const contextSlider = document.querySelector('.js-context-slider')

  if (mvSlider) {
    const mvSliderSwiper = new Swiper('.js-mv-slider', {
      speed,
      // effect: 'fade',
      slidesPerView: 1,
      // pagination: {
      //   el: ".mv-dots-list",
      //   clickable: true,
      //   renderBullet: function (index, className) {
      //     return (`
      //     <span class="mv-dots-circle ${className}">${index+1}
      //       <span class="mv-dots-line">
      //         <span class="mv-dots-line-inner" style="animation-duration: ${autoPlayDelay+speed}ms"></span>
      //       </span>
      //     </span>
      //     `)
      //   }
      // },
      autoplay: {
        delay: autoPlayDelay,
        disableOnInteraction: false
      },
      loop: true,
      watchSlidesProgress: true,
      on: {
        slideChange: swiper => {
          // console.log(swiper)
        }
      }
    });
  }

  if (infoSlider) {
    const infoSliderSwiper = new Swiper('.js-info-carousel', {
      speed,
      slidesPerView: 'auto',
      spaceBetween: 30,
      // cssMode: true,
      centeredSlides: false,
      scrollbar: {
        el: '.info-carousel-scroll',
        draggable: true,
      },
      watchSlidesProgress: true,
      on: {
        slideChange: swiper => {
          // console.log(swiper)
        }
      },
    });
  }

  if (aboutSlider) {
    const infoSliderSwiper = new Swiper('.js-about-carousel', {
      speed,
      slidesPerView: 1,
      spaceBetween: 25,
      watchSlidesProgress: true,
      on: {
        slideChange: swiper => {
          // console.log(swiper)
        }
      },
      breakpoints: {
        391: {
          slidesPerView: 3,
          spaceBetween: 32,
        }
      },
    });
  }

  if (relatedSlider) {
    const infoSliderSwiper = new Swiper('.js-related-cases-carousel', {
      speed,
      slidesPerView: 'auto',
      spaceBetween: 25,
      watchSlidesProgress: true,
      on: {
        slideChange: swiper => {
          // console.log(swiper)
        }
      },
    });
  }

  if (contextSlider) {
    const contextSliderSwiper = new Swiper('.js-context-slider', {
      speed,
      slidesPerView: 1,
      autoplay: {
        delay: autoPlayDelay,
        disableOnInteraction: false
      },
      loop: true,
      pagination: {
        el: ".context-slider-list",
        clickable: true,
        bulletClass: 'context-slider-list-item',
        bulletActiveClass: 'is-active'
      },
      navigation: {
        nextEl: '.context-slider-next',
        prevEl: '.context-slider-prev',
      },
      on: {
        slideChange: swiper => {
          console.log(swiper)
        }
      },
    });
  }
} 