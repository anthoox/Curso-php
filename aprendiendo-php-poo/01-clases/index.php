<?php
// PROGRAMACIÓN ORIENTADA A OBJETOS EN PHP

// Definir una clase, molde para crear más objetos del tipo coche con caracteristicas parecidas
class Coche{
    // Atributos o propiedades (variables)
    public $color = "rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    // metodos, son acciones que hace el objeto (antes funciones)
    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }


} // Fun definicion de la clasae

// Crear un objeto /instanciar la clase
$coche = new Coche();

// Usar metodos

$coche->setColor("amarillo");

echo "El color del coche es: " .$coche->getColor() . "<br/>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche " . $coche->getVelocidad();

// Crear otro coche
$coche2 = new Coche();
$coche2->setColor("verde");
$coche2->setModelo("Gallardo");

var_dump($coche);
var_dump($coche2);