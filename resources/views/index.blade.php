<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8">
  <title>Educenter - Education HTML Template</title>

  <!-- Mobile Specific Metas
	================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Educenter HTML Template v1.0">

  <!-- theme meta -->
  <meta name="theme-name" content="educenter" />

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
  </div>
  <!-- preloader end -->

  <!-- header -->
  <header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-2 bg-white">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4 text-center text-lg-left">
            <a class="text-color mr-3" href="tel:+443003030266"><strong>LLámanos</strong> +52 300 303 0266</a>
            <ul class="list-inline d-inline">
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                  href="https://facebook.com/themefisher/"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                  href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                  href="https://github.com/themefisher"><i class="ti-github"></i></a></li>
              <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color"
                  href="https://instagram.com/themefisher/"><i class="ti-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-8 text-center text-lg-right">
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                  href="research.html">research</a></li>
              <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                  href="scholarship.html">SCHOLARSHIP</a></li>
              <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                  href="#loginModal" data-toggle="modal" data-target="#loginModal">Inicia</a></li>
              <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                  href="#signupModal" data-toggle="modal" data-target="#signupModal">Registrate</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
          <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
          <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto text-center">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('index') }}">Inicio</a>
              </li>
              <li class="nav-item dropdown view">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Cursos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="teacher.html">Diseño</a></li>
                  <li><a class="dropdown-item" href="teacher-single.html">Desarrollo</a></li>
                  <li><a class="dropdown-item" href="notice.html">Marketing</a></li>
                  <li><a class="dropdown-item" href="research.html">Gastronomia</a></li>
                  <li><a class="dropdown-item" href="scholarship.html">Musica</a></li>
                  <li><a class="dropdown-item" href="course-single.html">Fotografia</a></li>
                  <li><a class="dropdown-item" href="event-single.html">Negocios</a></li>
                  <li><a class="dropdown-item" href="blog-single.html">Informatica y Software</a></li>
                </ul>
              </li>
              <li class="nav-item @@contact">
                <a class="nav-link" href="contact.html">CONTACTANOS</a>
              </li>

            </ul>
          </div>

        </nav>
      </div>
    </div>
  </header>
  <!-- /header -->

  <!-- Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-0 border-0 p-4">
        <div class="modal-header border-0">
          <h3>Registrate</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="login">
            <form action="#" class="row">
              <div class="col-12">
                <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Nombre">
              </div>
              <div class="col-12">
                <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Correo">
              </div>
              <div class="col-12">
                <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword"
                  placeholder="Contraseña">
              </div>
              <div class="col-12">
                <input type="password" class="form-control mb-3" id="signupPassword" name="signupPasswordConfirm"
                  placeholder="Confirme la contrsaeña">
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-0 border-0 p-4">
        <div class="modal-header border-0">
          <h3>Inicio</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#" class="row">
            <div class="col-12">
              <input type="text" class="form-control mb-3" id="loginName" name="loginEmail" placeholder="Correo">
            </div>
            <div class="col-12">
              <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword"
                placeholder="Contraseña">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Iniciar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- hero slider -->
  <section class="hero-section overlay bg-cover" data-background="{{ asset('images/banner/inbg.jpg') }}">
    <div class="container">
      <div class="hero-slider">
        <!-- slider item -->
        <div class="hero-slider-item">
          <div class="row">
            <div class="col-md-8">
              <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3"
                data-animation-in="fadeInLeft" data-delay-in=".1">Descubre, Conecta, Triunfa: En tu Universidad, En tu Tiempo.</h1>
              <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3"
                data-animation-in="fadeInLeft" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod
                tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
              <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5"
                data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Apply now</a>
            </div>
          </div>
        </div>
        <!-- slider item -->
        <div class="hero-slider-item">
          <div class="row">
            <div class="col-md-8">
              <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3"
                data-animation-in="fadeInDown" data-delay-in=".1">Cursos en Línea, Clases en Vivo: Tu Éxito, Nuestra Prioridad.</h1>
              <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5"
                data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Registrate</a>
            </div>
          </div>
        </div>
        <!-- slider item -->
        <div class="hero-slider-item">
          <div class="row">
            <div class="col-md-8">
              <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3"
                data-animation-in="fadeInUp" data-delay-in=".1">Un Mundo de Oportunidades: En Línea y en Persona.</h1>
              <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3"
                data-animation-in="fadeInUp" data-delay-in=".4">Elige tu camino de Aprendizaje: Clases en Línea o en Persona. ¡Tú Tienes el Poder de Crecer!</p>
              <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5"
                data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /hero slider -->

  <!-- courses -->
  <section class="section-sm">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex align-items-center section-title justify-content-between">
            <h2 class="mb-0 text-nowrap mr-3">Cursos más populares</h2>
            <div class="border-top w-100 border-primary d-none d-sm-block"></div>
            <div>
              <a href="courses.html" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">Mostrar todos</a>
            </div>
          </div>
        </div>
      </div>
      <!-- course list -->
      <div class="row justify-content-center">
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/courses/IMG-20231026-WA0001.jpg" alt="course thumb">
            <div class="card-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2023</li>
                <li class="list-inline-item"><a class="text-color" href="course-single.html">Robótica</a></li>
              </ul>
              <a href="{{ route('robot') }}">
                <h4 class="card-title">¿Cómo empezar ha hacer un robot? - Curso desde cero.</h4>
              </a>
              <p class="card-text mb-4"> En este emocionante curso desde cero, te guiaremos a través de los primeros pasos para iniciar tu viaje en la construcción de robots. Aprenderás los conceptos básicos de electrónica.</p>
              <a href="{{ route('robot') }}" class="btn btn-primary btn-sm">Ver curso</a>
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/courses/IMG-20231026-WA0002.jpg" alt="course thumb">
            <div class="card-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-02-2023</li>
                <li class="list-inline-item"><a class="text-color" href="{{ route('ingles') }}">Lenguas</a></li>
              </ul>
              <a href="{{ route('ingles') }}">
                <h4 class="card-title">Ingles desde cero a avanzado.</h4>
              </a>
              <p class="card-text mb-4"> Este completo curso de inglés te llevará desde los fundamentos más básicos hasta un nivel avanzado en el idioma. Comenzaremos desde cero, cubriendo gramática, vocabulario, pronunciación y habilidades de conversación.</p>
              <a href="{{ route('ingles') }}" class="btn btn-primary btn-sm">Ver curso</a>
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/courses/IMG-20231026-WA0003.jpg" alt="course thumb">
            <div class="card-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>01-18-2023</li>
                <li class="list-inline-item"><a class="text-color" href="course-single.html">Informatica y Software</a></li>
              </ul>
              <a href="{{ route('cursohtml') }}l">
                <h4 class="card-title">Curso completo de html 5.</h4>
              </a>
              <p class="card-text mb-4">Bienvenidos al curso completo de HTML5, donde te sumergirás en el mundo del desarrollo web. A lo largo de este curso, aprenderás desde los conceptos básicos hasta las características avanzadas de HTML5</p>
              <a href="{{ route('cursohtml') }}" class="btn btn-primary btn-sm">Ver curso</a>
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/courses/IMG-20231026-WA0007.jpg" alt="course thumb">
            <div class="card-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>04-14-2023</li>
                <li class="list-inline-item"><a class="text-color" href="course-single.html">Informatica y Software</a></li>
              </ul>
              <a href="{{ route('cursocss') }}">
                <h4 class="card-title">Curso completo de CSS - !DESDE CERO¡.</h4>
              </a>
              <p class="card-text mb-4"> Este curso completo de CSS, comenzando desde cero, es tu entrada al emocionante mundo del diseño web. Aprenderás los fundamentos de CSS, incluyendo seletores, propiedades y técnicas de diseño.</p>
              <a href="{{ route('cursocss') }}" class="btn btn-primary btn-sm">Ver curso</a>
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/courses/IMG-20231026-WA0005.jpg" alt="course thumb">
            <div class="card-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>12-14-2022</li>
                <li class="list-inline-item"><a class="text-color" href="course-single.html">Matemáticas</a></li>
              </ul>
              <a href="{{ route('mate') }}">
                <h4 class="card-title">Aritmética para principiantes.</h4>
              </a>
              <p class="card-text mb-4">Este curso de aritmética es perfecto para principiantes que desean dominar los conceptos esenciales de las matemáticas. Desde sumas y restas básicas hasta multiplicaciones y divisiones, te guiaremos a través de los fundamentos de la aritmética.</p>
              <a href="{{ route('mate') }}" class="btn btn-primary btn-sm">Ver curso</a>
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/courses/IMG-20231026-WA0004.jpg" alt="course thumb">
            <div class="card-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>09-26-2023</li>
                <li class="list-inline-item"><a class="text-color" href="course-single.html">Informatica y Software</a></li>
              </ul>
              <a href="{{ route('cursojs') }}">
                <h4 class="card-title">JAVA SCRIPT DESDE CERO A JUNIOR.</h4>
              </a>
              <p class="card-text mb-4">  Comenzaremos desde los conceptos más básicos, como variables y bucles, y avanzaremos hacia temas más avanzados, incluyendo manipulación del DOM, AJAX y la creación de aplicaciones web interactivas.</p>
              <a href="{{ route('cursojs') }}" class="btn btn-primary btn-sm">Ver curso</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /course list -->
      <!-- mobile see all button -->
      <div class="row">
        <div class="col-12 text-center">
          <a href="courses.html" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">sell all</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /courses -->

  <!-- events -->
  <section class="section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex align-items-center section-title justify-content-between">
            <h2 class="mb-0 text-nowrap mr-3">Nuevos cursos</h2>
            <div class="border-top w-100 border-primary d-none d-sm-block"></div>
            <div>
              <a href="events.html" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">Mostrar Todos</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <!-- event -->
        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          <div class="card border-0 rounded-0 hover-shadow">
            <div class="card-img position-relative">
              <img class="card-img-top rounded-0" src="images/courses/Rec9.png" alt="event thumb">
              <div class="card-date">Nuevo</div>
            </div>
            <div class="card-body">
              <!-- location -->
              <p><i class="ti-location-pin text-primary mr-2"></i>Informatica y Software</p>
              <a href="event-single.html">
                <h4 class="card-title">Desarrollo Web Completo con
                    HTML5, CSS3, JS AJAX PHP.</h4>
              </a>
            </div>
          </div>
        </div>
        <!-- event -->
        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          <div class="card border-0 rounded-0 hover-shadow">
            <div class="card-img position-relative">
              <img class="card-img-top rounded-0" src="images/courses/Rec7.png" alt="event thumb">
              <div class="card-date">Nuevo</div>
            </div>
            <div class="card-body">
              <!-- location -->
              <p><i class="ti-location-pin text-primary mr-2"></i>Informatica y Software</p>
              <a href="event-single.html">
                <h4 class="card-title">PHP y MySQL: Convierte
                    cualquier HTML en WebAPP.</h4>
              </a>
            </div>
          </div>
        </div>
        <!-- event -->
        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          <div class="card border-0 rounded-0 hover-shadow">
            <div class="card-img position-relative">
              <img class="card-img-top rounded-0" src="images/courses/Rec8.png" alt="event thumb">
              <div class="card-date">Nuevo</div>
            </div>
            <div class="card-body">
              <!-- location -->
              <p><i class="ti-location-pin text-primary mr-2"></i>Informatica y Software</p>
              <a href="event-single.html">
                <h4 class="card-title">Excel Completo - Desde
                    Principiante hasta Avanzado.</h4>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- mobile see all button -->
      <div class="row">
        <div class="col-12 text-center">
          <a href="course.html" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">sell all</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /events -->

  <!-- teachers -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="section-title">Profesores</h2>
        </div>
        <!-- teacher -->
        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="{{ asset('images/teachers/davidportilla.jpg') }}" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">David Portilla</h4>
              </a>
              <p>Ing. Computación.</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-color" href="https://facebook.com/themefisher"><i
                      class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="https://twitter.com/themefisher"><i
                      class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="https://github.com/themefisher"><i
                      class="ti-google"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="https://instagram.com/themefisher/"><i
                      class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- teacher -->
        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="{{ asset('images/teachers/elisa.jpg') }}" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">Elisa Valkyria</h4>
              </a>
              <p>Prof. Ingles.</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-color" href="https://facebook.com/themefisher"><i
                      class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="https://twitter.com/themefisher"><i
                      class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="https://github.com/themefisher"><i
                      class="ti-google"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="https://instagram.com/themefisher/"><i
                      class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- teacher -->
        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          <div class="card border-0 rounded-0 hover-shadow">
            <img class="card-img-top rounded-0" src="{{ asset('images/teachers/midu.jpg') }}" alt="teacher">
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title">Miguel Ángel Durán</h4>
              </a>
              <p>Desarrollador Senior.</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="text-color" href="https://facebook.com/themefisher"><i
                      class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="https://twitter.com/themefisher"><i
                      class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="https://github.com/themefisher"><i
                      class="ti-google"></i></a></li>
                <li class="list-inline-item"><a class="text-color" href="https://instagram.com/themefisher/"><i
                      class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /teachers -->

  <!-- footer -->
  <footer>
    <!-- newsletter -->
    <div class="newsletter">
      <div class="container">
        <div class="row">
          <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
            <h3 class="text-white">Subscribe Now</h3>
            <form action="#">
              <div class="input-wrapper">
                <input type="email" class="form-control border-0" id="newsletter" name="newsletter"
                  placeholder="Enter Your Email...">
                <button type="submit" value="send" class="btn btn-primary">Join</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- footer content -->
    <div class="footer bg-footer section border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
            <!-- logo -->
            <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/logo.png" alt="logo"></a>
            <ul class="list-unstyled">
              <li class="mb-2">23621 15 Mile Rd #C104, Clinton MI, 48035, New York, USA</li>
              <li class="mb-2">+1 (2) 345 6789</li>
              <li class="mb-2">+1 (2) 345 6789</li>
              <li class="mb-2">contact@yourdomain.com</li>
            </ul>
          </div>
          <!-- company -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <h4 class="text-white mb-5">COMPANY</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="about.html">About Us</a></li>
              <li class="mb-3"><a class="text-color" href="teacher.html">Our Teacher</a></li>
              <li class="mb-3"><a class="text-color" href="contact.html">Contact</a></li>
              <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>
            </ul>
          </div>
          <!-- links -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <h4 class="text-white mb-5">LINKS</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="courses.html">Courses</a></li>
              <li class="mb-3"><a class="text-color" href="events.html">Events</a></li>
              <li class="mb-3"><a class="text-color" href="notice.html">Notice</a></li>
              <li class="mb-3"><a class="text-color" href="scholarship.html">Scholarship</a></li>
            </ul>
          </div>
          <!-- support -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <h4 class="text-white mb-5">SUPPORT</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="https://themefisher.com/blog">Forums</a></li>
              <li class="mb-3"><a class="text-color" href="https://docs.themefisher.com/">Documentation</a></li>
              <li class="mb-3"><a class="text-color" href="#!">Language</a></li>
              <li class="mb-3"><a class="text-color" href="#!">Release Status</a></li>
            </ul>
          </div>
          <!-- support -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <h4 class="text-white mb-5">RECOMMEND</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="https://themefisher.com/">WordPress</a></li>
              <li class="mb-3"><a class="text-color" href="https://themefisher.com/">LearnPress</a></li>
              <li class="mb-3"><a class="text-color" href="https://themefisher.com/">WooCommerce</a></li>
              <li class="mb-3"><a class="text-color" href="https://themefisher.com/">bbPress</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- copyright -->
    <div class="copyright py-4 bg-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 text-sm-left text-center">
            <p class="mb-0">Copyright &copy;
              <script>
                var CurrentYear = new Date().getFullYear()
                document.write(CurrentYear)
              </script>
              , designed & developed by <a href="https://themefisher.com/" class="text-muted">Themefisher</a>
            </p>
          </div>
          <div class="col-sm-5 text-sm-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item"><a class="d-inline-block p-2" href="https://facebook.com/themefisher/"><i
                    class="ti-facebook text-primary"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block p-2" href="https://twitter.com/themefisher"><i
                    class="ti-twitter-alt text-primary"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block p-2" href="https://github.com/themefisher"><i
                    class="ti-github text-primary"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block p-2" href="https://instagram.com/themefisher/"><i
                    class="ti-instagram text-primary"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /footer -->

  <!-- jQuery -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- slick slider -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- aos -->
  <script src="plugins/aos/aos.js"></script>
  <!-- venobox popup -->
  <script src="plugins/venobox/venobox.min.js"></script>
  <!-- filter -->
  <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
  <script src="plugins/google-map/gmap.js"></script>

  <!-- Main Script -->
  <script src="js/script.js"></script>

</body>

</html>
