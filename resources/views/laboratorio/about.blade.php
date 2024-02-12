@extends('layouts.master')

@section('title')
Demo-Laboratorio de Análisis Clinicos
@endsection

@section('content')
  <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout5 text-center">
      <div class="bg-img"><img src="images/backgrounds/6.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">Nosotros</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

   

    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout2 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
            <div class="heading-layout2">
              <h3 class="heading__title mb-60" style="text-transform: none;">Somos un laboratorio orgullasamente tamaulipeco</h3>
            </div><!-- /heading -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">,
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="text-with-icon">
              <div class="text__icon">
                <i class="icon-doctor"></i>
              </div>
              <div class="text__content">
                <p class="heading__desc font-weight-bold color-secondary mb-30">Somos una empresa fundada en el 2022, con vocación de servicio, buscando mejorar y estar a la vanguardia con la tecnología de nuestros equipos. 
                 <br><br> Nuestro objetivo es brindar atención de calidad de manera cortés, respetuosa y compasiva. Esperamos que nos permita cuidar de usted y esforzarnos por ser la primera y mejor opción de atención médica.
                </p>
               
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


@endsection

@section('scripts')

@endsection