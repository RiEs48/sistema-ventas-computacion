<?php
session_start();
include("head.php");
if ($_SESSION['nivel'] == 1) {
    include("template.php");
}
if ($_SESSION['nivel'] == 2) {
    include("template2.php");
}

?>
<div class="card-body">
<div class="container-fluid">
            <h2 class="text-center display-4">BUSCAR EMPLEADOS</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="" method="GET">
                        <div class="input-group">
                            <input type="text" name="empleado" class="form-control form-control-lg" placeholder="Type your keywords here">
                            <div class="input-group-append">
                                <button type="submit" name="buscarEmpleado" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     
             
         
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
