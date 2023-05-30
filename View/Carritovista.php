
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
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1>Productos Seleccionados</h1>
                <a href="ventaRegistro.php" class="btn btn-success">Ver Productos</a>
                <br><br>
                <?php
                //include("conexion.php");
                $t=0;
                //$products=mysqli_query($conexion,"SELECT * FROM producto");
                $products=$r1;
                if(isset($_SESSION['carrito_ventas1']) && !empty($_SESSION["carrito_ventas1"])):
                ?>
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Total</th>
                        <th></th>
                    </thead>
                    <?php
                    $cont=0;
                    foreach($_SESSION["carrito_ventas1"] as $c):
                        //$products=mysqli_query($conexion,"SELECT * FROM producto WHERE id_producto=$c[id_producto]");
                        $prod=new Producto("","","","","","","","","","");
                        $products=$prod->carrito($c);
                        while($r=mysqli_fetch_array($products)){
                            $cont++;
                            ?>
                    <tr>
                    <td><?php echo $cont;?></td>
                    <td><?php echo $r['nombreproducto'];?></td>
                    <td><?php echo $r['descripcion'];?></td>
                    <th><?php echo $c["cantidad"];?></th>
                    <td>Bs <?php echo $r['costoventa'];?></td>
                    <td>Bs <?php $t=$t+$c["cantidad"]*$r['costoventa']; echo $c["cantidad"]*$r['costoventa'];
                    ?></td>
                    <td style="width: 260px;">
                        <?php
                        $found=false;
                        foreach($_SESSION["carrito_ventas1"] as $c){
                            if($c["id_producto"]==$r['id_producto']) {
                                $found=true; break;
                            }
                        }
                        ?>
                        <a href="../../controlador/venta/carritoElimina.php?id=<?php echo $c["id_producto"];?>" class="btn btn-danger">
                        Eliminar</a>
                    </td>
                    </tr>
                    <?php }
                    endforeach; ?>
                </table>   
                    <!-- formulario del total -->
                <div class="col-md-15 centro">
                    <table class="table table-bordered">
                        <tbody><tr>
                            <td><span class="btn btn-default form-control campo">Total</span></td>
                            <td class="campo"><?php echo 'Bs. '.$t; ?></td>
                            <form class="form-horizontal" method="POST" action="../Controller/formclienteVenta.php">
                                <div class="form-inline izquierda">
                                    <div class="col-md-15">
                                        <input type="hidden" name="total" value="<?php echo($t); ?>">
                                        <button type="submit" class="btn btn-primary btn-lg from derecha">PROCESAR VENTA</button>
                                    </div>
                                </div>
                            </form>
                            <?php else:?>
                                <p class="alert alert-warning">No hay Productos Seleccionados.</p>
                            <?php endif;?>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- ?> -->
            </div>
        </div>
    </div>

    <?php
include("footer.php");
?>