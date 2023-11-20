export default function Catalog() {
  const catalogButtons = document.querySelectorAll('.card-catalog-button')
  const contactComplete = document.querySelector('.contact-complete')

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
    }

    setInterval(() => {
      localStorage.removeItem('material')
    }, 1000);
  }


}