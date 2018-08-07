<?php
require_once("../../app/models/cliente.class.php");
try{
    if(isset($_GET['id'])){
        $admin = new Cliente;
        if($admin->setId($_GET['id'])){
            if($admin->readCliente()){
                if(isset($_POST['actualizar'])){ 
                    $_POST = $admin->validateForm($_POST);
                    if($admin->setNombres($_POST['nombres'])){
                        if($admin->setApellidos($_POST['apellidos'])){
                            if($admin->setCorreo($_POST['correo'])){
                                if($admin->setTelefono($_POST['telefono'])){
                                    if($admin->setEstado(isset($_POST['estado'])?1:0)){
                                        if($admin->updateCliente()){
                                            Page::showMessage(1, "Usuario modificado", "index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("Estado incorrecto");
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

                if(isset($_POST['desbloquear'])){
                    $_POST = $admin->validateForm($_POST);

                    $admin->changefecha_bloqueo();
                    Page::showMessage(1, "Cliente desbloqueado ", "index.php");

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
require_once("../../app/views/dashboard/usuario/update_view.php");
?>