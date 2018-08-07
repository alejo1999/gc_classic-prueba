<?php
require_once("../app/models/cliente.class.php");
try{
    if(isset($_POST['cambiar'])){
        $usuario = new Cliente;
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setId($_SESSION['id_cliente'])){
            if($_POST['clave_actual_1'] == $_POST['clave_actual_2']){
                if($usuario->setClave($_POST['clave_actual_1'])){
                    if($usuario->checkPassword()){
                        
                        $hashnuevo = $_POST['clave_nueva_2'];
                        $hashantiguo = $usuario->getClave(); 
                        
                        if($hashantiguo != $hashnuevo){
                            if($_POST['clave_nueva_1'] == $_POST['clave_nueva_2']){
                                if($usuario->setClave($_POST['clave_nueva_1'])){
                                    if($usuario->changePassword()){
                                        
                                        Page::showMessage(1, "Clave cambiada", "index.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("Clave nueva menor a 6 caracteres");
                                }
                            }else{
                                throw new Exception("Claves nuevas diferentes");
                            }    
                        }else if ($hashantiguo == $hashnuevo){
                            throw new Exception("La clave proporcionada es parecida a una utilizada recientemente");
                        }
                        
                    }else{
                        throw new Exception("Clave actual incorrecta");
                    }
                }else{
                    throw new Exception("Clave actual menor a 6 caracteres");
                }
            }else{
                throw new Exception("Claves actuales diferentes");
            }
        }else{
            Page::showMessage(2, "Usuario incorrecto", "index.php");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/public/cuenta/password_view.php");

?>