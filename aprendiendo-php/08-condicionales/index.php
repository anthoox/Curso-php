<?php
/**
 * - Condicionales -
 * 
 * IF:
 * if(condicion){ -> si se cumple la condición
 *  instrucción
 * }else{ -> si no se cumple la condición
 *  otra condición
 * }
 * 
 * - Operadores de comparación -
 * == -> Si es igual
 * === -> Si es identico o exactamente igual (hasta tipo de dato)
 * != -> es diferente
 * <> -> diferente
 * !== -> No identico
 * < -> es menor que
 * > -> es mayor que
 * <= -> es menor o igual que
 * >= -> es mayor o igual que
 * 
 * 
 * - Operadores lógicos -
 * &&/AND -> y
 * ||/OR -> o
 * !/Not -> no
 * 
 */

//Ejemplo 1
$color = 'azul';

if ($color == 'rojo') {
    echo 'El color es rojo<br>';
} else {
    echo 'El color no es rojo<br>';
}

echo '<hr>';

//Ejemplo 2
$year = 2020;

if ($year == 2020) {
    echo 'Estamos en 2020<br>';
} else {
    echo 'No estamos en 2020<br>';
}

if ($year < 2021) {
    echo 'Es un año anterior a 2021<br>';
} else {
    echo 'Es un año posterior a 2021<br>';
}

if ($year != 2021) {
    echo 'El año no es 2021<br>';
} else {
    echo 'El año es 2021<br>';
}


if ($year <= 2021) {
    echo 'El año es menor o igual a 2021<br>';
} else {
    echo 'El año no es menor o igual a 2021<br>';
}

echo '<hr>';

//Ejemplo 3
$edad = 20;
$ciudad = 'Sevilla';
$continente = 'Sudamerica';
$mayoria_edad = 18;
$nombre = 'Anthony';

if ($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor de edad</h1>";
    if ($continente == 'Europa') {
        echo "<h2>y es de $ciudad</h2>";
    } else {
        echo "<h2>No es Europeo</h2>";
    }
} else {
    echo "<h2>$nombre no es mayor de edad</h2>";
}

echo '<hr>';

//Ejemplo 4
$dia = 3;

if ($dia == 1) {
    echo 'Es Lunes';
} else if ($dia == 2) {
    echo 'Es Martes';
} else if ($dia == 3) {
    echo 'Es Miercoles';
} else if ($dia == 4) {
    echo 'Es Jueves';
} else if ($dia == 5) {
    echo 'Es Viernes';
}

echo "<h2>Switch</h2>";
//Switch
$dia = 4;
switch ($dia) {
    case 1:
        echo 'Es Lunes';
        break;
    case 2:
        echo 'Es Martes';
        break;
    case 3:
        echo 'Es Miercoles';
        break;
    case 4:
        echo 'Es Jueves';
        break;
    case 5:
        echo 'Es Viernes';
        break;
    default:
        echo 'Es fin de semana';
}

echo '<hr>';

//Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 17;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo '<h3>Esta en edad para trabajar</h3>';
} else {
    echo '<h3>No puede trabajar</h3>';
}

echo '<hr>';

//Ejemplo 6
$pais = 'Mexico';

if ($pais == 'Mexico' || $pais == 'España' || $pais == 'Perú') {
    echo '<h3>En este país se habla español</h3>';
} else {
    echo '<h3>En este país no se habla español</h3>';
}


//GOTO
goto salta_esto;
echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";

salta_esto:
echo "<h1>Me he saltado 4 echos</h1>";
