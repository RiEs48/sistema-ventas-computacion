<?php
include("../Model/empleadoClase.php");
$em = new Empleado("", "", "", "", "", "", "", "", "", "", "");
$res = $em->Lista();

include("../View/RegistrarUsuario.php");

if (isset($_POST['registrarUsuario'])) 
{
    $idem = $_POST['emp'];
    $us = $_POST['usr'];
    $ps1 = $_POST['psw1'];
    $ps2 = $_POST['psw2'];
    $d8 = $_POST['nivel'];
    $es = 'Activo';

    if(strcmp($ps1,$ps2)==0){
        include("../Model/usuarioClase.php");
        $uc=new Usuario("","","","","","$idem");
        $rc=$uc->comprovar();
        if(mysqli_num_rows($rc)!=0){
            echo "<script>
                alert('El empleado ya tiene creado un usuario');
                location.href='usuarioLista.php';
                </script>";
        }else{
            $pw=md5($ps1);
            //echo $id," ",$usu," ",$niv," ",$est," ",$pw;exit;
            //include("../../modelo/usuarioClase.php");
            $usu=new Usuario(" ","$us","$pw","$d8","$es","$idem");
            $r=$usu->grabarUsuario();
            if($r){
                ?>
                <script type="text/javascript">
                    alert("Se Registro");
                    location.href='usuarioLista.php';
                </script>
                <?php
            }else{
                ?>
                <script type="text/javascript">
                    alert("No se registro");
                </script>
                <?php
            }
        }
    }else{
        echo "<script>
                alert('Contraseñas diferentes, Error');
                location.href='usuarioRegistro.php';
            </script>";
    }    
}

?>