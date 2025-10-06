<?php
    //$tipo_ususario = "admin";
/*
    $usuarios = ["Guzman","Pedro", "Ana"];
    foreach($usuarios as $usuario){
        echo $ususario;
    }

    $usuario = [
        "nombre" => "Ana",
        "correo" => "ana@ana.es",
        "edad" => 23,
        "tipo_usuario" => "admin"
    ];

    */
    $usuarios2 = [
        [
       "nombre" => "Ana",
        "correo" => "ana@ana.es",
        "edad" => 23,
        "tipo_usuario" => "admin" 
        ],
        [
       "nombre" => "Diego",
        "correo" => "dgo@dgo.es",
        "edad" => 43,
        "tipo_usuario" => "cliente" 
        ],
        [
       "nombre" => "Guzman",
        "correo" => "gman@gman.es",
        "edad" => 19,
        "tipo_usuario" => "admin" 
        ]
        ];

?>
<html>
    <body>
    <h1>Hola</h1>
    <p>Bienvenido a la pagina</p>

    <?php foreach ($usuarios2 as $owner)?>
        <p>Nombre: <?php echo $owner["nombre"]?></p>
        <p>Correo: <?php echo $owner["correo"]?></p>
        <p>Edad: <?php echo $owner["edad"]?></p>
        

    <!--<h1>Usuario</h1>
    <p>Nombre: <?php echo $usuarios2[2]["nombre"]?></p>
    <p>Correo: <?php echo $usuarios2["correo"]?></p>
    <p>Edad: <?php echo $usuarios2["edad"]?></p>

    <?php if($usuarios2[2]["tipo_usuario"] == "admin"): ?>
        <p style="light blue;"> Eres admin</p>

    <?php else: ?>
        <p style="red;"> Eres cliente</p>

    <?php endif; ?>-->
    </body>

</html>