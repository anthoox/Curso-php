<?php

$cantantes = ['2pac', 'Marc Anthony', 'Jlo', 'Aerosmith'];
$numeros = [1,2 ,5, 18,23,3, 4];
var_dump($numeros);
var_dump($cantantes);


// Ordenar
echo '<h3>asort</h3>';
asort($cantantes);
var_dump($cantantes);

echo '<h3>arsort</h3>';
arsort($cantantes);
var_dump($cantantes);

echo '<h3>sort</h3>';
sort($numeros);
var_dump($numeros);

echo '<h3>rsort</h3>';
rsort($numeros);
var_dump($numeros);

// Añadir elementos a un array
$cantantes[] = 'Pendulum';
var_dump($cantantes);

array_push($cantantes, 'SnopDog');
var_dump($cantantes);

// Quitar el último índice
array_pop($cantantes);
var_dump($cantantes);

// Quitar un elemento en concreto del array
unset($cantantes[2]);
var_dump($cantantes);

// Selecciona aleatoriamente un índice de un array
$indice = array_rand($cantantes);
echo $cantantes[$indice];

// darle la vuelta a un array
$numeros2 = array_reverse($numeros);
var_dump($numeros2);

// Buscar dentro de un array
$indice_cantante = array_search('2pac', $cantantes);
var_dump($indice_cantante);

// Contar número de elementos
echo count($cantantes);
echo '<br>';
echo sizeof($cantantes);