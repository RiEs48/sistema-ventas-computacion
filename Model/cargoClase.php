<?php
class Cargo
{
  private $id;
  private $cargo;

  public function __construct($id, $cargo)
  {
    
   $this->setId($id);
   $this->setCargo($cargo);
  }


  public function grabarCargo()
  {
    include("conexion.php");
    $db =  new Conexion();
    $sql = $db->query("INSERT INTO cargo(cargo) VALUES ('$this->cargo')");

    return ($sql);
  }
  public function BuscaCargo($n)
    {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM cargo where cargo like '$n%' order by cargo asc");
        return $sql;
    }

  public function Lista()
  {
    include("conexion.php");
    $db =  new Conexion();
    $sql = $db->query("SELECT * FROM cargo order by cargo asc");

    return ($sql);
  }
  
  public function listarCargo()
  {

    include("conexion.php");
    $db =  new Conexion();
    $sql = $db->query("SELECT * FROM cargo where id_cargo=$this->id");

    return ($sql);
  }
  public function reporte()
  {
    include("conexion.php");
    $db =  new Conexion();
    $sql = $db->query("SELECT * FROM cargo where id_cargo=$this->id");

    return ($sql);
  }
  public function eliminaCargo()
  {
    include("conexion.php");
    $db =  new Conexion();
    $sql = $db->query("DELETE FROM cargo   where id_cargo='$this->id'");

       return ($sql);
  }
  public function editarCargo()
  {
  
    $db =  new Conexion();

    $sql = $db->query("UPDATE cargo SET
    cargo ='$this->cargo' where id_cargo=$this->id");

    return $sql;
  }
  public function listarCargoID()
  {
    $db =  new Conexion();
    $sql = $db->query("SELECT * FROM cargo where  id_cargo='$this->id'");

    return ($sql);
  }
 


 

  
  
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return  $this->id;
  }
  public function setCargo($cargo)
  {
    $this->cargo = $cargo;
  }
  public function getCargo()
  {
    return  $this->cargo;
  }
}
