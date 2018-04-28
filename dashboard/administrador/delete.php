<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar Usuario");
require_once("../../app/controllers/dashboard/administrador/delete_controller.php");
Page::templateFooter();
?>