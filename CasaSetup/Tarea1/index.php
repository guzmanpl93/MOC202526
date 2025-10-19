<?php


?>

<html>
    <head>
<!--
Crea un fichero index.html con un formulario que contenga los siguientes campos:

Un <select> para elegir un género (de los géneros disponibles en el array, por ejemplo: Drama, Ciencia ficción, Fantasía, Romance...).
Un <input type="number"> para filtrar por año exacto.
Un <input type="text"> para filtrar por director (puede ser parte del nombre).
El formulario debe enviar los datos mediante el método GET al archivo catalogo.php.

Utiliza el fichero catalogo.php facilitado y haz que:

Reciba los filtros enviados desde el formulario a través de $_GET.
Muestre en una tabla HTML únicamente las películas que cumplan los filtros seleccionados.
Si no hay filtros, mostrará todas las películas.
Si ningún resultado coincide, mostrará un mensaje del tipo: “No hay películas que cumplan los filtros seleccionados.”
Pista para el filtrado por director:
La función stripos() de PHP busca una cadena dentro de otra sin distinguir mayúsculas/minúsculas.
Devuelve la posición donde se encuentra o false si no la encuentra.
Ejemplo:

stripos("Tim Burton", "burton")  devuelve 4
stripos("Tim Burton", "spielberg")  devuelve false

Ampliaciones opcionales:

Mejorar el estilo de la web para darle la apariencia de un filtro de películas real (CSS al formulario, a la tabla generada tras la búsqueda, etc.)
Añadir un campo de búsqueda de actores.
Mostrar el número total de resultados encontrados.
Permitir que el usuario filtre por más de un género (usando checkboxes en lugar de la lista en selector).
-->
        <style>
            #caja {
                font-size:16px;
                border: solid 2px #b98f40;
                background-color: #f5bd55;
                width: fit-content;
                padding: 0% 2% 0% 2%;
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
                    <p>Selector de Género</p>
                    <select name="selector" id="selector">
                        <option value=""></option>
                        <option value="biogf">Biografía</option>
                        <option value="scifi">Ciencia ficción</option>
                        <option value="roman">Romance</option>
                        <option value="drama">Drama</option>
                        <option value="scary">Thriller</option>
                        <option value="fntsy">Fantasía</option>
                    </select>
                    <br>
                    <p>Fecha de Estreno</p>
                    <input type="text" name="date">
                    <br>
                    <p>Director</p>
                    <input type="text" name="name">
                    <br>
                    <br>
                    <input type="submit">
                </form>
            </div>
        </div>
    </body>
</html>