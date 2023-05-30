<?php 

include("../Model/provedorClase.php");
$pro = new Provedor("","","","","","","");
$r1=$pro -> lista();
include ("../View/ListaProvedor.php");
?>