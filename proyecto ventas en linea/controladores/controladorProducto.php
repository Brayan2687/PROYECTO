<?php
include($_SERVER['DOCUMENT_ROOT'].'/PROYECTO VENTAS EN LINEA/modelos/modeloProducto.php');

if(isset($_POST['producto']) && !empty($_POST['producto'])){

    //OBTENER LOS DATOS QUE VIENEN POR POST 
    $nombreProducto = $_POST['producto'];
    $precioVentaProducto = $_POST['precio'];
    $descripcionProducto = $_POST['descripcion'];

    $objProducto = new modeloProducto (NULL, $nombreProducto, $precioVentaProducto,$descripcionProducto);

    $objProducto->registrarProducto();
  
    echo '<script type="text/javascript"> 
        alert("PRODUCTO INSERTADO CORRECTAMENTE!");
        window.location.href="../vistas/productos/insertarProducto.html"
    </script>';


}


?>