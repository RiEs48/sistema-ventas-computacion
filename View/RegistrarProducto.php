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





                <form class="row g-3" method="POST" enctype="multipart/form-data">
                    <div class="col-4">
                        <label class="form-label">Nombre Producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">PROVEEDOR</label>
                        <select name="prov" id="prov" class=" form-control">
                            <?php

                            while ($reg = mysqli_fetch_array($res)) {
                            ?>
                                <option value=" <?php echo $reg[0]; ?>"> <?php
                                                                            echo $reg['empresa'] . " ";  ?></option>
                            <?php
                            }



                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">PROVEEDOR</label>
                        <select name="prod" id="prod" class=" form-control">
                          <option >Seleccione</option>
                          <option value="1">Procesadores</option>
                          <option value="2">Tarjetas Madre</option>
                          <option value="3">Memorias Ram</option>
                          <option value="4">Disco Duros</option>
                          <option value="5">Impresoras</option>
                          <option value="6">Monitores</option>
                          <option value="7">Teclados</option>
                          <option value="8">Mouses</option>
                          <option value="9">Audifonos</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Descripcion :</label>
                        <input type="text" class="form-control" id="des" name="des">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Costo Compra</label>
                        <input type="number" class="form-control" id="ccom" name="ccom">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Costo Venta</label>
                        <input type="number" class="form-control" id="cven" name="cven">
                    </div>

                    <div class="col-4">
                        <label class="form-label">STOCK</label>
                        <input type="text" class="form-control" id="stk" placeholder="1234 Main St" name="stk">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                    <div class="col-md-6">
                        <label>Imagen Producto</label>
                        <input type="file" class="form-control" name="logo" id="logo" value="examinar">
                    </div>

                    <div class="col-md-12">
                        <br>
                        <button type="submit" class="form-control" name="registrarPro" class="btn btn-primary">Registrar</button>
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