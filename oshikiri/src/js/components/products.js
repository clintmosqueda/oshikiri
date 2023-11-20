export default function Products() {
  const tabs = document.querySelectorAll('.assembly-line')
  const contents = document.querySelectorAll('.assembly-product')
  const megaMenuProduct = document.querySelectorAll('.megamenu-machine')
  const IS_OPEN = 'is-open'

  if (tabs.length) {
    let tab = localStorage.getItem('tab')
    if (tab) {
      document.getElementById(tab).classList.add(IS_OPEN)
      document.getElementById(`assembly-${tab}`).classList.add(IS_OPEN)
    } else {
      localStorage.setItem('tab', 'type');
      document.getElementById('type').classList.add(IS_OPEN)
      document.getElementById('assembly-type').classList.add(IS_OPEN)
    }

    tabs.forEach((el, i) => {
      el.addEventListener('click', (e) => {
        localStorage.setItem("tab", el.dataset.tab);

        tabs.forEach(elem => {
          elem.classList.remove(IS_OPEN)
        })
        el.classList.add(IS_OPEN)

        contents.forEach(elem => {
          elem.classList.remove(IS_OPEN)
        })
        contents[i].classList.add(IS_OPEN)
      })
    });
  }

  megaMenuProduct.forEach(el => {
    el.addEventListener('click', () => {
      localStorage.setItem("tab", el.dataset.tab);
    })
  })
}