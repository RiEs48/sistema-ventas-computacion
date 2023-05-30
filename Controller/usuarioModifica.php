<?php
$cod=$_GET['cid'];
include("../Model/usuarioClase.php");
$cargo = new Usuario($cod,"","","","","");
$res = $cargo->listaUsuarioId();

$r = mysqli_fetch_array($res);

include("../View/modificaUsuarios.php");
if(isset($_POST['act'])){  
    $us=$_POST['usuario'];
    $pas=$_POST['pasword'];
    $ni=$_POST['nivel'];
    $pw=md5($pas);
   $usua = new Usuario($cod,$us,$pas,$ni," "," ");
 
   $r=$usua->editarUsuario();

   if($r){
      
       echo"
       <script >
       alert('REGISTRO EXITOSO');
       location.href='usuarioLista.php';
   </script>";
   }else{
       echo"
       <script >
       alert('REGISTRO EXITOSO');
       location.href='usuarioLista.php';
   </script>";
   }

}
?>
