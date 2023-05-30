<?php
include("../Model/empleadoClase.php");
$emp=new Empleado("","","","","","","","","","","");
$r1=$emp->lista();
include("../View/ListaEmpleado.php");

?> 