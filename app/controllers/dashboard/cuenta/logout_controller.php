<?php
require_once("../../app/models/admin.class.php");
$object = new Administrador;
if($object->logOut()){
    Page::showMessage(1, "Autenticación eliminada", "login.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "index.php");
}
?>