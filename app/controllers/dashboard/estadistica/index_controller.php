<?php 
require_once('../../app/models/carrito.class.php');
try{
	$estadisticas = new Detalle;
    
    if($estadisticas->getVentasTotales100() && $estadisticas->getClientesTotales100() && $estadisticas->getComentariosTotales100()){
        
        require_once('../../app/views/dashboard/Estadistica/index_view.php');
    }else{

    }
    
    if(isset($_POST['reporte_rango'])){
        $_POST = $estadisticas->validateForm($_POST);
        $fechainicio = ($_POST['fecha1']);
        $fechafin = ($_POST['fecha2']);
        Page::showMessage(1,"Reporte creado","../../views/dashboard/Estadistica/reporte_ventas_rangos.php?fecha1=$fechainicio&fecha2=$fechafin");
        
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
require_once('../../app/views/dashboard/Estadistica/index_view.php');
?>