<?php

// // abrir archivo 
// // permisos r (leer), a+(leer y escribir)
//  $archivo = fopen("fichero_texto.txt", "a+");

 
// /*
//  * Si se añada texto en la misma linea carga el contenido, pero si se añade otra linea hay que usar un while
//  */
// // Leer archivo
// //  $contenido = fgets($archivo);
// //  echo $contenido;

// while(!feof($archivo)){
//     $contenido = fgets($archivo);
//     echo $contenido . '<br>';
// }


// // Escribir
// fwrite($archivo, "***Texto introducido desde PHP***");

//  // cerrar archivo
//  fclose($archivo);

// Copiar un fichero

// copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar"); // Lo copia en la misma ruta

// Renombrar un fichero
// rename('fichero_copiado.txt', 'antes_fichero_copiado.txt');

// Eliminar un fichero
// unlink('antes_fichero_copiado.txt') or die('Error al borrar');


// Comprobar si un archivo existe o no
if(file_exists('fichero_texto.txt')){
    echo 'existe';
}else{
    echo 'No existe';
}