<?php
include('modeloConexion.php');

class modeloUsuario extends modeloConexion {
    //ATRIBUTOS
    private $idUsuario = 0;
    private $correoUsuario ="texto";
    private $contrasenaUsuario = "texto";
    private $estadoUsuario = "texto";
    private $idRolFK = 0;

    //ENCAPSULAR 
    public function __construct($idUsuarioIN, $correoUsuarioIN, $contraUsuarioIN, $estadoUsuarioIN, $idRolFKIN){
        $this->idUsuario = $idUsuarioIN;
        $this->correoUsuario = $correoUsuarioIN;
        $this->contrasenaUsuario = $contraUsuarioIN;
        $this->estadoUsuario = $estadoUsuarioIN;
        $this->idRolFK = $idRolFKIN;
    }

    //METODOS
    public function validarUsuario(){
        $objConexion = new modeloConexion();
        $objPDO = $objConexion::conectar();
        try {
            $sql = $objPDO->prepare('SELECT idUsuario, correoUsuario, contrasenaUsuario,estadoUsuario,idRolFK FROM usuario
                                  WHERE correoUsuario = :correoUsuario');
            $sql->bindparam(':correoUsuario', $this->correoUsuario);
            $sql->execute();
            return $sql->fetch(PDO::FETCH_OBJ);
            $objPDO =$objConexion::desconectar();
        }catch(\trouble $error) {
            echo('ERROR '. $error->getMessage());
            die();
        }
    }

    
}


?>