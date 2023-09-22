<?php
/*
 Una sesion es el periodo de tiempo donde un usuario ve un número de paginas determinado de la web donde se encuentre sin necesidad de identificarse cada vez que se 
 recargar la pagina. La sesion debe detectar que la sesion permanece invariable hasta que el usuario cierre sesion y cierre el navegador.
 y tambien debe guardar datos de la sesion que formaran parte de la sesion y métodos
 Las sesiones se guardan en el servidor web lo que lo hace más segura
*/

// Iniciar la sesion
session_start();

// Variable local
$variable_normal = "Soy una cadena de texto";

// Variable de sesión
$_SESSION['variable_persistente'] = 'Hola soy una sesión activa'; 

echo $variable_normal .'<br>';

echo $_SESSION['variable_persistente'];

