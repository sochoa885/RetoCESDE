<div class="container-fluid">


<form action="<?php echo base_url(); ?>/admin/agregar_task" method="POST">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="id" name="id" placeholder="Id">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Cedula</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Cedula">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Telefono</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Dirección</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Comuna</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="comuna" name="comuna" placeholder="Comuna">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Fecha</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha">
    </div>
  </div>
  
  
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
  </div>
</form>

</div>

</div>