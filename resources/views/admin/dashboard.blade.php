<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link href="{{ asset('images/favicon/favicon.png') }}" rel="icon">
    <!-- Title -->
    <title> @yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
  @include('admin.panel.menu')
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @include('admin.panel.userOptions') 
    
      <!-- Begin Page Content -->
      <div class="container-fluid">
      @yield('content')
      </div>
            <!-- End of Page Content -->
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-vials"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total de pruebas</h4>
                  </div>
                  <div class="card-body">
                    113
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
               
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-calendar-plus"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Citas Reservadas</h4>
                  </div>
                  <div class="card-body">
                    113
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-procedures"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Pacientes</h4>
                  </div>
                  <div class="card-body">
                    4,732
                  </div>
                </div>
              </div>
            </div>
          </div>
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      @include('admin.panel.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('modules/jquery.min.js') }}"></script>
  <script src="{{ asset('modules/popper.js') }}"></script>
  <script src="{{ asset('modules/tooltip.js') }}"></script>
  <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('modules/moment.min.js') }}"></script>
  <script src="{{ asset('js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('modules/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('modules/chart.min.js') }}"></script>
  <script src="{{ asset('modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('js/page/index.js') }}"></script>
  
  <!-- Template JS File -->
  <script src="{{ asset('js/scripts.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>