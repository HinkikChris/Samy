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
  <title>Cursos - Lenguas</title>

  <!-- Mobile Specific Metas
	================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Educenter HTML Template v1.0">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
  <!-- aos -->
  <link rel="stylesheet" href="{{ asset('plugins/aos/aos.css') }}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{ asset('plugins/venobox/venobox.css') }}">

  <!-- Main Stylesheet -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

</head>

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="{{ asset('images/preloader.gif') }}" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="tel:+443003030266"><strong>CALL</strong> +44 300 303 0266</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://facebook.com/themefisher/"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://github.com/themefisher"><i class="ti-github"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://instagram.com/themefisher/"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#loginModal" data-toggle="modal" data-target="#loginModal">Inicia</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#signupModal" data-toggle="modal" data-target="#signupModal">Registra</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('images/logo1.png') }}" alt="logo"></a>
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
                        <li><a class="dropdown-item" href="{{ route('index') }}">Diseño</a></li>
                        <li><a class="dropdown-item" href="{{ route('index') }}">Desarrollo</a></li>
                        <li><a class="dropdown-item" href="{{ route('index') }}">Marketing</a></li>
                        <li><a class="dropdown-item" href="{{ route('index') }}">Gastronomia</a></li>
                        <li><a class="dropdown-item" href="{{ route('index') }}">Musica</a></li>
                        <li><a class="dropdown-item" href="{{ route('index') }}">Fotografia</a></li>
                        <li><a class="dropdown-item" href="{{ route('index') }}">Negocios</a></li>
                        <li><a class="dropdown-item" href="{{ route('index') }}">Informatica y Software</a></li>
                    </ul>
                  </li>
                  <li class="nav-item @@contact">
                      <a class="nav-link" href="#miFooter">CONTACTANOS</a>
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
                <h3>Registro</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Telefono">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Nombre">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Correo">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Contraseña">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Registro</button>
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
                <h3>Inicio de Sesion</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Telefono">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Nombre">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Contraseña">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Iniciar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- section -->
<section class="section overlay" data-background="{{ asset('images/courses/IMG-20231026-WA0002.jpg') }}">
    <div class="col-md-auto mb-4">
          <!-- success story -->
          <section class="section bg-cover" data-background="{{ asset('images/courses/IMG-20231026-WA0002.jpg') }}">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-sm-4 position-relative success-video">
                          <a class="play-btn venobox" href="https://youtu.be/nhzjGKXY5QA?feature=shared" data-vbtype="video">
                              <i class="ti-control-play"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </section>
      </div>
</section>
<!-- /section -->

<!-- section -->
<section class="section-sm">
    <div class="container">
          <!-- course info -->
          <div class="row align-items-center mb-5">
              <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
                  <h2>Detalles</h2>
              </div>
              <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
                  <ul class="list-inline text-xl-center">
                      <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                          <div class="d-flex align-items-center">
                              <i class="ti-book text-primary icon-md mr-2"></i>
                              <div class="text-left">
                                  <h6 class="mb-0">CURSO</h6>
                                  <p class="mb-0">15 Modulos</p>
                              </div>
                          </div>
                      </li>
                      <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                          <div class="d-flex align-items-center">
                              <i class="ti-alarm-clock text-primary icon-md mr-2"></i>
                              <div class="text-left">
                                  <h6 class="mb-0">DURACIÓN</h6>
                                  <p class="mb-0">01 Hora</p>
                              </div>
                          </div>
                      </li>
                      <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                          <div class="d-flex align-items-center">
                              <i class="ti-wallet text-primary icon-md mr-2"></i>
                              <div class="text-left">
                                  <h6 class="mb-0">PRECIO</h6>
                                  <p class="mb-0">De: $1200.00MXN</p>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
              <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
                  <a href="{{ route('pay') }}" class="btn btn-primary">Suscribirse</a>
              </div>
              <!-- border -->
              <div class="col-12 mt-4 order-4">
                  <div class="border-bottom border-primary"></div>
              </div>
          </div>
          <!-- course details -->
          <div class="row">
              <div class="col-12 mb-4">
                  <h3>Sobre este curso</h3>
                  <p>Este completo curso de inglés te llevará desde los fundamentos más básicos hasta un nivel avanzado en el idioma. Comenzaremos desde cero, cubriendo gramática, vocabulario, pronunciación y habilidades de conversación.</p>
              </div>
              <div class="col-12 mb-4">
                  <h3 class="mb-3">Requerimientos:</h3>
                  <div class="col-12 px-0">
                      <div class="row">
                          <div class="col-md-6">
                              <ul class="list-styled">
                                  <li>No se requieren conocimientos previos para este curso. Está diseñado para estudiantes de todos los niveles, desde principiantes hasta aquellos con conocimientos previos de inglés.</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-12 mb-4">
                  <h3 class="mb-3">¿Qué aprenderás?</h3>
                  <ul class="list-styled">
                      <li>Fundamentos del Idioma: Comenzarán desde lo más básico, incluyendo el alfabeto, pronunciación y vocabulario esencial.</li>
                      <li>Gramática y Estructura: Adquirirán un profundo conocimiento de la gramática inglesa, incluyendo tiempos verbales, estructura de oraciones y reglas de gramática clave.</li>
                      <li>Habilidades de Conversación: Desarrollarán habilidades de comunicación oral, incluyendo la capacidad de mantener conversaciones cotidianas y discutir una variedad de temas.</li>
                      <li>Lectura y Escritura: Mejorarán su capacidad para leer textos en inglés y escribir de manera efectiva, desde correos electrónicos simples hasta ensayos más complejos.</li>
                      <li>Comprensión Auditiva: Desarrollarán la capacidad de comprender el inglés hablado en una variedad de contextos, incluyendo música, películas y conversaciones telefónicas.</li>
                  </ul>
              </div>
              <div class="col-12 mb-5">
                  <h3>Detalles del curso</h3>
                  <ul class="list-styled">
                      <li>Duración: El curso está dividido en varios niveles, desde principiante hasta avanzado. Cada nivel puede llevar varios meses completarlo, dependiendo del ritmo de estudio del estudiante.</li>
                      <li>Modalidad: El curso se imparte en línea y se adapta a las necesidades de los estudiantes. Pueden avanzar a su propio ritmo y acceder a los materiales en cualquier momento.</li>
                      <li>Materiales: Los estudiantes tendrán acceso a recursos en línea, que incluyen lecciones en video, ejercicios interactivos, material de lectura y ejemplos de conversación.</li>
                      <li>Evaluación y Pruebas: A lo largo del curso, se realizarán evaluaciones y pruebas para medir el progreso del estudiante y asegurarse de que estén adquiriendo habilidades sólidas en inglés.</li>
                      <li>Certificación: Al completar con éxito cada nivel del curso, los estudiantes recibirán una certificación que acredita su nivel de competencia en inglés.</li>
                  </ul>
              </div>
              <!-- teacher -->
              <div class="col-12">
                  <h5 class="mb-3">Profesor</h5>
                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                      <div class="media mb-2 mb-sm-0">
                          <img class="mr-4 img-fluid" src="{{ asset('images/teachers/elisa.jpg') }}" alt="Teacher">
                          <div class="media-body">
                              <h4 class="mt-0">Elisa Valkyria.</h4>
                              Prof. Ingles.
                          </div>
                      </div>
                      <div class="social-link">
                          <h6 class="d-none d-sm-block">Social Link</h6>
                          <ul class="list-inline">
                              <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
                              <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="https://themefisher.com/"><i class="ti-twitter-alt"></i></a></li>
                              <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="https://themefisher.com/"><i class="ti-linkedin"></i></a></li>
                              <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="border-bottom border-primary mt-4"></div>
              </div>
          </div>
      </div>
</section>
<!-- /section -->


  <!-- related course -->
  <section class="section-sm">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <h2 class="section-title">Cursos vistos recientemente</h2>
              </div>
          </div>
          <div class="row justify-content-center">
              <!-- course item -->
              <div class="col-lg-4 col-sm-6 mb-5">
                  <div class="card p-0 border-primary rounded-0 hover-shadow">
                      <img class="card-img-top rounded-0" src="{{ asset('images/courses/IMG-20231026-WA0007.jpg') }}" alt="course thumb">
                      <div class="card-body">
                          <ul class="list-inline mb-2">
                              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>04-14-2023</li>
                              <li class="list-inline-item"><a class="text-color" href="course-single.html">Informatica y Software</a></li>
                          </ul>
                          <a href="course-single.html">
                              <h4 class="card-title">Curso completo de CSS - !DESDE CERO¡.</h4>
                          </a>
                          <p class="card-text mb-4"> Este curso completo de CSS, comenzando desde cero, es tu entrada al emocionante mundo del diseño web. Aprenderás los fundamentos de CSS, incluyendo seletores, propiedades y técnicas de diseño.</p>
                          <a href="course-single.html" class="btn btn-primary btn-sm">Ver curso</a>
                      </div>
                  </div>
              </div>
              <!-- course item -->
              <div class="col-lg-4 col-sm-6 mb-5">
                  <div class="card p-0 border-primary rounded-0 hover-shadow">
                      <img class="card-img-top rounded-0" src="{{ asset('images/courses/IMG-20231026-WA0003.jpg') }}" alt="course thumb">
                      <div class="card-body">
                          <ul class="list-inline mb-2">
                              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>01-18-2023</li>
                              <li class="list-inline-item"><a class="text-color" href="course-single.html">Informatica y Software</a></li>
                          </ul>
                          <a href="course-single.html">
                              <h4 class="card-title">Curso completo de html 5.</h4>
                          </a>
                          <p class="card-text mb-4">Bienvenidos al curso completo de HTML5, donde te sumergirás en el mundo del desarrollo web. A lo largo de este curso, aprenderás desde los conceptos básicos hasta las características avanzadas de HTML5</p>
                          <a href="course-single.html" class="btn btn-primary btn-sm">Ver curso</a>
                      </div>
                  </div>
              </div>
              <!-- course item -->
              <div class="col-lg-4 col-sm-6 mb-5">
                  <div class="card p-0 border-primary rounded-0 hover-shadow">
                      <img class="card-img-top rounded-0" src="{{ asset('images/courses/IMG-20231026-WA0004.jpg') }}" alt="course thumb">
                      <div class="card-body">
                          <ul class="list-inline mb-2">
                              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>09-26-2023</li>
                              <li class="list-inline-item"><a class="text-color" href="course-single.html">Informatica y Software</a></li>
                          </ul>
                          <a href="course-single.html">
                              <h4 class="card-title">JAVA SCRIPT DESDE CERO A JUNIOR.</h4>
                          </a>
                          <p class="card-text mb-4">  Comenzaremos desde los conceptos más básicos, como variables y bucles, y avanzaremos hacia temas más avanzados, incluyendo manipulación del DOM, AJAX y la creación de aplicaciones web interactivas.</p>
                          <a href="course-single.html" class="btn btn-primary btn-sm">Ver curso</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- /related course -->

<!-- footer -->
<footer id="miFooter">
    <!-- newsletter -->
    <div class="newsletter">
      <div class="container">
        <div class="row">
          <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
            <h3 class="text-white">Incribete ahora</h3>
            <form action="#">
              <div class="input-wrapper">
                <input type="email" class="form-control border-0" id="newsletter" name="newsletter"
                  placeholder="Ingresa tu Correo">
                <button type="submit" value="send" class="btn btn-primary">Unirse</button>
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
            <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="{{ asset('images/logo1.png') }}" alt="logo"></a>
            <ul class="list-unstyled">
                <li class="mb-2">Av. Juárez Nte. 429, Joyas de San Mateo, 56170 Texcoco, Méx.</li>
                <li class="mb-2">5959313907</li>
                <li class="mb-2">5621876068</li>
                <li class="mb-2">contact@yourdomain.com</li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <h4 class="text-white mb-5"></h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="courses.html"></a></li>
              <li class="mb-3"><a class="text-color" href="events.html"></a></li>
              <li class="mb-3"><a class="text-color" href="notice.html"></a></li>
              <li class="mb-3"><a class="text-color" href="scholarship.html"></a></li>
            </ul>
          </div>
          <!-- company -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <h4 class="text-white mb-5">COMPAÑIA</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="about.html">Sobre nosotros</a></li>
              <li class="mb-3"><a class="text-color" href="teacher.html">Nuestro profesor</a></li>
              <li class="mb-3"><a class="text-color" href="contact.html">Contacto</a></li>
              <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>
            </ul>
          </div>
          <!-- links -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <h4 class="text-white mb-5">ENLACES</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="courses.html">Cursos</a></li>
              <li class="mb-3"><a class="text-color" href="events.html">Eventos</a></li>
              <li class="mb-3"><a class="text-color" href="notice.html">Aviso</a></li>
              <li class="mb-3"><a class="text-color" href="scholarship.html">Beca</a></li>
            </ul>
          </div>
          <!-- support -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <h4 class="text-white mb-5">APOYO</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="https://themefisher.com/blog">Foros</a></li>
              <li class="mb-3"><a class="text-color" href="https://docs.themefisher.com/">Documentación</a></li>
              <li class="mb-3"><a class="text-color" href="#!">Idioma</a></li>
              <li class="mb-3"><a class="text-color" href="#!">Estado de lanzamiento</a></li>
            </ul>
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
              , diseñado y desarrollado por <a href="https://themefisher.com/" class="text-muted"></a>
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
<script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- slick slider -->
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<!-- aos -->
<script src="{{ asset('plugins/aos/aos.js') }}"></script>
<!-- venobox popup -->
<script src="{{ asset('plugins/venobox/venobox.min.js') }}"></script>
<!-- filter -->
<script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="{{ asset('plugins/google-map/gmap.js') }}"></script>

<!-- Main Script -->
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
