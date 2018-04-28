<?php
require_once("../../app/models/tipousuario.class.php");
try{
	if(isset($_GET['id'])){
		$tipousuario = new Tipousuario;
		if($tipousuario->setId($_GET['id'])){
			if($tipousuario->readTipousuario()){
				if(isset($_POST['eliminar'])){
					if($tipousuario->deleteTipousuario()){
							Page::showMessage(1, "tipo usuario eliminado", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Tipo inexistente");
			}
		}else{
			throw new Exception("Tipo incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione Tipo porfavor", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/tipousuario/delete_view.php");
?>