<?php
require_once("../../app/models/cliente.class.php");
try{
	$usuario = new Cliente;
	if(isset($_POST['buscar'])){
		$_POST = $usuario->validateForm($_POST);
		$data = $usuario->searchCliente($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resultados", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $usuario->getClientes()();
		}
	}else{
		$data = $usuario->getClientes();
	}
	if($data){
		require_once("../../app/views/dashboard/usuario/index_view.php");
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>