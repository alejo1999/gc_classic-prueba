<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar Comentario");
require_once("../../app/controllers/dashboard/producto/deletecomentario_controller.php");
Page::templateFooter();
?>