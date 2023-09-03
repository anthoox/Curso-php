<?php
/**
 * Tipos de datos:
 * Enteros (int / integer): 9, 84
 * Decimales / coma flotante (float/double): 3.15
 * Cadenas / texto (String): "Anthony"
 * Boleano (bool): 1 o 0 / true o false
 * Nulo (null)
 * Array / vectores (colección de datos)
 * Objetos
 * 
 * PHP es debilmente tipado y no hace falta indicar el tipo de dato que es.
 * 
 * Las variables NUNCA pueden empezar con un número ni tener signos de operadores
 */

 $numero = 100;
//* Función para obtener el tipo de dato: gettype
 echo gettype($numero) . "<br>";

 $decimal = 3.15;
 echo gettype($decimal) . "<br>";

 $texto = "Anthony";
 echo gettype($texto) . "<br>";


 $verdadero = true;
 echo gettype($verdadero) . "<br>";

 //* Tanto si se le da valor null como si no se le da valor, es nulo.
 $nula = null;
 echo gettype($nula);

 /**
  * Forma de debugear cualquier variable
  */
  $nombre = "Anthony Alegría Alcántara";
  var_dump($nombre) . "<br>";

  $array = ['peras', 'manzanas'];
  var_dump($array) . "<br>";

  $nombre_completo = "Arnold $nombre"; //Esto no funciona con comillas simples, por eso es recomendable usar comillas simples porque sino esta pendiente de que se le añada una variable.
  echo $nombre_completo . "<br>";