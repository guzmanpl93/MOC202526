<?php

    $servidor = "localhost";
    $puerto = 8081; //Puerto que pusimos en Docker para dsplegar la BBDD
    $usuario = "root";
    $contrasena = "";
    $nombre_de_la_bbdd = "bbdd_ejemplo"; //Nombre de la Base de Datos en PHPMyAdmin dentro de Docker

    $conexion = new mysqli($servidor, $usuario, $contrasena, $nombre_de_la_bbdd, $puerto);

    if($conexion->connect_error)
        echo "Conexión error:" . $conexion->connect_error;
    else   
        echo "Conectado sin error";

?>