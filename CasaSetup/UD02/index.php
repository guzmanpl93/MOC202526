<?php

include 'Asignatura.php';

$nombre1 = "Pedro";
$nombre2 = "Pablo";

echo "Su nombre es $nombre1<br>";
echo "Su nombre es $nombre2<br>";

$nombre3 = &$nombre1; //Esto es una referencia a $nombre1; copia su valor Y si es modificado, el origen cambia con este

echo "Su nombre es $nombre3<br>";

$nombre3 = "Diego";

echo "Su nombre es $nombre1<br>";
echo "Su nombre es $nombre3<br>";

function saludo(){
    global $nombre1;
    $nombre1 = "Juan";
    echo "¡Hola $nombre1!<br>";
}

saludo();

echo "Su nombre es $nombre1<br>";

function saludoPar($nombre){
    static $contador = 0; //Este valor se actualiza cada vez que se ejecuta el metodo
    $contador++;
    echo "¡Hola $nombre!<br>";
    if ($contador == 1)
        $string = "vez";
    else $string = "veces";
    echo "Se ha ejecutado este metodo $contador $string<br>";
}

saludoPar("Jorge");
saludoPar($nombre2);

$asignatura1 = new Asignatura("ASETE"); //debes crear una variable para el objeto
echo $asignatura1->mostrarInfo(); //Se accede a funciones de la clase asi

echo Asignatura::aplicador(); //Esto tambien funciona, pero tiene que ser static SI quieres invocarlo desde la clase

?>
<html>
<body>
    <a href="/UD02/Tarea1/">Tarea 1</a>
    <a href="/UD02/Tarea2/">Tarea 2</a>
</body>
</html>