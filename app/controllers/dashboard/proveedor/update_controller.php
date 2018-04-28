<?php
require_once("../../app/models/proveedor.class.php");
try{
    if(isset($_GET['id'])){
        $proveedor = new Proveedor;
        if($proveedor->setId($_GET['id'])){
            if($proveedor->readProveedor()){
                if(isset($_POST['actualizar'])){
                    $_POST = $proveedor->validateForm($_POST);
                    if($proveedor->setNombre($_POST['nombre'])){
                        if($proveedor->setCorreo($_POST['correo'])){
                            if($proveedor->setTelefono($_POST['telefono'])){
                                if($proveedor->updateProveedor()){
                                    Page::showMessage(1, "Proveedor modificado", "index.php");
                                }else{
                                    throw new Exception(Database::getException());
                                }
                            }else{
                                throw new Exception("Telefono incorrecto");
                            }
                        }else{
                            throw new Exception("Correo incorrecta");
                        }                        
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }                    
                }
            }else{
                Page::showMessage(2, "Categoría inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Categoría incorrecta", "index.php");
        }        
    }else{
        Page::showMessage(3, "Seleccione categoría", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/proveedor/update_view.php");
?>