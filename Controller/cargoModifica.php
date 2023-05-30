<?php
$cod=$_GET['cid'];
include("../Model/cargoClase.php");
$car=new Cargo($cod,"");
$r1=$car->listarCargo();
$r = mysqli_fetch_array($r1);
include("../View/modificaCargo.php");

if(isset($_POST['Modificar'])){
    $c=$_POST['cargo'];
 $car = new Cargo($cod,$c);
    $r=$car->editarCargo();
   
    if($r){
        echo"
        <script >
        alert('Si se modifico');
        location.href='../Controller/cargoLista.php';
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
