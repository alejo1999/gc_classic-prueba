<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar proveedor");
require_once("../../app/controllers/dashboard/tipousuario/delete_controller.php");
Page::templateFooter();
?>