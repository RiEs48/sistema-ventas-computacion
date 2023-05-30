<?php 
$cid= $_GET['cid'];
include("../Model/empleadoClase.php");
$emp= new Empleado($cid,"","","","","","","","","","");
$r=$emp->eliEmpleado();
if ($r) {
    echo"
    <script>
    alert('SE ELIMINO');
    location.href='empleadoLista.php';
    </script>";
   
}
else {
    echo"
    <script>
    alert('SE ELIMINO');
    location.href='empleadoLista.php';
    </script>";
}



?>