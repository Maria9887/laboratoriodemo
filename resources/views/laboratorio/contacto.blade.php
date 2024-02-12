@extends('layouts.master')

@section('title')
Demo-Laboratorio de Análisis Clinicos
@endsection

@section('content')  
   <!-- ========================= 
            Google Map
    =========================  -->
    <section class="google-map py-0">
      <iframe frameborder="0" height="500" width="100%"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.6953325663794!2d-98.96849442546034!3d22.739562779373163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8678b9d719d8f7cd%3A0x8e982259ec6f8f09!2sUGA%20Labs%20-%20Laboratorio%20de%20An%C3%A1lisis%20Cl%C3%ADnicos!5e0!3m2!1ses!2smx!4v1696209842198!5m2!1ses!2smx"></iframe>

    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->
    <section class="contact-layout1 pt-0 mt--100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contact-panel d-flex flex-wrap">
              <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Estamos cerca de ti, contactanos</h4>
                    <p class="contact-panel__desc mb-30">No dude en ponerse en contacto con nuestro amable personal de recepción si tiene alguna consulta general o médica. 
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-user form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Nombre Completo" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-email form-group-icon"></i>
                      <input type="email" class="form-control" placeholder="Coreo Eléctronico" id="contact-email"
                        name="contact-email" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-phone form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Teléfono" id="contact-Phone"
                        name="contact-phone" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-news form-group-icon"></i>
                      <select class="form-control">
                        <option value="0">Estudios</option>
                        <option value="1">Subject 1</option>
                        <option value="2">Subject 1</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-12">
                    <div class="form-group">
                      <i class="icon-alert form-group-icon"></i>
                      <textarea class="form-control" placeholder="Mensaje" id="contact-message"
                        name="contact-message"></textarea>
                    </div>
                    <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                      <span>Enviar</span> <i class="icon-arrow-right"></i>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
              <div
                class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                <div>
                  <h4 class="contact-panel__title color-white">Contacto rápido</h4>
                  <p class="contact-panel__desc font-weight-bold color-white mb-30">No dude en ponerse en contacto con nuestro amable personal si tiene alguna consulta médica.
                  </p>
                </div>
                <div>
                  <ul class="contact__list list-unstyled mb-30">
                    <li>
                      <i class="icon-phone"></i><a href="tel: 831 115 5040"></a>
                    </li>
                    <li>
                      <i class="icon-location"></i><a href="#">Domicilio: Obregón 608, esquina con monterrey 401 zona centro</a>
                    </li>
                    <li>
                      <i class="icon-clock"></i><a href="contact-us.html">Lun - Sab: 8:00 am - 8:00 pm</a>
                    </li>
                  </ul>
                  <a href="#" class="btn btn__white btn__rounded btn__outlined">Contactanos</a>
                </div>
              </div>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->


@endsection

@section('scripts')

@endsection