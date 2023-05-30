<?php
class DetalleV{
    private $idVenta;
    private $idProducto;
    private $cantidad;
    private $costo;
    public function __construct($cant,$cos,$idprod,$idvent){
        $this->setIdVenta($idvent);
        $this->setIdProducto($idprod);
        $this->setCantidad($cant);
        $this->setCosto($cos);
    }
    public function grabarDetalle_Venta($cant,$cost,$prod,$ve){
        //include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("INSERT INTO detalle_venta (cantidad,costo,id_producto,id_venta)
        values('$cant','$cost','$prod','$ve')");
        return($sql);
    }
    public function grabarDetalle(){
        //include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("INSERT INTO detalle_venta (cantidad,costo,id_producto,id_venta)
        values('$this->cantidad','$this->costo','$this->idProducto','$this->idVenta')");
        return($sql);
    }
    public function listaVenta(){
        //include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM venta");
        return($sql);
    }

    public function setIdVenta($idVent){
        $this->idVenta=$idVent;
    }
    public function getIdVenta(){
        return $this->idVenta;
    }
    public function setIdProducto($idProd){
        $this->idProducto=$idProd;
    }
    public function getIdProducto(){
        return $this->idProducto;
    }
    public function setCantidad($cant){
        $this->cantidad=$cant;
    }
    public function getCantidad(){
        return $this->cantidad;
    }
    /*public function setIdCategoria($idCat){
        $this->idCategoria=$idCat;
    }
    public function getCategoria(){
        return $this->idCategoria;
    }*/
    public function setCosto($cost){
        $this->costo=$cost;
    }
    public function getCosto(){
        return $this->costo;
    }
}
?>