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
                <form class="row g-3" method="POST">

                    <h1>ACTUALIZAR USUARIO</h1>
                    <div class="form-group">
                        <input type="hidden" name="cid" id="cid" value="<?= $r[0]; ?>">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Usuario :</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" value='<?= ($r[1]); ?>'>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="pasword" name="pasword" value='<?= ($r[2]); ?>'>
                    </div>
                    <div class="col-md-6">
                        <label>Nivel:</label>
                        <select id="nivel" name="nivel" class="form-control">
                            <option value="1">Administrador</option>
                            <option value="2">Vendedor</option>
                        </select><br>
                    </div>


                    <div class="form-group">
                        <br>
                        <input type="submit" name="act" id="act" class="btn btn-success">Actualizar
                        <a href="../Controller/usuarioLista.php" class="btn btn-danger">Cancelar</a>
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