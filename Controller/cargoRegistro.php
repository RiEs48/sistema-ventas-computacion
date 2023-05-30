<?php
include("../View/RegistrarCargo.php");
if(isset($_POST['registrarCargo'])){
    $ca=$_POST['cargo'];
    
    $es="Activo";
    include("../Model/cargoClase.php");
    $car=new Cargo("",$ca);
    $r=$car->grabarCargo();
    if($r){
       
        echo"
        <script >
        alert('REGISTRO EXITOSO');
        location.href='Controller/cargoLista.php';
    </script>";
       
    }else{
        echo"
        <script >
        alert('NO SE REGISTRO ');
        location.href='Controller/cargoLista.php';
    </script>";
      
    }
}
?>
