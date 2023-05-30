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
<div class="col-md-6"></div>
<div class="container">
<form method="post" enctype="multipart/form-data" >
    <h2>REGISTRAR PROVEEDOR</h2>
    <div class="col-md-6"><br><br>
    <label >EMPRESA</label>
    <input type="text" class="form-control" name="empresa" placeholder="ingrese nombre de empresa">
    <label >CONTACTO</label>
    <input type="text" class="form-control" name="contacto" placeholder="ingrese nombre de contacto">
    <label >EMAIL</label>
    <input type="email" class="form-control" name="mail" placeholder="ingrese correo electronico" required>
    <label >TELEFONO</label>
    <input type="number" class="form-control" name="telefono" placeholder="ingrese telefono">
    <label >DIRECCION</label>
    <input type="text" class="form-control" name="direccion" placeholder="ingrese direccion">
    <label >LOGO</label>
    <input type="file" class="form-control" name="logo" id="logo" value="examinar" ><br><br><br>
   
    <input type="submit" class="form-control" name="registrarProvedor" id="registrarProvedor" value="Registrar Provedor" 
    class="btn btn-primary">
    
</form><br><br>
<div class="form-group">
<label for=""><a href="../../index.php" class="btn btn-warning"><i class="glyphicon glyphicon-home">Volver Inicio</i></a></label>
<a href="../Controller/provedorLista.php" class="btn btn-danger">Cancelar</a>

</div>

</div>

</div>
<?php
include("footer.php");

?>