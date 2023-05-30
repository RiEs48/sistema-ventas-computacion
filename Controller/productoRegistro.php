<?php 
include("../Model/provedorClase.php");
//$cargo = new Cargo("","");
$provedor = new Provedor("","","","","","","","","");
//$res = $cargo ->Lista();
$res = $provedor ->lista();

include("../View/RegistrarProducto.php");

if (isset($_POST['registrarPro'])) 
{
    $id=$_POST['prov'];
    $nom=$_POST['nombre'];
    $des=$_POST['des'];
    $costc=$_POST['ccom'];
    $cosv=$_POST['cven'];
    $stock=$_POST['stk'];
   
    $fecha=$_POST['fecha'];
    $l=$_FILES['logo']['name'];

    $lo=$_FILES['logo']['tmp_name'];
    $log=$_FILES['logo']['size'];
    $categoria=$_POST['prod'];
    
    include("../Model/productoClase.php");
    $emp = new Producto("","$id","$nom","$des","$costc","$cosv","$stock","$fecha","$l","$categoria");
    $r=$emp->GrabarProducto();

    if($r){
        @copy($lo,'imgproductos/'.$l);
        ?>
       
        <script >
        alert('REGISTRO EXITOSO');
        location.href='productoLista.php';
    </script>
    <?php
    }else{
        echo"
        <script >
        alert('REGISTRO EXITOSO');
        location.href='empleadoLista.php';
    </script>";
    }
}


?>