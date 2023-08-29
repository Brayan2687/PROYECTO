<?php

include('../modelos/modeloUsuario.php'); 

if(isset($_POST['usuario']) && !empty($_POST['usuario']))
{
    $usuarioIN = $_POST['usuario']; 
    $contrasenaIN = $_POST['contrasena'];

    
    try {
        $objUsuario = new modeloUsuario(NULL, $usuarioIN, NULL, NULL, NULL); 
        $consulta = $objUsuario->validarUsuario(); 

        $usuarioBD = $consulta->correoUsuario; 
        $contrasenaBD = $consulta->contrasenaUsuario; 
        $rolBD = $consulta->idRolFK; 
        echo ($usuarioBD.$contrasenaBD.$rolBD);
        if($usuarioIN == $usuarioBD){
            if($contrasenaIN == $contrasenaBD){

                session_start(); 
                $_SESSION['usuario'] = $rolBD; 
                if($rolBD==1){
                    echo '<script type="text/javascript">
                        alert("INGRESO EXITOSO, BIENVENIDO ADMIN");    
                        window.location.href="../vistas/menu/menuAdministrador.php"; 
                    </script>';
               
                }
            }
            else{
                echo '<script type="text/javascript">
                    alert("ERROR EN LA CONTRASEÑA");    
                     window.location.href="../index.html"; 
                </script>';
            }
        }
        else{
            echo '<script type="text/javascript">
                    alert("ERROR EN EL USUARIO");    
                     window.location.href="../index.html"; 
                </script>';
        }

    } catch (\Throwable $error) {
        echo("Error: ".$error->getMessage()); 
        die(); 
    }
}
else
{
    header('location: ../index.html'); 
}

?>