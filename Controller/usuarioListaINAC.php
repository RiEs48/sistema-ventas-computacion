<?php
include("../Model/usuarioClase.php");
$emp=new Usuario("","","","","","","");
$r1=$emp->listarUsuarioIn();
include("../View/ListaUsuarioIna.php");

?> 