<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("");
require_once("../app/views/public/sections/parallax-top_view.php");
require_once("../app/controllers/public/producto/productos_controller.php");
Page::templateFooter();
?>