<?php

class modeloConexion
{
    //ATRIBUTOS
    private $bdhost = 'localhost';
    private $bdnombre = 'VENTAS_LINEA';
    private $bdUsuario = 'root';
    private $bdContra = '';

    //METODOS
    public function conectar()
    {
        $objPDO = new PDO('mysql:host=' .$this->bdhost. ';dbname=' .$this->bdnombre.
                           ';charset=utf8',$this->bdUsuario, $this->bdContra);
        $objPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $objPDO;                 
    }

    public function desconectar()
    {
        return null;
    }
}

?>