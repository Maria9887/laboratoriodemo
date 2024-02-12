@extends('layouts.master')

@section('title')
Demo-Laboratorio de Análisis Clinicos
@endsection

@section('content')
   <!-- ========================
       page title 
    =========================== -->
    <section class="page-title pt-30 pb-30">
      <div class="container">
        <div class="row">
          <div class="col-12">
          <h6 class="related__products-title text-center-xs mb-25">Consulta de resultados</h6>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mt-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pacientes</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
          <br><br><br><br><br><br>
          <div class="blog-widget blog-comments-form mb-30">
              <h5 class="blog-widget__title">Acceso a pacientes</h5>
              <form>
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control mb-10 mr-10" placeholder="Apellido Paterno">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                      <input type="email" class="form-control mb-10 mr-10" placeholder="Apellido Materno">
                    </div><!-- /.form-group -->
                  </div><!-- /.col-lg-6 -->
                  
                  
                  <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">
                    <button type="submit" class="btn btn__primary btn__rounded btn__xl">
                      <span>Buscar</span> <i class="icon-arrow-right"></i>
                    </button>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.blog-comments-form -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

<br><br><br><br><br><br><br><br><br>





 
@endsection

@section('scripts')

@endsection