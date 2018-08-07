<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Estadisticas");
require_once("../../app/controllers/dashboard/estadistica/index_controller.php");
Page::templateFooter();
?>