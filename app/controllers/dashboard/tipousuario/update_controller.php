<?php
require_once("../../app/models/tipousuario.class.php");
try{
    if(isset($_GET['id'])){
        $tipousuario = new Tipousuario;
        if($tipousuario->setId($_GET['id'])){
            if($tipousuario->readTipousuario()){
                if(isset($_POST['actualizar'])){
                    $_POST = $tipousuario->validateForm($_POST);
                    if($tipousuario->setNombre($_POST['nombre'])){
                        if($tipousuario->updateTipousuario()){
                            Page::showMessage(1, "Proveedor modificado", "index.php");
                        }else{
                            throw new Exception(Database::getException());
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
require_once("../../app/views/dashboard/tipousuario/update_view.php");
?>