;
const CACHE_NAME = 'project_burger';
const urlsToCache = [
    './',
    './index.php',
    './login.php',
    './registro.php',
    './css/style.css',
    './css/sesion.css',
    './css/admin.css',
    './js/script.js', 
    './js/registro.js',
    './css/blackwood.jpg',
    './resources/Grupo 4.png',
    './resources/aboutus3.jpg',
    './resources/customer1.jpg',
    './resources/customer2.jpg',
    './resources/customer3.jpg',
    './resources/burgertipo1.png',
    './resources/burgertipo2.png',
    './resources/burgertipo3.png',
    './resources/burgertipo4.png',
    './resources/burgertipo5.png',
    './resources/burgertipo6.png',
    './resources/BURGER.png',
    './resources/Burguer2.png',
    './resources/login.jpg',
    './resources/registro.jpg',
    './resources/whatsapp.png',
    './resources/instagram.png',
    './resources/facebook.png'

  ];

//durante la fase de instalación, generalmente se almacena en caché los activos estáticos
self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache)
          .then(() => self.skipWaiting());
      })
      .catch(err => console.log('Falló registro de cache', err))
  )
});

//una vez que se instala el SW, se activa y busca los recursos para hacer que funcione sin conexión
self.addEventListener('activate', e => {
  const cacheWhitelist = [CACHE_NAME]

  e.waitUntil(
    caches.keys()
      .then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            //Eliminamos lo que ya no se necesita en cache
            if (cacheWhitelist.indexOf(cacheName) === -1) {
              return caches.delete(cacheName)
            }
          })
        )
      })
      // Le indica al SW activar el cache actual
      .then(() => self.clients.claim())
  )
})

//cuando el navegador recupera una url
self.addEventListener('fetch', e => {
  //Responder ya sea con el objeto en caché o continuar y buscar la url real
  e.respondWith(
    caches.match(e.request)
      .then(res => {
        if (res) {
          //recuperar del cache
          return res
        }
        //recuperar de la petición a la url
        return fetch(e.request)
      })
  )
})


