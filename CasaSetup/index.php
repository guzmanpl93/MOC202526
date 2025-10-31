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
    $usuarios = [
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

        $nombreIn = $_GET["nombre"] ?? ""; 

?>
<html>
    <header>
        <style>
            .admin{
                color: blue;
            }
            .cliente{
                color: red;
            }
        </style>
    </header>
    <body>
    <h1>Hola</h1>
    <p>Bienvenido a la pagina</p>
    <a href="/Tarea4/">Link</a>
    <?php foreach($usuarios as $owner):?> <!-- OJO! NECESITA HABER : DESPUES DE UN FOREACH-->
        <?php if($nombreIn == $usuario["nombre"]): ?>
            <p style="color: lime">Este eres tu</p>
            <?php endif?>
        <div class="<?php echo $owner["tipo_usuario"]?>">
            <p>Nombre: <?php echo $owner["nombre"];?></p>
            <p>Correo: <?php echo $owner["correo"];?></p>
            <p>Edad: <?php echo $owner["edad"];?></p>
    <?php endforeach; ?>

    <!--<?php //if($usuarios[2]["tipo_usuario"] == "admin"): ?>

            <p style="color:light blue;"> Eres admin</p>
            <p>Hola admin</p>
        <?php// else: ?>
            <p style="color:red;"> Eres cliente</p>
            <p>Hola cliente</p>
        <?php //endif; ?>
    <h1>Usuario</h1>
    <p>Nombre: <?php //echo $usuarios[2]["nombre"]?></p>
    <p>Correo: <?php// echo $usuarios["correo"]?></p>
    <p>Edad: <?php// echo $usuarios["edad"]?></p>

    <?php //if($usuarios[2]["tipo_usuario"] == "admin"): ?>
        <p style="light blue;"> Eres admin</p>

    <?php// else: ?>
        <p style="red;"> Eres cliente</p>

    <?php //endif; ?>-->
    </body>

</html>