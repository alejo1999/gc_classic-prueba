<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Bienvenido");
require_once("../../app/controllers/dashboard/cuenta/index_controller.php");
Page::templateFooter();
?>