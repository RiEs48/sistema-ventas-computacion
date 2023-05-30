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
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">





                <form class="row g-3" method="POST" enctype="multipart/form-data" >

                    <h1>ACTUALIZAR PRODUCTO</h1>
                    <div class="form-group">
                        <input type="hidden" name="cid" id="cid" value="<?= $r[0]; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nombre Producto :</label>
                        <input type="text" class="form-control" id="nom" name="nom" value='<?= ($r[2]); ?>'>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="des" name="des" value='<?= ($r[3]); ?>'>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Costo Compra</label>
                        <input type="text" class="form-control" id="ccom" name="ccom" value='<?= ($r[4]); ?>'>
                    </div>

                    <div class="col-6">
                        <label class="form-label">Costo Venta</label>
                        <input type="text" class="form-control" id="cven" placeholder="1234 Main St" name="cven" value='<?= ($r[5]); ?>'>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stk" name="stk" value='<?= ($r[6]); ?>'>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Fecha </label>
                        <input type="date" class="form-control" id="fecha" name="fecha" value='<?= ($r[7]); ?>'>
                    </div>
                    <label>IMAGE PRODUCTO </label>
                    <img src="../Controller/imgproductos/<?php echo $r[8]; ?>" width="45px" height="45px">
                    <input type="file" class="form-control" name="logo" id="logo" value="examinar"><br><br>


                    <div class="form-group">
                        <br>
                        <input type="submit" name="act" id="act" class="btn btn-success">Actualizar
                        <a href="../Controller/empleadoLista.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>




            </div>
            <!-- /.col-md-6 -->

            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php

include("footer.php");

?>