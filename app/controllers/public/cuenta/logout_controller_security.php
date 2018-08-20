<?php
require_once("../app/models/cliente.class.php");
$object = new Cliente;

    unset($_SESSION['id_cliente'] );
    unset($_SESSION['correo_cliente']);
    unset($_SESSION['nombre_cliente']);
    $_SESSION['intentos'] = 0;

    Page::showMessage(3, "Sesion Cerrada por inactividad ", "login.php");



?>