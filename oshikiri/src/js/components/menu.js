export default function Menu() {
  const header = document.querySelector('.header')
  const hamburger = document.querySelector('.js-hamburger')

  hamburger.addEventListener('click', (e) => {

    header.classList.toggle('is-open')
    // hamburger.classList.toggle('is-open')
  })
}