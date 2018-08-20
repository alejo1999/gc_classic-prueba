<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("");
require_once("../../app/controllers/dashboard/cuenta/password_recovery_controller.php");
Page::templateFooter();
?>