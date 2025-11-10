<?php
/*
En este ejercicio vamos a seguir ampliando el proyecto del catálogo de películas, aplicando los nuevos
conceptos que hemos aprendido sobre variables globales, paso por referencia, funciones, clases, objetos y métodos.

El objetivo es modularizar y mejorar el código para hacerlo más reutilizable, estructurado 
y profesional, sin perder la base de lo que ya tenemos (login, filtros y listado).

- Variables globales -

Crea una variable global que almacene el número de veces que el usuario ha visitado el catálogo durante su sesión.
Incrementa dicha variable desde una función y guarda su nuevo valor en sesión.
Muestra ese número al final del catálogo (por ejemplo: “Has visitado el catálogo 3 veces.”)..

- Paso por referencia -

Crea una función añadirPelicula que reciba el array de películas por referencia y la nueva película a añadir
y lo actualice (es recoger en una función prácticamente la funcionalidad que teníamos antes en el código).
Comprueba que, al añadir una película desde un formulario, esta se guarda en la sesión y se muestra al volver al catálogo.

- Clases y objetos - 

Crea una clase Película con las propiedades título, año, director, actores y género (toda aquella información que tenemos hasta ahora).
Añade un constructor __construct para inicializar los valores.
Crea un método mostrarPelicula() que devuelva la información de la película en formato HTML (una fila de tabla).
Sustituye los arrays de películas por objetos de la nueva clase Película y adapta tu código para trabajar con ellos
(en el foreach podrás llamar a esa nueva función mostrarPelícula).
Añade más funciones a la clase si las consideras necesarias.

- Funciones personalizadas -
También vamos a crear una nueva clase de utilidades con funciones estáticas para recoger algunas 
de nuestras funciones (las que tú creas) y organizar el código. Dentro podría tener:
filtrarPelículas - devuelve un nuevo array con las películas que cumplen los filtros
Y las nuevas funcionalidades añadirPelicula, o incrementarVisitas
*/
include 'usuario.php';

session_start();

require_once 'trad/internacionalizacion.php';

if(!(isset($_SESSION['usuario'])))
    header("Location: login.php");


$titulo = $_SESSION["titulo"] ?? "";
$director = $_SESSION["director"] ?? "";
$año = $_SESSION["año"] ?? "";
$genero = $_SESSION["genero"] ?? "";

$listaPelis = $_SESSION["peliculas"] ?? "";

?>

<html lang="es">
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
                <?php echo $traducciones["title"];?>
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
                        <?php echo $traducciones["ano"];?><input type="number" name="año" value="<?php echo $director;?>">
                        <br><br>
                        <?php echo $traducciones["titulo"];?> <input type="text" name="titulo" value="<?php echo $titulo;?>">
                        <br><br>
                        <?php echo $traducciones["director"];?> <input type="text" name="director" value="<?php echo $director;?>">
                        <br><br>
                        <input type="submit" value="<?php echo $traducciones["filtrar"];?>">
                    </form>
                    <button onclick="location.href='nueva_pelicula.php'"><?php echo $traducciones["sugerencias"];?></button><br><br>
                    <button onclick="location.href='logout.php'"><?php echo $traducciones["logout"];?></button>
                    
            </div>
            <div id="caja">
                <p><?php echo $traducciones["language"]; ?></p>
                <button onclick="location.href='?lang=es'">Español</button><br>
                <button onclick="location.href='?lang=en'">English</button>
            </div>
        </div>
        
    </body>

</html>