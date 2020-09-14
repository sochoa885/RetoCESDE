<div class="container-fluid">


<form action="<?php echo base_url(); ?>/admin/editar_task" method="POST">
    <input type="hidden" value="<?php echo $datos['id_registros']; ?> " name="id" />
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Cedula</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Cedula">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Comuna</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="comuna" name="comuna" placeholder="Comuna">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Activo</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="activo" name="activo" placeholder="0/1">
        </div>
    </div>



    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </div>
</form>

</div>

</div>