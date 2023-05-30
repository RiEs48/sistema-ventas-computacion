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
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a class="btn btn-primary btn-lg" href="carrito.php">
                                        <i class="fas fa-shopping-cart my-cart-icon"> </i>
                                        Ver Carrito</a>
                                </div>
                            </div> 
                            <table class="table table-striped table-hover ">
                                    <thead class="thead-success bg-success ">

                                        <th width="5%"># </th>
                                        <th>NOMBRE</th>
                                        <th>Descripcion </th>
                                        <th>PRECIO UNITARIO </th>
                                        <th>STOCK </th>

                                        <th> cantidad</th>
                                        <th> </th>



                                    </thead>
                                    <tbody>
                                        <div class="panel-body">
                                            <?php
                                     //       $consulta = "SELECT p.id_productos,pv.empresa,p.nombre_productos,p.descripcion,p.stock,p.costo_venta,p.fecha
                                       // from productos p  inner join proveedores pv on pv.id_proveedores=p.id_proveedores ";
                                      //      $res = mysqli_query($conexion, $consulta);
                                      
                                            while ($reg = mysqli_fetch_array($res)) {
                                            ?>
                                                <tr>
                                                    <td><b> <?php echo strtoupper($reg['id_producto']); ?> </b></td>
                                                    <td>
                                                        <b> <?php echo strtoupper($reg['nombreproducto']); ?> </b>
                                                    </td>
                                                    <td>
                                                        <b> <?php echo strtoupper($reg['descripcion']); ?> </b>
                                                    </td>
                                                    <td>precio:<strong class="eli"> <?php echo $reg['costoventa']; ?>bs</strong></td>
                                                    <td><strong class="btn btn-alert"><b>Stock : <?php echo $reg['stock']; ?></b> </strong></td>
                                                    <td>
                                                        <?php
                                                        $estado = false;
                                                        
                                                        if (isset($_SESSION["carrito_ventas1"])) {
                                                          
                                                            foreach ($_SESSION["carrito_ventas1"] as $c) {
                                                                if ($c["id_producto"] == $reg['id_producto']) {
                                                                    $estado = true;
                                                                    break;
                                                                }
                                                            }
                                                        }


                                                        ?>
                                                        <?php
                                                        if ($estado) : ?>
                                                            <a href="carrito.php" class="btn btn-success">agregado</a>
                                                    </td>
                                                <?php
                                                        else : ?>
                                                    <?php
                                                            if ($reg['stock'] != 0) { ?>
                                                        <form method="post" action="../Controller/adicionarcarrito.php" enctype="multipart/form-data">
                                                            <input type="hidden" name="id_producto" value="<?php echo $reg['id_producto']; ?>">
                                                            cantidad :
                                                            <input type="number" name="cantidad" value="1" style="width:80px;" min="1" max="<?php echo $reg['stock']; ?>" class="form-control"></td>
                                                            <td>
                                                                <button type="submit" class="btn btn-primary">agregar</button>
                                                            </td>
                                                        </form>
                                                    <?php } else { ?>
                                                        <div>
                                                            <td><button type="button" class="btn btn-danger">agotado</button></td>
                                                        </div>
                                                    <?php }  ?>
                                                <?php endif;
                                                ?>
                                        </div>
                           
                            </tr>
                        <?php  }  ?>


                </tbody>
               
                        </table>








            </div>
            <!-- /.col-md-6 -->

            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php
include("footer.php");

?>