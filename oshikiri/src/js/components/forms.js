export default function Forms() {
  const contact = document.querySelector('.contact')
  const confirmButton = document.querySelector('.contact-button-confirm')
  const fileUpdates = document.querySelectorAll('.js-contact-upload-file')
  const outputFilenames = document.querySelectorAll('.js-contact-upload-filename')
  const agree = document.querySelector('.contact-agree-checkbox')

  if (contact) {
    fileUpdates.forEach((el, index) => {
      el.addEventListener('change', (e) => {
        // console.log('e', e)
        let filename = e.target.files[0].name
        outputFilenames[index].innerHTML = filename
      })
    })

    agree.addEventListener('click', (e) => {
      agree.checked ? confirmButton.classList.remove('is-disabled') : confirmButton.classList.add('is-disabled')
    })
  }
}