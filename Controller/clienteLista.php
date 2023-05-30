<?php
include("../Model/clienteClase.php");
$cli=new Cliente("","","","");
$r1=$cli-> listarCliente();
include("../View/ListaCliente.php");

?> 
