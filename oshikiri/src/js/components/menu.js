import { scrollLock, scrollAble } from './scrolling';
export default function Menu() {
  const header = document.querySelector('.header')
  const hamburger = document.querySelector('.js-hamburger')
  const dropdown = document.querySelectorAll('.menu-item-caret')
  const itemGroup = document.querySelectorAll('.menu-item-group')

  hamburger.addEventListener('click', (e) => {

    header.classList.toggle('is-open')
    if (header.classList.contains('is-open')) {
      scrollLock()
    } else {
      scrollAble()
    }

    itemGroup.forEach(el => {
      el.classList.remove('is-open')
    })
  })

  dropdown.forEach((el, index) => {
    el.addEventListener('click', (e) => {
      el.parentElement.classList.toggle('is-open')
    })
  })
}