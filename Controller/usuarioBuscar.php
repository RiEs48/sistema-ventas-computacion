<?php

include("../View/BuscaUsuarios.php");
if (isset($_GET['buscarProveedor'])) {
  $rs = $_GET['usuario'];
  include("../Model/usuarioClase.php");
  $usu = new Usuario("","","","","","");
  $res = $usu->buscarUsuario($rs);

  ?>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">LISTA USUARIOS</h3>
    </div>
   

    <!-- /.card-header -->
    <div class="card-body">
     
        <table id="example1" class="table table-bordered table-striped">
     
        <thead>
        
            <th>Nombre </th>
            <th>Usuario </th>
            <th>nivel </th>
            <th>estado</th>
                  </thead>
          <tbody>
          <?php

while ($reg = mysqli_fetch_array($res)) {
?>
    <div class="form-group">
        <tr>
     
            <td><?php echo $reg['nombre']." ".$reg['paterno']." ".$reg['materno']; ?></td>
            <td><?php echo $reg['usuario']; ?></td>
            <td><?php echo $reg['nivel']; ?></td>
            <td><?php echo $reg['estado']; ?></td>
            
            
          
         
            
    </div>


    <td><a href='../Controller/usuarioModifica.php?cid=<?php echo $reg[0]; ?>' class="btn btn-success"><i class="far fa-edit"></i></a></td>
    <td><a href='../Controller/eliminaUsuario.php?cid=<?php echo $reg[0]; ?>' class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>

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
 