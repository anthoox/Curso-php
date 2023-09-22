<?php
/*
 Para mostrar el valor de las cookies, tengo que usar $_COOKIES, una variable superglobal, es un  array asociativo
 */

 if(isset($_COOKIE['migalleta'])){
    echo "<h1>" . $_COOKIE['migalleta'] . "</h1>";
 }else{
    echo "<h1>La cookie no existe</h1>";
 }

 if(isset($_COOKIE['unyear'])){
    echo  '<h1>'.$_COOKIE['unyear'].'</h1>';
 }else{
    echo "<h1>La cookie no existe</h1>";
 }

 ?>
 <a href="crear_cookie.php">Crear mis galletas</a>
 <br>
 <a href="borrar_cookie.php">Borrar mis galletas</a>