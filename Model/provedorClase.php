<?php


class Provedor
{
    private $id;
    private $empresa;
    private $contacto;
    private $mail;
    private $telefono;
    private $direccion;
    private $logo;

    public function __construct($id, $em, $co, $ea, $te, $di, $l)
    {
        $this->setId($id);
        $this->setEmpresa($em);
        $this->setContacto($co);
        $this->setMail($ea);
        $this->setTelefono($te);
        $this->setDireccion($di);
        $this->setLogo($l);
    }

    public function grabarProvedor()
    {
        include_once("conexion.php");
        $db =  new Conexion();
        $sql = $db->query("INSERT into proveedor (empresa,contacto,mail,telefono,direccion,logo)
    values ('$this->empresa','$this->contacto','$this->mail','$this->telefono','$this->direccion','$this->logo')");
        return ($sql);
    }

    public function lista()
    {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM proveedor ");
        return ($sql);
    }
    
    public function lista2()
    {
        //include("conexion.php");
        $db2 = new Conexion();
        $sql = $db2->query("SELECT * FROM proveedor ");
        return $sql;
    }
    public function Buscaprovedor($n)
    {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM proveedor where empresa like '$n%' order by empresa asc");
        return $sql;
    }
    public function listarProvedor()
    {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM proveedor where id_proveedor=$this->id order by empresa asc");
        return $sql;
    }
    public function listarProvedorSelect()
    {
        include_once("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM proveedor where id_proveedor=$this->id order by empresa");
        return $sql;
    }
    public function eliProvedor()
    {
        include_once("conexion.php");
        $db = new Conexion();
        $sql = $db->query("DELETE FROM proveedor where id_proveedor=$this->id");
        return $sql;
    }
    public function ediProvedor()
    {
        $db = new Conexion();
        $sql = $db->query("UPDATE proveedor SET
                empresa ='$this->empresa',contacto='$this->contacto',mail='$this->mail',telefono='$this->telefono',direccion='$this->direccion',logo='$this->logo'
                where id_proveedor=$this->id");
        return $sql;
    }
    public function ediProvedorno()
    {
        $db = new Conexion();
        $sql = $db->query("UPDATE proveedor SET
                    empresa ='$this->empresa',contacto='$this->contacto',mail='$this->mail',telefono='$this->telefono',direccion='$this->direccion'
                    where id_proveedor=$this->id");
        return $sql;
    }
    public function setId($ide){
        $this->id=$ide;
    }
    public function getId(){
        return $this->id;
    }
    public function setEmpresa($emp){
        $this->empresa=$emp;
    }
    public function getEmpresa(){
        return $this->empresa;
    }
    public function setContacto($con){
        $this->contacto=$con;
    }
    public function getContacto(){
        return $this->contacto;
    }
    public function setMail($m){
        $this->mail=$m;
    }
    public function getMail(){
        return $this->mail;
    }
    public function setTelefono($te){
        $this->telefono=$te;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setDireccion($dir){
        $this->direccion=$dir;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function setLogo($lo){
        $this->logo=$lo;
    }
    public function getlogo(){
        return $this->logo;
    }
}
