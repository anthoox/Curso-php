<?php
/*
 * Herencia es la posiblida de compartir atributos y métodos entre clases con el fin de repetir el código lo menos posible
 */

class Persona
{
    public $nombre;
    public $apellido;
    public $altura;
    public $edad;

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function hablar()
    {
        return "Estoy hablando";
    }
    public function caminar()
    {
        return "Estoy caminando";
    }

}

class Informatico extends Persona
{
    public $lenguajes;
    public $experienciaProgramador;

    public function __construct()
    {
        $this->lenguajes = "HTML, CSS y JS";
        $this->experienciaProgramador = 10;
    }

    public function sabeLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;
        return $lenguajes;
    }
    public function programar()
    {
        return "Soy programador";
    }

    public function repararOrdenador()
    {
        return "Reparar ordenadores";
    }

    public function hacerOficatica()
    {
        return "Estoy escribiendo en Word";
    }
}

class TecnicoRedes extends Informatico
{
    public $auditarRedes;
    public $experenciaRedes;

    // Si no se llama al constructor del padre no hereda lso datos del constructor del padre
    public function __construct()
    {
        // Así se hereda del constructor de la clase padre:
        parent::__construct();
        $this->auditarRedes = "experto";
        $this->experenciaRedes = 5;
    }

    public function auditoria()
    {
        return "Estoy auditanto una red";
    }

}