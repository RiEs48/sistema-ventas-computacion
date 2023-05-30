<?php
include("head.php");
session_start();
if ($_SESSION['nivel'] == 1) {
    include("template.php");
}
if ($_SESSION['nivel'] == 2) {
    include("template2.php");
}

?>
<div class="col-md-1"></div>
<div>
<form method="post" enctype="multipart/form-data">
    <h2>MODIFICAR PROVEEDOR</h2>
    <div class="col-md-12"><br><br>
    <input type="hidden" name="cid" id="cid" value="<?=$r[0];?>">
    <label >EMPRESA</label>
    <input type="text" class="form-control" name="empresa" placeholder="ingrese nombre de empresa" value="<?=$r[1];?>">
    <label >CONTACTO</label>
    <input type="text" class="form-control" name="contacto" placeholder="ingrese nombre de contacto"
    value="<?=$r[2];?>">
    <label >EMAIL</label>
    <input type="email" class="form-control" name="mail" placeholder="ingrese email"
    value="<?=$r[3];?>">
    <label >TELEFONO</label>
    <input type="number" class="form-control" name="telefono" placeholder="ingrese telefono"
    value="<?=$r[4];?>">
    <label >DIRECCION</label>
    <input type="text" class="form-control" name="direccion" placeholder="ingrese direccion"
    value="<?=$r[5];?>">
    <label >LOGO</label>
   <img src="../Controller/imagenesprovedor/<?php echo $r[6];?>" width="45px" height="45px" >
   <input type="file" class="form-control" name="logo" id="logo" value="examinar"><br><br>
   
    <input type="submit" class="form-control" name="act" id="act" value="Actualizar" 
    class="btn btn-primary">
    <a href="../Controller/provedorLista.php" class="btn btn-danger">Cancel</a>
    
</form><br><br>

    </div>

</div>
<?php
include("footer.php");


?>