<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    echo '<h1>Hola mundo </h1>';
});

Route::get('/mostrar-fecha', function(){
    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha', array('titulo' => $titulo));
});

Route::get('/pelicula/{titulo}/{year?}', function($titulo = 'No hay película seleccionada', $year = 2025){
    return view('pelicula', array(
        'titulo' =>$titulo,
        'year' => $year
    ));
})->where(array(
    // añadir condiciones a la url
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));


Route::get('/listado-peliculas', function(){
    $titulo = "Listado de Películas";
    $listado = array('Batman', 'Spiderman', 'Gran Torino');
    // return view('peliculas.listado', array(
    //     'titulo' => $titulo 
    // ));
    return view('peliculas.listado')
        ->with('titulo', $titulo)
        ->with('listado', $listado);
});

Route::get('/pagina-generica', function(){
    return view('pagina');
});