export default function Facility() {
  const facility = document.querySelectorAll('.facility')
  const facilityTop = document.querySelectorAll('.facility-top')
  const facilityBottom = document.querySelectorAll('.facility-bottom')
  const facilityBottomWrap = document.querySelectorAll('.facility-bottom-wrap')
  const close = document.querySelectorAll('.facility-access')

  if (facility.length) {
    let facilityBottomWrapHeight = facilityBottomWrap[0].clientHeight
    facilityBottom[0].style.height = `${facilityBottomWrapHeight}px`

    facilityTop.forEach((el, index) => {
      el.addEventListener('click', (e) => {
        let facilityBottomWrapHeight = facilityBottomWrap[index].clientHeight
        facilityBottom[index].style.height = `${facilityBottomWrapHeight}px`
      })
    })

    close.forEach((el, index) => {
      el.addEventListener('click', (e) => {
        facilityBottom[index].style.height = `0px`
      })
    })
  }
}