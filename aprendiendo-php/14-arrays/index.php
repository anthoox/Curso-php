<?php
/*
 Un Array es una colección de variables, una caja donde podemos meter muchas variables dentro bajo un único nombre y podemos acceder a estas
 con un índice numérico o un índice alfanumérico.
 Puede tener otros arrays dentro
 */

 $pelicula = array('Batman', 'Spiderman', 'Superman');
 var_dump($pelicula);
 var_dump($pelicula[1]);
 var_dump($pelicula[3]);// -> da error porque no existe el índice 3

 $cantantes = ['2pac', 'Marc Anthony', 'Jlo'];
 var_dump($cantantes);

 echo $pelicula[0];
 echo '<br>';
 echo $cantantes[2];

 // Recorer array con for
 echo "<h1>Listado de películas</h1>";
 echo '<ul>';
 for($i=0; $i < count($pelicula); $i++){// -> count tiene el número de elementos que tiene el array
    echo '<li>' . $pelicula[$i] . '</li>';
 }
 echo '</ul>';

 // Recorrer con foreach
 echo "<h1>Listado de cantantes</h1>";
 echo '<ul>';
 foreach($cantantes as $cantante){
    echo '<li>' . $cantante . '</li>';
 }
 echo '</ul>';

 // Arrays alfanuméricos/asociativos
 $personas = array(
    'nombre' => 'Anthony',
    'apellidos' => 'Alegría Alcántara',
    'web' => 'anthoox.es');
 var_dump($personas);

 if(isset($_GET)){
    var_dump($_GET);
 }else{
    echo '<p>Escribe el siguiente texto en al URL: ?hola=1$nombre=paco</p>';
 }


 // arrays multidimencionales. arrays que llevan otros arrays dentro

 $contactos = array(
    array(
        'nombre' => 'Juan',
        'email' => 'juan@juan.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@luis.com'
    ),
    array(
        'nombre' => 'salvador',
        'email' => 'salvador@salvador.com'
    )
 );
 var_dump($contactos);
 echo '<br>';
 echo $contactos[1]['nombre'];
 echo $contactos[2]['email'];

 // foreach asociativos multidimencional
 foreach($contactos as $key => $contacto){
    var_dump($contacto['nombre']);
 }