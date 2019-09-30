<form class="form-signin">
  <div class="text-center mb-4">
    <img class="mb-4" src="<?php echo $path . "assets/img/network.png"; ?>" alt="users" width="120" height="120">
    <h1 class="h3 mb-3 font-weight-normal">Formulario de Inicio</h1>
  </div>

  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    <label for="inputEmail">Correo Electrónico</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    <label for="inputPassword">Contraseña</label>
  </div>
  <div style="display: ruby-text;">
    <p class="float-left"><a href="/register">Registrarse</a></p>
    <p class="float-right"><a href="/forgotten">¿Olvide mi contraseña?</a></p>
  </div>
  <div class="custom-control custom-checkbox mb-5">
    <input type="checkbox" class="custom-control-input" value="remember-me" id="remember-me">
    <label class="custom-control-label" for="remember-me">Recordar me</label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa fa-send mr-3"></i>Comenzar</button>
  <p class="mt-5 mb-3 text-muted text-center">© Coporación 2019 <a href="/" class="text-blue">Focashop</a>. <br>Todos los derechos Reservados</p>
</form>