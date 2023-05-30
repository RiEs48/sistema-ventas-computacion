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
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-18"><br>
                    <h1 class="text-center" >LISTA DE VENTAS</h1><br>
                    <table class="table table-bordered">
                        <tr>
                            <th>EMPLEADO</th>
                            <th>CLIENTE</th>
                            <th>PRODUCTO</th>
                            <th>DESCRIPCION</th>
                            <th>FECHA</th>
                            <th>CANTIDAD</th>
                            <th>COSTO</th>
                            
                        </tr>
                        <?php
                            //include("conexion.php");
                            //$consulta="select * from empleado";
                            
                            while($reg=mysqli_fetch_array($r1)){
                                echo "<tr>";
                                echo "<td>".$reg['nombre']." ".$reg['paterno']."</td>";
                                echo "<td>".$reg['razonsocial']."</td>";
                                echo "<td>".$reg['nombreproducto']."</td>";
                                echo "<td>".$reg['descripcion']."</td>";
                                echo "<td>".$reg['fecha']."</td>";
                                echo "<td>".$reg['cantidad']."</td>";
                                echo "<td>".$reg['costo']."</td>";
                               
                                echo "</tr>";
                            }
                        ?>
                    </table>
                    <a href="../venta/factura.php" class="btn btn-success">FACTURA</a><br><br>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
<?php 
include ("../View/footer.php");
?>