
<?php
include("head.php");
session_start();
if ($_SESSION['nivel'] == 1) {
    include("template.php");
}
if ($_SESSION['nivel'] == 2) {
    include("template2.php");
}

?>
<div class="container">

<h2> LISTA  USUARIOS ACTIVOS </h2>

<table class="table table-striped table-hover">
    <thead class="thead-dark ">
        <tr>
            <th width="5%"> #</th>
            <th>Nombre </th>
            <th>Usuario </th>
            <th>nivel </th>
            <th>estado</th>
           
            
            <th colspan="2" width="40%">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php

        while ($reg = mysqli_fetch_array($r1)) {
        ?>
            <div class="form-group">
                <tr>
                <td><?php echo $reg['id_usuario']; ?></td>
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
<td><a href="../controlador/clienteRegistro.php">nuevo cliente</a></td>
<td><a href="../controlador/clienteBusqueda.php">buscar cliente</a></td>
<td><a href="../vista/reporte/reporte.php">reporte</a></td>
<td><a href="../index.php" class="btn btn-dark">salir</a></td>

</div>
<?php
include("footer.php");
?>