<?php 
$cid= $_GET['cid'];
include("../Model/provedorClase.php");
$pro = new Provedor($cid,"","","","","","");
$r=$pro->eliProvedor();
if ($r) {
    echo"
    <script>
    alert('SE ELIMINO');
    location.href='provedorLista.php';
    </script>";
   
}
else {
    echo"
    <script>
    alert('SE ELIMINO');
    location.href='provedorLista.php';
    </script>";
}



?>