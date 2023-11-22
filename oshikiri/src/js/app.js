import Mv from './components/mv'
import megaMenu from './components/mega-menu'
import Carousel from './components/carousel'
import Modal from './components/modal'
import Menu from './components/menu'
import Accordion from './components/accordion'
import Products from './components/products'
import Scrollto from './components/scrollTo'
import Forms from './components/forms'
import Catalog from './components/catalog'
import Preload from './components/preload'

const url = window.location.pathname
const currenPage = url.split('/').at(-1)

if (currenPage === '') {
  Preload()
}
// Mv()
Carousel()
Menu()
megaMenu()
Modal()
Accordion()
Products()
Scrollto()
Forms()
Catalog()

