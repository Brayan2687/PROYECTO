<?php
include('modeloConexion.php'); 
class modeloProducto extends modeloConexion{

    //ATRIBUTOS DE LA CLASE 
    private $codigoProducto = 0; 
    private $nombreProducto = "texto"; 
    private $precioVentaProducto = 0; 
    private $descripcionProducto = "texto"; 

    //METODO CONSTRUCTOR - ENCAPSULAR 
    public function __construct($codigoProductoIN, $nombreProductoIN, $precioVentaProductoIN, $descripcionProductoIN)
    {
        $this->codigoProducto = $codigoProductoIN;
        $this->nombreProducto = $nombreProductoIN; 
        $this->precioVentaProducto = $precioVentaProductoIN; 
        $this->descripcionProducto = $descripcionProductoIN; 
    }

    //METODOS CLASE 
    public function registrarProducto(){
        $objConexion = new modeloConexion(); 
        $objPDO = $objConexion::conectar(); 

        try {
            $sql = $objPDO->prepare('INSERT INTO producto VALUES 
                                        (
                                            :codigoProducto,
                                            :nombreProducto,
                                            :precioVentaProducto,
                                            :descripcionProducto
                                        );'); 

            $sql->bindparam(':codigoProducto',$this->codigoProducto); 
            $sql->bindparam(':nombreProducto',$this->nombreProducto); 
            $sql->bindparam(':precioVentaProducto',$this->precioVentaProducto); 
            $sql->bindparam(':descripcionProducto',$this->descripcionProducto); 
            

            $sql->execute(); 

            $objPDO = $objConexion::desconectar();

        } catch (\Throwable $error) {
            echo("Error modelo: ".$error->getMessage()); 
            die(); 
        }


    }
}
    
?>
