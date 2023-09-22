<?php
/*
 Hacer un programa que tenga un array que tenga 8 números enteros y que haga los siguiente:
 - recorrer y mostrarlo
 - ordenarlo y mostrarlo
 - mostrar su longitud
 - buscar algún elemento en el array
 */

 $numeros = [2, 45, 3, 1, 7, 54, 24];
 echo '<h5>Recorrer y mostrarlo</h5>';
 foreach($numeros as $numero){
    echo $numero . '<br>';
 }

 echo '<h5>Ordenarlo y mostrarlo</h5>';
 sort($numeros);
 var_dump($numeros);

 echo '<h5>Mostrar su logintud</h5>';
 echo count($numeros);

 echo '<h5>Buscar un elemento en el array</h5>';
 echo '<h6>Buscando 69</h6>';

 $busqueda = 69;
 $search = array_search($busqueda, $numeros);
 if(!empty($search)){ // -> no muestra nada porque da false
    echo 'El número buscado existe en el array en el índice ' . $search;
 }else{
    'El número no existe en el array';
 }
 
 var_dump($search);
 
 echo '<h6>Buscando 7</h6>';
 $busqueda = 7;
 $search = array_search($busqueda, $numeros);
 if(!empty($search)){
    echo 'El número buscado existe en el array en el índice ' . $search;
 }else{
    'El número no existe en el array';
 }
 
 

 