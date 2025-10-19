<?php

if (isset($_GET["selector"])) {
//Este codigo comprueba si se ha selecionado un valor. Además, el codigo, en caso de no encontrarlo, lo deja como una string vacia.
    $selector = $_GET["selector"];
} else $selector = "";


//Aqui se fija el genero de la pelicula
switch ($selector){
    case "biogf":
        $selector= "Biografía";
        break;
    case "scifi":
        $selector= "Ciencia ficción";
        break;
    case "roman":
        $selector= "Romance";
        break;
    case "drama":
        $selector= "Drama";
        break;
    case "scary":
        $selector= "Thriller";
        break;
    case "fntsy":
        $selector= "Fantasía";
        break;
    default: break;
};

if (isset($_GET["date"])) {
    $date = $_GET["date"];
} else $date = "";

if (isset($_GET["name"])) {
    $name = $_GET["name"];
} else $name = "";

function checker(){
    global $selector, $date, $name;
    if (($selector == "") and ($date == "") and ($name == ""))
        return true;
    return false;
}

function comprobador(){
    global $selector, $date, $name;
    $it =0;
    if (!($selector == ""))
        $it+=1;
    if (!($date == ""))
        $it +=2;
    if (!($name == ""))
        $it+= 4;
    return $it;

}
//Originalmente, hacia solo esto.
//$selector = $_GET["selector"];
//switch()...
//$date = $_GET["date"];
//$name = $_GET["name"];

$peliculas = [
    ["titulo" => "El editor de libros", "año" => 2016, "director" => "Michael Grandage", "actores" => "Colin Firth, Jude Law, Nicole Kidman", "genero" => "Biografía"],
    ["titulo" => "Un amor entre dos mundos", "año" => 2012, "director" => "Juan Diego Solanas", "actores" => "Jim Sturgess, Kirsten Dunst, Timothy Spall", "genero" => "Ciencia ficción"],
    ["titulo" => "Una cuestión de tiempo", "año" => 2013, "director" => "Richard Curtis", "actores" => "Domhnall Gleeson, Rachel McAdams, Bill Nighy", "genero" => "Romance"],
    ["titulo" => "El indomable Will Hunting", "año" => 1997, "director" => "Gus Van Sant", "actores" => "Matt Damon, Robin Williams, Ben Affleck", "genero" => "Drama"],
    ["titulo" => "Descubriendo a Forrester", "año" => 2000, "director" => "Gus Van Sant", "actores" => "Sean Connery, Rob Brown, F. Murray Abraham, Anna Paquin", "genero" => "Drama"],
    ["titulo" => "El club de los poetas muertos", "año" => 1989, "director" => "Peter Weir", "actores" => "Robin Williams, Robert Sean Leonard, Ethan Hawke, Josh Charles", "genero" => "Drama"],
    ["titulo" => "Gattaca", "año" => 1997, "director" => "Andrew Niccol", "actores" => "Ethan Hawke, Uma Thurman, Jude Law, Loren Dean", "genero" => "Ciencia ficción"],
    ["titulo" => "In Time", "año" => 2011, "director" => "Andrew Niccol", "actores" => "Justin Timberlake, Amanda Seyfried, Vincent Kartheiser", "genero" => "Ciencia ficción"],
    ["titulo" => "Una mente maravillosa", "año" => 2001, "director" => "Ron Howard", "actores" => "Russell Crowe, Ed Harris, Jennifer Connelly", "genero" => "Biografía"],
    ["titulo" => "Big Fish", "año" => 2003, "director" => "Tim Burton", "actores" => "Ewan McGregor, Albert Finney, Billy Crudup, Jessica Lange", "genero" => "Drama"],
    ["titulo" => "El club de la lucha", "año" => 1999, "director" => "David Fincher", "actores" => "Edward Norton, Brad Pitt, Helena Bonham Carter", "genero" => "Thriller"],
    ["titulo" => "Eduardo Manostijeras", "año" => 1990, "director" => "Tim Burton", "actores" => "Johnny Depp, Winona Ryder, Dianne Wiest", "genero" => "Fantasía"]
];

$existe = false;

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Catálogo de películas filtrado</title>
        <style>
        #cajaPeque {
            font-size:16px;
            border: solid 2px #46b6acff;
            background-color: #6aeee3ff;
            width: fit-content;
            padding: 2% 2% 2% 2%;
            border-style: double;
            text-align: center;
            margin-top: 2%;

            box-shadow: -10px -5px 5px #466f82;
        }
        #caja {
            font-size:16px;
            border: solid 2px #b98f40;
            background-color: #f5bd55;
            width: fit-content;
            padding: 2% 2% 2% 2%;
            border-style: double;
            text-align: center;
            margin-top: 2%;

            align-self: center;

            justify-items: center;

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
    </head>
    <body>
    <div id="big">
        <h1>Catálogo de películas</h1>
        <div id="caja">
            <?php foreach($peliculas as $set):
                $mostrar = false;
                    foreach($set as $clave => $cont) {
                        if (checker()){
                            $mostrar = true;
                        } else {
                            switch (comprobador()){
                                default: break;    
                                //Se que esto no es la mejor manera de hacerlo, pero estoy muy cansado :'c
                                case 1: 
                                    if ($set["genero"] == $selector) 
                                        $mostrar = true;
                                    else break;
                                case 2: 
                                    if ($set["año"] == $date) 
                                        $mostrar = true;
                                    else break;
                                case 3: 
                                    if ($set["genero"] == $selector and $set["año"] == $date) 
                                        $mostrar = true;
                                    else break;
                                case 4: 
                                    if (str_contains($set["director"], $name)) 
                                        $mostrar = true;
                                    else break;
                                case 5: 
                                    if ($set["genero"] == $selector and str_contains($set["director"], $name)) 
                                        $mostrar = true;
                                    else break;
                                case 6: 
                                    if ($set["año"] == $date and str_contains($set["director"], $name))
                                        $mostrar = true;
                                    else break;
                                case 7: 
                                    if ($set["genero"] == $selector and $set["año"] == $date and str_contains($set["director"], $name)) 
                                        $mostrar = true;
                                    else break;
                            }
                        }
                    } //echo "<br>"; //Esto separa cada uno de las pelis en su propia caja
                                
                    if ($mostrar):?>
                        <div id="cajaPeque">
                            <?php $existe=true?>
                            <?php foreach($set as $clave => $cont) :?>
                                <?php echo $clave . ": " . $cont . " | ";?>
                            <?php endforeach?>
                        </div>
                    <?php endif?>
                
            <?php endforeach?>
            <?php if (!$existe){
                        echo "Lo sentimos; pero no hay nada que cumpla con sus requisitos";
                        echo '<br>';
                    }?>
            <br>
            <button type="button" onclick="location.href='index.php'">Volver al filtro</button>
        </div>
    </div>
    

    </body>
</html>