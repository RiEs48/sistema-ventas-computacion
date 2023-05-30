
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
            <th>Imagen Producto </th>
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
                    <td><?php echo $reg['empresa']; ?></td>
                    <td><?php echo $reg['nombreproducto']; ?></td>
                    <td><?php echo $reg['descripcion']; ?></td>
                    <td><?php echo $reg['costocompra']; ?></td>
                    <td><?php echo $reg['costoventa']; ?></td>
                    <td><?php echo $reg['stock']; ?></td>
                    <td><?php echo $reg['fecha']; ?></td>
                    <td><img src="../Controller/imgproductos/<?php echo $reg['imagen']; ?>" width="35px" height="35px">
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
<td><a href="../controlador/clienteRegistro.php">nuevo cliente</a></td>
<td><a href="../controlador/clienteBusqueda.php">buscar cliente</a></td>
<td><a href="../vista/reporte/reporte.php">reporte</a></td>
<td><a href="../index.php" class="btn btn-dark">salir</a></td>

</div>
<?php
include("footer.php");
?>