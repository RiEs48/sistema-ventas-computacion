<?php 
class templatecontroller{

public function template(){

    include "View/login.php";

    if(isset($_POST['ingresar'])){
        $usr=$_POST['usr'];
        $pwd=$_POST['pwd'];
        $pswd=md5($pwd);
        include("Model/usuarioClase.php");
        $usr=new Usuario("",$usr,$pswd,"","","");
        $rs=$usr->verificar();
        if(mysqli_num_rows($rs)!=0){
            session_start();
            $_SESSION['ingreso']='si';
            if($r=mysqli_fetch_array($rs)){
    
                $_SESSION['id']=$r['id_empleado'];
                $_SESSION['nombre']=$r['usuario'];
                $_SESSION['nivel']=$r['nivel'];           
            }
            header("location:View/admin.php");
        } else{
            header("location:Controller/template.php?error=1");
        }
    }
}
}





?>