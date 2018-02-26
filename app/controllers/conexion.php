<?php

    function conectar(){

        $user='root';
        $password='';
        $server='localhost';
        $database='gcclassic-prueba'
        $conect=mysql_connect($server,$user,$password) or die ("error al conectar con la base de datos".mysql_error());

        mysql_select_db($database,$conect);
   
        return $conect;
    }

?>