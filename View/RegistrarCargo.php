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
                        REGISTRAR CARGOs
                    </div>

                    <div class="card-body">

                        <form class="row g-3" method="post">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Nombre del Cargo</label>
                                <input type="text" class="form-control" id="cargo" name="cargo">
                            </div>

                            <div class="text-center">
                                <br>
                                <input type="submit" class="btn btn-primary" name="registrarCargo" id="registrarCargo"></input>
                                <a href="../Controller/cargoLista.php" class="btn btn-danger">Cancelar</a>
                            </div>
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

<!-- <div class="container col-xl-10 ">
    <div class="card  col-lg-4">
        <div class="card-body">
            <h5 class="card-title">Registrar Cargo</h5>

            <form class="row g-3" method="post">
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Nombre del Cargo</label>
                    <input type="text" class="form-control" id="cargo" name="cargo">
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-primary" name="registrarCargo" id="registrarCargo">Registrar</input>
                    <a href="../Controller/ListarCargo.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>

        </div>
    </div>