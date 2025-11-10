<?php

    class Asignatura {

        public $nombre;

        public function __construct($nombre){
            $this->nombre = $nombre;
        }

        public function mostrarInfo(){
            return "<p>Asignatura: " . $this->nombre . "</p>";
        }

        public static function aplicador(){
            return "<h1>Ponte las pilas bro</h1>";
        }

        public function aplicador2(){
            return "<h1>Ponte las pilas bro</h1>";
        }
    }

?>