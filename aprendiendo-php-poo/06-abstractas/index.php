<?php

/*
 * Son clases que no se pueden instanciar, es decir, no se pueden crear clases con ellas pero si se pueden utilizar para heredar de ella
 * y puede definir una clase que la herede.Estas clases definen las estructuras de las clases que la hereden. 
 * Los métodos que hereden sus hijos tendran que ser definidos también en sus clases hijas
 */
abstract class Ordenador
{

    public $encendido;

    abstract public function encender();

    public function apagar()
    {
        $this->encendido = false;
    }
}


class PcAsus extends Ordenador
{


    public $software;

    public function arrancarSoftware()
    {
        $this->software = true;
    }

    public function encender()
    {
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
var_dump($ordenador);
$ordenador->arrancarSoftware();
$ordenador->encender();
var_dump($ordenador);
$ordenador->apagar();
var_dump($ordenador);