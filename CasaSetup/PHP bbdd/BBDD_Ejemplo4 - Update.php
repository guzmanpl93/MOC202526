<?php

    //Creamos la conexión (si ya la tenemos hecah de antes, no hace falta. Lo suyo sería itenerla en un fichero a parte y hacer un require)
    $servidor = "localhost";
    $puerto = 8081;
    $usuario = "root";
    $contrasena = "";
    $nombre_de_la_bbdd = "bbdd_ejemplo"; 

    $conexion = new mysqli($servidor, $usuario, $contrasena, $nombre_de_la_bbdd, $puerto);

    if($conexion->connect_error)
        echo "Conexión error:" . $conexion->connect_error . "<br>";
    else   
        echo "Conectado con éxito" . "<br>";

    //Datos que queremos actualizar y el usuario o alujmno del que queremos hacerlo
    $id = 1; //ID del alumno a actualizar
    $nombre = "Juan"; //Nuevo nombre
    $edad = 33; //Nueva edad

    $consulta = "UPDATE ALUMNO SET nombre = '$nombre', edad = '$edad' WHERE id = $id";

    //Ejecutar la consulta y comprobar si el resultado es correcto
    $resultado = $conexion->query($consulta);

    if ($resultado == TRUE) {
        echo "Registro actualizado .";
    } else {
        echo "Error al actualizar el registro: " . $conexion->error;
    }

    //Cerrar la conexión
    $conexion->close();

?>
