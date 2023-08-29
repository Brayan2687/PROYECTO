<?php

include('modeloConexion.php');

    try{
        $objConexion = new modeloConexion;
        $objConexion->conectar();
        echo 'conexion correcta, TODO FINE!!! ';
    }catch (\Throwable $error) {
        echo '¡ERROR!: '. $error->getMessage();
        die(); 
    }

    


?>