<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo; ?></h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      
      <a href="<?php echo base_url(); ?>/admin/nuevo" class="btn btn-info">Agregar nuevo</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Cedula</th>
              <th>Comuna</th>
              <th>Agregado</th>
              <th>Activo</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nombre</th>
              <th>Cedula</th>
              <th>Comuna</th>
              <th>Agregado</th>
              <th>Activo</th>
              <th>Acciones</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach($datos as $dato) { ?>
              <tr>
                <td><?php echo $dato['id_registros']; ?></td>
                <td><?php echo $dato['cedula']; ?></td>
                <td><?php echo $dato['comuna']; ?></td>
                <td><?php echo $dato['fecha']; ?></td>
                <td><?php echo $dato['activo']; ?></td>
                <td><a href="<?php echo base_url(); ?>/admin/editar/<?php echo $dato['id_registros']; ?>" class="btn btn-success"><i class="fas fa-pen-square"></i></a> <a href="<?php echo base_url(); ?>/admin/eliminar/<?php echo $dato['id_registros']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->