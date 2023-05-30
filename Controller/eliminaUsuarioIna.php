<?php 
$cid= $_GET['cid'];
include("../Model/usuarioClase.php");
$emp= new Usuario($cid,"","","","","");
$r=$emp->eliminar();
if ($r) {
    echo"
    <script>
    alert('SE ELIMINO CORRECTAMENTE ');
    location.href='usuarioListaINAC.php';
    </script>";
   
}
else {
    echo"
    <script>
    alert('NO SE ELIMINO ');
    location.href='usuarioLista.php';
    </script>";
}



?>