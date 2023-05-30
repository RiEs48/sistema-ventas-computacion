<?php
session_start();
if (!empty($_POST)) {
    if(isset($_POST["id_producto"]) && isset($_POST["cantidad"])){
        //si es el primer producto simplemente lo agregamos
        if (empty($_SESSION["carrito_ventas1"])) {
            $_SESSION["carrito_ventas1"]=array(array("id_producto"=>$_POST["id_producto"],"cantidad"=>$_POST["cantidad"]));
        }else{
            //a partir del segundo producto:
            $carro=$_SESSION["carrito_ventas1"];
            $repetido=false;
            //Recorremos el carrito en busqueda de producto repetido
            foreach($carro as $c){
                //si el producto esta repetido rompemos el ciclo
                if($c["id_producto"]==$_POST["id_producto"]){
                    $repetido=true;
                    break;
                }
            }
            //si el producto es repetido no hacemos nada, simplemente redirigimos
            if($repetido){
                print "<script>alert('El Producto ya esta Añadido!');</script>";
            }else{
    //si el producto no esta repetido entonces lo agrgamos a la variable cart y despues asignamos la variable
    //cart a la variable de sesion
                array_push($carro, array("id_producto"=>$_POST["id_producto"],"cantidad"=>$_POST["cantidad"]));
                $_SESSION["carrito_ventas1"]=$carro;
            }
        }
        print"<script>window.location='../Controller/ventaRegistro.php';</script>";
    }
}
?>