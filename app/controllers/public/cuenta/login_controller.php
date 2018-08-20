<?php
require_once("../app/models/cliente.class.php");
try{
	
	if (!isset($_SESSION['intentos'])) {
		
			$_SESSION['intentos'] = 0; 
		
	}

	$cliente = new Cliente;
	if($cliente->getClientes()){
		if(isset($_POST['iniciar'])){
				
			if($_SESSION['intentos'] < 3){
				
				$_POST = $cliente->validateForm($_POST);
				if($cliente->setCorreo($_POST['correo'])){
					if($cliente->checkCorreo()){

						$loginid = $cliente->getLogin_id();

					if($loginid == 0){
						if($cliente->checkEstado()){
							$estado = $cliente->getEstado();
							if($estado == 0){
								if($cliente->checkfecha_bloqueo()){
									$fechablo = $cliente->getFecha_bloqueo();

									if($fechablo >=1){
										if($cliente->checkNombre()){
											if($cliente->setClave($_POST['clave'])){
												if($cliente->checkPassword()){
													if($cliente->checkfecha_contrasena()){
														$fechapass = $cliente->getFecha_contrasena();

														if($fechapass>=90){
		
															$_SESSION['id_cliente'] = $cliente->getId();
															$_SESSION['correo_cliente'] = $cliente->getCorreo();
															$_SESSION['nombre_cliente'] = $cliente->getNombres();
															
															Page::showMessage(1, "Autenticación correcta La contraseña es antigua, necesita un cambio", "password.php");
														}else if($fechapass<90){
		
															$_SESSION['id_cliente'] = $cliente->getId();
															$_SESSION['correo_cliente'] = $cliente->getCorreo();
															$_SESSION['nombre_cliente'] = $cliente->getNombres();
															
															$cliente->crearlogin();

															Page::showMessage(1, "Autenticación correcta $loginid", "index.php");
														}
													}else{
														throw new Exception("Error en la fecha");
													}
												}else{
													$_SESSION['intentos'] += 1;

													throw new Exception("Clave inexistente intento $_SESSION[intentos] ");
													
												}
											}else{
												throw new Exception("Clave menor a 8 caracteres");
											}
										}else{
											throw new Exception("Nombre inexistente");
										}
									}else if ($fechablo <1){
										throw new Exception("Tu cuenta ha sido bloqueada Temporalmente intenta en unas horas ");
									}
								}else{

								}
							}else{
								throw new Exception("Tu cuenta ha sido bloqueada contacta a GC-classic2018@gmail.com");
							}
						}else{
							throw new Exception("Estado incorrecto");
						}
					}else{
						Page::showMessage(3, "Sesion ya iniciada en otro dispositivo", "index.php");
					}
						
						


					}else{
						throw new Exception("Correo inexistente ");
					}
				}else{
					throw new Exception("correo incorrecto");
				}
			}else if ($_SESSION['intentos'] >=3){

				if($cliente->setCorreo($_POST['correo'])){

					if($cliente->checkCorreo()){
						$_SESSION['intentos'] = 0; 
						$cliente->changefecha_blo();
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
		Page::showMessage(3, "No hay cliente disponible", "register.php");
	}



}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/public/cuenta/login_view.php");
?>