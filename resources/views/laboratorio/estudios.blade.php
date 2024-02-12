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
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mt-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Estudios</a></li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
       shop single
    =========================== -->
    <section class="shop pb-40 pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row product-item-single ">
            
              <div class="col-sm-12">
                <h1 class="product__title">Estudio</h1>
                <div class="product__meta-review mb-20">
                 
                </div><!-- /.product-meta-review -->
                <span class="product__price mb-20">$ 14.00</span>
                <div class="product__desc">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
                </div><!-- /.product-desc -->
                
              
              </div>
            </div><!-- /.row -->
            <div class="product__details mt-50">
              <nav class="nav nav-tabs">
                <a class="nav__link active" data-toggle="tab" href="#Description">Indicaciones</a>
                <a class="nav__link" data-toggle="tab" href="#Details">Procedimientos</a>
              </nav>
              <div class="tab-content mb-50" id="nav-tabContent">
                <div class="tab-pane fade show active" id="Description">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div><!-- /.desc-tab -->
                <div class="tab-pane fade" id="Details">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 
                </div><!-- /.details-tab -->
               
              </div>
            </div><!-- /.product-tabs -->
            
              </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shop single -->
    @endsection

@section('scripts')

@endsection