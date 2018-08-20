<?php
require_once("../../app/models/admin.class.php");
try{

	if (!isset($_SESSION['intentos_admin'])) {
		
		$_SESSION['intentos_admin'] = 0; 
	
	}

	$object = new Administrador;
	if($object->getUsuarios()){
		if(isset($_POST['iniciar'])){

			if($_SESSION['intentos_admin'] < 3){

			$_POST = $object->validateForm($_POST);
			if($object->setCorreo($_POST['correo'])){
				if($object->checkCorreo()){
					if($object->checkNombre()){
						if($object->checkTipo()){
							if($object->setClave($_POST['clave'])){
								if($object->checkPassword()){

									if($object->checkfecha_contrasena()){
										$fechapass = $object->getFecha_contrasena();

										if($fechapass>=90){
		
											$_SESSION['id_admin'] = $object->getId();
											$_SESSION['correo_admin'] = $object->getCorreo();
											$_SESSION['nombre_admin'] = $object->getNombres();
											$_SESSION['id_tipousuario'] = $object->getTipousuario();
											
											Page::showMessage(1, "Autenticación correcta Bienvenido $_SESSION[nombre_admin] La contraseña es antigua, necesita un cambio", "password.php");
										}else if($fechapass<90){

											$_SESSION['id_admin'] = $object->getId();
											$_SESSION['correo_admin'] = $object->getCorreo();
											$_SESSION['nombre_admin'] = $object->getNombres();
											$_SESSION['id_tipousuario'] = $object->getTipousuario();
											
											$cliente->crearlogin();

											Page::showMessage(1, "Autenticación correcta Bienvenido $_SESSION[nombre_admin]", "index.php");
										}
									}else{
										throw new Exception("Error en la fecha");
									}

									
								}else{

									$_SESSION['intentos_admin'] += 1;
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

		}else if ($_SESSION['intentos_admin'] >=3){

			if($object->setCorreo($_POST['correo'])){

				if($object->checkCorreo()){
					$_SESSION['intentos_admin'] = 0; 
					$object->changefecha_blo();
					Page::showMessage(3, "Su cuenta ha sido Bloqueada por 24 horas  ", "login.php");
				}else{
					Page::showMessage(2, "Correo inexistente", "login.php");
				}
			}else{
				throw new Exception("correo incorrecto");
			}
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