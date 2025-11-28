<?php

    //Mismo ejemplo pero en este voy a filtraros la consulta con un par de parámetros (como hacíamos en los filtros de películas)
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

    //Parámetros recibidos (es un ejemplo)
    $edad = 18;
    $apellido = "Sánchez";

    //Consulta con placeholders para los parámetros
    $consulta = "SELECT id, nombre, apellidos, edad FROM usuarios WHERE edad >= ? AND apellidos = ?";

    $sentencia = $conexion->prepare($consulta);

    //el is indica los parámetros que vamos a recibir, el primero i = integer, el segundo s = string
    $sentencia->bind_param("is", $edadMinima, $apellidoFiltro);

    $sentencia->execute();

    $resultado = $sentencia->get_result();

    //Toda esta parte igual que antes, recuperamos los datos y trabajamos con ellos...
    if($resultado->num_rows > 0) {
        $registros = $resultado->fetch_all(MYSQLI_ASSOC);
        print_r($registros);

        foreach ($registros as $registro) {
            echo $registro["nombre"] . "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }

    $sentencia->close();
    $conexion->close();

?>