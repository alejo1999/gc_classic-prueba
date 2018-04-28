<?php
require_once("../../app/models/admin.class.php");
try{
	if(isset($_GET['id'])){
		$usuario = new Administrador;
		if($usuario->setId($_GET['id'])){
			if($usuario->readUsuario()){
				if(isset($_POST['eliminar'])){
					if($usuario->deleteUsuario()){
							Page::showMessage(1, "Usuario eliminado", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Usuario inexistente");
			}
		}else{
			throw new Exception("Usuario incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione Usuario", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/Administrador/delete_view.php");
?>