<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar Tipo usuario");
require_once("../../app/controllers/dashboard/tipousuario/update_controller.php");
Page::templateFooter();
?>