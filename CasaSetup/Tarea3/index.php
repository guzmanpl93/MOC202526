<?php

include 'usuario.php';

session_start();

if(!(isset($_SESSION['usuario'])))
    header("Location: login.php");


$titulo = $_SESSION["titulo"] ?? "";
$director = $_SESSION["director"] ?? "";
$año = $_SESSION["año"] ?? "";
$genero = $_SESSION["genero"] ?? "";

$listaPelis = $_SESSION["peliculas"] ?? "";

?>

<html>
    <head>
        <style>
            #caja {
                font-size:16px;
                border: solid 2px #b98f40;
                background-color: #f5bd55;
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
                ¡Bienvenido, <?php echo $_SESSION['usuario'] . "!";?>
                <br><br>
                    <form action="catalogo.php" method="GET">
        <!--Selected en option?-->
                        <select name="genero">
                            <option value="" <?php if ($genero == "") echo "selected"?>></option>
                            <option value="Biografía" <?php if ($genero == "Biografía") echo "selected"?>>Biografía</option>
                            <option value="Ciencia ficción" <?php if ($genero == "Ciencia") echo "selected"?>>Ciencia ficción</option>
                            <option value="Romance" <?php if ($genero == "Romance") echo "selected"?>>Romance</option>
                            <option value="Drama" <?php if ($genero == "Drama") echo "selected"?>>Drama</option>
                            <option value="Thriller" <?php if ($genero == "Thriller") echo "selected"?>>Thriller</option>
                            <option value="Fantasía" <?php if ($genero == "Fantasía") echo "selected"?>>Fantasía</option>
                        </select>
                        <br>
                        <br>
                        Año: <input type="number" name="año" value="<?php echo $director;?>">
                        <br><br>
                        Titulo: <input type="text" name="titulo" value="<?php echo $titulo;?>">
                        <br><br>
                        Director: <input type="text" name="director" value="<?php echo $director;?>">
                        <br><br>
                        <input type="submit" value="Filtrar">
                    </form>
                    <button onclick="location.href='nueva_pelicula.php'">Enviar sugerencia</button><br><br>
                    <button onclick="location.href='logout.php'">Log Out</button>
            </div>
        </div>
    </body>

</html>