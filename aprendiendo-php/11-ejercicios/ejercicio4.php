<?php
/**
* Recoger dos números por la URL (GET) y hacer todas las operaciones básicas de una calculadora
* suma, resta, multiplicación y división de esos dos números
*/


if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo '<h3>Calculadora</h3>';
    echo '<p>Suma: '.($numero1+$numero2).'</p>';

    echo '<p>Resta: '.($numero1-$numero2).'</p>';

    echo '<p>Multiplicación: '.($numero1*$numero2).'</p>';

    echo '<p>División: '.($numero1/$numero2).'</p>';
}else{
    echo '<h4>Introduce correctamente los valores por la URL</h4>
    <h6>Ejemplo:</h6>
    <p>?numero1=3&numero2=4</p>';

}

$hola = 0;
