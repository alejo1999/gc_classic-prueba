<?php
require_once("../app/models/cliente.class.php");
try{
    $usuario = new Cliente;
    if($usuario->setId($_SESSION['id_cliente'])){
        if($usuario->readCliente()){
            if(isset($_POST['editar'])){
                $_POST = $usuario->validateForm($_POST);
                if($usuario->setNombres($_POST['nombres'])){
                    if($usuario->setApellidos($_POST['apellidos'])){
                        if($usuario->setCorreo($_POST['correo'])){
                            if($usuario->setTelefono($_POST['telefono'])){
                                if($usuario->updateCliente()){
                                    $_SESSION['correo'] = $usuario->getCorreo();
                                    Page::showMessage(1, "Perfil modificado", "index.php");
                                }else{
                                    throw new Exception(Database::getException());
                                }
                            }else{
                                throw new Exception("Alias incorrecto");
                            }
                        }else{
                            throw new Exception("Correo incorrecto");
                        }
                    }else{
                        throw new Exception("Apellidos incorrectos");
                    }
                }else{
                    throw new Exception("Nombres incorrectos");
                }
            }
        }else{
            Page::showMessage(2, "Usuario inexistente", "index.php");
        }
    }else{
        Page::showMessage(2, "Usuario incorrecto", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/public/cuenta/profile_view.php");
?>