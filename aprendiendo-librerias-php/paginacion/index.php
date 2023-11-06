<?php
// Conectamos con la libería:
require_once '../vendor/autoload.php';

// Conexion basedatos
$conexion = new mysqli("localhost", "root", "", "notas_master");
$conexion->query("SET NAMES 'utf8'");

// Consulta a paginar. Contamos la cantidad de elementos totales
$consulta = $conexion->query("SELECT * FROM notas");
// Cantidad de filas en la respuesta
$numero_elementos = $consulta->num_rows;
$numero_elementos_pagina = 2;

// Hacer paginación:
$pagination = new Zebra_Pagination();

// Número total de elementos a paginar
$pagination->records($numero_elementos);

// Número de elementos por página
$pagination->records_per_page($numero_elementos_pagina);

// Sacar la página actual
$page = $pagination->get_page();


// Calculamos donde empieza la consulta
$empieza_aqui = (($page - 1) * $numero_elementos_pagina);
$sql = "SELECT * FROM notas LIMIT $empieza_aqui, $numero_elementos_pagina";
// del 0 al 2
$notas= $conexion->query($sql);

While($nota = $notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3>";
}

// Muestra la paginación:
$pagination->render();