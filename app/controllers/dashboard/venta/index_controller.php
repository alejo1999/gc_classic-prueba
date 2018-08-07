<?php
require_once("../../app/models/venta.class.php");
try{
	$venta = new Venta;
	if(isset($_POST['buscar'])){
		$_POST = $venta->validateForm($_POST);
		$data = $venta->searchVenta($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $venta->getVentas();
		}
	}else{
		$data = $venta->getVentas();
    }
    
	if($data){
		require_once("../../app/views/dashboard/venta/index_view.php");
	}else{
		Page::showMessage(4, "No hay ventas disponibles hola", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>