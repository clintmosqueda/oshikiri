export default function sideNav() {
  const observeSections = document.querySelectorAll('.about-section');
  const links = document.querySelectorAll('.composition-sidebar-link')

  const observer = new IntersectionObserver(entries => {
    entries.forEach((entry, index) => {
      const intersecting = entry.isIntersecting

      if (intersecting) {
        links.forEach(link => {
          const hash = link.hash
          link.classList.remove('is-active')
          if (hash === `#${entry.target.id}`) {
            link.classList.add('is-active')
          }
        })
      }
    })
  }, { threshold: 0.4 })

  if (observeSections.length) {
    observeSections.forEach(section => {
      observer.observe(section)
    })
  }

}