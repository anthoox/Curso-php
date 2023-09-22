<?php
/*
 Crear un array con el contenido de la tabla:
 Accion Aventura Deportes
 GTA    Assasins Fifa19
 COD    Crash    PES 19
 PUG    Prince   MotoGP19

 Cada fila debe ir en un fichero separado.
 */
$tabla = array(
    'Accion' => array('GTA', 'COD', 'PUG'),
    'Aventura' => array('Assasins', 'Crash', 'Prince'),
    'Deportes' => ['Fifa19', 'PES19', 'MotoGP19']
);

var_dump($tabla);

$categorias = array_keys($tabla); // -> forma de obtener los indices y almacenarlos en otro array
?>

<table border="1">
    <?php require_once 'ejercicio5/encabezados.php'; ?>
    <?php require_once 'ejercicio5/primera.php'; ?>
    <?php require_once 'ejercicio5/segunda.php'; ?>
    <?php require_once 'ejercicio5/tercera.php'; ?>
</table>