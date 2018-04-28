<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar tipos de usuario");
require_once("../../app/controllers/dashboard/tipousuario/index_controller.php");
Page::templateFooter();
?>