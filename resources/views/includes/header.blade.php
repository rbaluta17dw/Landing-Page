
<div class="container">

  <div id="logo" class="pull-left">
    <!-- Uncomment below if you prefer to use a text logo -->
    <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
    <a href="#intro" class="scrollto"><img src="{{asset('assets/img/apple-touch-icon.png')}}" alt="" title=""></a>
  </div>

  <nav id="nav-menu-container">
    <ul class="nav-menu">
      <li class="menu-active"><a href="#intro">Inicio</a></li>
      <li><a href="#about">Sobre LockSEK</a></li>
      <li><a href="#speakers">Nosotros</a></li>
      <li><a href="#gallery">Galeria</a></li>
      <li><a href="#contact">Contacto</a></li>
      <li class="buy-tickets"><a href="#" id="modalStart">Iniciar sesion</a></li>

    </ul>
  </nav><!-- #nav-menu-container -->
</div>
<div class="container-fluid">
  <div id="modal" class="modal">

    <!-- Modal content -->
    <div class="modal-content col-3">
      <span class="close"></span>

  <div class="login-form">
    <h1>Sign In</h1>
    <form name="login" action="login" method="get" >
      <span style="color: red;" id="emailValidate"></span>
      <span style="color: red;" id="texto"></span>
      <input type="email" name="email" placeholder="email" oninput="validate()">
      <input type="text" name="password" placeholder="password">
      <input type="number" min="100000000" max="999999999" required name="" value="">
      <input type="submit" disabled id="disabled" class="disabled" name="login" value="Login">

    </form>
    <a href="https://codepen.io/collection/XdWJOQ/">Forget Password<a>
  </div>
    </div>

  </div>
</div>
