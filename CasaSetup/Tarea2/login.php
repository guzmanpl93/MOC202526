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



?>