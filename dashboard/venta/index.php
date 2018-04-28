<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Ventas");
require_once("../../app/controllers/dashboard/venta/index_controller.php");
Page::templateFooter();
?>