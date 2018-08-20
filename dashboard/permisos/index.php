<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar permisos");
require_once("../../app/controllers/dashboard/permisos/index_controller.php");
Page::templateFooter();
?>