<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="Mi nombre es María Claudia, pero me dicen Macu">
  <meta name="keywords" content="web developer, Macu, github, projects, frontend developer, desarrolladora web, programadora, proyectos, html, css, js, pug, boostrap, portafolio, portfolio, ux, ui, sass, gulp,">
  <title>Portafolio</title>
  <!-- MDB icon -->
  <link rel="icon"  href="img/codigo.png" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="sweetalert2.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Hover css -->
  <link rel="stylesheet" href="css/hover.css">
</head>

<body>
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container-fluid w-100 ml-0">
        
        <!-- Brand (logo)-->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand p-0 m-0 text-white" href="#home"><strong>Macu</strong></a>
        </div>
        
        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        
          <!-- right -->
          <ul class="navbar-nav ml-5 text-center smooth-scroll list-unstyled">
            <li class="nav-item mr-5">
              <a class="nav-link hvr-underline-from-left" href="#sobremi">sobre mi
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link hvr-underline-from-left" href="#habilidades">habilidades</a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link hvr-underline-from-left" href="#proyectos">Proyectos</a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link hvr-underline-from-left" href="#contactame">contáctame</a>
            </li>
          </ul>
        </div>
      
      </div>
    
    </nav>
    <!-- Navbar -->
  </header>

  <div class="view" id="home">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container w-100 d-flex justify-content-center white-text mx-5 wow slideInRight slow">
        <div class="titulo">
          <span class="p-0">
            ¡<span class="letter">H</span>ola mundo!
          </span>
          <br />
          <span class="pl-5">
            mi nombre es
          </span>
          <br />
          <span class="pl-5">
            <span class="letter">M</span>aria<span class="letter">C</span>laudia
          </span>
        </div>
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!--Main layout-->
  <main>
    <!-- star my proyect -->
    <div class="container">

      <!--Section: sobre mi-->
      <section class="mt-5 wow fadeIn slower" id="sobremi">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-6 col-lg-6 px-2 py-3 col-10">

            <img src="./img/perfil.svg" class="img-fluid girl ml-4" alt="girl">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-5 col-lg-6 py-5 col-12 col-xl-5 px-5 colum-sobremi">

            <!-- Main heading -->
            <h3 class="subtitulo sobremi text-center h1 mb-3">Sobre mi...</h3>
            <p class="info pl-1 text-muted text-center">
              Mi nombre es María Claudia, pero me dicen Macu, actualmente estoy estudiando la carrera de analista en sistema.
              Estudié derecho y en el camino me dí cuenta que no era lo mio, mi vida cambio 360 grados cuando empecé a estudiar desarrollo web, es un mundo que me fascina y que cada día sigo descubriendo cosas que me dejan maravillada. <br>
              Si bien es cierto estoy dando mis primeros pasos en el mundo IT, pero cada paso que doy lo hago con firmeza y con mucha pasión.<br>
              Me encanta lo que hago.

            </p>
            <!-- Main heading -->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <h3 class="subtitulo sobremi text-center mt-4 h1 mb-5">Mi música favorita</h3>
        <div class="row mt-4 w-100 mb-5 ml-0 row-sobremi">
          <div class="col-xl-2 col-lg-2 col-md-4 col-4 wd-100 h-50 mb-2 pl-0 pr-2">
            <div class="box-music w-100">
              <img src="img/beatles2.jpg" class="imagenes-musica" alt="beatles" title="The Beatles - Do You Want To Know A Secret">
              <div class="overlay-img">
                <svg preserveAspectRatio="none" viewBox="0 0 16 16" width="100%" height="100%" aria-label="Play icon" role="button" class="icon-player" data-set="0"><path fill="currentColor" fill-rule="nonzero" d="M0 16l16-8L0 0z"></path></svg>
                <span arial-label="title band" class="info-song-title"> The Beatles</span> <br>
                <span arial-label="name song" class="info-song"> Do You Want To Know A Secret</span> <br>
              </div>
           
            </div>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-4 col-4 w-100 h-50 mb-2 pl-0 pr-2">
            <div class="box-music w-100">
              <img src="img/carpenters.jpg" class="imagenes-musica" alt="carpenters" title="Carpenters - Touch Me When We're Dancing">
              <div class="overlay-img">
                <svg preserveAspectRatio="none" viewBox="0 0 16 16" width="100%" height="100%" aria-label="Play icon" role="button" class="icon-player"  data-set="1"><path fill="currentColor" fill-rule="nonzero" d="M0 16l16-8L0 0z"></path></svg>
                <span arial-label="title band" class="info-song-title"> The Carpenters</span> <br>
                <span arial-label="name song" class="info-song"> Touch Me When We're Dancing</span> <br>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-4 col-4 w-100 h-50 mb-2 pl-0 pr-2">
            <div class="box-music w-100">
              <img src="img/beegees.jpg" class="imagenes-musica" alt="bee gees" title="Bee Gees - Love You Inside Out">
              <div class="overlay-img">
                <svg preserveAspectRatio="none" viewBox="0 0 16 16" width="100%" height="100%" aria-label="Play icon" role="button" class="icon-player" data-set="2"><path fill="currentColor" fill-rule="nonzero" d="M0 16l16-8L0 0z"></path></svg>
                <span arial-label="title band" class="info-song-title"> Bee Gees</span> <br>
                <span arial-label="name song" class="info-song margin-info-song" style="margin-bottom:35%;"> Love You Inside Out</span> <br>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-4 col-4 w-100 h-50 mb-2 pl-0 pr-2">
            <div class="box-music w-100">
              <img src="img/ximena-sariñana.jpg" class="imagenes-musica" alt="ximena sariñana">
              <div class="overlay-img">
                <svg preserveAspectRatio="none" viewBox="0 0 16 16" width="100%" height="100%" aria-label="Play icon" role="button" class="icon-player" data-set="3"><path fill="currentColor" fill-rule="nonzero" d="M0 16l16-8L0 0z"></path></svg>
                <span arial-label="title band" class="info-song-title">Ximena Sarinana</span> <br>
                <span arial-label="name song" class="info-song" style="margin-bottom:35%;">¿Qué Tiene?</span> <br>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-4 col-4 w-100 h-50 mb-2 pl-0 pr-2">
            <div class="box-music w-100">
              <img src="img/natalia-lafourcade.jpg" class="imagenes-musica" alt="natalia lafourcade" title="Natalia Lafourcade - Antes de Huir">
              <div class="overlay-img">
                <svg preserveAspectRatio="none" viewBox="0 0 16 16" width="100%" height="100%" aria-label="Play icon" role="button" class="icon-player" data-set="4"><path fill="currentColor" fill-rule="nonzero" d="M0 16l16-8L0 0z"></path></svg>
                <span arial-label="title band" class="info-song-title">Natalia Lafourcade</span> <br>
                <span arial-label="name song" class="info-song" style="margin-bottom:35%;">Antes de Huir</span> <br>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-4 col-4 w-100 h-50 mb-2 pl-0 pr-2">
            <div class="box-music w-100">
              <img src="img/queen.jpg" class="imagenes-musica" alt="queen">
              <div class="overlay-img">
                <svg preserveAspectRatio="none" viewBox="0 0 16 16" width="100%" height="100%" aria-label="Play icon" role="button" class="icon-player" data-set="5"><path fill="currentColor" fill-rule="nonzero" d="M0 16l16-8L0 0z"></path></svg>
                <span arial-label="title band" class="info-song-title">The Queen</span> <br>
                <span arial-label="name song" class="info-song" style="margin-bottom:35%;">The Miracle</span> <br>
              </div>
            </div>
          </div>

          <audio src="" type="audio/mp3" >
            Tu navegador no soporta este elemento
          </audio>

        </div>

      </section>
    

      <hr class="my--40 mb-5" id="habilidades" >

      <br/>

      <!--Section: Habilidades-->
      <section class="section-habilidades">

        <h3 class="h3 text-center my-2 mt-4 mb-5 subtitulo habilidades wow fadeIn slower">Habilidades</h3>

        <!--Grid row-->
        <div class="row wow fadeIn slower">

          <!--Grid column-->
          <div class="col-lg-12 col-md-12">

            <!--First row-->
            <div class="row m-0 w-100 d-flex justify-content-center align-items-center">
              <div class="col-xl-3 col-md-3 col-3 h-50 d-flex justify-content-center col-habilidades">
                <div class="box-img d-flex justify-content-center align-items-center">
                  <img src="img/html.png" class="imagenes-habilidades" alt="html">
                </div>
              </div>
              <div class="col-xl-3 col-md-3 col-3 h-50 d-flex justify-content-center col-habilidades">
                  <div class="box-img d-flex justify-content-center align-items-center">
                    <img src="img/css.png" class="imagenes-habilidades css-img" alt="css">
                  </div>
              </div>

              <div class="col-xl-3 col-md-3 col-3 h-50 d-flex justify-content-center col-habilidades">
                <div class="box-img d-flex justify-content-center align-items-center">
                  <img src="img/js.png" class="imagenes-habilidades js-img" alt="js">
                </div>
            </div>

            <div class="col-xl-3 col-md-3 col-3 h-50 d-flex justify-content-center align-items-center col-habilidades">
              <div class="box-img d-flex justify-content-center align-items-center">
                <img src="img/bootstrap.png" class="imagenes-habilidades" alt="bootstrap">
              </div>
            </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row m-0 w-100 d-flex justify-content-center align-items-center mt-4">
              <div class="col-xl-3 col-md-3 col-3 h-50 d-flex justify-content-center col-habilidades">
                <div class="box-img d-flex justify-content-center align-items-center">
                  <img src="img/sass.png" class="imagenes-habilidades" alt="sass">
                </div>
              </div>

              <div class="col-xl-3 col-md-3 col-3 h-50 d-flex justify-content-center col-habilidades">
                <div class="box-img d-flex justify-content-center align-items-center">
                  <img src="img/pug.png" class="imagenes-habilidades" alt="pug">
                </div>
              </div>

              <div class="col-xl-3 col-md-3 col-3 h-50 d-flex justify-content-center col-habilidades">
                <div class="box-img d-flex justify-content-center align-items-center">
                  <img src="img/gulp.png" class="w-100 imagenes-habilidades" alt="gulp">
                </div>
              </div>

              <div class="col-xl-3 col-md-3 col-3 h-50 d-flex justify-content-center col-habilidades">
                <div class="box-img d-flex justify-content-center align-items-center">
                  <img src="img/git.png" class="w-100 imagenes-habilidades" alt="git">
                </div>
              </div>

            </div>
            <!--/Second row-->

            <!--Third row-->
            <div class="row d-flex justify-content-center w-100 mt-4">
              <div class="col-xl-3 col-md-3 col-3 h-50 d-flex justify-content-center col-habilidades">
                <div class="box-img d-flex justify-content-center align-items-center">
                  <img src="img/responsive.png" class="w-100 imagenes-habilidades responsive-img" alt="responsive design">
                </div>
              </div>
            </div>
            <!--/Third row-->

          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-lg-12 col-md-12 mt-5 px-5 wow fadeIn slower">
            <div class="d-flex justify-content-center">
              <img src="./img/coder.svg" class="img-fluid girl" alt="girl">
            </div>
          </div>
          <!--/Grid column-->

        </div>
        <!--/Grid row-->

      </section>
      

      <hr class="my-5" id="proyectos">
      <br/>

      <!--Section: proyectos-->
      <section>

        <h2 class="my-2 h3 text-center subtitulo proyectos wow fadeIn">Proyectos</h2>

        <div class="row wow fadeIn slower">

          <!--Grid column-->
          <div class="col-lg-12 col-md-12 px-5 mb-5">
            <div class="d-flex justify-content-center">
              <img src="./img/web3.svg" class="img-fluid girl" alt="girl">
            </div>
          </div>
          <!--/Grid column-->

          <!-- gallery -->
          <figure class="gallery-img view col-md-4  overlay zoom">
            <a href="https://macu-dev.000webhostapp.com/" target="_blank">
              <img alt="picture" src="img/lista-alumnos.png"class="img-fluid">
            </a>
          </figure>

          <figure class="gallery-img view col-md-4 overlay zoom">
            <a href="https://macu-dev.000webhostapp.com/reloj-digital/" target="_blank">
              <img alt="picture" src="img/reloj-digital.png" class="img-fluid"/>
            </a>
          </figure>

          <figure class="gallery-img view col-md-4 overlay zoom">
            <a href="https://macu-dev.000webhostapp.com/generador-gradient/" target="_blank">
              <img alt="picture" src="img/gradient-page.png"class="img-fluid"/>
            </a>
          </figure>

          <figure class="gallery-img col-md-4 view overlay zoom">
            <a href="https://macu-dev.000webhostapp.com/calculadora/" target="_blank">
              <img alt="picture" src="img/calculadora.png" class="img-fluid"/>
            </a>
          </figure>

          <figure class="gallery-img col-md-4 view overlay zoom">
            <a href="https://netflix-layout.vercel.app/" target="_blank">
              <img alt="picture" src="img/netflix.png"class="img-fluid"/>
            </a>
          </figure>

          <figure class="gallery-img col-md-4 view overlay zoom">
            <a href="https://happy-bhaskara-7d1f89.netlify.app/" target="_blank">
              <img class="img-fluid" alt="picture" src="img/covid.png" />
            </a>
          </figure>

          <figure class="gallery-img col-md-4 view overlay zoom">
            <a href="https://tender-euler-fc330f.netlify.app/" target="_blank">
              <img alt="picture" src="img/abecedario.png" class="img-fluid" />
            </a>
          </figure>

          <figure class="gallery-img col-md-4 view overlay zoom">
            <a href="https://consulta-dni-git-master.macu-dev.vercel.app/" target="_blank">
              <img alt="picture" src="img/consultas.png"class="img-fluid" />
            </a>
          </figure>

          <figure class="gallery-img col-md-4 view overlay zoom">
            <a href="https://book-website.vercel.app/" target="_blank">
              <img alt="picture" src="img/library.png"class="img-fluid" />
            </a>
          </figure>

        </div>
         <!-- end gallery -->
       
        
        <hr class="my-4" id="contactame">
        <br/>

      
        <h3 class="h3 text-center mb-5 my-2 mt-5 subtitulo contactame wow fadeIn slower">Contáctame</h3>
        <!-- row -->
        <div class="row features-small mb-5 mt-3 wow fadeIn slower d-md-flex justify-content-md-center">

          <!--Grid column-->
          <div class="col-md-6 mb-6 col-lg-6 px-3 py-2 col-12">

            <img src="./img/solo-dilo.svg" class="img-fluid girl" alt="girl">
    
          </div>
          <!--Grid column-->   
    
          <!--Grid column-->
          <div class="col-md-6 mb-5 col-lg-5 col-12 col-xl-5 pr-0 pl-0">

            <div class="formulario p-5">
              <!--Section: Contacto-->
              <div class="mb-4">
  
                <!--Section heading-->
                <h2 class="h3-responsive font-weight-bold text-center my-1 ml-2 pl-1 titulo-form">Enviame un mensaje</h2>
                <!-- row -->
                <div class="row ml-0">
  
                  <!--Grid column-->
                  <div class="col-md-12 mb-md-0 mb-5 ml-0 col-xl-12">
                    <form id="contact-form" name="contact-form" action="" method="POST">
  
                      <!--Grid row-->
                      <div class="row">
  
                        <!--Grid column-->
                        <div class="col-md-12">
                          <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" aria-required="true">
                            <label for="name" class="">nombre completo</label>
                          </div>
                        </div>
                          
  
                        <!--Grid column-->
                        <div class="col-md-12">
                          <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control" aria-required="true">
                            <label for="email" class="">email</label>
                          </div>
                        </div>
                        <!--Grid column-->
  
                      </div>
                        <!--Grid row-->
  
                        <!--Grid row-->
                      <div class="row">
                        <!-- grid column -->
                        <div class="col-md-12">
                          <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" aria-required="true">
                            <label for="subject" class="">asunto</label>
                          </div>
                        </div>
                      </div>
                        <!--Grid row-->
  
                        <!--Grid row-->
                      <div class="row">
  
                        <!--Grid column-->
                        <div class="col-md-12">
                          <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" aria-required="true"></textarea>
                            <label for="message">mensaje</label>
                          </div>
                        </div>
                      </div>
                      <!--Grid row-->
  
                    </form>
  
                      <div class="text-center mb-3 col-md-12 text-md-left btn-box">
                        <button type="button" class="btn btn-gradient  btn-block btn-rounded z-depth-1 waves-effect waves-light" onclick="submitForm();" name="Enviar" data-message="Esto es un botón para enviar el contenido del formulario" tabindex="0">Enviar</a>
                      </div>
                      <div class="status"></div>
                  </div>
                  <!--Grid column-->
                  <!--Grid column-->
                </div>
              </div>
              <!--Section: Contacto-->
            </div>
          </div>    
        </div>            

      </section>
     

      <section class="parallax-heigth container white-text" role="section">
        <!-- <div class="container w-100 d-flex justify-content-center white-text mx-5 " -->
        <!-- Parallax -->
        <div class="parallax parallax-heigth d-flex justify-content-center align-items-center">
          <span class="wow slideInRight slow frase m-top mx-5 p-0">Si piensas que los usuarios de tus programas son idiotas,<br/>
            solo los idiotas usaran tus programas.<br/>
            <span class="autor">Linux Torvalds</span>                         
          </span>
        </div>
      </section>
      <!-- fin del parallax -->
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small pt-4 wow fadeIn">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row pt-4 pb-4">
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-1 text-center">
            
          <!-- Content -->
          <h5 class="logo-footer mt-1 p-0">Macu</h5>
          <p class="footerCopyright m-0 p-0" >© 2020 Copyright-Todos los derechos reservado</p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h2 class="text-uppercase fuente">Contacto</h2>
  
          <ul class="list-unstyled contacto">
            <li>
             Rosario - Argentina
            </li>
            <li>
              mariaclaudiaperezes@gmail.com
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase fuente">Redes Sociales</h5>
  
          <ul class="list-unstyled ml-1 pl-0">
            <li>
              <a href="https://www.facebook.com/maria.claudia1995" target="_blank" aria-label="Facebook">
                <i class="fab fa-facebook-f mr-3"></i>
              </a>
              <a href="https://twitter.com/Magenta_Oreo" target="_blank" aria-label="Facebook">
                <i class="fab fa-twitter mr-3"></i>
              </a>
              <a href="https://github.com/macu-dev" target="_blank" aria-label="Github">
                <i class="fab fa-github mr-3"></i>
              </a>
              <a href="https://www.instagram.com/macu.21/" target="_blank" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
              </a>
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  </footer>
  <!--/.Footer-->

  <!-- end my proyect-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" type="module" src="js/validator.js"></script>
  <script type="text/javascript" src="js/sweet2Alert.min.js"></script>
  <script type="text/javascript" type="module" src="js/app.js"></script>

</body>
</html>