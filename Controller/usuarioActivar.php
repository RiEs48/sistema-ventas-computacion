<?php
$cod=$_GET['cid'];
include("../Model/usuarioClase.php");
$cargo = new Usuario($cod,"","","","","","");
$res = $cargo->activarUsuario();
if($res){
    ?>
    <script>
        alert('Se activo el usuario');
        location.href='usuarioLista.php';
    </script>
    <?php
}else{
    ?>
    <script>
        alert('No se activo');
        location.href='usuarioListaINAC.php';
    </script>
    <?php
}
?>
