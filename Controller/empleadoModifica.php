<?php
$cod=$_GET['cid'];
include("../Model/empleadoClase.php");
$emp=new Empleado($cod,"","","","","","","","","","");
include("../Model/cargoClase.php");
$cargo = new Cargo("","");
$res =$cargo->Lista();
$r1=$emp->listarEmpleado2();

$r = mysqli_fetch_array($r1);
include("../View/modificarEmpleado.php");

if(isset($_POST['act'])){
  
    $ca=$_POST['cargo'];
    $ci=$_POST['cedula'];
    $no=$_POST['nombre'];
    $pa=$_POST['paterno'];
    $ma=$_POST['materno'];
    $di=$_POST['direccion'];
    $te=$_POST['telefono'];
    $fe=$_POST['fechana'];
    $ge=$_POST['genero'];
    $in=$_POST['intereses'];
   $int="";
   foreach ($in as $i => $valor) {
    $int = $int.$in[$i]." ";
   }
  
   $emp = new Empleado($cod,$ca,$ci,$no,$pa,$ma,$di,$te,$fe,$ge,$int);
 
   $r=$emp->ediEmpleado();

   if($r){
      
       echo"
       <script >
       alert('REGISTRO EXITOSO');
       location.href='empleadoLista.php';
   </script>";
   }else{
       echo"
       <script >
       alert('REGISTRO EXITOSO');
       location.href='empleadoLista.php';
   </script>";
   }

}
?>
