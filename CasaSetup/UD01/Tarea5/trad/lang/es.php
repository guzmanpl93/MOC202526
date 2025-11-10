<?php

	//Vale, aqui esta el error
    //No entiendo por que, pero, la ruta que toma el require_once origina desde el archivo que 
    //incluye este archivo, NO este archivo; por tanto, esto debe tener la ruta desde dicho archivo,
    //no desde este
    require_once 'usuario.php';
    //require_once '../usuario'; ---> ASI NO

	$usercheck = $_SESSION["usuario"] ?? "";

	$traducciones = [
		"language" => "Idioma actual: Español",
		"parrafo1" => "Página web de la asignatura.",
		"title" => "¡Bienvenido, " .  $usercheck . "!",
		"ano" => "Año: ",
		"titulo" => "Titulo: ",
		"director" => "Director: ",
		"filtrar" => "Filtrar",
		"sugerencias" => "Enviar sugerencia",
		"logout" => "Log out",
		"user" => "Usuario: ",
		"psswd" => "Contraseña: ",
		"volverc" => "Volver al catálogo",
		"volverf" => "Volver al filtro",
		"error" => "¡Error!<br>Usuario u contraseña incorrectas."
	];
?>