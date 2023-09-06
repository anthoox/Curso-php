<?php

// var_dump() -> para debuggear y ver el resultado de una variable
$nombre = 'antho';
var_dump($nombre);

// date -> para fechas
echo date('d-m-y');
echo '<br>';

// time -> saca la fecha en formato UNIX
echo time();
echo '<hr>';

// Matemáticas
echo "Raiz cuadradad de 10: " . sqrt(10);

echo '<hr>';
echo "Número aleatorio entre 10 y 40: " . rand(10, 40); // -> si no se indica rango saca tambien número aleatorio

echo '<hr>';
echo "Número PI: " . pi();

echo '<hr>';
echo "Redondeo: " . round(7.8921234, 2); // -> redonde al más cercado, indicar el número de decimales es opcional

// Más funciones generales
echo '<hr>';
echo gettype($nombre);

echo '<br>';
$i = 3.154;
if(is_float($i)){
    echo "Esa variable es un float";
}

echo '<br>';
$i = 3;
if(is_string($nombre)){
    echo "Esa variable es un string";
}
// isset -> sirve para comprobar si una variable existe
echo '<hr>';
if(isset($edad)){ 
    echo 'La variable existe';
}else{
    echo 'La variable no existe';
}; 

// trim -> elimina los espacios por delante o por detras
echo '<hr>';
$frase = '   contenido  ';
var_dump($frase);
var_dump(trim($frase));

echo '<hr>';
// unset -> Eliminar variables o indices de arrays
$year = 2023;
unset($year);
var_dump($year);

// empty -> comprueba si una variable esta vacia o su valore es 0
echo '<hr>';
$texto = "";//false, 0. Si se añade solo espacios cuenta como contenido
if(empty($texto)){
    echo 'La variable esta vacía';
}else{
    echo 'La variable tiene texto';
}

// strlen -> devuelve los caracteres de una cadena de texto
echo '<hr>';
$cadena = '12341234124';
echo strlen($cadena);

// strpos -> encuentra un string en una cadena y devuelve la posición
echo '<hr>';
$frase = 'La vida es bella';
echo strpos($frase, 'vida'); // -> detecta donde empieza la palabra y devuelve la posición de su primer caracter. Si no hay nada, devuelve falso o nada.

// str_replace -> reemplaza contenido en un string
echo '<hr>';
$frase = str_replace('vida', 'casa', $frase);
echo $frase;


//strtolower/strtoupper -> MAYÚSCULAS y minúsculas
echo '<hr>';
echo strtolower($frase);
echo '<br>';
echo strtoupper($frase);