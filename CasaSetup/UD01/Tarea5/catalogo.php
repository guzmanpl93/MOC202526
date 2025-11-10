<?php
include 'usuario.php';

session_start();

if (!(isset($_SESSION['usuario'])) || $_SESSION["peliculas"] == ""){
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
} else {
    $peliculas = $_SESSION["peliculas"];
}

$titulo = $_GET["titulo"] ?? "";
$año = $_GET["año"] ?? "";
$director = $_GET["director"] ?? "";
$genero = $_GET["genero"] ?? "";

$movie = $_POST["titulo"] ?? "";
$year = $_POST["año"] ?? "";
$lead = $_POST["director"] ?? "";
$genre = $_POST["genero"] ?? "";

if (($movie == "") && ($year == "") && ($lead == "") && ($genre == "")){
    //Esto está para los casos que se acceda a esta pagina sin ser desde el formulario, para que no haga nada.
} else if (($movie == "") || ($year == "") || ($lead == "") || ($genre == "")) {
    echo '<p style="color:red">ERROR<br>No se pudo cargar la nueva película';
} else {
    $peliculas[] = ["titulo" => $movie, "año" => $year, "director" => $lead, "actores" => "Colin Firth, Jude Law, Nicole Kidman", "genero" => $genre];
}


$_SESSION["titulo"] = $titulo;
$_SESSION["año"] = $año;
$_SESSION["director"] = $director;
$_SESSION["genero"] = $genero;
$_SESSION["peliculas"] = $peliculas;

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
            <?php if(($pelicula["genero"] == $genero || $genero == "") &&
            ($pelicula["año"] == $año || $año == "") &&
            (str_contains($pelicula["director"], $director) || $director == "") &&
            ($pelicula["titulo"] == $titulo|| $titulo == "")): ?>
            <?php $contador++;?>
            <tr>
                <td><?= $pelicula["titulo"] ?></td><!-- Nota: Funciona como echo, pero puede no ser compatible con algunos servicios-->
                <td><?= $pelicula["año"] ?></td>
                <td><?= $pelicula["director"] ?></td>
                <td><?= $pelicula["actores"] ?></td>
                <td><?= $pelicula["genero"] ?></td>
            </tr>
            <?php endif;?>
        <?php endforeach;?>
        <?php if ($contador ==0):?>
            <td>Lo sentimos; pero no pudimos encontrar lo que buscas</td>
        <?php else:?>
            <td>Numero de resultados: <?php echo $contador;?></td>
        <?php endif;?>
    </table>
    
    <br>
    <button onclick="location.href='index.php'">Ir al filtro</button><br><br>
    <button onclick="location.href='logout.php'">Log Out</button>

    <!--<a href="filtro.php">Volver al formulario</a>-->

    </body>
</html>