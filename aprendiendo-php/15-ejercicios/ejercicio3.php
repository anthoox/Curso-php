<?php
/*
 Hacer un programa que compruebe si una textoiable este vacia y si lo esta añadirle texto en minúsculas y 
 trasformarlo a mayúsculas en negrita.
 */
 
 function rellenador(){
    $texto;
    if(empty($texto)){
       $texto = '<strong>'.(strtoupper('Texto de relleno')).'</strong>';
       echo $texto;
    }else{
       echo 'La variable tiene texto';
    }
 }
 rellenador();