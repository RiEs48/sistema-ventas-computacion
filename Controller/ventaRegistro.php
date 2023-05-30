<?php 
include ('../Model/conexion.php');
//include("../Model/productoClase.php");
//$emp=new Producto("","","","","","","","","");
//$r1=$emp->listaProducto();

$con= new Conexion();
    $consulta = "SELECT p.id_producto,pv.empresa,p.nombreproducto,p.descripcion,p.stock,p.costoventa,p.fecha
    from producto p  inner join proveedor pv on pv.id_proveedor=p.id_proveedor";
 $res = mysqli_query($con,$consulta);
 
include("../View/RegistrarVenta.php");

//$consulta ="SELECT e.*,c.cargo from empleado e INNER JOIN  cargo c on c.id_cargo=e.id_cargo
//order by e.nombre asc";

//$resultado=mysqli_query($con,$consulta);






?>