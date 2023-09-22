<?php
/*
 Crear un script en php que tenga 4 variables, una tipo array, otra tipo string, otra int y otra booleana
 y que imprima un mensaje segun el tipo de variable que sea.
 */

$contenedor = array(
    $array = [],
    $texto = 'Hola mundo',
    $numero = 27,
    $dato = true
);

var_dump($contenedor);

foreach($contenedor as $dato){
    if(gettype($dato) == 'array'){
        echo 'Soy un array <br>';
    }else if(gettype($dato) == 'string'){
        echo 'Soy un string <br>';
    }else if(gettype($dato) == 'integer'){
        echo 'Soy un número <br>';
    }else if(gettype($dato) == 'boolean'){
        echo 'Soy un boolean <br>';
    }
 }

 // En el curso lo hacen asi:
 if(is_array($array)){
    echo '<h2>Es un array</h2>';
 }
 if(is_string($texto)){
    echo '<h2>Es un string</h2>';
 }
 if(is_integer($numero)){
    echo '<h2>Es un número</h2>';
 }
 if(is_bool($dato)){
    echo '<h2>Es un boolean</h2>';
 }