export default function Mv() {
  const mv = document.querySelector('.mv')
  const orb = document.querySelector('.mv-orb')
  const mql = window.matchMedia("(max-width: 640px)").matches;

  if (mv && !mql) {
    mv.addEventListener('mousemove', (e) => {
      orb.style.top = `${e.pageY - e.currentTarget.offsetTop}px`
      orb.style.left = `${e.pageX - e.currentTarget.offsetLeft - (orb.clientHeight / 2)}px`
    })

    mv.addEventListener('mouseleave', () => {

      orb.style.opacity = '0'
    })

    mv.addEventListener('mouseenter', () => {
      orb.style.opacity = '1'
    })
  }
}