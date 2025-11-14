<?php
session_start();

include 'usuario.php';

include 'Peliculas.php';

if (!(isset($_SESSION['peliculas'])) || $_SESSION["peliculas"] == ""){
    $peliculas = [
        new Pelicula("El editor de libros", 2016, "Michael Grandage", "Colin Firth, Jude Law, Nicole Kidman", "Biografía"),
        new Pelicula("Un amor entre dos mundos", 2012, "Juan Diego Solanas", "Jim Sturgess, Kirsten Dunst, Timothy Spall", "Ciencia ficción"),
        new Pelicula("Una cuestión de tiempo", 2013, "Richard Curtis", "Domhnall Gleeson, Rachel McAdams, Bill Nighy", "Romance"),
        new Pelicula("El indomable Will Hunting", 1997, "Gus Van Sant", "Matt Damon, Robin Williams, Ben Affleck", "Drama"),
        new Pelicula("Descubriendo a Forrester", 2000, "Gus Van Sant", "Sean Connery, Rob Brown, F. Murray Abraham, Anna Paquin", "Drama"),
        new Pelicula("El club de los poetas muertos", 1989, "Peter Weir", "Robin Williams, Robert Sean Leonard, Ethan Hawke, Josh Charles", "Drama"),
        new Pelicula("Gattaca", 1997, "Andrew Niccol", "Ethan Hawke, Uma Thurman, Jude Law, Loren Dean", "Ciencia ficción"),
        new Pelicula("In Time", 2011, "Andrew Niccol", "Justin Timberlake, Amanda Seyfried, Vincent Kartheiser", "Ciencia ficción"),
        new Pelicula("Una mente maravillosa", 2001, "Ron Howard", "Russell Crowe, Ed Harris, Jennifer Connelly", "Biografía"),
        new Pelicula("Big Fish", 2003, "Tim Burton", "Ewan McGregor, Albert Finney, Billy Crudup, Jessica Lange", "Drama"),
        new Pelicula("El club de la lucha", 1999, "David Fincher", "Edward Norton, Brad Pitt, Helena Bonham Carter", "Thriller"),
        new Pelicula("Eduardo Manostijeras", 1990, "Tim Burton", "Johnny Depp, Winona Ryder, Dianne Wiest", "Fantasía")
    ];
} else {
    $peliculas = unserialize($_SESSION["peliculas"]);
}

$titulo = $_GET["titulo"] ?? "";
$año = $_GET["año"] ?? "";
$director = $_GET["director"] ?? "";
$genero = $_GET["genero"] ?? "";
$accesoCat = $_SESSION["accesoCat"] ?? 0;
$accesoCat++;

$movie = $_POST["titulo"] ?? "";
$year = $_POST["año"] ?? "";
$lead = $_POST["director"] ?? "";
$genre = $_POST["genero"] ?? "";

if (($movie == "") && ($year == "") && ($lead == "") && ($genre == "")){
    //Esto está para los casos que se acceda a esta pagina sin ser desde el formulario, para que no haga nada.
} else if (($movie == "") || ($year == "") || ($lead == "") || ($genre == "")) {
    echo '<p style="color:red">ERROR<br>No se pudo cargar la nueva película';
} else {
    $peliculas[] = [new Pelicula($movie, $year, $lead, "Colin Firth, Jude Law, Nicole Kidman", $genre)];
}

$_SESSION["titulo"] = $titulo;
$_SESSION["año"] = $año;
$_SESSION["director"] = $director;
$_SESSION["genero"] = $genero;
$_SESSION["peliculas"] = serialize($peliculas);
$_SESSION["accesoCat"] = $accesoCat++;

$i =0;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Catálogo de películas filtrado</title>
        <style>
            #caja {
                font-size:16px;
                border: solid 2px #b98f40;
                background-color: #f5bd55;
                width: fit-content;
                padding: 2% 2% 2% 2%;
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
                text-align: center;
                align-self: center;
                
                width: 100%;

                justify-items: center;
            }
            </style>
    </head>
    <body id="big">

    <h1>Catálogo de películas</h1>
        <div id="caja">
            Veces que has visitado esta pagina:
            <?php echo $_SESSION["accesoCat"]?><br><br>
            Filtros actuales:<br>
            <?php
            $unit =0;
                for ($i =0; $i< 4; $i++) {
                    switch ($i){
                        default: 
                            if (!($titulo == "")){
                                echo "Título: " . $titulo . "<br>";
                            $unit++;
                            }
                            break;
                        case 1:
                            if (!($año == "")){
                                echo "Año: " . $año . "<br>";
                            $unit++;
                            }
                            break;
                        case 2:
                            if (!($director == "")){
                                echo "Director: " . $director . "<br>";
                                $unit++;
                            }
                            break;
                        case 3:
                            if (!($genero == "")){
                                echo "Género: " . $genero . "<br>";
                                $unit++;
                            }
                            break;
                    }
                    
                }
                if ($unit ==0){
                    echo "<br>No hay filtros actualmente seleccionados";
                }
                ?>
        </div>
        <br>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Año</th>
            <th>Director</th>
            <th>Actores</th>
            <th>Género</th>
        </tr>
        <?php $contador =0;?>
        <?php foreach($peliculas as $pelicula): ?>
            <?php if(($pelicula->getGenero() == $genero || $genero == "") &&
            ($pelicula->getAno() == $año || $año == "") &&
            (str_contains($pelicula->getDirector(), $director) || $director == "") &&
            ($pelicula->getTitulo() == $titulo|| $titulo == "")): ?>
            <?php $contador++;?>
            <?php echo $pelicula->mostrarPelicula();?>
            <?php endif;?>
        <?php endforeach;?>
        <?php if ($contador ==0):?>
            <td>Lo sentimos; pero no pudimos encontrar lo que buscas</td>
        <?php else:?>
            <td>Numero de resultados: <?php echo $contador;?></td>
        <?php endif;?>
            <!-- Este codigo es de test
            echo Pelicula::mostrarPeliculaSt("Jaws",1975,"Steven Spielberg", "Roy Scheider, Richard Dreyfuss, Robert Shaw","Thriller") -->
    </table>
    
    <br>
    <button onclick="location.href='index.php'">Ir al filtro</button><br><br>
    <button onclick="location.href='logout.php'">Log Out</button>

    <!--<a href="filtro.php">Volver al formulario</a>-->

    </body>
</html>