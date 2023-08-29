<?php

include("../../controladores/controladorProducto.php");

session_start();

if($_SESSION['usuario']==NULL || $_SESSION['usuario']=='')
{
    session_destroy();
    header('location: ../../index.html');
}
else
{
    $productoConsulta = $_GET['codigoProducto'];
    $consultarProducto = consultarXid($productoConsulta);
    $filas = count($consultarProducto);

    if($filas==0){
       header('location: listarProducto.php');
    }
    else{
        foreach($consultarProducto as $producto){
            $codigoProductoV = $producto->codigoProducto;
            $nombreProductoV = $producto->nombreProducto;
            $precioVentaProductoV = $producto->precioVentaProducto;
            $descripcionProductoV = $producto->descripcionProducto;
        }
       
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREACIONES ELITH</title>
    <link rel="stylesheet" href="../../Assets/css/Estiloproducto.css">
    <link rel="stylesheet" href="../../Assets/css/bootstrap-5.2.0-dist/css/bootstrap.min.css">
   
</head>
<body>
<a href="../menu/menuAdministrador.php"><button class="btn btn-dark" type="submit">REGRESAR</button></a>
  
<!-- Form-->
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>ACTUALIZAR PRODUCTO</h1>
    </div>
    <div class="form-content">
      <form  action='../../controladores/controladorProducto.php' method='POST'>
        <div class="form-group">

     <label> <div class="password">CODIGO PRODUCTO</label>
          <input id="password" type="text" value="<?php echo $codigoProductoV;?>" required="required" name="productoActualizar" readonly/>
        </div>
        <div><label >NOMBRE DEL PRODUCTO</label>
          <input  type="text"value="<?php echo $nombreProductoV;?>" required="required" name="nombreActualizar"/>
        </div>
        <div class="form-group">
          <label >PRECIO DEL PRODUCTO</label>
          <input  type="number" value="<?php echo $precioVentaProductoV;?>" required="required" name="precioActualizar"/>
        </div>
        <div class="form-group">
          <label >DESCRIPCION PRODUCTO</label>
          <input  type="text" value="<?php echo $descripcionProductoV;?>" required="required" name="descripcionActualizar"/>
        </div>
        <div class="form-group">
          <label class="form-remember">
        </div>
        <div class="form-group">
          <input type="submit" value="Enviar">
        </div>
      </form>
    </div>
  </div>
  <div class="form-panel two">
    <div class="form-header">
      <h1>Register Account</h1>
    </div>
    <div class="form-content">
      <form>
        <div class="form-group">
          <label for="username">Username</label>
          <input id="username" type="text" name="username" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input id="password" type="password" name="password" required="required"/>
        </div>
        <div class="form-group">
          <label for="cpassword">Confirm Password</label>
          <input id="cpassword" type="password" name="cpassword" required="required"/>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input id="email" type="email" name="email" required="required"/>
        </div>
        <div class="form-group">
          <button type="submit">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="../../Assets/java/java.js"></script>
</body>

</html>