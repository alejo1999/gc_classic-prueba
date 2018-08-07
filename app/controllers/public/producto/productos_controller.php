<?php
require_once("../app/models/producto.class.php");
try{
	//cantidad de registros por página
	$por_pagina=4;
	if (isset($_GET["pagina"])) {
	$pagina = $_GET["pagina"];
	}
	else {
	$pagina=1;
	}
	// la pagina inicia en 0 y se multiplica $por_pagina
	$empieza = ($pagina-1) * $por_pagina;
	
	$producto = new Producto;
	if(isset($_GET['id'])){
		if($producto->setCategoria($_GET['id'])){
			$productos = $producto->getCategoriaProductos2($empieza, $por_pagina);
			if($productos){
				require_once("../app/views/public/producto/producto_view.php");
			}else{
				throw new Exception("No hay productos disponibles");
			}
		}else{
			throw new Exception("Categoría incorrecta");
		}
	}else{
		throw new Exception("Seleccione categoría");
	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}
?>