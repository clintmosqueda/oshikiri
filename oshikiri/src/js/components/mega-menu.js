export default function megaMenu() {
  const navDropdown = document.querySelectorAll('.js-nav-dropdown')
  const megaMenus = document.querySelector('.megamenu')
  const megaMenuItem = document.querySelectorAll('.megamenu-item')
  const IS_OPEN = 'is-open'

  navDropdown.forEach((el, index) => {
    el.addEventListener('mouseenter', e => {
      megaMenuItem.forEach((elem, i) => {
        if (i === index) {
          elem.classList.add(IS_OPEN)
        } else {
          elem.classList.remove(IS_OPEN)
        }
      })

      el.classList.add(IS_OPEN)
      megaMenus.classList.add(IS_OPEN)
    })
    el.addEventListener('mouseleave', e => {
      el.classList.remove(IS_OPEN)
      megaMenus.classList.remove(IS_OPEN)
    })
  })

  megaMenus.addEventListener('mouseenter', e => {
    megaMenus.classList.add(IS_OPEN)
  })

  megaMenus.addEventListener('mouseleave', e => {
    megaMenus.classList.remove(IS_OPEN)
    megaMenuItem.forEach(el => {
      el.classList.remove(IS_OPEN)
    })
  })
}