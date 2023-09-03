<?php
/*
 * FOR
 * for(expresión inicial, condición, actualizando contador){
 *      bloque de instrucciones
 * }
 */

// Sumar todos los numeros del 0 al 100
$resultado = 0;
for($i = 0; $i<=100; $i++){
    $resultado += $i;
    echo "<p>$resultado</p>";
}
echo "<h1>El resultado es: $resultado</h1>";

echo '<hr>';

// Ejemplo de tabla de multiplicar con un valor de la URL, si no se da valor se queda en 1
// añadir a la URL: ?numero='el número que quieras'

if(isset($_GET['numero'])){ // -> si existe
    $numero = (int)$_GET['numero']; // -> casting o casteando el tipo de la variable
}else{
    $numero = 1; // -> si no hay valor por URL, vale 1
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;

for($contador = 0; $contador <= 10; $contador++){
    if($numero == 45){
        // Si se introduce por URL el número 45, hace el break y salta la ejecución
        echo 'No se pueden mostrar estas operaciones prohibidas';
        break;
    }
    echo "$numero x $contador = " . ($numero*$contador) .'<br>';
}




