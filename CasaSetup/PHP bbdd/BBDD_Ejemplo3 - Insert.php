<?php

    //Creamos la conexión (si ya la tenemos hecah de antes, no hace falta. Lo suyo sería itenerla en un fichero a parte y hacer un require)
    $servidor = "localhost";
    $puerto = 8081; //Puerto que pusimos en Docker para dsplegar la BBDD
    $usuario = "root";
    $contrasena = "";
    $nombre_de_la_bbdd = "bbdd_ejemplo";

    $conexion = new mysqli($servidor, $usuario, $contrasena, $nombre_de_la_bbdd, $puerto);

    if($conexion->connect_error)
        echo "Conexión error:" . $conexion->connect_error . "<br>";
    else   
        echo "Conectado con éxito" . "<br>";

    //Creamos los datos a insertar y hacemos una consulta insert

    $nombre = "Pepe";
    $apellidos = "Pérez";
    $edad = "30";

    $consulta = "INSERT INTO usuarios (nombre, apellidos, edad) VALUES ('$nombre', '$apellidos', '$edad')";

    //Ejecutamos la consulta de inserción

    $resultado = $conexion->query($consulta);

    if ($resultado == TRUE) {
        echo "Insertado con éxito";
    } else {
        echo "Error en la inserción: " . $conexion->error;
    }

    //Cerramos la conexión
    $conexion->close();

?>