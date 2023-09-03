<?php

/*
 * Bucle While
 * Estructura de control que itera o repite la ejecución de una serie de instrucciones 
 * tantas veces como sea necesario, en base a una condición

 * while(condición){ -> mientras se cumpla la condición se cumpla se ejecuta, si no se cumple, sale
 *    intrucciones
 * }

*/

$numero = 0;
while($numero<=100){
    echo "$numero";
    if($numero != 100){
        echo ', ';
    }
    $numero++;
}

echo '<hr>';

// Ejemplo
// añadir a la URL: ?numero='el número que quieras'

if(isset($_GET['numero'])){ // -> si existe
    $numero = (int)$_GET['numero']; // -> casting o casteando el tipo de la variable
}else{
    $numero = 1;  // -> si no hay valor por URL, vale 1
}

var_dump($numero);


echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;

while($contador <= 10){
    echo "$numero x $contador = " . ($numero*$contador) .'<br>';
    $contador++;
}

// DO WHILE
// La condición se evalua al final de la instrucción, por lo tanto, el código que esta dentro del bucle se ejecuta al menos una vez
/*
do{
    Bloque de instrucciones
}while(condición);
*/
echo '<hr>';
$edad = 18;
$contador = 1;
do{
    echo "Tienes acceso al local privado $contador<br>";
    $contador++;
}while($edad>=18 && $contador <= 10);