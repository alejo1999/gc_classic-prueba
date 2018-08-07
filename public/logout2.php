<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Cerrar sesión");
require_once("../app/controllers/public/cuenta/logout_controller_security.php");
Page::templateFooter();
?>