<?php

    session_start();

    session_unset(); //Borrar variables, deja iniciada la sesión
    session_destroy(); //Cierra la session

    header("Location: login.php");


?>
