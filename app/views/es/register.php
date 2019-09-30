<!-- formulario 1 -->
<section class="container p-5">
  <div class="container row">
    <form class="send offset-2 col-lg-8 border-right card shadow p-5" method="post" action="/register/paso_2">
      <h2 class="text-center pb-4"><small class="text-muted ">Formulario de Registro</small></h2>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="first_name">Nombre</label>
          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
          <label for="last_name">Apellido</label>
          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail">Correo Eletrónico</label>
        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Correo Eletrónico">
      </div>
      <div class="form-group">
        <label for="inputPassword">Contraseña</label>
        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Contraseña">
      </div>
      <div class="form-group">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Género</label>
        <select class="custom-select my-1 mr-sm-2" name="sexo" id="inlineFormCustomSelectPref">
          <option selected>Seleccione una opción</option>
          <option value="Hombre">Hombre</option>
          <option value="Mujer">Mujer</option>
        </select>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Acepta nuestros <a href="#">Términos y Condiciones</a>
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary"><i class="fa fa-send mr-2"></i> Siguiente</button>
    </form>
  </div>
</section>
