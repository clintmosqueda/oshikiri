export default function Facility() {
  const facility = document.querySelectorAll('.facility')
  const facilityTop = document.querySelectorAll('.facility-top')
  const facilityBottom = document.querySelectorAll('.facility-bottom')
  const facilityBottomWrap = document.querySelectorAll('.facility-bottom-wrap')
  const close = document.querySelectorAll('.facility-access')

  if (facility.length) {
    setTimeout(() => {
      let facilityBottomWrapHeight = facilityBottomWrap[0].getBoundingClientRect().height
      facilityBottom[0].style.height = `${facilityBottomWrapHeight}px`
    }, 300);


    facilityTop.forEach((el, index) => {
      if (facilityBottom[index]) {
        el.addEventListener('click', (e) => {
          let facilityBottomWrapHeight = facilityBottomWrap[index].getBoundingClientRect().height
          facilityBottom[index].style.height = `${facilityBottomWrapHeight}px`
        })
      }

    })

    close.forEach((el, index) => {
      el.addEventListener('click', (e) => {
        facilityBottom[index].style.height = `0px`
      })
    })
  }
}