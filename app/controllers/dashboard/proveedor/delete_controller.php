<?php
require_once("../../app/models/proveedor.class.php");
try{
	if(isset($_GET['id'])){
		$proveedor = new Proveedor;
		if($proveedor->setId($_GET['id'])){
			if($proveedor->readProveedor()){
				if(isset($_POST['eliminar'])){
					if($proveedor->deleteProveedor()){
							Page::showMessage(1, "Proveedor eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Proveedor inexistente");
			}
		}else{
			throw new Exception("Proveedor incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione Proveedor", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/proveedor/delete_view.php");
?>