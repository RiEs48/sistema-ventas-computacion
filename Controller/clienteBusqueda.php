<?php

include("../View/BusquedaCliente.php");
if (isset($_GET['buscarProveedor'])) {
  $rs = $_GET['razon'];
  include("../Model/clienteClase.php");
  $cli = new Cliente("", "", "");
  $res = $cli->BuscaCliente($rs);

  ?>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">LISTA CLIENTES</h3>
    </div>
   

    <!-- /.card-header -->
    <div class="card-body">
     
        <table id="example1" class="table table-bordered table-striped">
     
        <thead>
                  <tr>
                    <th>Razon Social</th>
                    <th>NIT/CI</th>
                 
                    <th>OPCIONES</th>
                  </tr>
                  </thead>
          <tbody>
          <?php
      while ($r = mysqli_fetch_array($res)) {
      ?>
            <tr>
              <td><?= $r['razonsocial']; ?></td>
              <td><?= $r['nit_ci']; ?></td>
             
              <td><a href="clienteModifica.php?cid=<?= $r[0]; ?>" class="btn btn-success"><i class="far fa-edit"></i></a></td>
              <td><a href="eliminaCliente.php?cid=<?= $r[0]; ?>" class="btn btn-danger"><i class="far fa-edit"></i></a></td>
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