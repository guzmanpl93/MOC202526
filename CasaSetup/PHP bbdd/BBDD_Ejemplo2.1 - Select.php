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

    //Ejemplo de select sencillo
    $consulta = "SELECT id, nombre, apellidos, edad FROM usuarios";  

    $resultado = $conexion->query($consulta);

    //Comprobamos si la consulta devolvió resultados. Si no, no hace falta hacer nada...
    if ($resultado->num_rows > 0) {
        //Si hay resultados, los guardamos todos en una variable registros
        $registros = $resultado->fetch_all(MYSQLI_ASSOC);
        echo print_r($registros);

        //Y recorremos el array de registros con un foreach (igual que hacíamos cno las películas pero dentro de PHP)
        foreach ($registros as $registro) {
            echo print_r($registro) . "<br>";  //Mostrar la línea entera
            echo $registro["nombre"] . "<br>"; //Mostrar un sólo dato del array
            //Esto es un ejemplo, sólo lo muestro, pero vosotrso deberéis hacer el resto de lógica 
        }
    } else {
        echo "No se encontraron resultados." . "<br>";
    }

    //Cerramos la conexión
    $conexion->close();



?>