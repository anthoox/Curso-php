<?php
// Si llega alguna información por POST
if(isset($_POST)){
    // Conexión a la base de datos
    require_once 'includes/conexion.php';

    // Si existe la variable "_POST['nombre'] limpia y que se escapen los simbolos raros y que no sea peligroso, sino $nombre igual a false
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['id'];

    // Validación:
    // Array de errores
    $errores = array();

    if(empty($titulo)){
        $errores['titulo'] = "El titulo no es válido";
    }
    if(empty($descripcion)){
        $errores['descripcion'] = "La descripción es válida";
    }
    if(empty($categoria) && !is_numeric($categoria)){
        $errores['categoria'] = "La categoria no es válida";
    }

    // var_dump($errores);
    // die();
  
    if(count($errores) == 0){
        $sql = "INSERT INTO entradas VALUES(null,'$usuario', '$categoria', '$titulo', '$descripcion', CURDATE());";
        $guardar = mysqli_query($db, $sql);
        header('Location: index.php');


    }else{
        $_SESSION['errores_entrada'] = $errores;
        header('Location: crear-entradas.php');
    }

}