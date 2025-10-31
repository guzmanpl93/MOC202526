<?php

class Usuario{

    public $name;
    public $pass;

    public function __construct($user, $pass){
        $this->user = $user;
        $this->pass = $pass;
    }

    public function mostrarDetalles(){
        echo "Usuario: ". $this->user . ", Contraseña: " . $this->pass;
    }
}
?>