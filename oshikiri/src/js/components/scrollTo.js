import { gsap, ScrollToPlugin } from "gsap/all";
gsap.registerPlugin(ScrollToPlugin);

export default function Scrollto() {
  const htmlBody = document.querySelectorAll('html, body');
  const productTax = document.querySelector('.product-category-tax')
  const archiveProduct = document.querySelector('.archive-product')

  if (productTax) {
    gsap.to(htmlBody, {
      scrollTo: productTax.offsetTop,
      duration: 1.2,
      ease: "Power4.easeInOut"
    })
  }

  if (archiveProduct) {
    gsap.to(htmlBody, {
      scrollTo: archiveProduct.offsetTop,
      duration: 1.2,
      ease: "Power4.easeInOut"
    })
  }
}