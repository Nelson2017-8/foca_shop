<?php
// var_dump($_POST);
$data = [];
foreach ($_POST as $campo => $value) {
    $data += [$campo => $value];
}
// print_r($data);
?>
<!-- formulario 2 -->
<section class="container p-5">
  <div class="container row">
    <form class="send offset-2 col-lg-8 border-right card shadow p-5" method="post" action="/register/finish">
      <h2 class="text-center pb-4"><small class="text-muted ">Formulario de Registro</small></h2>
      <div class="form-group">
        <label for="inputPhone">Teléfono</label>
        <input type="phone" class="form-control" id="inputPhone" name="phone" placeholder="Teléfono">
      </div>
      <div class="form-group">
        <label for="inputAddress">Dirección 1</label>
        <input type="text" class="form-control" id="inputAddress" name="address_1" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Dirección 2</label>
        <input type="text" class="form-control" id="inputAddress2" name="address_2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="inputCity">Cuidad</label>
          <input type="text" class="form-control" name="city" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Estado</label>
          <select id="inputState" name="stacte" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label for="inputZip">Código Postal</label>
          <input type="text" name="zip" class="form-control" id="inputZip">
        </div>
      </div>
      <button type="submit" class="btn btn-primary"><i class="fa fa-send mr-2"></i> Registrar</button>
    </form>
  </div>
</section>
