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
            $this->$genero = $genero;
        }

        public function mostrarPelicula(){
            return "<tr><td>$titulo</td><td>$ano</td><td>$director</td>$actores<td></td><td>$genero</td></tr>";
        }

        public static function mostrarPeliculaSt($tt, $yr, $dir, $act, $gn){
            return "<tr><td>$tt</td><td>$yr</td><td>$dir</td>$act<td></td><td>$gn</td></tr>";
        }

    }

?>