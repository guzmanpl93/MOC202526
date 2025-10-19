<?php
    $nombre = $_GET["nombre"] ?? ""; 
    echo "Nombre: " . $nombre;

?>

<html>
<head>

</head>

<body>
    <form action="index.php" method="GET">
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">
</body>

</html>