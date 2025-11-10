<?php

	//Vale, aqui esta el error
    //No entiendo por que, pero, la ruta que toma el require_once origina desde el archivo que 
    //incluye este archivo, NO este archivo; por tanto, esto debe tener la ruta desde dicho archivo,
    //no desde este
    require_once 'usuario.php';
    //require_once '../usuario'; ---> ASI NO

	$traducciones = [
		"language" => "Current language: English",
		"parrafo1" => "Subject website.",
		"title" => "Welcome, " . $_SESSION['usuario'] . "!",
		"ano" => "Year: ",
		"titulo" => "Title: ",
		"director" => "Director: ",
		"filtrar" => "Filter",
		"Sugerencias" => "Send recommendations",
		"logout" => "Log out",
		"user" => "User: ",
		"psswd" => "Password: "
	];
?>