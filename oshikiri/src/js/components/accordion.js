export default function Accordion() {
  const trigger = document.querySelectorAll('.js-trigger')
  const group = document.querySelectorAll('.js-career-job-group')
  const details = document.querySelectorAll('.js-career-job-details')

  if (trigger.length) {

    const initHeight = details[0].getBoundingClientRect().height
    trigger[0].classList.add('is-open')
    group[0].style.height = `${initHeight + 36}px`


    trigger.forEach((el, index) => {
      el.addEventListener('click', (e) => {
        const contentHeight = details[index].getBoundingClientRect().height
        el.classList.toggle('is-open');

        if (el.classList.contains('is-open')) {
          group[index].style.height = `${contentHeight + 36}px`
        } else {
          group[index].style.height = `0px`
        }

      })
    })
  }
}