<?php

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
            return "<tr><td>$this->titulo</td><td>$this->ano</td><td>$this->director</td><td>$this->actores</td><td>$this->genero</td></tr>";
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

        public function mostrarPeliculoa(){
            return "<p>$this->pelicula de la serie</p>"
        }

    }

?>