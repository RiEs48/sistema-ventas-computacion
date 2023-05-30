<?php 
include("../View/registroProvedor.php");
if (isset($_POST['registrarProvedor'])) 
{
    $em=$_POST['empresa'];
    $co=$_POST['contacto'];
    $ea=$_POST['mail'];
    $te=$_POST['telefono'];
    $di=$_POST['direccion'];
    $l=$_FILES['logo']['name'];

    $lo=$_FILES['logo']['tmp_name'];
    $log=$_FILES['logo']['size'];
    include("../Model/provedorClase.php");
    $pro = new Provedor("",$em,$co,$ea,$te,$di,$l);
    $r=$pro->grabarProvedor();
    if ($r) 
    {
        @copy($lo,'imagenesprovedor/'.$l);
        ?>
        <script>
            alert('REGISTRO  AGREGADO CORRECTAMENTE');
            location.href='../Controller/provedorLista.php';
        </script>
      <?php
    }
    else{
        ?>
        <script>
            alert('NO  AGREGADO!!!');
        </script>
        <?php
    }
}


?>