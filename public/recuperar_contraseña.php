<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("");
require_once("../app/controllers/public/cuenta/password_recovery_controller.php");
Page::templateFooter();
?>