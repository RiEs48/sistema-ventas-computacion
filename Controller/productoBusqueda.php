<?php

include("../View/BusquedaProducto.php");
if (isset($_GET['buscarProveedor'])) {
  $rs = $_GET['producto'];
  include("../Model/productoClase.php");
  $cli = new Producto("", "", "", "", "", "", "", "","","");
  $res = $cli->Buscaproducto($rs);

  ?>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">LISTA PRODUCTOS</h3>
    </div>
   

    <!-- /.card-header -->
    <div class="card-body">
    <h2>LISTA PRODUCTOS</h2>
<p> LISTA DE TODOS LOS PRODUCTOS </p>
<table class="table table-striped table-hover">
    <thead class="thead-dark ">
        <tr>
            
        <th>ID </th>
            <th>PROVEDOR </th>
            <th>NOMBRE PRODUCTO</th>
            <th>Descripcion</th>
            <th>Costo Compra</th>
            <th>Costo Venta </th>
            <th>Stock</th>
            <th>Fecha </th>
            <th>Imagen </th>
            <th colspan="2" width="40%">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php

        while ($reg = mysqli_fetch_array($res)) {
        ?>
            <div class="form-group">
                <tr>
                    <td><?php echo $reg[0]; ?></td>
                    <td><?php echo $reg['empresa']; ?></td>
                    <td><?php echo $reg['nombreproducto']; ?></td>
                    <td><?php echo $reg['descripcion']; ?></td>
                    <td><?php echo $reg['costocompra']; ?></td>
                    <td><?php echo $reg['costoventa']; ?></td>
                    <td><?php echo $reg['stock']; ?></td>
                    <td><?php echo $reg['fecha']; ?></td>
                    <td>
                <div class="contact contact-rounded contac-bordered contact-lg">
                  <img src="imgproductos/<?php echo $reg['imagen']; ?>" width="60px" heidht="60px">
                </div>
              </td>
                   
                    
                    
             
                    
            </div>


            <td><a href='../Controller/productoModifica.php?cid=<?php echo $reg[0]; ?>' class="btn btn-success"><i class="far fa-edit"></i></a></td>
            <td><a href='../Controller/eliminaProducto.php?cid=<?php echo $reg[0]; ?>' class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>

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