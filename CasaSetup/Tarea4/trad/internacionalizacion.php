<?php

    //Vale, aqui esta el error
    //No entiendo por que, pero, la ruta que toma el require_once origina desde el archivo que 
    //incluye este archivo, NO este archivo; por tanto, esto debe tener la ruta desde dicho archivo,
    //no desde este
    require_once 'usuario.php';
    //require_once '../usuario'; ---> ASI NO

    if(!(isset($_SESSION['usuario'])))
        header("Location: login.php");
    else if(isset($_SESSION['usuario'])){
	    
    }else
        session_start();
    //Recuperamos el idioma por GET
    $lang = $_GET["lang"] ?? "es";

    //Construir archivo
    $file = "lang/$lang.php";

    //Cargar archivo del idioma
    if (file_exists($file)) {
        require $file;
    } else {
        require "lang/es.php";
    }
	
    // Utiliza los ficheros de idioma adjuntos y modifica el código 
    // de la aplicación para que sea internacionalizada.
    // Para ello, deberás de crear un fichero PHP que reciba la petición del 
    // usuario (GET) y en base a ello seleccione un fichero de idioma u otro.
    // Ese fichero deberá ser incluido en cada una de las páginas de la web,
    //  ya que todas ellas podrán ser internacionalizadas.


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