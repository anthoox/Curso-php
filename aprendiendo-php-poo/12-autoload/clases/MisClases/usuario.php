<?php
// Espacio de nombre para empaquetar las clases
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Anthony";
        $this->email = "email@email.com";
    }
}