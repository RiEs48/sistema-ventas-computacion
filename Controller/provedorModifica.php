<?php
$cid = $_GET['cid'];
include("../Model/provedorClase.php");
$pro = new Provedor($cid,"","","","","","");
$r1 = $pro->listarProvedor();
$r = mysqli_fetch_array($r1);
include("../View/modificarProvedor.php");
if (isset($_POST['act'])) {
    $em = $_POST['empresa'];
    $co = $_POST['contacto'];
    $ea = $_POST['mail'];
    $te = $_POST['telefono'];
    $di = $_POST['direccion'];
    $imgFile = $_FILES['logo']['name'];
    
    if (empty($imgFile)) {
        $pro = new Provedor($cid, $em, $co, $ea, $te, $di, "");
        $r = $pro->ediProvedorno();
        # code...
    } else {
        $tmp_dir = $_FILES['logo']['tmp_name'];
        $imgSize = $_FILES['logo']['size'];
       // $upload_dir = '/Controller/imagenesprovedor';
       // move_uploaded_file($tmp_dir, $upload_dir, $imgFile);
       @copy($tmp_dir, 'imagenesprovedor/'.$imgFile) ;
       $pro =  new Provedor($cid, $em, $co, $ea, $te, $di, $imgFile);
        $r = $pro->ediProvedor();
    }
    if ($r) {
?>
        <script>
            alert('REGISTRO MODIFICADO CORRECTAMENTE');
            location.href = '../Controller/provedorLista.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('NO SE MODIFICO ');
            location.href = '../Controller/provedorLista.php';
        </script>
<?php
    }
}

?>