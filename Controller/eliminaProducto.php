<?php 
$cid= $_GET['cid'];
include("../Model/productoClase.php");
$pro= new Producto($cid,"","","","","","","","","");
$r=$pro-> eliProducto();
if ($r) {
    echo"
    <script>
    alert('SE ELIMINO CORRECTAMENTE ');
    location.href='productoLista.php';
    </script>";
   
}
else {
    echo"
    <script>
    alert('SE ELIMINO');
    location.href='productoLista.php';
    </script>";
}



?>