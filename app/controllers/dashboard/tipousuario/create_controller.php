<?php
require_once("../../app/models/tipousuario.class.php");
try{
    $tipousuario = new Tipousuario;
    if(isset($_POST['crear'])){
        $_POST = $tipousuario->validateForm($_POST);
        if($tipousuario->setNombre($_POST['nombre'])){
            if($tipousuario->createTipousuario()){
                Page::showMessage(1, "Tipo usuario creado", "index.php");
            }else{
                throw new Exception(Database::getException());
                }
        }else{
            throw new Exception("Nombre incorrecto");
        }        
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipousuario/create_view.php");
?>