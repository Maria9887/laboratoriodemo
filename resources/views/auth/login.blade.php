@extends('layouts.form')

@section('content')
    <!-- Page content -->
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
           <br><br> <br><br><br>
          <div class="login-brand">
              <img src="images/logo/logo-lig.png" alt="logo" width="330">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
              <form role="form" method="POST" action="{{ url('/login') }}" class="needs-validation" novalidate="">
              @csrf
              <div class="form-group">
                    <label for="username">Usuario</label>
                    <input class="form-control" type="text" id="username" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Ingresa tu usuario correcto
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Contraseña</label>
                    </div>
                    <input class="form-control" type="password" id="password"name="password" required autocomplete="current-password"tabindex="2">
                    <div class="invalid-feedback">
                      Ingresa tu Contraseña correcta
                    </div>
                  </div>
               
              

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                
            </div>
          
           
          </div>
        </div>
      </div>
    </section>
 
@endsection

