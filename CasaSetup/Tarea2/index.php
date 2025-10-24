<?php

include 'usuario.php';

session_start();

if(!(isset($_SESSION['usuario'])))
    header("Location: login.php");

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
                    <form action="catalogo.php" method="GET">
                        <select name="genero">
                            <option value=""></option>
                            <option value="Biografía">Biografía</option>
                            <option value="Ciencia ficción">Ciencia ficción</option>
                            <option value="Romance">Romance</option>
                            <option value="Drama">Drama</option>
                            <option value="Thriller">Thriller</option>
                            <option value="Fantasía">Fantasía</option>
                        </select>
                        <br>
                        <br>
                        Año: <input type="number" name="año">
                        <br><br>
                        Titulo: <input type="text" name="titulo">
                        <br><br>
                        Director: <input type="text" name="director">
                        <br><br>
                        <input type="submit" value="enviar">
                    </form>
                    <button onclick="location.href='logout.php'">Volver</button>
            </div>
        </div>
    </body>

</html>