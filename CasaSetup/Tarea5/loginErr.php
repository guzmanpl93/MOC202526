<?php

session_start();

if(isset($_SESSION['usuario'])){
    header("Location: index.php");
}

require_once 'trad/internacionalizacion.php';

?>


<html>
    <head>
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
                <p style="color:red"><?php echo $traducciones["error"]?></p>
                    <form action="procesing.php" method="GET">
                        <?php echo $traducciones["user"];?> <input type="text" name="user">
                        <br><br>
                        <?php echo $traducciones["psswd"];?> <input type="password" name="pass">
                        <br><br>
                        <input type="submit" value="enviar">
                    </form>
            </div>
            <div id="caja">
                <p><?php echo $traducciones["language"]; ?></p>
                <button onclick="location.href='?lang=es'">Español</button><br>
                <button onclick="location.href='?lang=en'">English</button>
            </div>
        </div>
    </body>

</html>