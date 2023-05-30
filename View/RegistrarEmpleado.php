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
                    <div class="col-6">
                        <label class="form-label">Nombre Empleado</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Cargo</label>
                        <select name="cargo" id="cargo" class=" form-control">
                            <?php

                            while ($reg = mysqli_fetch_array($res)) {
                            ?>
                                <option value=" <?php echo $reg[0]; ?>"> <?php
                                 echo $reg['cargo'] . " ";  ?></option>
                            <?php
                            }



                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Cedula :</label>
                        <input type="text" class="form-control" id="cedula" name="cedula">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Ap. Paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Ap. Materno</label>
                        <input type="text" class="form-control" id="materno" name="materno">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion" placeholder="1234 Main St" name="direccion">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Fecha Nacimiento</label>
                        <input type="date" class="form-control" id="fechana" name="fechana">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" id="nombre">Genero</label>&nbsp;&nbsp;
                        <input type="radio" id="genero" name="genero" value="F">Femenino &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="genero" name="genero" value="M">Masculino<br><br>

                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Intereses</label>
                        <input type="checkbox" id="intereses[]" name="intereses[]" value="
                                Estudia">Estudia &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="intereses[]" name="intereses[]" value="
                                Trabaja">Trabaja &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="intereses[]" name="intereses[]" value="
                                Deporte">Deporte
                    </div>
                  
                        <br>
                        <button type="submit" class="form-control" name="registrarEmp"  class="btn btn-primary">Registrar</button>
                        <a href="../Controller/empleadoLista.php" class="btn btn-danger">Cancelar</a>
                  
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