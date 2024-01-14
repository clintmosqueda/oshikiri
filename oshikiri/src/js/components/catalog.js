export default function Catalog() {
  const catalogButtons = document.querySelectorAll('.card-catalog-button')
  const contactComplete = document.querySelector('.contact-done')
  const downloadItem = document.querySelectorAll('.contact-post-item')
  const select = document.querySelector('[name="document"]')
  const contactDownload = document.querySelector('.contact-download')
  // console.log('referrer', document.referrer)
  const prevLink = document.referrer
  const regex = /document/g
  // console.log(prevLink.match(regex))

  if (catalogButtons.length) {
    catalogButtons.forEach(el => {
      el.addEventListener('click', (e) => {
        localStorage.setItem("material", el.dataset.material);
      })
    })
  }

  const download = (dataurl, filename) => {
    const link = document.createElement("a");
    link.href = dataurl;
    link.download = filename;
    link.click();
  }

  if (contactComplete) {
    let url = localStorage.getItem('material')
    if (url) {
      let materialName = url.split('/').slice(-1)
      download(url, materialName)

      setInterval(() => {
        localStorage.removeItem('material')
      }, 1000);
    } else {
      localStorage.removeItem('material')
    }
  }
  if (select) {
    select.addEventListener('change', (event) => {
      const value = event.target.value
      downloadItem.forEach(el => {
        if (value === el.dataset.name) {
          localStorage.setItem("material", el.dataset.pdf);
        }
      })
    })
  }

  if (contactDownload) {
    const url = new URL(window.location.href)
    const urlDecode = decodeURI(url.searchParams.get('document'))
    downloadItem.forEach(el => {
      if (urlDecode === el.dataset.name) {
        localStorage.setItem("material", el.dataset.pdf);
      }
    })
  }


}