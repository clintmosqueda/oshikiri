export default function Translator() {
  const translatorButton = document.querySelectorAll('.translator-button')
  const translator = document.querySelectorAll('.translator')

  if (translatorButton.length) {
    translatorButton.forEach((el, index) => {
      el.addEventListener('click', () => {
        translator[index].classList.toggle('is-show')
      })
    })

  }
}