<?php
require_once("../../app/models/admin.class.php");
try{
    $admin = new Administrador;
    if(isset($_POST['crear'])){
        $_POST = $admin->validateForm($_POST);
        if($admin->setNombres($_POST['nombres'])){
            if($admin->setApellidos($_POST['apellidos'])){
                if($admin->setCorreo($_POST['correo'])){
                    if($admin->setTelefono($_POST['telefono'])){
                        if($_POST['clave1'] == $_POST['clave2']){
                            if($admin->setClave($_POST['clave1'])){
                                if($admin->setTipousuario($_POST['tipousuario'])){
                                    if($admin->createUsuario()){
                                        Page::showMessage(1, "Usuario creado", "index.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("seleccione un tipo de usuario");
                                }
                            }else{
                                throw new Exception("Clave menor a 8 caracteres");
                            }
                        }else{
                            throw new Exception("Claves diferentes");
                        }                        
                    }else{
                        throw new Exception("telefono incorrecto");
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
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/administrador/create_view.php");
?>