<?php
require_once("../app/models/producto.class.php");
require_once("../app/models/valoracion.class.php");
require_once("../app/models/venta.class.php");
require_once("../app/models/carrito.class.php");
try{
	if(isset($_GET['id'])){
		$producto = new Producto;
		$valoracion = new Valoracion;
		$carrito = new Detalle;
		if($producto->setId($_GET['id'])){
			if($producto->readProducto()){
				if($valoracion->setId_producto($_GET['id'])){
					if($valoracion->checkValoraciones()){
						$comentarios = $valoracion->mostrarComentarios();
						if($comentarios){
							require_once("../app/views/public/producto/detalle_view.php");
						}else{
							require_once("../app/views/public/producto/detalle_view.php");
						}
					}else{
						throw new Exception("valoracion corrupta");
					}
				}else{
					throw new Exception("valoracion erronea");
				}
			}else{
				throw new Exception("Producto inexistente");
			}
		}else{
			throw new Exception("Producto incorrecto");
		}
	}else{
		throw new Exception("Seleccione producto");
	}
	

	$carrito = new Detalle;
	if(isset($_POST['anadircarrito'])){
		$_POST = $carrito->validateForm($_POST);
		if($carrito->setCliente($_SESSION['id_cliente'])){
			if($carrito->setId_producto($_GET['id'])){
				if(($_POST['cantidad'])<=($producto->getExistencia())){
					if($carrito->setCantidad($_POST['cantidad'])){
						$subtotalito = (($carrito->getCantidad())*($producto->getPrecio()));
						if($carrito->setSubtotal($subtotalito)){
							$carritolleno = $carrito->validar_repetido();
							if($carritolleno){
								Page::showMessage(3,"Este producto ya existe en su carrito solo se aumentara la cantidad seleccionada ",null);
								if($carrito->validar_repetido2()){
									$cantidadnueva = (($carrito->getCantidad())+($_POST['cantidad']));
									$subtotalnuevo = (($cantidadnueva)*($producto->getPrecio()));
									if($carrito->setCantidad($cantidadnueva)){
										if($carrito->setSubtotal($subtotalnuevo)){
											if($carrito->modificarrepetido()){
												Page::showMessage(1,"Este producto ya existe en su carrito solo se aumentara la cantidad seleccionada","carrito.php");
											}else{
												Page::showMessage(2,"ocurrio un problema al modificar producto en el carrito",null);
											}
										}else{
											Page::showMessage(2,"nuevo Subtotal incorrecto",null);
										}
									}else{
										Page::showMessage(2,"nueva cantidad incorrecto",null);
									}
								}else{
									Page::showMessage(2,"Error al obtener cantidad anterior",null);
								}
							}else{
								if($carrito->createcarrito()){
								Page::showMessage(1,"Producto agregado  al carrito  SUBTOTAL:$ $subtotalito",null);
								}else{
									Page::showMessage(2,"producto no agregado al carrito",null);
								}
							}
						}else{
							Page::showMessage(2,"Subtotal incorrecto",null);
						}
					}else{
						Page::showMessage(2,"La cantidad Seleccionada es incorrecta",null);
					}
				}else{
					Page::showMessage(3,"La cantidad seleccionada  sobrepasa las existencias ",null);
				}
			}else{
				Page::showMessage(3,"Por favor selecciona  un producto",null);
			}
		}else{
			Page::showMessage(2, "No esta iniciada la sesion",null);
		}
	}

	
	$valoracion = new Valoracion;
	$producto = new Producto;
	$venta = new Venta;
	$detalle = new Detalle;
	if(isset($_POST['crearvaloracion'])){
		$_POST = $valoracion->validateForm($_POST);
		if($detalle->setCliente($_SESSION['id_cliente'])){
			if($detalle->setId_producto($_GET['id'])){
				$ventacliente = $detalle->validarCompra();
				if($ventacliente){
					if($valoracion->setId_usuario($_SESSION['id_cliente'])){
						if($valoracion->setId_producto($_GET['id'])){
							if($valoracion->setValoracion($_POST['estrellas'])){
								if($valoracion->setComentario($_POST['comentario'])){
									if(empty($_SESSION['id_cliente'])){
										throw new Exception("Debe de iniciar sesion para poder valorar los productos");
										}else{
										if($valoracion->createValoracion()){
											
											Page::showMessage(1, "Valoracion creada", null);
										}else{
											Page::showMessage(3, "Valoracion no creada",null);
										}
									}
								}else{
									Page::showMessage(3, "Error en comentario",null);
								}
							}else{
								Page::showMessage(3, "Numero de estrellas es 0",null);
							}
						}else{
							Page::showMessage(3, "Producto no seleccionado",null);
						}
					}else{
						Page::showMessage(3, "No esta iniciada la sesion",null);
					}
				}else{
					Page::showMessage(4, "No puedes valorar un producto que no has comprado regresa cuando lo hayas comprado OK!",null);
				}
			}else{
				Page::showMessage(3, "Primero selecciona un producto",null);
			}
		}else{
			Page::showMessage(3, "Por favor inicia sesion",null);
		}
	}
	else{

	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}
?>