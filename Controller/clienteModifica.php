<?php
$cod=$_GET['cid'];
include("../Model/clienteClase.php");
$cli=new Cliente($cod,"","");
$r1=$cli->listarClienteId();
$r = mysqli_fetch_array($r1);

include("../View/modificaCliente.php");


if(isset($_POST['Modificar'])){
    $c=$_POST['cliente'];
    $n=$_POST['nit'];
  
    $cli = new Cliente($cod,$c,$n);
    $r=$cli->editarCliente();
   
    if($r){
        echo"
        <script >
        alert('Si se modifico');
        location.href='clienteLista.php';
    </script>";
    }
    else{
        echo"
        <script >
        alert('no se modifico');
        location.href='clienteLista.php';
    </script>";
    }
} 

?>
