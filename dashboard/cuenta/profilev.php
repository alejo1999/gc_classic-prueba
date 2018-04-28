<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader(" Perfil");
require_once("../../app/controllers/dashboard/cuenta/profile2_controller.php");
Page::templateFooter();
?>