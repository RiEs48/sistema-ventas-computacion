<?php 
$cid= $_GET['cid'];
include("../Model/usuarioClase.php");
$emp= new Usuario($cid,"","","","","");
$r=$emp->eliminarUsuario();
if ($r) {
    echo"
    <script>
    alert('SE ELIMINO CORRECTAMENTE ');
    location.href='usuarioLista.php';
    </script>";
   
}
else {
    echo"
    <script>
    alert('SE ELIMINO');
    location.href='usuarioLista.php';
    </script>";
}



?>