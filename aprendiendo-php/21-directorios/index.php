<?php

// Para crear archivos mkdir con el nombre del directorio y los permisos para el 
if(!is_dir('mi_carpeta')){ // si no existe la carpeta 'mi_carpeta' haz esto:
    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta'); // 0777 asigna todos los permisos y en caso de que falle se muestra el die()
    echo 'Carpeta creada con éxito';
}else{
    echo 'Ya existe la carpeta';
}

echo '<hr>';
// rmdir('mi_carpeta'); //para borrar carpetas

// Recorrer el contenido del directorio
echo '<h4>Contenido de carpeta:</h4>';
if($gestor = opendir('./mi_carpeta')){
    while(false !== ($archivo = readdir($gestor))){ // Mientras haya archivos dentro del directorio
        if($archivo != '.' && $archivo != '..'){
            echo $archivo . '<br>';
        }
    } 
}
