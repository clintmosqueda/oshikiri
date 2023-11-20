import { scrollLock, scrollAble } from './scrolling';

export default function Modal() {
  let cardEmployee = document.querySelectorAll('.js-card-employee')
  let popClose = document.querySelectorAll('.js-popup-close')
  let popup = document.querySelectorAll('.js-popup')
  let popupMain = document.querySelectorAll('.js-popup-main')
  let popupWrapper = document.querySelectorAll('.js-popup-wrapper')
  if (cardEmployee.length) {
    cardEmployee.forEach(el => {
      let href = el.href;
      let popupEl = el.nextElementSibling

      el.addEventListener('click', () => {
        popupEl.classList.add('is-open')
        scrollLock()
      })

    })

    popClose.forEach(el => {
      el.addEventListener('click', (e) => {
        e.preventDefault()
        popup.forEach(elem => {
          elem.classList.remove('is-open')
        })
        scrollAble()
      })
    })

    popupWrapper.forEach(el => {
      el.addEventListener('click', e => {
        popup.forEach(elem => {
          elem.classList.remove('is-open')
        })
        scrollAble()
      })
    })

    popupMain.forEach(el => {
      el.addEventListener('click', e => {
        e.stopPropagation()

      })
    })
  }
}