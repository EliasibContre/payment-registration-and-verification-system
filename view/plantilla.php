<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Sion System Wireless</title>
  <link rel="stylesheet" href="http://localhost/SionSistemWir/css/inicio.css">
  <script src="/js/inicio.js"></script>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRUek4FObPn5SGW2dGz5tu1K8/hW9aCI5p7MUpyB0" crossorigin="anonymous">
</head>

<body>
  <header>
    <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />

    <nav>
      <ul class="HL">
        <li class="dropdown">
          <a href="http://localhost/SionSistemWir/view/paginas/login.php" title="Iniciar sesión" id="login-link">
            <img src="http://localhost/sion/img/LOGIN.png" alt="Login">
          </a>
        </li>
      </ul>
     </nav>
    <div class="content">
      <h1 class="">Sion System Wireless
      </h1>
      <div>
        <?php
        if (isset($_GET["pagina"])) {
          if (
            $_GET["pagina"] == "login" ||
            $_GET["pagina"] == "admin" ||
            $_GET["pagina"] == "InterfazDeUsuario"||
            $_GET["pagina"]== "registro"||
            $_GET["pagina"]=="pagos"||
            $_GET["pagina"]=="ActualizarDatos"
          ) {
            include "paginas/" . $_GET["pagina"] . ".php";
          } else {
            include "paginas/404.php";
          }
        }

        ?>
      </div>
    </div>

    <img src="http://localhost/sion/img/sionlogo.png" alt="Internet Services Logo">
  </header>
  <main>
    <section class="services">
      <div class="services__gallery">
        <div class="services__gallery-item">
          <img src="http://localhost/sion/img/antena2.jpg" alt="Antena">
          <div class="services__gallery-item-description">
            Ofrecemos instalaciones de acceso inalámbrico de alta calidad para empresas, negocios, escuelas y hogares en
            Amozoc, Tepeaca, Tecamachalco y alrededores.
          </div>
        </div>
        <div class="services__gallery-item">
          <img src="http://localhost/sion/img/camara.png" alt="Cámara">
          <div class="services__gallery-item-description">
            video-vigilancia, soporte técnico, tinta y toner, impresoras, venta de equipo de computo.
          </div>
        </div>
        <div class="services__gallery-item">
          <img src="http://localhost/sion/img/Wifi Finder - Wiper.gif" alt="Wifi Finder">
          <div class="services__gallery-item-description">
            Nuestros equipos y puntos de acceso de alto rendimiento garantizan una conexión confiable para múltiples
            usuarios.
          </div>
        </div>
      </div>
    </section>

    <section class="hero">

      <div class="container">
        <div class="card">
          <div class="face face1">
            <div class="content">
              <i class="fas fa-handshake animated-bounce"></i>
              <h3>Valores</h3>
            </div>
          </div>
          <div class="face face2">
            <div class="content">
              <br>
              <p> Confianza en seguridad WiFi, innovación líder en soluciones, calidad en productos y atención,
                integridad ética, responsabilidad en mejora, adaptabilidad tecnológica, contribución comunitaria</p>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="face face1">
            <div class="content">
              <i class="fas fa-eye fa-beat"></i>
              <h3>Visión</h3>
            </div>
          </div>
          <div class="face face2">
            <div class="content">
              <p>Aspiramos a liderar en soluciones WiFi, con innovación, calidad y experiencia excepcional. Conectamos
                globalmente, ofreciendo conectividad segura y veloz para transformar la interacción digital.</p>

            </div>
          </div>
        </div>


        <div class="card">
          <div class="face face1">
            <div class="content">
              <i class="fas fa-book"></i>
              <h3 class="animated-spin">Misión</h3>
            </div>
          </div>
          <div class="face face2">
            <div class="content">
              <p>Ofrecemos conectividad WiFi confiable y rápida para usuarios, negocios e instituciones. Nuestras
                soluciones innovadoras se adaptan a las necesidades cambiantes de los clientes, con servicio excepcional
                y experiencia insuperable.</p>
            </div>
          </div>
        </div>


      </div>
    </section>


    <section class="gallery" data-aos="fade-up">
      <h2>Galería de imágenes</h2>
      <div class="slider">
        <div><img src="http://localhost/sion/img/servicio1.jfif" class="carousel-image" alt="Servicio 1"></div>
        <div><img src="http://localhost/sion/img/servico2.jfif" class="carousel-image" alt="Servicio 2"></div>
        <div><img src="http://localhost/sion/img/servicio3.jfif" class="carousel-image" alt="Servicio 3"></div>
        <div><img src="http://localhost/sion/img/servicio4.jfif" class="carousel-image" alt="Servicio 4"></div>
        <div><img src="http://localhost/sion/img/servicio5.jfif" class="carousel-image" alt="servicio5"></div>
        <div><img src="http://localhost/sion/img/servicio6.jfif" class="carousel-image" alt="servicio6"></div>
        <div><img src="http://localhost/sion/img/servico7.jfif" class="carousel-image" alt="servicio7"></div>
        <div><img src="http://localhost/sion/img/servicio8.jfif" class="carousel-image" alt="servicio8"></div>
        <div><img src="http://localhost/sion/img/servicio9.jfif" class="carousel-image" alt="servicio9"></div>
        <div><img src="http://localhost/sion/img/servicio10.jfif" class="carousel-image" alt="servicio10"></div>

      </div>
    </section>
    <form class="formulario" action="/enviar.php" method="POST">
      <h2>Contáctanos</h2>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>
      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje" required></textarea><br>
      <input type="submit" class="custom-btn btn-3" value="Enviar">
    </form>
  </main>

  <footer>
    <div class="container">
      <div class="footer-contact">
        <h3>Contacto</h3>
        <p>Dirección: 123 Calle Falsa, Colonia Imaginaria, Ciudad Inexistente, Código Postal: 12345, País de las
          Maravillas</p>
        <p>Teléfono: +1 (555) 123-4567</p>
        <p>Email: contacto@tusitio.com</p>
      </div>
      <p>&copy; 2023 Sion System Wireless</p>
      <ul class="social-icons">
        <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></li>
        <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></li>
        <li><a href="https://web.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></li>
        <li><a href="https://mail.google.com/" target="_blank"><i class="far fa-envelope"></i>
        </li>
      </ul>
      <div><img src="http://localhost/sion/img/Black Coders VERSIONnEGRA.png" class="BlackCoders" alt="BlackCoders">
      </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    // JavaScript para efecto de desplazamiento suave
    document.addEventListener("DOMContentLoaded", function () {
      const smoothScrollLinks = document.querySelectorAll(".hero a[href^='#']");

      for (const link of smoothScrollLinks) {
        link.addEventListener("click", smoothScrollToSection);
      }
    });

    function smoothScrollToSection(event) {
      event.preventDefault();

      const targetId = event.target.getAttribute("href");
      const targetSection = document.querySelector(targetId);

      if (targetSection) {
        const offsetTop = targetSection.getBoundingClientRect().top + window.scrollY;

        window.scrollTo({
          top: offsetTop,
          behavior: "smooth"
        });
      }
    }

    $(document).ready(function () {
      $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1
      });
    });
    AOS.init();

    var slider = $('.slider');

    slider.slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      pauseOnHover: true,
    });

    // Función para agregar la clase .active cuando el elemento está en el viewport
    function fadeInOnScroll() {
      const fadeElements = document.querySelectorAll('.fade-in');

      fadeElements.forEach((element) => {
        const elementTop = element.getBoundingClientRect().top;
        const elementBottom = element.getBoundingClientRect().bottom;

        const isVisible = elementTop < window.innerHeight && elementBottom >= 0;

        if (isVisible) {
          element.classList.add('active');
        }
      });
    }

    // Evento para activar la animación al hacer scroll
    window.addEventListener('scroll', fadeInOnScroll);

    // Activar la animación inicialmente al cargar la página
    fadeInOnScroll();


    const circle = document.querySelector('.moving-circle');
    let positionX = 0;

    function moveCircle() {
      circle.style.left = positionX + 'px';
      positionX += 2; // Adjust the speed here
      requestAnimationFrame(moveCircle);
    }

    moveCircle();
  </script>
  <script>
    // Función para redirigir a la página 404 personalizada
    function redirectTo404() {
      window.location.href = "http://localhost/sion/html/404.html"; // Cambia esto a la ruta correcta si tu página 404 está en una ubicación diferente
    }

    // Verificar si ocurre un error 404 (página no encontrada)
    window.addEventListener("error", function (event) {
      if (event.target.nodeName === "IMG") {
        // Si el error es en una imagen, se considera un error 404 para fines de esta demostración.
        redirectTo404();
      }
    }, true);
  </script>

</body>

</html>