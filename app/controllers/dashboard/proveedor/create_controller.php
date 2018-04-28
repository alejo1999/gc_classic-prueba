<?php
require_once("../../app/models/proveedor.class.php");
try{
    $proveedor = new Proveedor;
    if(isset($_POST['crear'])){
        $_POST = $proveedor->validateForm($_POST);
        if($proveedor->setNombre($_POST['nombre'])){
            if($proveedor->setCorreo($_POST['correo'])){
                if($proveedor->setTelefono($_POST['telefono'])){
                    if($proveedor->createProveedor()){
                        Page::showMessage(1, "Proveedor creado", "index.php");
                    }else{
                        throw new Exception(Database::getException());
                        }
                }else{
                    throw new Exception("Telefono incorrecta");
                }
            }else{
                throw new Exception("Correo incorrecta");
            }            
        }else{
            throw new Exception("Nombre incorrecto");
        }        
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/proveedor/create_view.php");
?>