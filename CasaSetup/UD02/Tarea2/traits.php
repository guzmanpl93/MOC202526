<?php

    trait Formatear {

        public function toHTML(){
            return "<p>$this->titulo, $this->ano, $this->director, $this->actores, $this->genero</p>";
        }

        public function toJSON(){
            return json_encode($this);
        }
    }

    

?>