<?php 
/*
 * 1. Una función
 * 2. La función debe validar un email con filter_var
 * 3. Recoger una variable por GET y validarla
 * 4. Mostrar el resultado
 */

 function validarEmail($email){
    $status = 'no válido';
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = 'Válido';
    }
    return $status;
 }
 

 if(isset(($_GET['email']))){
    echo validarEmail($_GET['email']);
 }else{
    echo "Pasa por get un email...";
 }

 // Pon en la URL ?email=pepe
?>