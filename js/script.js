
//cargando mapa de bing maps para la seccion contacto
function loadMapScenario() {
  var map = new Microsoft.Maps.Map(document.getElementById('map'), {
      center: new Microsoft.Maps.Location(4.637823, -74.084724),
      zoom: 16
  });
  var center = map.getCenter();
  var pin = new Microsoft.Maps.Pushpin(center, {
      title: 'Burguer'
  });
  map.entities.push(pin);
}
  
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
