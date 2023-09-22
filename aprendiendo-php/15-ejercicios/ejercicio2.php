<?php
/*
 Crear un programa que añada valores al array mientras su longitud sea menor que 120 y que luego se muestre
 por pantalla
 */

 function add_numeros(){
    $numeros = array();
    for($i = 0; $i < 120; $i++){
        $numero = rand(0, 120);
        array_push($numeros,$numero);
     }
     var_dump($numeros);
 }

 add_numeros();