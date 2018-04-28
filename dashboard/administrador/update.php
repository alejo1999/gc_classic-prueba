<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar Administrador");
require_once("../../app/controllers/dashboard/administrador/update_controller.php");
Page::templateFooter();
?>