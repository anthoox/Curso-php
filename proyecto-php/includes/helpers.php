<?php
// Función para mostrar los errores generados
function mostrarError($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    }
    return $alerta;
}

// Función para borrar los errores de la sessión
function borrarErrores(){
    $borrado = false;
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        $borrado = true;
    }
    
    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        $borrado = true;
    }

    if(isset($_SESSION['errores_entrada'])){
        $_SESSION['errores_entrada'] = null;
        $borrado = true;
    }
}

// Función para conseguir/listar las categorias
function conseguirCategorias($conexion){
    $sql = "SELECT * FROM categorias ORDER BY id ASC";
    $categorias = mysqli_query($conexion, $sql);

    $resultado = array();
    if($categorias && mysqli_num_rows($categorias) >= 1){
        $resultado = $categorias;
    }

    return $resultado;
}


// Función para conseguir una categoria
function conseguirCategoria($conexion, $id){
    $sql = "SELECT * FROM categorias WHERE id = $id";
    $categorias = mysqli_query($conexion, $sql);

    $resultado = array();

    $resultado = mysqli_fetch_assoc($categorias);

    return $resultado;
}

// Función para obtener las entradas
function conseguirEntradas($conexion, $limit = null, $categoria = null){
    $sql = "SELECT e.*, c.nombre AS categoria FROM entradas e ".
    "INNER JOIN categorias c ON e.categoria_id = c.id ";

    // Si no esta vacio categoria y viene con un número
    if(!empty($categoria)){
        $sql .= " WHERE e.categoria_id = $categoria";
    }

    // Añadimos aquí el order by ya que debe ir despues de WHERe pero antes de limit
    $sql .= " ORDER BY e.id DESC";
    // Si es distinto a null se añade:
    if($limit){
        $sql .= " LIMIT 4";
    }

    $entradas = mysqli_query($conexion, $sql);
    $resultado = array();
    if($entradas && mysqli_num_rows($entradas)>=1){
        $resultado = $entradas;
    }

    return $resultado;
}


// Conseguir entrada
function conseguirEntrada($conexion, $id){
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e" .
            " INNER JOIN categorias c ON e.categoria_id = c.id".
            " WHERE e.id = $id";
    $entrada = mysqli_query($conexion, $sql);

    $resultado = array();
    if($entrada && mysqli_num_rows($entrada)>=1){
        $resultado = mysqli_fetch_assoc($entrada);
    }    

    return $resultado;
}