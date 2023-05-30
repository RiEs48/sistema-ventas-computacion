
<?php
class Usuario{
    private $id_usuario;
    private $idempleado;
    private $usuario;
    private $pasword;
    private $nivel;
    private $estado;
    
    
    public function __construct($id_us,$usu,$pas,$ni,$est,$id_emp){

        $this->setIdUsuario($id_us);
        $this->setUsuario($usu);
        $this->setPasword($pas);
        $this->setNivel($ni);
        $this->setEstado($est);
        $this->setIdempleado($id_emp);
    }
    //VERIFICAR USUARIO
    public function verificar(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM usuario 
        WHERE usuario='$this->usuario' and pasword='$this->pasword'");
        return($sql);
    }
    public function grabarUsuario(){
        //include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("INSERT INTO usuario (usuario,pasword,nivel,
        estado,id_empleado) values('$this->usuario','$this->pasword',
        '$this->nivel','$this->estado','$this->idempleado')");
        return($sql);
    }
    public function comprovar(){
        //include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM usuario WHERE id_empleado='$this->idempleado'");
        return($sql);
    }
    public function listarUsuario(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT u.*,e.* FROM usuario u
        INNER JOIN empleado e ON e.id_empleado=u.id_empleado
       
        where estado='ACTIVO'
        order by nombre asc");
        return($sql);
    }
    public function listarUsuarioIn(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT u.*,e.* FROM usuario u
        INNER JOIN empleado e ON e.id_empleado=u.id_empleado
        where estado='INACTIVO'
        order by nombre asc");
        return($sql);
    }
    public function listaUsuarioId(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT * FROM usuario where id_usuario='$this->id_usuario'");
        return($sql);
    }
    public function eliminarUsuario(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("UPDATE usuario SET estado='Inactivo'
        WHERE id_usuario='$this->id_usuario'");
        //$sql=$db->query("DELETE FROM usuario where id_usuario='$this->idUsuario'");
        return($sql);
    }
    public function editarUsuario(){
        //include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("UPDATE usuario SET usuario='$this->usuario',
        pasword='$this->pasword',nivel='$this->nivel'
        WHERE id_usuario=$this->id_usuario");
        return($sql);
    }
    public function buscarUsuario($busqueda){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT u.*,e.nombre,e.paterno,e.materno FROM usuario u INNER JOIN empleado e
        ON u.id_empleado=e.id_empleado
        WHERE u.usuario like '%$busqueda%' ORDER BY u.usuario ASC");
        return($sql);
    }
    public function reporteUsuario(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT u.*,e.* FROM usuario u
        INNER JOIN empleado e ON u.id_empleado=e.id_empleado 
        WHERE u.estado='ACTIVO'
        order by u.usuario ASC");
        return($sql);
    }
    public function reporteUsuarioIn(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("SELECT u.*,e.* FROM usuario u
        INNER JOIN empleado e ON u.id_empleado=e.id_empleado 
        WHERE u.estado='INACTIVO'
        order by u.usuario ASC");
        return($sql);
    }
    public function activarUsuario(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("UPDATE usuario SET estado='Activo'
        WHERE id_usuario='$this->id_usuario'");
        //$sql=$db->query("DELETE FROM usuario where id_usuario='$this->idUsuario'");
        return($sql);
    }
    public function eliminar(){
        include("conexion.php");
        $db=new Conexion();
        $sql=$db->query("DELETE FROM usuario where id_usuario='$this->id_usuario'");
        return($sql);
    }

    public function setIdUsuario($idusu){
        $this->id_usuario=$idusu;
    }
    public function getIdusuario(){
        return $this->id_usuario;
    }
    public function setIdEmpleado($idEmp){
        $this->idempleado=$idEmp;
    }
    public function getEmpleado(){
        return $this->idempleado;
    }

    public function setUsuario($usu){
        $this->usuario=$usu;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function setPasword($pas){
        $this->pasword=$pas;
    }
    public function getPasword(){
        return $this->pasword;
    }
    public function setNivel($ni){
        $this->nivel=$ni;
    }
    public function getNivel(){
        return $this->nivel;
    }
    public function setEstado($est){
        $this->estado=$est;
    }
    public function getEstado(){
        return $this->estado;
    }
    
}

/*TIPO DE USUARIOS
    1-ADMINISTRADOR
    2-SECRETARIA/O
    0-NINGUNO
    */
?>
