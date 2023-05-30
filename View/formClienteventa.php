<?php

include("head.php");
if ($_SESSION['nivel'] == 1) {
    include("template.php");
}
if ($_SESSION['nivel'] == 2) {
    include("template2.php");
}

?>
<?php
//session_start();
//session_start();
//otalg=$_POST['total'];
?>

    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center><h4><a href="registroventa.php" link="white">
                            <i class='glyphicon btn-lg glyphicon-shopping-cart'></i>Detalle de la Venta
                        </a></h4></center>
                    </div>
                    <div class="panel-body">
                        <span class="campo"><i class="btn btn-danger">* </i>campos requeridos</span>
                        <form method="POST" action="../Controller/procesarVenta.php">
                        <center>
                            <table>
                                <tr>
                                    <td class="btn btn-default"><i class="btn btn-danger">*</i><b>Razon Social:</b></td>
                                    <td colspan="2"><a href="registrocliente.php" target="_blank" class="btn btn-primary">
                                        <b>Nuevo Cliente:</b></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="nit" id="nit" class="form-control">
                                            <?php
                                                //require("conexion.php");
                                                //$consulta= "SELECT * FROM cliente";
                                                //$res=mysqli_query($conexion,$consulta);
                                                while($reg=mysqli_fetch_array($r)){
                                            ?>
                                            <option value="<?php echo $reg['nit_ci'];?>"><?php echo $reg['nit_ci']."&nbsp;&nbsp;&nbsp;
                                            ".$reg["razonsocial"];?>
                                            </option>";
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <br><br>
                            <table>
                                <tr>
                                    <td class="btn btn-default"></i></span><b>Total</b></td>
                                    <td><input class="form-control campo" type="number" value="<?php echo($totalg);?>" name="totalg"
                                    readonly="readonly"></td>
                                </tr>
                            </table>
                        </center><br><br>
                        <center>
                            <span><b><i class='glyphicon glypicon-shopping-cart'></i></span>
                            <input type="submit" name="botonguardar" class="btn btn-info" value=" Enviar Registro">
                        </center></b>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
include("footer.php")
?>