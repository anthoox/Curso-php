<?php
function app_autoloader($class){
    require_once 'clases/' . $class . '.php';
}

// Este metodo busca todos los archivos de las clases del directorio indicado:
spl_autoload_register('app_autoloader');