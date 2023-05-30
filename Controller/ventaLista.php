<?php 

include("../Model/ventaClase.php");
$ven = new Venta("","","","");
$r1=$ven ->lista();
include ("../View/ListaVenta.php");
?>