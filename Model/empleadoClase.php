<?php 
class Empleado 
{
private $id;
private $idcargo;
private $ci;
private $nombre;
private $paterno;
private $materno;
private $direccion;
private $telefono;
private $fecha_nacimiento;
private $genero;
private $intereses;
function __construct($i,$idc,$ci,$nom,$pat,$mat,$dir,$tel,$fec,$gen,$inte)
{
    $this ->setId($i);
    $this ->setIdcargo($idc);
    $this ->setCi($ci);
    $this ->setNombre($nom);
    $this ->setPaterno($pat);
    $this ->setMaterno($mat);
    $this ->setDireccion($dir);
    $this ->setTelefono($tel);
    $this ->setFecha_nacimiento($fec);
    $this ->setGenero($gen);
    $this ->setIntereses($inte);
  
}
public function GrabarEmpleado(){
 
  
    $db= new Conexion();
     $sql= $db->query("INSERT INTO empleado (id_cargo,ci,nombre,paterno,materno,direccion,
     telefono,fechanacimiento,genero,intereses) VALUES ('$this->idcargo','$this->ci','$this->nombre',
     '$this->paterno','$this->materno','$this->direccion','$this->telefono','$this->fecha_nacimiento',
     '$this->genero','$this->intereses')");

     return($sql);


}

public function lista(){
  include("conexion.php");
    $db= new Conexion();
     $sql= $db->query("SELECT e.*,c.cargo from empleado e INNER JOIN  cargo c on c.id_cargo=e.id_cargo
    order by e.nombre asc");
     return $sql;


}
public function eliEmpleado(){
    include("conexion.php");
    $db= new Conexion();
     $sql= $db->query("DELETE FROM empleado where id_empleado=$this->id");
     return$sql;


}
public function ListaEm()
  {
    include("conexion.php");
    $db =  new Conexion();
    $sql = $db->query("SELECT * FROM empleado order by empleado asc");

    return ($sql);
  }
public function listarEmpleado(){
  include("conexion.php");
    $db= new Conexion();
     $sql= $db->query("SELECT e.*,c.cargo from empleado e INNER JOIN  cargo c on c.id_cargo=e.id_cargo
    where id_empleado='$this->id'");
     return$sql;


}
public function listarEmpleado2(){
  //include("conexion.php");
    $db= new Conexion();
     $sql= $db->query("SELECT e.*,c.cargo from empleado e INNER JOIN  cargo c on c.id_cargo=e.id_cargo
    where id_empleado='$this->id'");
     return$sql;


}
public function ediEmpleado(){
 
     $db= new Conexion();
      $sql= $db->query(" UPDATE empleado SET id_cargo = '$this->idcargo',ci='$this->ci',
      nombre= '$this->nombre',paterno='$this->paterno',materno= '$this->materno',direccion ='$this->direccion',
      telefono='$this->telefono',fechanacimiento ='$this->fecha_nacimiento',genero='$this->genero',
      intereses='$this->intereses' where id_empleado=$this->id");
      return($sql);


}
public function BuscaEmpleado($n){
    include("conexion.php");
    $db= new Conexion();
    $sql=$db->query("SELECT e.ci,e.nombre,e.paterno,e.materno,e.direccion,e.telefono,e.fechanacimiento,e.genero,e.intereses,c.cargo from empleado e 
    INNER JOIN cargo c WHERE e.id_cargo=c.id_cargo and e.nombre like '$n%' ");
    return ($sql);

}
public function listarEmpleadoCargo(){
    
    $db= new Conexion();
    $sql=$db->query("SELECT e.id_empleado,c.id_cargo,e.nombre,e.paterno,c.cargo 
    from empleado e, cargo c where e.id_cargo = c.id_cargo ");
    return ($sql);

}
public function setId($ide){
    $this -> id=$ide;
  }
 

  public function setIdCargo($idc){
    $this -> idcargo=$idc;
  }
 
  public function setCi($c){
    $this -> ci=$c;
  }
  public function setNombre($no){
    $this -> nombre=$no;
  }
  public function setPaterno($pa){
    $this -> paterno=$pa;
  }
  public function setMaterno($ma){
    $this -> materno=$ma;
  }
  public function setDireccion($dir){
    $this -> direccion=$dir;
  }
  public function setTelefono($tel){
    $this -> telefono=$tel;
  }
  public function setFecha_nacimiento($fe){
    $this -> fecha_nacimiento=$fe;
  }
  public function setGenero($gen){
    $this -> genero=$gen;
  }
  public function setIntereses($inte){
    $this -> intereses=$inte;
  }
  public function getId(){
   return $this -> id;
  }
  public function getIdCargo(){
    return $this -> idcargo;
   }
   public function getCi(){
    return $this -> ci;
   }
   public function getNombre(){
    return $this -> nombre;
   }
   public function getPaterno(){
    return $this -> paterno;
   }
   public function getMaterno(){
    return $this -> materno;
   }
   public function getDireccion(){
    return $this -> direccion;
   }
   public function getTelefono(){
    return $this -> telefono;
   }
   public function getFecha_nacimiento(){
    return $this -> fecha_nacimiento;
   }
   public function getGenero(){
    return $this -> genero;
   }
   public function getInteres(){
    return $this -> intereses;
   }
}
