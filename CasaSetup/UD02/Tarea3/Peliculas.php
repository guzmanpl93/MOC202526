<?php
    
    include 'traits.php';

// Sustituye el array asociativo original para que cada objeto sea instancia de Pelicula
// o de una de sus subclases. El catálogo deberá seguir funcionando como hasta ahora,
// aplicando los filtros ya existentes.



    class Pelicula{

        use Formatear /*, Loquesea*/;

        public $titulo;
        public $ano;
        public $director;
        public $actores;
        public $genero;

        public function __construct($titulo, $ano, $director, $actores, $genero){
            $this->titulo = $titulo;
            $this->ano = $ano;
            $this->director = $director;
            $this->actores = $actores;
            $this->genero = $genero;
        }

        public function mostrarPelicula(){
            return "<td>$this->titulo</td><td>$this->ano</td><td>$this->director</td><td>$this->actores</td><td>$this->genero</td>";
        }

        public static function mostrarPeliculaSt($tt, $yr, $dir, $act, $gn){
            return "<tr><td>$tt</td><td>$yr</td><td>$dir</td>$act<td></td><td>$gn</td></tr>";
        }

        public function getTitulo(){
            return $this->titulo;
        }
        
        public function getAno(){
            return $this->ano;
        }
        
        public function getDirector(){
            return $this->director;
        }

        public function getActores(){
            return $this->actores;
        }

        public function getGenero(){
            return $this->genero;
        }

        
    }

    class Serie extends Pelicula{
        public $num_temporadas;

        public function __construct($titulo, $ano, $director, $actores, $genero, $num_temporadas){
            Pelicula::__construct($titulo, $ano, $director, $actores, $genero);
            $this->num_temporadas = $num_temporadas;
        }

        public function getNum_Temporadas(){
            return $this->num_temporadas;
        } 

        public function mostrarPelicula(){
            // return $this->pelicula;
            return parent::mostrarPelicula() . "<td>$this->num_temporadas minutos</td>";
        }

    }

    class Cortometraje extends Pelicula{
        public $duracion;

        public function __construct($titulo, $ano, $director, $actores, $genero, $duracion){
            Pelicula::__construct($titulo, $ano, $director, $actores, $genero);
            $this->duracion = $duracion;
        }

        public function getDuracion(){
            return $this->duracion;
        }

        public function mostrarPelicula(){
            // return parent::mostrarPelicula() . "<td>$this->duracion minutos</td>";
            return parent::mostrarPelicula() . "<td>$this->duracion minutos</td>";
        }

    }

?>