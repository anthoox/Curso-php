<?php
namespace MisClases;

class Categoria{
    public $nombre;
    public $descripcion;

    public function __construct(){
        $this->nombre = "Acción";
        $this->descripcion = "categoria para los juegos de acción";
    }
}