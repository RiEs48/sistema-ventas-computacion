<?php

include("../View/BusquedaEmpleado.php");
if (isset($_GET['buscarEmpleado'])) {
  $rs = $_GET['empleado'];
  include("../Model/empleadoClase.php");
  $cli = new Empleado("", "", "", "", "", "", "", "","","","");
  $res = $cli->BuscaEmpleado($rs);

  ?>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">LISTA PROVEDORESs</h3>
    </div>
   

    <!-- /.card-header -->
    <div class="card-body">
     
        <table id="example1" class="table table-bordered table-striped">
     
        <thead>
                  <tr>
                    <th>Cargo</th>
                    <th>Cedula</th>
                    <th>Nombres</th>
                    <th>Paterno</th>
                    <th>Materno</th>
                    <th>Direccion</th>
                    <th>telefono</th>
                    <th>Fecha Nacimiento</th>
                    <th>Genero</th>
                    <th>Intereses</th>
                    <th>OPCIONES</th>
                  </tr>
                  </thead>
          <tbody>
          <?php
      while ($r = mysqli_fetch_array($res)) {
      ?>
            <tr>
              <td><?= $r['cargo']; ?></td>
              <td><?= $r['ci']; ?></td>
              <td><?= $r['nombre']; ?></td>
              <td><?= $r['paterno']; ?></td>
              <td><?= $r['materno']; ?></td>
              <td><?= $r['direccion']; ?></td>
              <td><?= $r['telefono']; ?></td>
              <td><?= $r['fechanacimiento']; ?></td>
              <td><?= $r['genero']; ?></td>
              <td><?= $r['intereses']; ?></td>
            
              <td><a href="empleadoModifica.php?cid=<?= $r[0]; ?>" class="btn btn-success"><i class="far fa-edit"></i></a></td>
              <td><a href="eliminaEmpleado.php?cid=<?= $r[0]; ?>" class="btn btn-danger"><i class="far fa-edit"></i></a></td>
            </tr>
            <?php
      }
      ?>
          </tbody>

        </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
<?php 
}
include("../View/footer.php")
?>  
 <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>