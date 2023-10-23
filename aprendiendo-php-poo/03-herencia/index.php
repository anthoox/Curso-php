<?php
require_once 'clases.php';

$persona = new Persona();
var_dump($persona);
$persona->setNombre('Anthony');
var_dump($persona);

$informatico = new informatico();
var_dump($informatico);

// $informatico->setAltura(1.64);
// echo $informatico->sabeLenguajes("HTML, CSS, JavaScript, PHP");


$tecnico = new TecnicoRedes();
var_dump($tecnico);