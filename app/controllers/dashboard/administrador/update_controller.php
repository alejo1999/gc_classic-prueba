<?php
require_once("../../app/models/admin.class.php");
try{
    if(isset($_GET['id'])){
        $admin = new Administrador;
        if($admin->setId($_GET['id'])){
            if($admin->readUsuario()){
                if(isset($_POST['actualizar'])){
                    $_POST = $admin->validateForm($_POST);
                    if($admin->setNombres($_POST['nombres'])){
                        if($admin->setApellidos($_POST['apellidos'])){
                            if($admin->setCorreo($_POST['correo'])){
                                if($admin->setTelefono($_POST['telefono'])){
                                    if($admin->setTipousuario($_POST['tipousuario'])){
                                        if($admin->updateUsuario()){
                                            Page::showMessage(1, "Usuario modificado", "index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("tipo usuario incorrecto incorrecto");
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
            }else{
                Page::showMessage(2, "Usuario inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Usuario incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione usuario", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/administrador/update_view.php");
?>