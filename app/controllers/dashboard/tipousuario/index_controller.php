<?php
require_once("../../app/models/tipousuario.class.php");
try{
	$tipousuario = new Tipousuario;
	if(isset($_POST['buscar'])){
		$_POST = $tipousuario->validateForm($_POST);
		$data = $tipousuario->searchTipousuario($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resultados", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $tipousuario->getTipousuarios();
		}
	}else{
		$data = $tipousuario->getTipousuarios();
	}
	if($data){
		require_once("../../app/views/dashboard/tipousuario/index_view.php");
	}else{
		Page::showMessage(3, "No hay categorías disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>