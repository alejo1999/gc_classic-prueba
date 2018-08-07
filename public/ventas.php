<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader(" Mis Compras");
require_once("../app/controllers/public/cuenta/ventas_controller.php");
Page::templateFooter();
?>