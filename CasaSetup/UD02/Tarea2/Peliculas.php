<?php
    
// A partir del catálogo de películas (donde ya deberías trabajar con un array de objetos de tipo Película)
// vas a ampliar la arquitectura del proyecto utilizando herencia, polimorfismo y traits.

// A partir de esta clase base, crea al menos dos subclases que hereden de Pelicula.
// Cada subclase debe representar un tipo concreto de contenido audiovisual. Por ejemplo:
    // Serie
    // Cortometraje
// Cada subclase debe añadir al menos una propiedad o método adicional (por ejemplo número
// de temporadas o capítulos), y opcionalmente redefinir un método heredado (polimorfismo).

// Implementa un trait llamado Formatear que incluya uno o más métodos para dar formato a 
// ciertos textos o valores, por ejemplo:
    // devolver la película en formato HTML.
    // devolver la película en formato JSON (para ellod eberíais usar la función json_encode que ofrece PHP).
    // Las clases hijas deben usar este trait.

// Sustituye el array asociativo original para que cada objeto sea instancia de Pelicula
// o de una de sus subclases. El catálogo deberá seguir funcionando como hasta ahora,
// aplicando los filtros ya existentes.

// Comprueba que el comportamiento polimórfico funciona: por ejemplo, invoca un método común
// a todas las películas (mostrarPelicula()) y comprueba que las películas creadas con subclases 
// pueden devolver resultados distintos gracias a métodos sobrescritos.


    class Pelicula{

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

        public function mostrarPelicula(){
            // return parent::mostrarPelicula() . "<td>$this->duracion minutos</td>";
            return parent::mostrarPelicula() . "<td>$this->duracion minutos</td>";
        }

    }

?>