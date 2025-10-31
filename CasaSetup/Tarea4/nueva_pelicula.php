<?php

include 'usuario.php';

session_start();

if(!(isset($_SESSION['usuario'])))
    header("Location: login.php");

/*
$titulo = $_SESSION["titulo"] ?? ""; 
$director = $_SESSION["director"] ?? "";
$año = $_SESSION["año"] ?? "";
$genero = $_SESSION["genero"] ?? ""; */

?>

<html>
    <head>
        <style>
            #caja {
                font-size:16px;
                border: solid 2px #77ae00ff;
                background-color: #009a4dff;
                width: fit-content;
                padding: 2% 2% 1% 2%;
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
                <form action="catalogo.php" method="POST">
        <!--Selected en option?-->
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
                        <input type="submit" value="Enviar" name="enviar">
                    </form>
                    <button onclick="location.href='catalogo.php'">Volver al catalogo</button>
                    <button onclick="location.href='index.php'">Volver al filtro</button>
                    <button onclick="location.href='logout.php'">Log Out</button>
                    
            </div>
        </div>
    </body>
</html>