@extends('layouts.default')
@section('title', 'LockSEK')
@section('content')
<section id="intro">
  <div class="intro-container wow fadeIn">
    <h1 class="mb-4 pb-0">La <span>plataforma</span><br> mas <span>accesible</span> del mundo</h1>
    <p class="mb-4 pb-0">Abre tus cerraduras con llaves electronicas</p>
<div class="col-12">
  <button onclick="playPause()">Play/Pause</button>
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
</div>

    <video width="320" id="video1" height="240" autoplay>
      <source src="{{asset('assets/video/manavitox.mp4')}}" type="video/mp4"/>
      <source src="{{asset('assets/video/manavitox.ogg')}}" type="video/ogg"/>
    </video>
    <a href="https://www.youtube.com/watch?v=YBvSThNCek0" class="venobox play-btn mb-4" data-vbtype="video"
    data-autoplay="true">  </a>
    <a href="#" class="about-btn scrollto">Registrate</a>
  </div>
</section>

<main id="main">

  <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2>Sobre LockSEK</h2>
          <p>Nosotros creemos en las cerraduras personalizadas a las necesidades del cliente.
            <br>Administre quien entra y cuando entra, genere llaves nuevas y elimine las que no necesite.</p>
          </div>
          <div class="col-lg-3">
            <h3>Cerraduras</h3>
            <p>Implantamos cerraduras electronicas accionadas por dispositivos USB.</p>
          </div>
          <div class="col-lg-3">
            <h3>Llaves</h3>
            <p>Ofrecemos herramientas para manejar tus llaves electronicas.</p>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
    Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Quienes somos</h2>
          <p>Nosotros somos LockSEK, los desarolladores y administradores de sistemas visionarios.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{asset('assets/img/speakers/1.jpg')}}" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Robert Baluta</a></h3>
                <p>Vince Offer</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{asset('assets/img/speakers/2.jpg')}}" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Ander Laboreo</a></h3>
                <p>The Popcorn Boy</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{asset('assets/img/speakers/3.jpg')}}" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Ibai Alberdi</a></h3>
                <p>The Delegate</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{asset('assets/img/speakers/4.jpg')}}" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Iker</a></h3>
                <p>ASIR</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{asset('assets/img/speakers/5.jpg')}}" alt="Speaker 5" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Eneko</a></h3>
                <p>ASIR</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{asset('assets/img/speakers/6.jpg')}}" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Gorka</a></h3>
                <p>ASIR</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--==========================
    Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Galeria</h2>
          <p>Los ultimos eventos y productos</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="{{asset('assets/img/gallery/1.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('assets/img/gallery/1.jpg')}}" alt=""></a>
        <a href="{{asset('assets/img/gallery/2.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('assets/img/gallery/2.jpg')}}" alt=""></a>
        <a href="{{asset('assets/img/gallery/3.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('assets/img/gallery/3.jpg')}}" alt=""></a>
        <a href="{{asset('assets/img/gallery/4.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('assets/img/gallery/4.jpg')}}" alt=""></a>
        <a href="{{asset('assets/img/gallery/5.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('assets/img/gallery/5.jpg')}}" alt=""></a>
        <a href="{{asset('assets/img/gallery/6.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('assets/img/gallery/6.jpg')}}" alt=""></a>
        <a href="{{asset('assets/img/gallery/7.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('assets/img/gallery/7.jpg')}}" alt=""></a>
        <a href="{{asset('assets/img/gallery/8.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{asset('assets/img/gallery/8.jpg')}}" alt=""></a>
      </div>

    </section>


    <!--==========================
    F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
            <ul id="faq-list">

              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq1">¿Es seguro usar este metodo? <i class="fa fa-minus-circle"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                  <p>
                    Sí, el sistema de llaves funciona con claves cifradas, únicas, e independientes que permiten el acceso a la cerradura.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">¿Está disponible en mi país? <i class="fa fa-minus-circle"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                  <p>
                    Actualmente nuestro producto esta displonible unicamente en España
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">¿Por qué utilizar este sistema? <i class="fa fa-minus-circle"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                  <p>
                    Este sistema es un sistema seguro, practico, sencillo y economico, hoy en dia cualquier persona tiene acceso a un USB en el que podremos guardar tantas llaves como queramos, ademas nuestra página web ofrece una interfaz sencilla y  explicaciones claras  de su funcionamiento
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">¿Es rentable? <i class="fa fa-minus-circle"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                  <p>
                    Sí, ya que este sistema te permite realizar copias de las llaves sin ningun coste adicional, ademas del bajo coste que supone adquirir un USB, lo mas caro es la cerradura y no tiene un coste demasiado elevado
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq5" class="collapsed">¿Que pasa si no me funciona la llave/cerradura? <i class="fa fa-minus-circle"></i></a>
                <div id="faq5" class="collapse" data-parent="#faq-list">
                  <p>
                    Si tiene cualquier problema puede contactar con nuestro servicio al cliente:
                    <p>
                      Mediante correo electronico enviando un mensaje a: <a>locksek@support.com</a>

                      O por telefono llamando a:
                      <br>
                      Tel: 987654321
                      <br>
                      Tel: 987654320 (24h Gratuito)
                    </p>
                  </p>
                </div>
              </li>



            </ul>
          </div>
        </div>

      </div>

    </section>

    <!--==========================
    Subscribe Section
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Recibe las ultimas noticias.</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Introduce tu email">
            </div>
            <div class="col-auto">
              <button type="submit">Suscribete</button>
            </div>
          </div>
        </form>

      </div>
    </section>





    <!--==========================
    Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contáctanos</h2>
          <p>Contacta con nosotros para mas informacion.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Dirección</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Número de teléfono</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Tu mensaje sera enviado. ¡Gracias!</div>
          <div id="errormessage">No se envio el mensaje</div>
          <form action="insert" method="post" role="form">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Introduzca al menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Porfavor introduzca un email valido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="asunto" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Introduce al menos 8 caracteres" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="texto" rows="5" data-rule="required" data-msg="Escribenos algo" placeholder="Mensaje"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Enviar mensaje</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
  <script>
var myVideo = document.getElementById("video1");

function playPause() {
    if (myVideo.paused)
        myVideo.play();
    else
        myVideo.pause();
}

function makeBig() {
    myVideo.width = 560;
}

function makeSmall() {
    myVideo.width = 320;
}

function makeNormal() {
    myVideo.width = 420;
}
</script>
  @stop
  @section('top')
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  @stop
