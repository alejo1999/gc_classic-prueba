<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar administradores");
require_once("../../app/controllers/dashboard/administrador/index_controller.php");
Page::templateFooter();
?>