<?php
include($_SERVER['DOCUMENT_ROOT'].'/PROYECTO VENTAS EN LINEA/modelos/modeloProducto.php');

if(isset($_POST['producto']) && !empty($_POST['producto'])){

    //OBTENER LOS DATOS QUE VIENEN POR POST 
    $nombreProducto = $_POST['producto'];
    $precioVentaProducto = $_POST['precio'];
    $descripcionProducto = $_POST['descripcion'];

    $objProducto = new modeloProducto (NULL, $nombreProducto, $precioVentaProducto, $descripcionProducto);

    $objProducto->registrarProducto();
  
    echo '<script type="text/javascript"> 
        alert("INSERTADO CORRECTAMENTE!");
        window.location.href="../vistas/productos/insertarProducto.php"
    </script>';


}

 //METODO PARA CONSULTAR LA LISTA DE PRODUCTOS
function consultarLista() {
    $objProducto = new modeloProducto(NULL,NULL,NULL,NULL);
    $consultaLista = $objProducto->listarProducto();
    return $consultaLista;
}


//METODO PARA ACTUALIZAR LISTA PRODUCTOS
if(isset($_POST["productoActualizar"]) && !empty($_POST["productoActualizar"])){

    $codigoProducto = $_POST["productoActualizar"];
    $nombreProducto = $_POST["nombreActualizar"];
    $precioVentaProducto = $_POST["precioActualizar"];
    $descripcionProducto = $_POST["descripcionActualizar"];
    
    $objProducto = new modeloProducto($codigoProducto, $nombreProducto, $precioVentaProducto, $descripcionProducto);

    $objProducto->actualizarProducto();

     echo '<script type="text/javascript"> 
        alert("ACTUALIZADO CORRECTAMENTE!");
        window.location.href="../vistas/productos/listarProducto.php"
    </script>';


 }


 //METODO PARA CONSULTAR X ID
 function consultarXid($codigoProducto){
    $objProducto = new modeloProducto($codigoProducto,NULL,NULL,NULL);
    $consultaXid = $objProducto->consultarProductoXid();
    return $consultaXid;
 }


 //ELIMINAR
if(isset($_GET["eliminarProducto"]) && !empty($_GET["eliminarProducto"]))
{
    $codigoProducto = $_GET["eliminarProducto"];

    $objProducto = new modeloProducto($codigoProducto, NULL, NULL, NULL);

    $objProducto ->eliminarProducto();

    echo '<script type="text/javascript">
                alert("PRODUCTO ELIMINADO CORRECTAMENTE!!!!");
                window.location.href="../vistas/productos/listarProducto.php";
            </script> ';
}
?>