<?php

/*
 * Un trait permite definir una serie de metodos para compartirlos entre clases. Util cuando NO QUEREMOS UTILIZAR LA HERENCIA
 */

trait Utilidades
{
    public function mostrarNombre()
    {
        echo "<h1>El nombre es " . $this->nombre . "</h1>";
    }
}

class Coche
{
    public $nombre;
    public $marca;

    // Se llama al trait para usarlo
    use Utilidades;
}

class Persona
{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class VideJuego
{
    public $nombre;
    public $anio;

    use Utilidades;
}

$coche = new Coche();
$persona = new Persona();
$videojuego = new VideJuego();

var_dump($coche);

// Añadimos un nombre para usarlo. Se añade directamente al ser una propiedad pública
$coche->nombre = "Audi TT";
$coche->mostrarNombre();

$persona->nombre = "Juan";
$persona->mostrarNombre();

$videojuego->nombre = "Unreal";
$videojuego->mostrarNombre();
