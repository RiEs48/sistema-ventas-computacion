<?php
session_start();
   
    $nit=$_POST['nit'];
    
    //echo $nit;exit;
    //$con_cliente="SELECT * FROM cliente WHERE nit_ci='$nit'";
    
    include("../Model/clienteClase.php");
    $cliente=new Cliente("","","","");
    $rc=$cliente->listaNit($nit);
    $con_cliente=$rc;
    $res_cli=$con_cliente;
    $fil=mysqli_num_rows($res_cli);
    $dato_cli=mysqli_fetch_array($res_cli);
    //fin
    //insercion de Nro de venta
    $cl=$dato_cli['id_cliente'];
    echo $cl;
    //fin cliente
    //insercion de Nro de venta
    //$conve="INSERT INTO venta (id_empleado,id_cliente,fecha_venta) values('$emp','$cl',now())";
    
    include("../Model/ventaClase.php");
    $venta=new Venta("",$emp,$cl,"");
    $conve=$venta->grabarVenta();
    //mysqli_query($conexion,$conve);
    //fin venta 
    //$con_venta="SELECT * FROM venta";
    $v=new Venta("","","","");
    $con_venta=$v->ListaVenta();
   
    $res_venta=$con_venta;
    
    while($dato_venta=mysqli_fetch_array($res_venta))
  
        $ve=$dato_venta['0'];
    echo "empl".$emp;
    echo "cliente".$cl;
    echo "venta".$ve;
    
    include("../Model/productoClase.php");
    
    $prd=new Producto("","","","","","","","","","");
    $consulta=$prd->lista();
    //$consulta="SELECT * FROM producto";
    //$resultado=mysqli_query($conexion,$consulta);
    $resultado=$consulta;
    //$con=0;
    include("../Model/detalle_ventaClase.php");
    
    while($dato=mysqli_fetch_array($resultado)){
        foreach($_SESSION["carrito_ventas1"] as $c){
            if($dato['id_producto']==$c['id_producto']){
                $id_producto=$dato['id_producto'];
                $cantidad=$c['cantidad'];
                $costo_unitario=$dato['costoventa'];
                $total=$dato['costoventa']*$c['cantidad'].'<br>';
                //descontamos los productos de nuestro stock
                $prr=new Producto("","","","","","","","","","");
                $des=$prr->actualizarD($cantidad,$id_producto);
                //$des="UPDATE producto set stock=stock-'$cantidad' where id_producto='$id_producto'";
                //mysqli_query($conexion,$des);
                
                //$detalle_venta=new DetalleV("","","","");
                $detalle_venta=new DetalleV($cantidad,$total,$id_producto,$ve);
                $con_detven=$detalle_venta->grabarDetalle();
                
                //$con_detven=$detalle_venta->grabarDetalle_Venta($ve,$id_producto,$cantidad,$total);
                //$con_detven="INSERT INTO detalle_venta (id_venta,id_producto,cantidad,costo)
                //VALUES('$ve','$id_producto','$cantidad','$total')";
                //    $SE=mysqli_query($conexion,$con_detven);
                $SE=$con_detven;
//                var_dump('1');
// exit;
                //$con=$con+1;
            }
        }
    }
    //echo "contador ".$con;exit;
    
    unset($_SESSION["carrito_ventas1"]);
    print"<script>alert('Agregado exitosamente');window.location='ventaLista.php';</script>";


?>