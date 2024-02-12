<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="UGA - Laboratorio de Análisis Clinicos">
  <link href="{{ asset('images/favicon/favicon.png') }}" rel="icon">
  <!-- Title -->
  <title> @yield('title')</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="{{ asset('css/libraries.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->
 <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <button class="miniPopup-emergency-trigger" type="button">Emergencia</button>
                    <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                      <div class="emergency__icon">
                        <i class="icon-call3"></i>
                      </div>
                      <a href="tel:+528311155040" class="phone__number">
                        <i class="icon-phone"></i> <span>+831 115 5040</span>
                      </a>
                      <p>No dude en ponerse en contacto con nuestro amable personal de recepción si tiene alguna consulta general o médica.
                      </p>
                      <a href="appointment.html" class="btn btn__secondary btn__link btn__block">
                        <span>Consulta Resultados</span> <i class="icon-arrow-right"></i>
                      </a>
                    </div><!-- /.miniPopup-emergency -->
                  </li>
                  <li>
                    <i class="icon-phone"></i><a href="tel:+528311155040">Telèfono: 831 115 5040</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="#">Domicilio: Ciudad Mante, Tamaulipas.</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="#">Lun - Sab: 8:00 am - 8:00 pm</a>
                  </li>
                </ul><!-- /.contact__list -->
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="https://www.facebook.com/UGAunidadgerontologica/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul><!-- /.social-icons -->
                  <form class="header-topbar__search">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
          <img src="images/logo/logo.png" class="logo-light" alt="logo">
          <img src="images/logo/logo.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
          <ul class="navbar-nav ml-auto">
              <li class="nav__item">
                <a href="{{ route('index') }}"  class="nav__item-link active">Inicio</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="{{ route('about') }}" class="nav__item-link">Nosotros</a>
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Estudios</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="{{ route('estudios') }}" class="nav__item-link">Biometría Hemática</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="" class="nav__item-link">Química Sanguínea</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="" class="nav__item-link">Pruebas Covid-19</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="" class="nav__item-link">Grupo Sanguíneo</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="" class="nav__item-link">Examen Gral. De Orina</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="" class="nav__item-link">Prueba De Embarazo</a>
                  </li> <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item end estudios-->
              <li class="nav__item"><!-- /.nav-item start promociones-->
                <a href="{{ route('promociones') }}" class="nav__item-link">Promociones</a>
              </li><!-- /.nav-item end promociones-->
              <li class="nav__item has-dropdown"><!-- /.nav-item end resultados-->
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Resultados</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="{{ route('pacientes') }}" class="nav__item-link">Pacientes</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="#" class="nav__item-link">Médicos</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="#" class="nav__item-link">Empresas</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item end resultados-->

              <li class="nav__item">
              <a href="{{ route('contacto') }}" class="nav__item-link">Contacto</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative ml-30">
            <a href="{{ route('estudios') }}" class="btn btn__primary btn__rounded ml-30">
              <i class="icon-flask"></i>
              <span>Consulta Resultados</span>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <div class="content">
       @yield('content')
      </div>
<br><br>
  <!-- =================  Footer  ========================== -->
    <footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
              <div class="footer-widget-about">
                <img src="images/logo/logo.png" alt="logo" class="mb-30">
                <p class="color-gray">Demo - Laboratorio de Análisis Clinico forma parte de Grupo, S.A. de C.V. 
                  Consulte a su médico, es el único facultado para indicar el tipo de estudio de laboratorio a realizar en cada 
                  paciente de acuerdo a su historia clínica e interpretar los resultados.
                </p>
                <a href="{{ route('login') }}" class="btn btn__primary btn__primary-style2 btn__link">
                  <span>Ingresar al sistema</span> <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Acerca de</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Preguntas frecuentes</a></li>
                   
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Servicios</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Resultados</a></li>
                    <li><a href="#">Promociones Vigentes</a></li>
                
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="footer-widget-contact">
                <h6 class="footer-widget__title color-heading">Contacto</h6>
                <ul class="contact-list list-unstyled">
                  <li>Si tiene alguna pregunta o necesita ayuda, no dude en contactarse con nuestro equipo.</li>
                  <li>
                    <a href="tel:831 115 5040" class="phone__number">
                      <i class="icon-phone"></i> <span>831 115 5040</span>
                    </a>
                  </li>
                  <li class="color-body">Ciudad Mante, Tamaulipas.</li>
                </ul>
                <div class="d-flex align-items-center">
                  <ul class="social-icons list-unstyled mb-1">
                    <li><i class = "fas fa-envelope"></i><span> centraldeenfermeriamante@gmail.com</span></li>
                <br> <br> 
                    <li><a href="https://www.facebook.com/UGAunidadgerontologica/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <span class="fz-14">&copy; 2024 Demo - Laboratorio de Análisis Clinicos. Algunos derechos reservados 2023.</span>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
              <nav>
                <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
                  <li><a href="#">Términos y Condiciones</a></li>
                  <li><a href="#">Politicas y Privacidad</a></li>
                </ul>
              </nav>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('js/plugins.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  @yield('scripts')
</body>

</html>