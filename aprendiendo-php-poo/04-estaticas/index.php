<?php
require_once 'configuracion.php';

Configuracion::setcolor('blue');
Configuracion::setNewsletter(true);
Configuracion::setEntorno("localhost");

echo Configuracion::$color . "<br/>";
echo Configuracion::$entorno . "<br/>";
echo Configuracion::$newsletter . "<br/>";

$configuracion = new Configuracion();
$configuracion::$color = "rojo";
echo $configuracion::$color;
var_dump($configuracion);