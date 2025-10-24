<?php
/* 
Lo hecho en clase respecto a guardar las preferencias de filtrado.
    Guardar los filtros en sesión cuando llegan a la página catalogo.php.
    Mostrar los filtros (si los hay en sesión) siempre que se muestra la página de filtrado.
Crea un archivo login.php con un formulario que pida usuario y contraseña.
    Define un array asociativo de usuarios y contraseñas en PHP (por ejemplo, "admin" → "1234", "tunombre" → “tucontraseña”).
Al enviar el formulario:
    Si las credenciales son correctas:
        Inicia sesión y guarda las credenciales del usuario (al menos el nombre) en la sesión activa.
        Redirige al catalogo.php.
    Si son incorrectas, muestra un mensaje de error (o redirige a una página de error).
En catalogo.php:
    Comprueba si hay un usuario logueado antes de mostrar el catálogo.
    Almacena los filtros en sesión (de tal forma que, la próxima vez que el usuario viaje a la página, tenga esa información precargada).
Crea un enlace o botón para “Cerrar sesión” que borre toda la sesión).*/

session_start();

if(isset($_SESSION['usuario'])){
    header("Location: index.php");
}

?>


<html>
    <head>
        <style>
            #caja {
                font-size:16px;
                border: solid 2px #b98f40;
                background-color: #f5bd55;
                width: fit-content;
                padding: 2% 2% 0% 2%;
                border-style: double;
                text-align: center;
                margin-top: 2%;

                box-shadow: -10px -5px 5px #466f82;
            }
            #big {
                position:relative;

                margin:0px auto 0px auto;
                padding:0px 0px 700px 0px;
                float: bottom;
                
                align-self: center;
                
                width: 100%;

                justify-items: center;
            }
        </style>
        <title>Buscador de Peliculas</title>
    </head>
    <body>
        <div id="big">  
            <div id="caja">
                    <form action="procesing.php" method="POST">
                        Usuario: <input type="text" name="user">
                        <br><br>
                        Contraseña: <input type="text" name="pass">
                        <br><br>
                        <input type="submit" value="enviar">
                    </form>
            </div>
        </div>
    </body>

</html>

?>