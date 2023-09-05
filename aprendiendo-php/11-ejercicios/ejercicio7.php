<?php
/** 
 * Programa que muestre todos los números impares entre dos números que nos llegen por la URL usando 
 * $_GET
 */

 if(isset($_GET['numero1']) && isset($_GET['numero1'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    if($numero1 < $numero2){
        while ($numero1 <= $numero2) {
            if($numero1%2 != 0){
                echo $numero1. '<br>';
            }
            $numero1++;
        }
    }else{
        echo '<h4>El numero1 debe ser menor al numero2</h4>';
    }
 }else{
    echo 
    '<h4>Introduce correctamente los valores por la URL</h4>
    <h6>Ejemplo:</h6>
    <p>?numero1=3&numero2=4</p>';
}
