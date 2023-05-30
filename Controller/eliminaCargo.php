<?php 
$cid= $_GET['cid'];
include("../Model/cargoClase.php");
$car = new Cargo($cid,"");
$r=$car->eliminaCargo();
if ($r) {
    echo"
    <script>
    alert('SE ELIMINO');
    location.href='cargoLista.php';
    </script>";
   
}
else {
    echo"
    <script>
    alert('SE ELIMINO');
    location.href='cargoLista.php';
    </script>";
}



?>