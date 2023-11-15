<?php

require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

$nombre_controlador = '';

function show_error()
{
    $error = new ErrorController();
    $error->index();
}

// Si existe lo que llega por GET
if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
} else {
    show_error();
}

// Si existe la clase
if (class_exists($nombre_controlador)) {

    $controlador = new $nombre_controlador();

    // Comprueba si existe una variable por la URL y si existe el metodo del controlador que se llame con el metodo introducido por la URL
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        show_error();
    }
} else {
    show_error();
}


require_once 'views/layout/footer.php';
