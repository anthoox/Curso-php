<?php
/**
 * Constante
 * Son como las variables, un contenedor de información pero el valor de una constante nunca puede cambiar
 */

 define('nombre', 'Anthony Alegría');
 define('web', 'anthoox.es');

 echo '<h1>'.nombre.'</h1>';
 echo web . '<br>';

 //Variables predefinidas:

 echo PHP_VERSION . '<br>';//versión de PHP
 echo PHP_OS . '<br>';//Sistema operativo
 echo PHP_EXTENSION_DIR . '<br>';//Extension
 echo __LINE__ . '<br>';//Linea en la que estoy
 echo __FILE__  . '<br>';//Ruta del archivo
 
 function hola(){
    echo __FUNCTION__;//Nombre de la clase que lo contiene
 }
hola();
