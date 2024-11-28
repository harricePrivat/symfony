/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';


const menuToggle = document.getElementById('menu-toggle');
const propos=document.getElementById("propos")
const service=document.getElementById("services")
const contact=document.getElementById("contact")
const accueil=document.getElementById("accueil")
const menu = document.getElementById('menu');
const title=document.getElementById('title')
const navbar = document.getElementById('navbar');

menuToggle.addEventListener('click', () => {
    menu.classList.toggle('hidden')
});

window.addEventListener('scroll', () => {
  if (window.scrollY > 70) {
    navbar.classList.add('bg-transparent', 'shadow-lg');
    propos.classList.add('text-black')
    service.classList.add('text-black')
    contact.classList.add('text-black')
    accueil.classList.add('text-black')
    menuToggle.classList.add('text-black')
    title.classList.add('text-black')


  } else {
    navbar.classList.remove('bg-transparent', 'shadow-lg');
    propos.classList.remove('text-black')
    service.classList.remove('text-black')
    contact.classList.remove('text-black')
    accueil.classList.remove('text-black')
    title.classList.remove('text-black')
    menuToggle.classList.remove('text-black')



  }
});