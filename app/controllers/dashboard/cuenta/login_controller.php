<?php
require_once("../../app/models/admin.class.php");
try{
	$object = new Administrador;
	if($object->getUsuarios()){
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setCorreo($_POST['correo'])){
				if($object->checkCorreo()){
					if($object->checkNombre()){
						if($object->checkTipo()){
							if($object->setClave($_POST['clave'])){
								if($object->checkPassword()){
									$_SESSION['id_admin'] = $object->getId();
									$_SESSION['correo'] = $object->getCorreo();
									$_SESSION['nombre'] = $object->getNombres();
									$_SESSION['id_tipousuario'] = $object->getTipousuario();
									Page::showMessage(1, "Autenticación correcta", "index.php");
								}else{
									throw new Exception("Clave inexistente");
								}
							}else{
								throw new Exception("Clave menor a 8 caracteres");
							}
						}else{

						}
					}else{
						throw new Exception("Nombre inexistente");
					}
				}else{
					throw new Exception("Correo inexistente");
				}
			}else{
				throw new Exception("correo incorrecto");
			}
		}
	}else{
		Page::showMessage(3, "No hay administrador disponibles", "register.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/cuenta/login_view.php");
?>