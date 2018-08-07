<?php
require_once("../../app/models/valoracion.class.php");
try{
	if(isset($_GET['id'])){
		$valoracion = new Valoracion;
		if($valoracion->setId($_GET['id'])){
            if($valoracion->readValoracion()){
                if(isset($_POST['eliminar'])){
                if($valoracion->deleteValoracion()){
                        Page::showMessage(1, "Valoracion eliminada", "index.php");
                }else{
                    throw new Exception(Database::getException());
                }
                 }
                }else{
                    throw new Exception("valoracion incorrecta ");
                }
            }else{
                Page::showMessage(3, "Valoracion inexistente", "index.php");
            }
            
	}else{
		Page::showMessage(3, "Seleccione un comentario", "index.php");
	}
}catch (Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/producto/deletec_view.php");
?>