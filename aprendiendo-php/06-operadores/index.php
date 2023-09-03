<?php
//* Operadores aritméticos
$numero1 = 20;
$numero2 = 15;

echo 'Suma: ' . ($numero1 + $numero2) . '<br>';
echo 'Resta: ' . ($numero1 - $numero2) . '<br>';
echo 'Multiplicación: ' . ($numero1 * $numero2) . '<br>';
echo 'División: ' . ($numero1 / $numero2) . '<br>';
echo 'Resto: ' . ($numero1 % $numero2) . '<br>';

//* Operadores de incremento y decremento

//incremento-------------
$year = 2019;
$year++;
echo '<h3>' . $year . '</h3>';
//Decremento
$year--;
echo '<h3>' . $year . '</h3>';

//Pre-incremento
++$year;
echo '<h3>' . $year . '</h3>';
//Pre-decremento
--$year;
echo '<h3>' . $year . '</h3>';

//* Operadores de asignación

$edad = 55;

echo $edad . '<br>';

echo ($edad += 5) . '<br>';

echo ($edad *= 5) . '<br>';

echo ($edad -= 5) . '<br>';

echo ($edad %= 5) . '<br0>';