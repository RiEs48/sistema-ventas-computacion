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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Registrar Usuario
                    </div>

                    <div class="card-body">

                        <form class="row g-3" method="POST">

                            <div class="col-md-6">
                                <label class="form-label">Empleado</label>
                                <select name="emp" id="emp" class=" form-control">
                                    <?php

                                    while ($reg = mysqli_fetch_array($res)) {
                                    ?>
                                        <option value=" <?php echo $reg['id_empleado']; ?>"> <?php
                                                                                    echo $reg['nombre'] . " ";  ?> <?php
                                                            echo $reg['paterno'] . " ";  ?></option>
                                    <?php
                                    }



                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">NIVEL</label>
                                <select name="nivel" id="nivel" class=" form-control">
                                    <option value="1">Administrador</option>
                                    <option value="2">Operador</option>
                                    <option value="3">Tecnico</option>
                                </select>
                            </div>
                            <div class="col-8">
                                <label class="form-label">USUARIO</label>
                                <input type="text" class="form-control" id="usr" name="usr" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="psw1" name="psw1">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Repita Contraseña:</label>
                                <input type="password" class="form-control" id="psw2" name="psw2">
                            </div>


                            <br><br><br><br>
                            <input type="submit" name="registrarUsuario" value="Registrar" class="btn btn-primary">
                            <br><br>
                            <a href="../Controller/usuarioLista.php" class="btn btn-danger">Cancelar</a>
                        </form>
                    </div>

                </div>

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