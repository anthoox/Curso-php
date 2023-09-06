<?php
/*
 Conjunto de instrucciones que se agrupan bajo un nombre concreto y que pueden reutilizarse invocando a la función
 tantas veces como queramos

 function nombreDeFuncion(){
    Bloque o conjunto de instrucciones
 }

 nombreDeFuncion($parametro);

 Realmente, las funciones en lugar de imprimir, deben devolver una resultado
*/

// Ejemplo 1
function muestraNombres(){
    echo "Anthony Alegría Alcántara <br>";
    echo "Yasmin Martinez Rojas <br>";
    echo "<hr>";
}

// invocar función
muestraNombres();
muestraNombres();
muestraNombres();

// Ejemplo2
function tabla($numero){
    for($i = 0;$i <= $numero; $i++){
        $resultado = $numero*$i;
        echo "$numero x $i = $resultado<br>";
    }
}

tabla(7);

// Ejemplo 2 con valores desde la URL

echo '<hr>';

if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo 'No hay numero para sacar tabla';
}
echo '<hr>';

// Ejemplo 3 añadiendo tambíen un parametro opcional
function calculadora($numero1, $numero2, $negrita=false){
    if($negrita != false){
        echo '<h1>';
    }
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    $multiplicacion = $numero1*$numero2;
    $division = $numero1/$numero2;
    echo "Suma : $suma<br>" ;
    echo "Suma : $resta<br>" ;
    echo "Suma : $multiplicacion<br>" ;
    echo "Suma : $division<br>" ;
    
    if($negrita != false){
        echo '</h1>';
    }
    echo '<hr/>';
}

calculadora(9,10);
calculadora(2,13, true);
calculadora(5,20, false);

// Ejemplo 4 con return

function devuelveElNombre($nombre){
    return "El nombre es $nombre <hr>";
}

echo devuelveElNombre('Anthony Alegría');


function calculadora2($numero1, $numero2, $negrita=false){ // Este método sería una buena práctica
    $cadena = '';
    if($negrita){
        $cadena .= '<h1>';
    }
    $cadena .= $numero1+$numero2 . '<br/>';
    $cadena .= $numero1-$numero2 . '<br/>';
    $cadena .= $numero1*$numero2 . '<br/>';
    $cadena .= $numero1/$numero2 . '<br/>';
    
    if($negrita){
        $cadena .= '</h1>';
    }
    $cadena .= '<hr/>';
    return $cadena;
}

echo calculadora2(3,4, false);
echo calculadora2(3,4, true);
echo calculadora2(30,4, false);

// Ejemplo 5 con una función dentro de otra

function getNombre($nombre){
    $texto = "El nombre es $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son $apellidos";
    return $texto;
}
function devuelveTodo($nombre, $apellidos){
    $texto = getNombre($nombre) . '<br>' . getApellidos($apellidos) . '<hr>';
    return $texto;
}

echo devuelveTodo('Anthony', 'Alegría');