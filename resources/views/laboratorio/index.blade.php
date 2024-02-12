@extends('layouts.master')

@section('title')
Demo-Laboratorio de Análisis Clinicos
@endsection

@section('content')
   <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
      <div class="slick-carousel m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h">
          <div class="bg-img"><img src="images/sliders/5.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                <h2 class="slide__title">¡Quédate en casa!</h2>
                  <p class="slide__desc">Tomamos las muestras hasta tu hogar.</p>
                  <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                    <!-- feature item #1 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-heart"></i>
                      </div>
                    </li><!-- /.feature-item-->
                    <!-- feature item #2 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-medicine"></i>
                      </div>
                    </li><!-- /.feature-item-->
                    <!-- feature item #3 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-heart2"></i>
                      </div>
                    </li><!-- /.feature-item-->
                    <!-- feature item #4 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-blood-test"></i>
                      </div>
                    </li><!-- /.feature-item-->
                  </ul><!-- /.features-list -->
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h">
          <div class="bg-img"><img src="images/sliders/3.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                <h2 class="slide__title">Tu bienestar es lo más valioso</h2>
                  <p class="slide__desc">La salud y el bienestar de nuestros pacientes y su equipo de atención médica. 
                    Siempre será nuestra prioridad, por eso seguimos las mejores prácticas de limpieza.</p>
                  <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                    <!-- feature item #1 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-heart"></i>
                      </div>
                    </li><!-- /.feature-item-->
                    <!-- feature item #2 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-medicine"></i>
                      </div>
                    </li><!-- /.feature-item-->
                    <!-- feature item #3 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-heart2"></i>
                      </div>
                    </li><!-- /.feature-item-->
                    <!-- feature item #4 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-blood-test"></i>
                      </div>
                    </li><!-- /.feature-item-->
                  </ul><!-- /.features-list -->
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ============================
        contact info
    ============================== -->
    <section class="contact-info py-0">
      <div class="container">
        <div class="row row-no-gutter boxes-wrapper">
          <div class="col-sm-12 col-md-4">
            <div class="contact-box d-flex">
              <div class="contact__icon">
                <i class="icon-call3"></i>
              </div><!-- /.contact__icon -->
              <div class="contact__content">
              <h2 class="contact__title">Médicos</h2>
                <p class="contact__desc">Acceso para médicos de consulta de resultados. En cualquier lugar a cualquier hora.</p>
               
              </div><!-- /.contact__content -->
            </div><!-- /.contact-box -->
          </div><!-- /.col-md-4 -->
          <div class="col-sm-12 col-md-4">
            <div class="contact-box d-flex">
              <div class="contact__icon">
                <i class="icon-health-report"></i>
              </div><!-- /.contact__icon -->
              <div class="contact__content">
              <h2 class="contact__title">Pacientes</h2>
                <p class="contact__desc">Acceso para pacientes de consulta de resultados. En cualquier lugar a cualquier hora.</p>
                <a href="{{ route('pacientes') }}" class="btn btn__white btn__outlined btn__rounded">
                  <span>Acceso</span><i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.contact__content -->
            </div><!-- /.contact-box -->
          </div><!-- /.col-md-4 -->
          <div class="col-sm-12 col-md-4">
            <div class="contact-box d-flex">
              <div class="contact__icon">
                <i class="icon-heart2"></i>
              </div><!-- /.contact__icon -->
              <div class="contact__content">
              <h2 class="contact__title">Empresa</h2>
                <p class="contact__desc">Acceso para empresas de consulta de resultados. En cualquier lugar a cualquier hora.</p>
                <a href="doctors-timetable.html" class="btn btn__white btn__outlined btn__rounded">
                  <span>Acceso</span><i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.contact__content -->
            </div><!-- /.contact-box -->
          </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact-info -->
   <!-- ========================
      About Layout 2
    =========================== -->
    <section class="about-layout2 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
            <div class="heading-layout2">
              <h3 class="heading__title mb-60">Nosotros</h3>
            </div><!-- /heading -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="text-with-icon">
              <div class="text__icon">
                <i class="icon-doctor"></i>
              </div>
              <div class="text__content">
                <p class="heading__desc font-weight-bold color-secondary mb-30">Nuestro objetivo es brindar atención de calidad de manera cortés, respetuosa y compasiva. Esperamos que nos permita cuidar de usted y esforzarnos por ser la primera y mejor opción de atención médica.
                </p>
                <a href="{{ route('about') }}" class="btn btn__secondary btn__rounded mb-70">
                  <span>Más</span> <i class="icon-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="about__text bg-white">
                <div class = "img">
                    <img src = "images/about/about-img.png">
                </div>
          
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->
<!-- ========================
        Services Layout 1
    =========================== -->
    <section class="services-layout1 services-carousel">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-60">
            <h3 class="heading__title">Destacados</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <!-- service item #1 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-head"></i>
                  <i class="icon-head"></i>
                </div><!-- /.service__icon -->
                <div class="service__content">
                  <h4 class="service__title">BIOMETRÍA HEMÁTICA</h4>
                  <p class="service__desc">Este examen se hace a la sangre e inspencciona las células que la componen y están presnetes en ella
                    como los glóbulos rojos, encargados de transportar...
                  </p>
                  
                  <a href="{{ route('estudios') }}" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Ver estudio</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
              <!-- service item #2 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-heart"></i>
                  <i class="icon-heart"></i>
                </div><!-- /.service__icon -->
                <div class="service__content">
                  <h4 class="service__title">QUÍMICA SANGUÍNEA</h4>
                  <p class="service__desc">La química sanguínea es un estudio que nos permite conocer los niveles 
                    de glucosa, urea, creatinina, ácido úrico, colesterol y triglicéridos. 
                  </p>
                  
                  <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Ver estudio</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
              <!-- service item #3 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-microscope"></i>
                  <i class="icon-microscope"></i>
                </div><!-- /.service__icon -->
                <div class="service__content">
                  <h4 class="service__title">PRUEBAS COVID-19</h4>
                  <p class="service__desc">
                  Las pruebas virales se usan para saber si tiene una infección en curso por SARS-CoV, el virus que causa el COVID-19.
                  Se analizan muestras extraídas de su nariz o boca. 
                  </p>
                  <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Ver estudio</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
              <!-- service item #4 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-dropper"></i>
                  <i class="icon-dropper"></i>
                </div><!-- /.service__icon -->
                <div class="service__content">
                  <h4 class="service__title">GRUPO SANGUÍNEO</h4>
                  <p class="service__desc">Hoy en día el grupo sanguíneo es un requisito en la mayoría de las instituciones educativas de nuestro país. Es una prueba sencilla rápida y segura.
                  </p>
                  <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Ver estudio</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
              <!-- service item #5 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-heart3"></i>
                  <i class="icon-heart3"></i>
                </div><!-- /.service__icon -->
                <div class="service__content">
                  <h4 class="service__title">EXAMEN GRAL. DE ORINA</h4>
                  <p class="service__desc">El Examen General de Orina también llamando uranálisis, consta de un conjunto de
                    pruebas que detectan y miden distintos componentes eliminados...
                  </p>
                  <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Ver estudio</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
              <!-- service item #6 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-heart2"></i>
                  <i class="icon-heart2"></i>
                </div><!-- /.service__icon -->
                <div class="service__content">
                  <h4 class="service__title">PRUEBA DE EMBARAZO</h4>
                  <p class="service__desc">Una prueba de embarazo puede indicar si usted está embarazada al analizar si una muestra de su orina o sangre tiene una hormona específica.
                  </p>
                  <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Ver estudio</span>
                    <i class="icon-arrow-right"></i>
                  </a>
               
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
              
            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

@endsection

@section('scripts')

@endsection