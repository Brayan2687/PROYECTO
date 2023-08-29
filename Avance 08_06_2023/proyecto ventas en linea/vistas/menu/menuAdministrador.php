<?php

session_start(); 

if($_SESSION['usuario']==NULL || $_SESSION['usuario']==""){
    session_destroy(); 
    header('location: ../../index.html'); 
}
elseif($_SESSION['usuario']!=1){
  session_destroy(); 
  header('location: ../../index.html'); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREACIONES ELITH</title>
    <link rel="stylesheet" href="../../Assets/css/menu.css">
</head>
<body>

    <main class="site-wrapper">
        <div class="pt-table desktop-768">
          <div class="pt-tablecell page-home relative" style="background-image: url(img/fondo1.jpg);">
            <div class="container">
              <div class="">
                <div class="col-lg-offset-2 ">
                  <div class="page-title  home text-center">    
                    <div class="hexagon-menu"> 
                      <div class="page-title  home text-center">
                      <span class="heading-page"> BIENVENIDO ADMINISTRADOR A GESTIÓN DE PRODUCTOS
                </span>
                <p class="mt20">En esta seccion encontraras los la insercion de productos nuevos ademas de que podras actualizar y eliminar los productos ademas de saber que productos estan disponibles.
                </p> 
                      </div> 
                      <div class="hexagon-item">
                        <div class="hex-item">
                          <div></div>
                          <div></div>
                          <div></div>
                        </div>
                        <div class="hex-item">
                          <div></div>
                          <div></div>
                          <div></div>
                        </div>
                        <a class="hex-content" href="../productos/insertarProducto.php">
                          <span class="hex-content-inner">
                            <span class="icon">
                              <i class="fa fa-braille"></i>
                            </span>                       
                            <span class="title">REGISTRAR PRODUCTO</span>
                          </span>
                          <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                          </svg>
                        </a>
                      </div>
                      <div class="hexagon-item">
                        <div class="hex-item">
                          <div></div>
                          <div></div>
                          <div></div>
                        </div>
                        <div class="hex-item">
                          <div></div>
                          <div></div>
                          <div></div>
                        </div>
                        <a class="hex-content" href="../productos/listarProducto.php">
                          <span class="hex-content-inner">
                            <span class="icon">
                              <i class="fa fa-braille"></i>
                            </span>
                            <span class="title">CONSULTAR PRODUCTO</span>
                          </span>
                          <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                          </svg>
                        </a>
                      </div>
                      </div>         
                    </div> 
                    <div class="hexagon-menu"> 
                      <div class="  ">
                        <span class=""> 
                        </span>
                      </div> 
                      <div class="hexagon-item">
                        <div class="hex-item">
                          <div></div>
                          <div></div>
                          <div></div>
                        </div>
                        <div class="hex-item">
                          <div></div>
                          <div></div>
                          <div></div>
                        </div>
                        
                        <a class="hex-content" href="../../controladores/controladorCerrarSesion.php">  
                          <span class="hex-content-inner">
                            <span class="icon">
                              <i class="fa fa-braille"></i>
                            </span>
                            <span class="title">CERRAR SESIÒN</span>
                          </span>
                          <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
                          </svg>
                        </a>
                      </div>
                    </div>           
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

     
</body>
</html>