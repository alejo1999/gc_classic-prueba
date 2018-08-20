<?php
require_once("../../app/models/tipousuario.class.php");
try{
	$tipousuario = new Tipousuario;
	
		$data = $tipousuario->getTipousuarios();
	
	if($data){
		require_once("../../app/views/dashboard/permisos/index_view.php");
	}else{
		Page::showMessage(3, "No hay tipo usuario disponible", null);
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../permisos/");
}
?>