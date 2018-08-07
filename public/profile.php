<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Editar perfil");
require_once("../app/controllers/public/cuenta/profile_controller.php");
Page::templateFooter();
?>