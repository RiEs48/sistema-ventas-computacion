<?php
class Cliente
{
    private $id;
    private $nit;
    private $razon;
 
    public function __construct($id,$razob,$nit){
        $this->setId($id);
        $this->setRazon($razob);
        $this->setNit($nit);
        
     
    }

    public function grabarCliente(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("INSERT INTO cliente(razonsocial,nit_ci) values('$this->razon','$this->nit')");
        return($sql);
    }

    public function listarCliente(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cliente");
        return($sql);
    }
    
    public function listarClienteId(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cliente  where 
        id_cliente='$this->id'");
        return($sql);
    }
    public function listarClienteNit(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cliente  where 
        nit_ci='$this->nit'");
        return($sql);
    }
    public function listaNit($n){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cliente WHERE nit_ci='$n'");
        return($sql);
    }
    public function listarClienteNit2(){
      
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM cliente  where 
        nit_ci='$this->nit'");
        return($sql);
    }

    public function BuscaCliente($n)
    {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM cliente where razonsocial like '$n%' order by razonsocial asc");
        return $sql;
    }

    public function eliminarCliente(){
        include("conexion.php");
        $db=new Conexion();
      
      
        $sql=$db->query ("DELETE FROM cliente where id_cliente=$this->id");
    
        return($sql);
    }

    public function editarCliente(){
      
        $db=new Conexion();
      
        $sql=$db->query("UPDATE cliente SET
        razonsocial ='$this->razon',nit_ci ='$this->nit'  where id_cliente=$this->id");
        return($sql);
    }

    public function reporte(){
        //include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * from cliente where estado='Activo'");
        return($sql);
    }

    public function setId($ide){
        $this->id=$ide;
    }
    public function getId(){
        return $this->id;
    }
    public function setNit($ni){
        $this->nit=$ni;
    }
    public function getNit(){
        return $this->nit;
    }
    public function setRazon($ra){
        $this->razon=$ra;
    }
    public function getRazon(){
        return $this->razon;
    }
   
}
?>