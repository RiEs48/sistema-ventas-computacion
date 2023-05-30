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

    <h2>LISTA CLIENTES</h2>
   
    <div class="col-md-8">
        <form action="post">
            <table class="table table-striped table-hover">
                <thead class="thead-dark ">
                    <tr>
                        <th width="5%"> #</th>
                        <th>Razon Social </th>
                        <th>NIT / CI </th>


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
                                <td><?php echo $reg[1]; ?></td>
                                <td><?php echo $reg[2]; ?></td>
                               


                        </div>


                        <td><a href='../Controller/clienteModifica.php?cid=<?php echo $reg[0]; ?>' class="btn btn-success"><i class="far fa-user"></i></a></td>
                        <td><a href='../Controller/eliminaCliente.php?cid=<?php echo $reg[0]; ?>' class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>

                        </tr>
                    <?php
                    }
                    ?>




                </tbody>
            </table>
    </div>
    </form>
    <td><a href="../controlador/clienteRegistro.php">nuevo cliente</a></td>
    <td><a href="../controlador/clienteBusqueda.php">buscar cliente</a></td>
    <td><a href="../vista/reporte/reporte.php">reporte</a></td>
    <td><a href="../index.php" class="btn btn-dark">salir</a></td>

</div>
<?php
include("footer.php");
?>