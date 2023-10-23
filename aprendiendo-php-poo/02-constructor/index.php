<?php

require_once 'coche.php';

$coche = new coche("Amarillo", "Renould", "Clio", 150, 200, 5);
$coche1 = new coche("verde", "Seat", "Panda", 250, 200, 5);
$coche2 = new coche("Azul", "Citroen", "Xara", 100, 200, 5);
$coche3 = new coche("Rojo", "Mercedes", "Clase A", 350, 100, 3);

// var_dump($coche);
// var_dump($coche1);
// var_dump($coche2);
// var_dump($coche3);

// Comprobando cambios por el nivel de los atributos
// Modificar un atributo public
// $coche->color= "Rosa";

// // Modificar un atributo protected
// $coche->setMarca("audi");

// // Obtener un atributo privado
// // var_dump($coche->modelo);
// var_dump($coche->getModelo());

// var_dump($coche);

echo $coche->mostrarInformacion($coche);
