<h1>Hola Mundo MVC</h1>

<?php

require_once 'autoload.php';

// $controlador = new UsuarioController();

// $controlador->mostrarTodos();
// $controlador->crear();


// Comprobar si existe la clase del controllador que llega por la URL. Hay que poner en la URL ?controller=UsuarioController&action=crear
// con la siguiente modificación se buscaria como ?controller=Usuario&action=crear
$nombre_controlador = '';

// Si existe lo que llega por GET
if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
}else{
    echo "La página que buscas no existe loco";
    // Con lo siguiente para la ejecución y no ejecuta lo de abajo
    exit();
}


// Si existe la clase
if(class_exists($nombre_controlador)){
    
    $controlador = new $nombre_controlador();

    // Comprueba si existe una variable por la URL y si existe el metodo del controlador que se llame con el metodo introducido por la URL
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];

        // Si se pone en la URL: ?action=crear, llama a la función crear del controlador, que viene de la clase UsuarioController() y muestra su contenido
        $controlador->$action();
    }else{
        echo "La página que buscas no existe";
    }
}else{
    echo "La página que buscas no existe wey";
}


?>