<?php
if(isset($_POST)){
    // Conexión a la base de datos
    require_once 'includes/conexion.php';

    // Si existe la variable "_POST['nombre'] limpia y que se escapen los simbolos raros, sino $nombre igual a false
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

    // Array de errores
    $errores = array();
    // Validar los datos antes de guardarlos en la base de datos
    // validar nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_valido = true;
    }else{
        $nombre_valido = false;
        $errores['nombre'] = "El nombre no es valido";
    }
  
    if(count($errores) == 0){
        $sql = "INSERT INTO categorias VALUES(null, '$nombre');";
        $guardar = mysqli_query($db, $sql);
    }


}
//Dejamos esto al final porque si no se cumple alguna condición devuelve al index
header('Location: index.php');