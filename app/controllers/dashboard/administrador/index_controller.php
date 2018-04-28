<?php
require_once("../../app/models/admin.class.php");
try{
	$admin = new Administrador;
	if(isset($_POST['buscar'])){
		$_POST = $admin->validateForm($_POST);
		$data = $admin->searchUsuario($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resultados", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $admin->getUsuarios();
		}
	}else{
		$data = $admin->getUsuarios();
	}
	if($data){
		require_once("../../app/views/dashboard/administrador/index_view.php");
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>