<?php

/*
 En el servidor, hay que configurar en PHP el upload_max_filesize = "a la cantidad que queramos"
 También hay que configurar el post_max_size = "cantidad de información que se puede enviar pos post"
 Configurar date.timezone = "Europe/Madrid"
*/

$archivo = $_FILES['archivo'];

var_dump($archivo);

$nombre = $archivo['name'];
$tipo = $archivo['type'];

// Solo quiero subir imagenes

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){ // si el tipo de la imagen es..
    if(!is_dir('images')){ // si no existe el directorio images
        mkdir('images', 0777); // crea el directorio con todos los permisos
    }// aqui no se recomienda tanto endif porque es programación más pura

    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre); // Guarda el archivo[nombre temporal que es el real] en.. con el nombre...

    header("Refresh: 5; URL=index.php");
    echo '<h1>Imagen subida correctamente</h1>';
    
}else{
    header("Refresh: 5; URL=index.php"); // redirige tras 5 segundos a la web indicada
    echo "<h1>Sube una imagen con un formato correcto, por favor</h1>";
}

