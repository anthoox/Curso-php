<?php
/*
 * Escribir un programa que imprima por pantalla los cuadrados de los cuarenta primeros números naturales (0-40) 
 * PD: Utilizar while y luego for
 */

//While
$i = 0;
while($i <= 40){
    echo ($i*$i) . '<br>';
    $i++;
}

echo '<hr>';

//For
for($i = 0; $i<= 40; $i++){
    echo $i*$i .'<br>';
}