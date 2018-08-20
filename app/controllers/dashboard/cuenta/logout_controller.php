<?php
require_once("../../app/models/admin.class.php");
$object = new Administrador;


    $object->setId($_SESSION['id_admin']);

    $object->quitarlogin();

    unset($_SESSION['id_admin'] );
    unset($_SESSION['correo_admin']);
    unset($_SESSION['nombre_admin']);
    unset($_SESSION['id_tipousuario']);

    $_SESSION['intentos_admin'] = 0;
    Page::showMessage(1, "Autenticación eliminada", "login.php");

?>