<?php
//conexion
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAME 'utf-8'");

// if(mysqli_connect_errno()){
//     echo "La conexión a la base de datos MYSQL ha fallado " . mysqli_connect_error();
// }else{
//     echo "Conexión realizada correctamente";
// }

// Iniciar la sesión
if(!isset($_SESSION)){
    session_start();
}
