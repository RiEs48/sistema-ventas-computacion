<?php

include("../View/BusquedaProvedor.php");
if (isset($_GET['buscarProveedor'])) {
  $rs = $_GET['empresa'];
  include("../Model/provedorClase.php");
  $cli = new Provedor("", "", "", "", "", "", "", "");
  $res = $cli->Buscaprovedor($rs);

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
                    <th>Empresa</th>
                    <th>Contacto</th>
                    <th>Mail</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Logo</th>
                    <th>OPCIONES</th>
                  </tr>
                  </thead>
          <tbody>
          <?php
      while ($r = mysqli_fetch_array($res)) {
      ?>
            <tr>
              <td><?= $r['empresa']; ?></td>
              <td><?= $r['contacto']; ?></td>
              <td><?= $r['mail']; ?></td>
              <td><?= $r['telefono']; ?></td>
              <td><?= $r['direccion']; ?></td>
              <td>
                <div class="contact contact-rounded contac-bordered contact-lg">
                  <img src="imagenesproveedor/<?php echo $r['logo']; ?>" width="60px" heidht="60px">
                </div>
              </td>
              <td><a href="provedorModifica.php?cid=<?= $r[0]; ?>" class="btn btn-success"><i class="far fa-edit"></i></a></td>
              <td><a href="proveedorElimina.php?cid=<?= $r[0]; ?>" class="btn btn-danger"><i class="far fa-edit"></i></a></td>
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