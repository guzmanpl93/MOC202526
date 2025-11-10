<?php

    //Vale, aqui esta el error
    //No entiendo por que, pero, la ruta que toma el require_once origina desde el archivo que 
    //incluye este archivo, NO este archivo; por tanto, esto debe tener la ruta desde dicho archivo,
    //no desde este
    require_once 'usuario.php';
    //require_once '../usuario'; ---> ASI NO

    // if(!(isset($_SESSION['usuario'])))
    //     session_start();
    //     header("Location: login.php");
    // else if(isset($_SESSION['usuario'])){
	    
    // }else
    //Recuperamos el idioma por GET
    if (isset($_GET['lang']))
        $_SESSION['lang'] = $_GET['lang'];
    // $lang = $_GET["lang"] ?? "es";

    $lang = $_SESSION['lang'] ?? "es";
    
    //Construir archivo
    $file = __DIR__ . "/lang/$lang.php";
    //Cargar archivo del idioma
    if (file_exists($file)) {
        require $file;
    } else {
        require "lang/es.php";
    }
	
    
    /*
<!-- <html>
<head>
    <meta charset="UTF-8">
    <title>ASETE</title>
</head>
<body>
    <h1><?php echo $traducciones["title"]; ?></h1>
    <p><?php echo $traducciones["parrafo1"]; ?></p>
    
    <div>
        <p>Idioma actual: <?php echo $traducciones["language"]; ?>:</p>
        <a href="?lang=es">Español</a>
        <a href="?lang=en">English</a>
    </div>
</body>
</html> -->
    */
?>