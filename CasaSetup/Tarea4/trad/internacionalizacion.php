<?php
	//session_start();

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