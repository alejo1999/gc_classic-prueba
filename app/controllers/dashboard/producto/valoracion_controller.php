<?php
require_once("../../app/models/valoracion.class.php");
try{
	$producto = new Valoracion;
    
    if($producto->setId_producto($_GET['id'])){
        $data = $producto->getValoracionporproducto();
    }else{
        Page::showMessage(4, "Selecciona producto", "index.php");
    }
    
		
	if($data){
		require_once("../../app/views/dashboard/producto/comentarios_view.php");
	}else{
		Page::showMessage(4, "No hay valoraciones disponibles", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../producto/");
}
?>