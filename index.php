<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://kit.fontawesome.com/57e129950d.js" crossorigin="anonymous"></script>
    <title>Burger</title>
    <!--Configuracion PWA-->
    <meta name="description" content="Este proyecto web ha sido desarrollado con fines academicos para la Universidad Distrital Francisco José de Caldas- Donde se simula un gastro-bar ">
    <meta name="theme-color" content="#ffffff">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> 
    <link rel="shortcut icon" href="./resources/ICON/1024.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="resources/ICON/128.png">
    <link rel="apple-touch-startup-image" href="resources/ICON/128.png">
    <link rel="manifest" href="./manifest.json">


   
</head>
<body>
    
    <header>
        <nav>
            <a href="index.html"><img class="logo" src="resources/BURGER.png" alt="logo"></a>    
            
                <div class="burger_menu">
                    <span class="line1_menu"></span>
                    <span class="line2_menu"></span>
                    <span class="line3_menu"></span>
                </div> 
            <div class="nav-bar">
            <ul>    
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#menu">Menú</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a href="#acerca_de">Acerca de</a></li>
                <li><a href="#experiencias">Experiencias</a></li>
                <li><a href="./login.php"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a></li>
            </ul>
            </div> 
        </nav>
         
    </header>

    <section id="inicio">

        <div class="inicio_descripcion">
            <h1>TE VOLVERÁS LOCO POR SU SABOR</h1>
            <p>Ofrecemos las mejores hamburguesas de Colombia, frescas y de alta calidad preparadas a la parrilla. Ven y prueba nuestras deliciosas opciones artesanales y vegetarianas o pídelas a domicilio.
            No te quedes con la ganas. </p>
            <span>!Te esperamos!</span><br>

            <button onclick="window.location.href = '#menu';">Ordenar Ahora</button>
        </div>
       
        <div class="inicio_ilustracion">
            <img class="img1" src="resources/Grupo 4.png" alt="burger">
            
        </div>

    </section>



  <!--<section id="menu">-->  
   <section id="menu">
         <!-- Slider main container -->
         <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <h1> BURGUER THE KING</h1>
                    <img class="sliderimg"src="resources/burgertipo5.png" alt="burger">
                    
                    <p>250 gramos de carne, queso mozzarella, lechuga, tomate, pimentón, piña, salsa de la casa y pan artesanal.</p>
                    <button>Comprar</button>   

                </div>
                <div class="swiper-slide">
                        <h1> BURGUER LOCURA</h1>
                        <img class="sliderimg"src="resources/burgertipo6.png" alt="burger">
                        <p>250 gramos de carne, queso mozzarella , queso maasdam, lechuga, pepinillos y pan artesanal.</p>
                        <button>Comprar</button>
                    
                </div>
                <div class="swiper-slide">
                        <h1> BURGUER DE LA GRANJA</h1>
                        <img class="sliderimg"src="resources/burgertipo4.png" alt="burger">
                        <p>170 gramos de carne, queso mozzarella, pepinillos, jamón de cerdo, pollo desmechado y salsas de la casa.</p>      
                        <button>Comprar</button>
                </div>
                <div class="swiper-slide">
                        <h1> BURGUER MAGO DE OZ</h1>
                        <img class="sliderimg"src="resources/burgertipo3.png" alt="burger">
                        <p>230 gramos de carne, queso cheddar, plátano maduro, pan artesanal, salsas de la casa</p>
                        <button>Comprar</button>
                    
                </div>
                <div class="swiper-slide">
                    <h1> BURGUER JUNGLA URBANA</h1>
                        <img class="sliderimg"src="resources/burgertipo2.png" alt="burger">
                        <p>230 gramos de carne, queso mozzarella, tocineta, cebolla caramelizada, pan artesanal y salsa BBQ, . </p>      
                        <button>Comprar</button> 
                </div>
                <div class="swiper-slide">
                        <h1> BURGUER OESTE SALVAJE</h1>
                        <img class="sliderimg"src="resources/burgertipo1.png" alt="burger">
                        <p>170 gramos de carne, queso mozzarella, lechuga, tomate, aguacate y huevo frito. </p>    
                        <button>Comprar</button>
                </div>
            </div>
        
            <!-- navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        
            </div>
    

   </section>


    <h1>CONTACTO</h1>
    <section id="contacto">
        <iframe id="mapa" title="Mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15907.374608549204!2d-74.08640294458004!3d4.6219682999999945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99867de2d59d%3A0x46f4e46d41ec6c6c!2sUniversidad%20Distrital%20Francisco%20Jos%C3%A9%20De%20Caldas%20-%20Sede%20Calle%2034!5e0!3m2!1ses!2sco!4v1685487140522!5m2!1ses!2sco"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   
            <div class="contact">
                <div class="seccioncontacto1">
                    <h2>Dirección</h2>
                    <p>Bogotá, Colombia 1113111</p>
                </div>
                <div class="seccioncontacto2">
                    <h2>E-mail</h2>
                    <p>burger@pidela.com</p>
                </div>
                <div class="seccioncontacto3">
                    <h2>Teléfono</h2>
                    <p>+57 3122456784</p>
                </div>
                <div class="redes">
                <img class="insta" src="resources/instagram.png" alt="instagram" href="https://www.instagram.com/">
                <img class="face" src="resources/facebook.png" alt="Facebook" href="https://www.facebook.com/">
                <img class="whats" src="resources/whatsapp.png" alt="Whatsapp" href="https://web.whatsapp.com/">
                </div>    
            </div>

    </section>
    <h1>SOBRE NOSOTROS</h1>
    <section id="acerca_de">
        
         <div class="acerca_de_ilustracion">
            <img class="about_us_img" src="./resources/aboutus3.jpg" alt="">
         </div>  
        <div class="acerca_de_descripcion">
         
        <p>Después de trabajar en varios empleos precarios Diego decidió emprender. Pero no quería hacer algo común, algo que no fuera fiel a sus raíces. Él quería hacer algo especial, algo que reflejara su historia y su pasión.</p>
            <p>
            Motivado por la cocina, y en especial de las hamburguesas y aprendió a hacerlas durante sus viajes por Latinoamérica, también descubierto que las hamburguesas artesanales eran una de las comidas más populares y queridas en todos los lugares que visitaba.
            Entonces lo supo él quería hacer hamburguesas artesanales, con ingredientes frescos y de la mejor calidad, y con un sabor que no se pudiera encontrar en ningún otro lugar.
            </p>
            <p>
            Creó hamburguesas que son diferentes, son especiales, eso las hace únicas y atractivas para el publico.
            </p>
            <p>
            Se dedico a perfeccionar sus recetas, a experimentar con nuevos ingredientes y sabores. Se ha convertido en un punto de referencia para Bogotá, y un lugar de encuentro para todos aquellos que aman descubrir nuevos sabores.
            </p>
           
        </div>    
    </section>
    <section id="experiencias">
    <h1>EXPERIENCIAS</h1>
    <div class="container-box">

        <div class="box box1">
            <img src="resources/customer3.jpg" alt="">
            <h2>Juan Carlos</h2>
            
            <div class="container-p">
                <p>¡Las hamburguesas artesanales en el gastro bar son una delicia imprescindible para los amantes de la comida!</p>
            </div>


        </div>

        <div class="box box2">
            <img src="resources/customer1.jpg" alt="">
            <h2>Natasha Avedaño</h2>
            <div class="container-p">
                <p> Se convirtió en mi lugar favorito. Las hamburguesas artesanales y la variedad de bebidas son simplemente excepcionales. ¡Altamente recomendado!
                </p>
            </div>

        </div>

        <div class="box box3">
            <img src="resources/customer2.jpg" alt="">
            <h2>Carolina Acevedo</h2>
            <div class="container-p">
                <p>Cada bocado era una explosión de sabores únicos que me dejaron maravillada. ¡Una experiencia gastronómica inolvidable!</p>
            </div>

        </div>

    </div>
   
    </section>
    <button class="btnexperiencias" onclick="window.location.href = '#menu';">Ordenar Ahora</button>
    <hr>
    




    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>


       







</body>
</html>




<footer>
        
    <h1>&copy;Héctor Manuel Beltrán Cifuentes</h1>
    <a href="https://www.linkedin.com/in/hmbc/"><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>
    <p>Este proyecto ha sido desarrollado con fines academicos para la Universidad Distrital Francisco José de Caldas</p>
    <p>Bajo la supervisión y guia del docente Andres Pineda en el programa Todos a la U - 2023</p>
    
</footer>
