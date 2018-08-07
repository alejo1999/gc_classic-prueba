<?php
require_once("../app/models/carrito.class.php");
require_once("../app/models/producto.class.php");
try{
    if(isset($_GET['id'])){
        $detalle = new Detalle;
        $producto = new Producto;
        if($detalle->setId($_GET['id'])){
            if($detalle->readCarrito()){
                if($producto->setId($detalle->getId_producto())){
                    if($producto->readProducto()){
                        if(isset($_POST['actualizar'])){
                        $_POST = $detalle->validateForm($_POST);
                            if($detalle->setCantidad($_POST['cantidad'])){
                                if(($_POST['cantidad'])<=($producto->getExistencia())){
                                    $newsubtotal = (($_POST['cantidad'])*($producto->getPrecio()));
                                    if($detalle->setSubtotal($newsubtotal)){
                                        if($detalle->updateCarrito()){
                                        Page::showMessage(1, "Carrito modificado", "carrito.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        } 
                                    }else{
                                        Page::showMessage(2, "nuevo subtotal incorrecto", "carrito.php");
                                    }
                                    
                                }else{
                                    Page::showMessage(2, "La cantidad seleccionada excede las existencias", null);
                                }      
                            }else{
                                throw new Exception("cantidad incorrecta");
                            }                    
                        }
                    }else{
                        Page::showMessage(2, "producto inexistente", "carrito.php");
                    }
                }else{
                    Page::showMessage(2, "error al recuperar informcion del producto", "carrito.php");
                }
            }else{
                Page::showMessage(2, "detalle inexistente", "carrito.php");
            }
        }else{
            Page::showMessage(2, "producto incorrecto", "carrito.php");
        }        
    }else{
        Page::showMessage(3, "Seleccione producto", "carrito.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/public/producto/updatecarrito_view.php");
?>