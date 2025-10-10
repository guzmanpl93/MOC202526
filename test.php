<?php

$usuario = [
[
    "nombre" => "Ana",
    "correo" => "ana@ana.es",
    "edad" => 23,
    "rol" => "admin"
],
[
    "nombre" => "Ana2",
    "correo" => "ana2@ana2.es",
    "edad" => 232,
    "rol" => "admin2"
]
];
?>

<html>
    <body>
        <?php 
            foreach($usuario as $set){
                foreach($set as $clave => $valor) {echo $clave . ": " . $valor . " ";} echo "<br>"; }
        ?>
    </body>
</html>