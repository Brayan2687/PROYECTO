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
    //METODO LISTAR

    public function listarProducto(){
        $objConexion = new modeloConexion();
        $objPDO = $objConexion::conectar();

        try {

            $sql = $objPDO->prepare("SELECT * FROM Producto;");

            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);

            $objPDO = $objConexion::desconectar();
              
     }
      catch (\Throwable $error) {
            echo 'ERROR: '. $error->getMessage();
            die();
            
        }
    }
    
     //METODO PARA CONSULTAR POR ID
public function consultarProductoXid(){
    $objConexion= new modeloConexion ();
    $objPDO= $objConexion::conectar();

    try{
        $sql= $objPDO->prepare("SELECT * FROM producto
                                WHERE codigoProducto= :codigoProducto;");
        $sql->bindparam(':codigoProducto', $this->codigoProducto);

        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
        $objPDO = $objconexion::desconectar();
    }catch (\Thorowable $error) {
        echo 'ERROR: '. $error->getMessage();
        die();
    }
}


//METODO PARA ACTUALIZAR
 
public function actualizarProducto(){
    $objConexion= new modeloConexion();
    $objPDO= $objConexion:: conectar ();

    try{
        $sql= $objPDO-> prepare("UPDATE producto SET
                                    descripcionProducto = :descriProducto,
                                    nombreProducto  = :nomProducto,
                                    precioVentaProducto = :precVenProducto,
                                    WHERE codigoProducto  = :codigoProducto;");
        $sql->bindparam(':codigoProducto',$this->codigoProducto); 
         $sql->bindparam(':descriProducto',$this->descripcionProducto); 
         $sql->bindparam(':nomProducto',$this->nombreProducto); 
         $sql->bindparam(':precVenProducto',$this->precioVentaProducto); 
         

         $sql->execute();

         $objPDO= $objConexion:: desconectar();
        
        } catch (\Throwable $error){
            echo 'ERROR:'. $error->getMessage();
            die(); 
        
                                    
    }
}

//ELIMINAR
public function eliminarProducto(){
    $objConexion = new modeloConexion();
    $objPDO = $objConexion::conectar();
    

    try {
        $sql = $objPDO->prepare("DELETE FROM producto
                                   WHERE codigoProducto = :codigoProducto;");
        $sql->bindparam(':codigoProducto',$this->codigoProducto);

        $sql->execute();

        $objPDO = $objConexion::desconectar();

    } catch (\Throwable $error) {
        echo 'ERROR: '. $error->getMessage();
        die();
    }   
}


}






?>
