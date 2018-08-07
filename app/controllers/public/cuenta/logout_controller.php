<?php
require_once("../app/models/cliente.class.php");
$object = new Cliente;

if($object->logOut()){
    Page::showMessage(1, "Sesion Cerrada", "login.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "index.php");
}



?>