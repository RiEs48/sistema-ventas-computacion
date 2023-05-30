<?php
session_start();
include("../View/head.php");
if ($_SESSION['nivel'] == 1) {
    include("template.php");
}
if ($_SESSION['nivel'] == 2) {
    include("template2.php");
}

?>
<div class="container">

    <h2>LISTA PROVEDORES</h2>
    <p> LISTA DE TODOS LOS PROVEEDORES </p>
    <div class="col-md-8">
        <form action="post">
            <table class="table table-striped table-hover">
                <thead class="thead-dark ">
                    <tr>
                        
                        <th>Empresa </th>
                        <th>Contacto </th>
                        <th>Email </th>
                        <th>Telefono </th>
                        <th>Direccion</th>
                        <th>logo</th>


                        <th colspan="2" width="40%">Opciones</th>
                    </tr>
                </thead>
    </div>
    <tbody>
        <?php

        while ($reg = mysqli_fetch_array($r1)) {
        ?>
            <div class="form-group">
                <tr>
                    <td><?php echo $reg[1]; ?></td>
                    <td><?php echo $reg[2]; ?></td>
                    <td><?php echo $reg[3]; ?></td>
                    <td><?php echo $reg[4]; ?></td>
                    <td><?php echo $reg[5]; ?></td>
                    <td><img src="../Controller/imagenesprovedor/<?php echo $reg[6]; ?>" width="35px" height="35px">
                    </td>
            </div>


            <td><a href='../Controller/provedorModifica.php?cid=<?php echo $reg[0]; ?>' class="btn btn-success"><i class="far fa-edit"></i></a></td>
            <td><a href='../Controller/eliminaProvedor.php?cid=<?php echo $reg[0]; ?>' class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>

            </tr>
        <?php
        }
        ?>




    </tbody>
    </table>
</div>
</form>
<td><a href="../controlador/provedorRegistro.php" class="btn btn-success">nuevo proveedor </a></td>
<td><a href="../controlador/provedor.php">buscar provedor</a></td>
<td><a href="../vista/reporte/reporte.php">reporte</a></td>
<td><a href="../index.php" class="btn btn-dark">salir</a></td>

</div>
<?php 
include ("../View/footer.php");
?>