<?php 
include("../Model/cargoClase.php");
$cargo = new Cargo("","");
$res = $cargo ->Lista();

include("../View/RegistrarEmpleado.php");

if (isset($_POST['registrarEmp'])) 
{
    $id=$_POST['cargo'];
    $d1=$_POST['cedula'];
    $d2=$_POST['nombre'];
    $d3=$_POST['paterno'];
    $d4=$_POST['materno'];
    $d5=$_POST['direccion'];
    $d6=$_POST['telefono'];
    $d7=$_POST['fechana'];
    $d8=$_POST['genero'];
    $in=$_POST['intereses'];
    $int="";

    foreach ($in as $i => $valor) {
        $int=$int.$in[$i]."  ";
        # code...
    }
    include("../Model/empleadoClase.php");
    $emp = new Empleado("","$id","$d1","$d2","$d3","$d4","$d5","$d6","$d7","$d8","$int");
    $r=$emp->GrabarEmpleado();
 
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