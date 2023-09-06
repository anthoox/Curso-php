<?php
/*
 Variables locales: Son las que se definen dento de una función y no pueden ser usadas fuera de estas

 Variables globales: Son aquellas que se declaran fuera de una función y estan disponibles dentro y fuera de las funciones
*/

// -- variable global --
$frase = 'Ni los genios son tan genios, ni los mediocres tan mediocres';

echo $frase;

function holaMundo(){
    global $frase; // -> si no se indica esto da error. En JS si funcionaría
    echo "<h1>$frase</h1>";

    $year = 2023;

    return $year;
}

echo holaMundo(); // -> asi es como se puede imprimir el valor de $year

// echo $year; // -> da error porque no esta definida fuera de la función

echo '<hr>';

// -- Funciones variables --
function buenosDias(){
    return '<h1>Hola, buenos días</h1>';
}

function buenasTardes(){
    return '<h1>¡Hey!, ¿Qué tal ha ido la comida?</h1>';
}

function buenasNoches(){
    return '<h1>¿Yá te vas a dormir?, pues que descanses</h1>';
}

// añadiendo la función a una variable
$horario =  "buenasNoches";
$horario();
echo $horario();

// concatenando una variable con funcion a una cadena en otra variable
$miFuncion = "El saludo será: " . $horario(); // -> no se puede concadenar directamente, debe ir así
echo $miFuncion;

echo '<hr>';

// concatenando una variable de la URL con funcion a una cadena en otra variable
if(isset($_GET['nombre'])){
    $saludos = buenosDias() . $_GET['nombre'];
    echo $saludos;
}else{
    echo "Debe escribir el nombre en la URL";
}
