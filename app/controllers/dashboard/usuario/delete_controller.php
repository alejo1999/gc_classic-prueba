<?php
require_once("../../app/models/cliente.class.php");
try{
	if(isset($_GET['id'])){
		$categoria = new Cliente;
		if($categoria->setId($_GET['id'])){
			if($categoria->readCliente()()){
				if(isset($_POST['eliminar'])){
					if($categoria->deleteCliente()()){
							Page::showMessage(1, "Categoría eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Categoría inexistente");
			}
		}else{
			throw new Exception("Categoría incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione categoría", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/categoria/delete_view.php");
?>