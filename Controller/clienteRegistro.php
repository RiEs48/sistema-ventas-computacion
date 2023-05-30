<?php
include("../View/RegistrarCliente.php");
if(isset($_POST['registrarCliente'])){
    
    $rs=$_POST['razon'];
    $ni=$_POST['nit'];

    include("../Model/clienteClase.php");
    $cli=new Cliente("",$rs,$ni);
    $r=$cli->grabarCliente();
    if($r){
        ?>
        <script type="text/javascript">
            alert("Se registro correctamente");
        </script>
        <?php
    }else{
        ?>
        <script type="text/javascript">
            alert("NO se registro");
        </script>
        <?php
    }
}
?>
