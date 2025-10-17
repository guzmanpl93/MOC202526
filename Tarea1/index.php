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

    </head>
    <body>
        <div>
            <select name="selector" id="selector">
                <option value="biogf">Biografía</option>
                <option value="scifi">Ciencia ficción</option>
                <option value="roman">Romance</option>
                <option value="drama">Drama</option>
                <option value="scary">Thriller</option>
                <option value="fntsy">Fantasía</option>

            </select>

        </div>
    </body>
</htm>