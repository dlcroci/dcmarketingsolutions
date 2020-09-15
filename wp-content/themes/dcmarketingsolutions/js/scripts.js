import "../css/style.css"

// Our modules / classes
import "lazysizes"
import MobileMenu from "./modules/MobileMenu"
import HeroSlider from "./modules/HeroSlider"
import Search from "./modules/Search"
import MyNotes from "./modules/MyNotes"
import Like from "./modules/Like"
import RevealOnScroll from "./modules/RevealOnScroll"
import StickyHeader from "./modules/StickyHeader"


// Instantiate a new object using our modules / classes
const mobileMenu = new MobileMenu()
const heroSlider = new HeroSlider()
const search = new Search()
const mynotes = new MyNotes()
const like = new Like()
let stickyHeader = new StickyHeader()

if (document.title === "DC Marketing Solutions – Especialistas en Marketing Digital") {
  new RevealOnScroll(document.querySelectorAll(".grid-container3"), 75)
  new RevealOnScroll(document.querySelectorAll(".grid-container4"), 60)
  new RevealOnScroll(document.querySelectorAll("#id_nosotros"), 60) 
} else if (document.title === "Nosotros – DC Marketing Solutions") {
  new RevealOnScroll(document.querySelectorAll("#id_nosotros"), 60)
} else if (document.title === "Servicios – DC Marketing Solutions") {
  new RevealOnScroll(document.querySelectorAll("#id_7"), 60);
  new RevealOnScroll(document.querySelectorAll("#servicios"), 60);
  new RevealOnScroll(document.querySelectorAll("#id_queremos_ayudarte"), 60);
}

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}
