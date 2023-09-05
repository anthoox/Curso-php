<?php
/*
* Sacar con un script en php que muestre por pantalla todos los números pares que hay del 1 al 100
* Un número par es aquel que puede dividirse por 2 y su resto es 0
*/

for($i = 1; $i<= 100; $i++){
    if($i != 100){
        if($i%2 == 0){
            echo "$i, ";
        }
    }else{
        echo $i;
    }  
}

function restar(){
    
}