<?php
// Espacio de nombre para empaquetar las clases
namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Pepe Pineda";
        $this->email = "correo@correo.com";
    }
}