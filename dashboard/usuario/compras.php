<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Compras del Cliente");
require_once("../../app/controllers/dashboard/usuario/compras_controller.php");
Page::templateFooter();
?>