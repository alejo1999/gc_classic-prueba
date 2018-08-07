<?php
require_once("../app/models/venta.class.php");
try{
	$venta = new Venta;
	if($venta->setCliente($_SESSION['id_cliente'])){
        $data = $venta->ventasPublic();
        if($data){
		require_once("../app/views/public/cuenta/ventas_view.php");
        }else{
            Page::showMessage(4, "No hay ventas disponibles", "create.php");
        }
    }else{
        
    }
		
	if($data){
		require_once("../app/views/public/cuenta/ventas_view.php");
	}else{
		Page::showMessage(4, "No hay ventas disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
?>