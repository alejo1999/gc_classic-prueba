<?php
require_once("../../app/models/venta.class.php");
try{
	$venta = new Venta;
	if($venta->setCliente($_GET['id'])){
        $data = $venta->ventasPublic();
        if($data){
		    require_once("../../app/views/dashboard/usuario/compras_view.php");
        }else{
            Page::showMessage(4, "No hay compras disponibles", "index.php");
        }
    }else{
        
    }
		
	
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
?>