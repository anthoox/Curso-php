<?php
/**
 * Cookies es un fichero que se almacena en el ordenador del usuario que visita la web con el 
 * fin de recordar datos o rastrear cierta información o comportamiento del mismo en la web.
 * Son más inseguras que las sesiones.
 */

 // Crear cookies.
 // setcookie('nombre', 'valor que solo puede ser texto', caducidad); // también almacena la ruta y el dominio

 setcookie('migalleta', 'valor de mi galleta');
 
// Cookie con expiración
 setcookie('unyear', 'valor de mi cookie de 365 días', time()+(60*60*24*365));

 header('Location:ver_cookies.php');
?>

