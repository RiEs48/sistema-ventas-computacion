<?php
include("../Model/productoClase.php");
$emp=new Producto("","","","","","","","","","");
$r1=$emp->listaProducto();
include("../View/ListaProductos.php");

?> 