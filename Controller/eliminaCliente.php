<?php 
$cid= $_GET['cid'];
include("../Model/clienteClase.php");
$cli = new Cliente($cid,"","");
$r=$cli->eliminarCliente();
if ($r) {
    echo"
    <script>
    alert('SE ELIMINO');
    location.href='clienteLista.php';
    </script>";
   
}
else {
    echo"
    <script>
    alert('SE ELIMINO');
    location.href='clienteLista.php';
    </script>";
}



?>