<?php
$cod=$_GET['cid'];
include("../Model/productoClase.php");
$prod=new Producto($cod,"","","","","","","","");
$r1=$prod->listaProductoID();
$r = mysqli_fetch_array($r1);

include("../View/modificarProducto.php");

if(isset($_POST['act'])){
  
    
    $nom=$_POST['nom'];
    $des=$_POST['des'];
    $cc=$_POST['ccom'];
    $cv=$_POST['cven'];
    $stock=$_POST['stk'];
    $fe=$_POST['fecha'];
    $img=  $_FILES['logo']['name'];
  
    if (empty($img)) {
        $pro = new Producto("$cod"," ","$nom","$des","$cc","$cv","$stock","$fe"," ");
        $r = $pro->ediProductono();
        # code...
    }
    else {
        $tmp_dir = $_FILES['logo']['tmp_name'];
        $imgSize = $_FILES['logo']['size'];
       // $upload_dir = '/Controller/imagenesprovedor';
       // move_uploaded_file($tmp_dir, $upload_dir, $imgFile);
       @copy($tmp_dir, 'imgproductos/'.$img) ;
       $pro =  new Producto("$cod"," ","$nom","$des","$cc","$cv","$stock","$fe","$img");
        $r = $pro->ediProducto();
    }
     if($r){
      
       echo"
       <script >
       alert('MODIFICACION EXITOSA');
       location.href='productoLista.php';
   </script>";
   }else{
       echo"
       <script >
       alert('NO SE MODIFICCO ');
       location.href='productoLista.php';
   </script>";
   }

}
?>
