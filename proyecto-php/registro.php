<?php

if(isset($_POST)){
    // Conexión a la base de datos
    require_once 'includes/conexion.php';


    // Recoger los datos del formulario
    // mysqli_real_escape_string permite añadir simbolos para evitar hacer una injección SQL para que no lo interprete como parte del lenguaje sino como string
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

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

    // validar apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_valido = true;
    }else{
        $apellidos_valido = false;
        $errores['apellidos'] = "Los apellidos no son validos";
    }

    // validar email
    if(!empty($nombre) && filter_var($email. FILTER_VALIDATE_EMAIL)){
        $email_valido = true;
    }else{
        $email_valido = false;
        $errores['email'] = "El email no es valido";
    }

    // validar password
    if(!empty($password)){
        $password_valido = true;
    }else{
        $password_valido = false;
        $errores['password'] = "La contraseña esta vacia";
    }

    $guardar_usuario = false;
    if(count($errores)==0){
        $guardar_usuario = true;
        // Cifrar la contraseña. Esta función la cifra el numero de veces indicado
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        // Insertar usuarios en su tabla correspondiente
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);

        if($guardar){
            $_SESSION['completado'] = "El regristro se ha completado con éxito";
        }else{
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
        }
        
    }else{
        // Almacenamos el error
        $_SESSION['errores'] = $errores;
    }

}
//Dejamos esto al final porque si no se cumple alguna condición devuelve al index
header('Location: index.php');