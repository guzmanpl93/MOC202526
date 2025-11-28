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

    //ID del usuario que queremos eliminar
    //Esto es un ejemplo, habitualmente cogeremos el que recibimos del POST, o el 
    //que consultamos de BBDD a partir de un nombre recibido
    //**Podeis hacerlo para un nuevo formulario de borrar películas
    $id = 1; //Por ejemplo, eliminar el usuario con id = 1


    $consulta = "DELETE FROM ALUMNO WHERE id = $id";

    //Ejecutar la consulta y comprobar si se borró el registro
    $resultado = $conexion->query($consulta);

    if ($resultado == true) {
        echo "Registro eliminado.";
    } else {
        echo "Error al eliminar el registro: " . $conexion->error;
    }

    //Cerrar la conexión
    $conexion->close();

?>
