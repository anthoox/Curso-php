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

    
    if(count($errores) == 0){
        if(isset($_GET['editar'])){
            $entrada_id = $_GET['editar'];
            $sql = "UPDATE entradas SET titulo='$titulo', categoria_id='$categoria', descripcion='$descripcion' ".
                    " WHERE id = $entrada_id AND usuario_id = $usuario";
                    $result = mysqli_query($db, $sql);
                    // echo mysqli_error($db);
                    // die();
        }else{
            $sql = "INSERT INTO entradas VALUES(null,'$usuario', '$categoria', '$titulo', '$descripcion', CURDATE());";

        }
        
        $guardar = mysqli_query($db, $sql);
        header('Location: index.php');

    }else{
        $_SESSION['errores_entrada'] = $errores;
        if(isset($_GET['editar'])){
            header('Location: editar-entrada.php?id=' . $_GET['editar']);
        }else{
            header('Location: crear-entradas.php');
        }
    }

}