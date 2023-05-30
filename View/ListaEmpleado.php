
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

<h2>LISTA EMPLEADOS</h2>
<p> LISTA DE TODOS LOS  EMPLEADOS </p>
<table class="table table-striped table-hover">
    <thead class="thead-dark ">
        <tr>
            <th width="5%"> #</th>
            <th>Cargo </th>
            <th>Cedula </th>
            <th>Nombres </th>
            <th>Paterno </th>
            <th>Materno </th>
            <th>Direccion</th>
            <th>telefono </th>
            <th>Fecha Nacimiento </th>
            <th>Genero</th>
            <th>Intereses</th>
            
            <th colspan="2" width="40%">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php

        while ($reg = mysqli_fetch_array($r1)) {
        ?>
            <div class="form-group">
                <tr>
                    <td><?php echo $reg[0]; ?></td>
                    <td><?php echo $reg['cargo']; ?></td>
                    <td><?php echo $reg[2]; ?></td>
                    <td><?php echo $reg[3]; ?></td>
                    <td><?php echo $reg[4]; ?></td>
                    <td><?php echo $reg[5]; ?></td>
                    <td><?php echo $reg[6]; ?></td>
                    <td><?php echo $reg[7]; ?></td>
                    <td><?php echo $reg[8]; ?></td>
                    <td><?php echo $reg[9]; ?></td>
                    <td><?php echo $reg[10]; ?></td>
                    
            </div>


            <td><a href='../Controller/empleadoModifica.php?cid=<?php echo $reg[0]; ?>' class="btn btn-success"><i class="far fa-edit"></i></a></td>
            <td><a href='../Controller/eliminaEmpleado.php?cid=<?php echo $reg[0]; ?>' class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>

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