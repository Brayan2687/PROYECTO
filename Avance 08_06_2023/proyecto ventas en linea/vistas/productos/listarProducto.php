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
    $listarProductos = consultarLista();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/css/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <title>CREACIONES ELITH</title>
    <link rel="stylesheet" href="../../Assets/css/imagenListar.css">
    
    
</head>
<script type="text/javascript">
					function confirmar(){
						var respuesta = confirm("¿Desea Eliminar El Producto?");
					if(respuesta==true){
						return true;
					}	
					else {
						return false;
					}

			}
			</script>
<body>
<a href="../menu/menuAdministrador.php"><button class="btn btn-dark" type="submit">REGRESAR</button></a>

  <main class="site-wrapper">
    <div class="pt-table desktop-768">
      <div class="pt-tablecell page-home relative" style="background-image: url(img/fondo1.jpg);">
        <div class="container">
          <div class="">
            <div class="col-lg-offset-2 ">
              <div class="page-title  home text-center">
               <h1> <span class="heading-page"> LISTA DE PRODUCTOS  </span> </h1>
                
</div>
</main>   
<Center>
<div style='width:1000px'>
<nav >
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-danger" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
</Center>
<br>
<br>

<div style='width:1000px; margin-left:179px'>
<thead>

  <table class=" table-danger table-striped table-Light" >

  <table class="table table-dark table-striped">
    <tr>
  
    <th scope="col">codigo</th>
    <th scope="col">nombre</th>
    <th scope="col">precio</th>
    <th scope="col">descripcion</th>
    <th scope="col">Botones</th>
</tr>
</thead>
<tbody>
   <?php foreach($listarProductos as $producto): ?>
    <tr>
    <td><?php echo $producto->codigoProducto?></td>
    <td><?php echo $producto->nombreProducto?></td>
    <td><?php echo $producto->precioVentaProducto?></td>
    <td><?php echo $producto->descripcionProducto?></td>
    <td>
    <button onclick="location.href='actualizarProducto.php?codigoProducto=<?php echo $producto->codigoProducto; ?>'" type="button" class="btn btn-outline-primary">Actualizar</button>
    
    <a href="../../controladores/controladorProducto.php?eliminarProducto=<?php echo $producto->codigoProducto;?>">
					<button type="button" class="btn btn-outline-danger" onclick="return confirmar();">
						Eliminar
					</button>
				</a>

    </td>
  
 <tr>
<?php endforeach; ?>
   </tbody>
</table>
  </div>


  


</body>
</html>
