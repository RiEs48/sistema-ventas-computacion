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
                        REGISTRAR CLIENTE
                    </div>

                    <div class="card-body">

                        <form class="row g-3" method="POST">
                            <div class="col-8">
                                <label for="inputNanme4" class="form-label">RAZON SOCIAL</label>
                                <input type="text" class="form-control" id="razon" name="razon">
                            </div>
                            <div class="col-8">
                                <label for="inputNanme4" class="form-label">Nit Ci</label>
                                <input type="text" class="form-control" id="nit" name="nit">
                            </div>

                         
                            <div class="card-footer">
                           
                                <br>
                                <input type="submit" class="btn btn-primary" name="registrarCliente" id="registrarCliente">
                                <a href="../Controller/clienteLista.php" class="btn btn-danger">Cancelar</a>
                          
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