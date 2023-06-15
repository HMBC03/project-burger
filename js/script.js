//Ejecutamos serviceworker
if('serviceWorker' in navigator){
  navigator.serviceWorker.register('./ServiceWorker.js')
    .then(reg => console.log('Registro con ServiceWorker exitosa', reg))
    .catch(err => console.warn('Error Con el registro del service worker',err))
}
//Animation con js para menu
document.querySelector(".burger_menu").addEventListener("click", animateBars);
var line1=document.querySelector(".line1_menu");
var line2=document.querySelector(".line2_menu");
var line3=document.querySelector(".line3_menu");  

function animateBars(){
  line1.classList.toggle("activeline1_menu");
  line2.classList.toggle("activeline2_menu");
  line3.classList.toggle("activeline3_menu");

  //abrir y cerrar menu hamburguesa capturando el div nav-bar y cambiando su estilo de none a block
  var navBar = document.querySelector(".nav-bar");
  if (navBar.style.display === "block") {
    navBar.style.display = "none";
  } else {
    navBar.style.display = "block";
  }
}
//ocultamos el menu lateral cuando el usuario seleccione una opción
document.querySelector("ul").addEventListener("click",animateBars);

//slider

const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // Navigation arrows
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },

  });


