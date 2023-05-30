<?php
class Venta {
    private $idventa;
    private $idcliente;
    private $idempleado;
    private $fecha;
    
  
    public function __construct($id,$idcli,$idemp,$fe)
    {
      
     $this->setIdventa($id);
     $this->setIdcliente($idcli);
     $this->setIdempleado($idemp);
     $this->setFecha($fe);
    }
    public function grabarVenta()
    {
     //include("conexion.php");
      $db =  new Conexion();
      $sql = $db->query("INSERT INTO venta(id_cliente,id_empleado,fecha) VALUES ('$this->idcliente','$this->idempleado',now())");
  
      return ($sql);
    }
    public function ListarV()
    {
      include("conexion.php");
      $db =  new Conexion();
      $sql = $db->query("SELECT * FROM venta");
  
      return ($sql);
    }
    public function RegistroVenta($idclient)
    {
      include("conexion.php");
      $db =  new Conexion();
      $sql = $db->query("INSERT INTO venta(id_cliente,fecha) VALUES ('$this->idclient','now()')");
  
      return ($sql);
    }
    public function RegistroVenta1()
    {
      include("conexion.php");
      $db =  new Conexion();
      $sql = $db->query("SELECT p.id_productos,pv.empresa,p.nombre_productos,p.descripcion,p.stock,p.costo_venta,p.fecha
      from productos p  inner join proveedores pv on pv.id_proveedores=p.id_proveedores ')");
  
      return ($sql);
    }


    
    public function ListarVenta()
    {
      include("conexion.php");
      $db =  new Conexion();
      $sql = $db->query("SELECT v.id_venta,p.nombreproducto,p.descripcion,p.costoventa,dv.cantidad,dv.costo,v.fecha,cl.razonsocial,e.nombre,e.paterno from venta v 
      inner join empleado e on v.id_empleado=e.id_empleado
      inner join cliente cl on v.id_cliente=cl.id_cliente
      inner join detalle_venta dv on v.id_venta=dv.id_venta
      inner join producto p on dv.id_producto =p.id_producto");
  
      return ($sql);
    }
    public function lista(){
      include("conexion.php");
      $db=new Conexion();
      $sql=$db->query("SELECT e.*,c.*,d.*,v.*,p.* FROM
      detalle_venta d
      INNER JOIN venta v
      ON d.id_venta=v.id_venta
      INNER JOIN producto p
      ON p.id_producto=d.id_producto
      INNER JOIN empleado e 
      ON e.id_empleado=v.id_empleado
      INNER JOIN cliente c 
      ON c.id_cliente=v.id_cliente
      ORDER BY v.fecha ASC");
      return($sql);
  }
    
    public function listaVenta(){
      //include("conexion.php");
      $db=new Conexion();
      $sql=$db->query("SELECT * FROM venta");
      return($sql);
  }
  
  


    public function setIdventa($id)
    {
      $this->idventa = $id;
    }
    public function getId()
    {
      return  $this->idventa;
    }
    public function setIdcliente($idcli)
    {
      $this->idcliente = $idcli;
    }
    public function getIdcliente()
    {
      return  $this->idcliente;
    }
    
    public function setIdempleado($idempl)
    {
      $this->idempleado = $idempl;
    }
    public function getIdempleado()
    {
      return  $this->idempleado;
    }
    public function setFecha($f)
    {
      $this->fecha = $f;
    }
    public function getFecha()
    {
      return  $this->fecha;
    }
    
}









?>