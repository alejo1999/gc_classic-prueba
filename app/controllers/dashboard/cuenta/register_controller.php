<?php
require_once("../../app/models/admin.class.php");
try{
	$usuario = new Administrador;
	if($usuario->getUsuarios()){
        Page::showMessage(3, "Hay usuarios disponibles", "login.php");
    }else{
        if(isset($_POST['registrar'])){
            $_POST = $usuario->validateForm($_POST);
            if($usuario->setNombres($_POST['nombre'])){
                if($usuario->setApellidos($_POST['apellidos'])){
                    if($usuario->setCorreo($_POST['correo'])){
                        if($usuario->setTelefono($_POST['telefono'])){
                            if($_POST['clave1'] == $_POST['clave2']){
                                if($usuario->setClave($_POST['clave1'])){
                                    if($usuario->createUsuario()){
                                        Page::showMessage(1, "Usuario registrado", "login.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("Clave menor a 8 caracteres");
                                }
                            }else{
                                throw new Exception("Claves diferentes");
                            }
                        }else{
                            throw new Exception("Telefono incorrecto");
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
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/cuenta/register_view.php");
?>