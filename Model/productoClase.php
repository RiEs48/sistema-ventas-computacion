<?php
class Producto
{
  private $id;
  private $idpro;
  private $nombre;
  private $descripcion;
  private $costoco;
  private $costoven;
  private $stock;
  private $fecha;
  private $Imagen;
  private $categoria;


  function __construct($i, $idp, $nom, $desc, $ccom, $cven, $stk, $fec,$im,$cat)
  {
    $this->setId($i);
    $this->setIdPro($idp);
    $this->setNombre($nom);
    $this->setDescripcion($desc);
    $this->setCostoco($ccom);
    $this->setCostoven($cven);
    $this->setStock($stk);
    $this->setFecha($fec);
    $this->setImagen($im);
    $this->setCategoria($cat);
  }
  public function GrabarProducto()
  {

    $db = new Conexion();
    $sql = $db->query("INSERT INTO producto (id_producto,id_proveedor,nombreproducto,descripcion,costocompra,costoventa,
     stock,fecha,imagen,categoria) VALUES ('$this->id','$this->idpro','$this->nombre',
     '$this->descripcion','$this->costoco','$this->costoven','$this->stock','$this->fecha','$this->Imagen','$this->categoria')");

    return ($sql);
  }
  public function listaProductoc()
  {
    include("conexion.php");
    $db = new Conexion();
    $sql = $db->query("SELECT * from producto");
    return $sql;
  }
  public function lista()
  {
    
    $db = new Conexion();
    $sql = $db->query("SELECT * from producto");
    return $sql;
  }

  public function listaProducto()
  {
    include("conexion.php");
    $db = new Conexion();
    $sql = $db->query("SELECT p.id_producto,p.nombreproducto,p.descripcion,p.costocompra,p.costoventa,p.stock,p.fecha,p.imagen,p.categoria,prov.empresa FROM producto p
    INNER JOIN proveedor prov ON prov.id_proveedor=p.id_proveedor");
    return $sql;
  }
  
  public function listaProductoID()
  {
    include("conexion.php");
    $db = new Conexion();
 
      $sql = $db->query("SELECT * from producto where id_producto= '$this->id'"); 
      
    return ($sql);
    
  }
  public function listaProductoID2()
  {
   
    $db = new Conexion();
 
      $sql = $db->query("SELECT * from producto where id_producto= '$this->id'"); 
      
    return ($sql);
    
  }
  public function listaProductocod($cod)
  {
    include("conexion.php");
    $db = new Conexion();
 
      $sql = $db->query("SELECT * from producto where categoria= '$cod'"); 
      
    return ($sql);
    
  }
  public function eliProducto()
  {
    include("conexion.php");
    $db = new Conexion();
    $sql = $db->query("DELETE FROM producto where id_producto=$this->id");
    return $sql;
  }
  public function ListaEm()
  {
    
    $db =  new Conexion();
    $sql = $db->query("SELECT * FROM empleado order by empleado asc");

    return ($sql);
  }
  public function listarEmpleado()
  {

    $db = new Conexion();
    $sql = $db->query("SELECT e.*,c.cargo from empleado e INNER JOIN  cargo c on c.id_cargo=e.id_cargo
    where id_empleado='$this->id'");
    return $sql;
  }
  public function ediProducto()
  {
    
    $db = new Conexion();
    $sql = $db->query("UPDATE producto SET nombreproducto='$this->nombre',
    descripcion='$this->descripcion',costocompra='$this->costoco',costoventa='$this->costoven',stock='$this->stock',
    fecha='$this->fecha',imagen='$this->Imagen' where id_producto='$this->id'");
    return $sql;
  }
  public function actualizarD($cantidad,$id_prod){
    $db=new Conexion();
    $sql=$db->query("UPDATE producto set stock=stock-'$cantidad' where id_producto='$id_prod'");
    return($sql);
}
  public function BuscaProducto($n)
  {
    include("conexion.php");
    $db = new Conexion();
    $sql = $db->query("SELECT p.id_producto,p.nombreproducto,p.descripcion,p.costocompra,p.costoventa,p.stock,p.fecha,p.imagen,prov.empresa FROM producto p
    INNER JOIN proveedor prov ON prov.id_proveedor=p.id_proveedor where nombreproducto like '$n%' order by nombreproducto asc");
    return ($sql);
  }
  public function carrito($c){
    //include("conexion.php");
    $db=new Conexion();
    $sql=$db->query("SELECT * FROM producto WHERE id_producto=$c[id_producto]");
    return($sql);
}
  public function listarEmpleadoCargo()
  {

    $db = new Conexion();
    $sql = $db->query("SELECT e.id_empleado,c.id_cargo,e.nombre,e.paterno,c.cargo 
    from empleado e, cargo c where e.id_cargo = c.id_cargo ");
    return ($sql);
  }
  public function ediProductono()
  {
      $db = new Conexion();
      $sql = $db->query("UPDATE producto SET
                  nombreproducto ='$this->nombre',descripcion='$this->descripcion',costocompra='$this->costoco',costoventa='$this->costoven',stock='$this->stock',
                  fecha ='$this->fecha',imagen ='$this->Imagen'
                  where id_producto=$this->id");
      return $sql;
  }


  public function setId($ide)
  {
    $this->id = $ide;
  }


  public function setIdPro($idp)
  {
    $this->idpro = $idp;
  }
  public function setNombre($no)
  {
    $this->nombre = $no;
  }
  public function setDescripcion($de)
  {
    $this->descripcion = $de;
  }
  public function setCostoco($cc)
  {
    $this->costoco = $cc;
  }
  public function setCostoven($cve)
  {
    $this->costoven = $cve;
  }
  public function setStock($sk)
  {
    $this->stock = $sk;
  }
  public function setFecha($fe)
  {
    $this->fecha = $fe;
  }
  public function setImagen($img)
  {
    $this->Imagen = $img;
  }
  public function setCategoria($ca)
  {
    $this->categoria = $ca;
  }

  public function getId()
  {
    return $this->id;
  }
  public function getIdPro()
  {
    return $this->idpro;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getDescripcion()
  {
    return $this->descripcion;
  }
  public function getCostoco()
  {
    return $this->costoco;
  }
  public function getCostoven()
  {
    return $this->costoven;
  }
  public function getStock()
  {
    return $this->stock;
  }
  public function getFech()
  {
    return $this->fecha;
  }
  public function getImagen()
  {
    return $this->Imagen;
  }
  public function getCategoria()
  {
    return $this->categoria;
  }


}
