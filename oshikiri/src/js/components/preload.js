import createjs from 'preload-js';
import { gsap } from "gsap/all";
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import { scrollLock, scrollAble } from './scrolling';

export default function Preload() {
  let duration = 1000
  const autoPlayDelay = 3500
  const speed = 1000
  const baseUrl = document.querySelector('#base-url').value + '/wp-content/themes/oshikiri/assets/images/';

  const header = document.querySelector('.header')
  const sloganHeading = document.querySelector('.slogan-heading')
  const sloganDesc = document.querySelector('.slogan-desc')
  const circleSlogan = document.querySelector('.circle-slogan')
  const preloadDiv = document.querySelector('.preload')
  const preloadDivHeight = preloadDiv.clientHeight
  const preloadLogo = document.querySelector('.preload-logo')
  const logoMask = document.querySelector('.preload-logo-loading')
  const preloadImage = document.querySelector('.preload-image')
  const mvCircles = document.querySelectorAll('.mv-slide-circle')
  const mvOrbText = document.querySelector('.mv-orb-text')
  const swiperSlideText = document.querySelectorAll('.swiper-slide-text')

  const mql = window.matchMedia("(max-width: 640px)").matches;
  const preloadImageHeight = mql ? '449px' : '580px'

  const mvSliderSwiper = new Swiper('.js-mv-slider', {
    speed,
    init: false,
    slidesPerView: 1,
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
    },
    navigation: {
      prevEl: ".mv-navi-prev",
      nextEl: ".mv-navi-next",
    },
    // breakpoints: {
    //   768: {
    //     effect: 'slide',
    //   },
    //   375: {
    //     effect: 'fade',
    //     fadeEffect: {
    //       crossFade: true
    //     },
    //   }
    // },
  });

  const navSwiperleft = new Swiper('.js-mv-slider-nav-left', {
    slidesPerView: 1,
    allowTouchMove: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
  })

  const navSwiperRight = new Swiper('.js-mv-slider-nav-right', {
    slidesPerView: 1,
    allowTouchMove: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
  })

  mvOrbText.innerHTML = swiperSlideText[0].dataset.text

  mvSliderSwiper.on('realIndexChange', function (e) {
    mvOrbText.innerHTML = swiperSlideText[this.realIndex].dataset.text
    navSwiperleft.slideTo(this.realIndex, duration, false)
    navSwiperRight.slideTo(this.realIndex, duration, false)
  })



  function fadeInElement() {
    const timeline = gsap.timeline({ defaults: { duration: 1, } })
    timeline.fromTo(preloadLogo, { autoAlpha: 1 }, { autoAlpha: 0, ease: 'power1.out' }, '+=1')
    timeline.fromTo(preloadDiv, { height: `${preloadDivHeight}px` }, { height: preloadImageHeight, ease: 'expo.inOut', duration: 1.2 })
    timeline.fromTo(preloadDiv, { autoAlpha: 1, display: 'block' }, { autoAlpha: 0, display: 'none', ease: 'power1.out' })
    timeline.fromTo(sloganHeading, { autoAlpha: 0, y: 100 }, { autoAlpha: 1, y: 0, ease: 'power3.out' }, '-=1.1')
    timeline.fromTo(header, { autoAlpha: 0, y: -100 }, { autoAlpha: 1, y: 0, ease: 'power3.out', delay: 0.3 }, '<')
    timeline.fromTo(sloganDesc, { autoAlpha: 0, y: 100 }, { autoAlpha: 1, y: 0, ease: 'power3.out', delay: 0.3 }, '<')
    timeline.fromTo(circleSlogan, { autoAlpha: 0, x: -100 }, { autoAlpha: 1, x: 0, ease: 'power3.out', delay: 0.3 }, '<')
    timeline.fromTo(mvCircles, { autoAlpha: 0 }, { autoAlpha: 1, ease: 'power3.out', delay: 0.5, stagger: { each: 1 } }, '<')

    return timeline
  }

  function onStart() {
    window.scrollTo(0, 0);
    setTimeout(() => {
      scrollLock()
    }, 500);
  }

  function onFinish() {
    scrollAble()
    mvSliderSwiper.init()

  }


  function onComplete() {
    let loaderTimeline = gsap.timeline({ onStart: onStart, onComplete: onFinish })
    loaderTimeline
      .add(fadeInElement())
  }

  let queue = new createjs.LoadQueue(true);
  queue.on('complete', onComplete);
  queue.on('progress', onProgress);
  queue.loadManifest([
    { src: baseUrl + 'slide1.png' },
    { src: baseUrl + 'recruit-model.png' },
    { src: baseUrl + 'company-image1.jpg' },
    { src: baseUrl + 'company-image2.jpg' },
    { src: baseUrl + 'company-image3.jpg' },
    { src: baseUrl + 'company-image4.jpg' },
    { src: baseUrl + 'company-image5.jpg' },
  ])

  function onProgress(event) {
    let progress = Math.round(event.loaded * 100);
    logoMask.style.width = `${100 - progress}%`
  }
}