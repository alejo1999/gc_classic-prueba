<?php
require_once("../app/models/carrito.class.php");
try{
	if(isset($_GET['id'])){
		$detalle = new Detalle;
		if($detalle->setId($_GET['id'])){
            if($detalle->readCarrito()){
                if(isset($_POST['eliminar'])){
                if($detalle->deleteCarrito()){
                        Page::showMessage(1, "producto eliminado", "carrito.php");
                }else{
                    throw new Exception(Database::getException());
                }
                 }
                }else{
                    throw new Exception("detalle incorrecto ");
                }
            }else{
                Page::showMessage(3, "detalle inexistente", "index.php");
            }
            
	}else{
		Page::showMessage(3, "Seleccione un detalle", "index.php");
	}
}catch (Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../app/views/public/producto/deletecarrito_view.php");
?>