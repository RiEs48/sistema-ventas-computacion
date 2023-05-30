<?php
include("../Model/usuarioClase.php");
$emp=new Usuario("","","","","","","");
$r1=$emp->listarUsuario();
include("../View/ListaUsuario.php");

?> 