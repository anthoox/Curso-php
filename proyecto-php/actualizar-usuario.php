<?php

if(isset($_POST)){
    // Conexión a la base de datos
    require_once 'includes/conexion.php';


    // Recoger los datos del formulario de actualización
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

    // Array de errores
    $errores = array();

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



    if(count($errores)==0){
        $usuario = $_SESSION['usuario'];

        //Comprobar si el email ya existe
        $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);

        //Si el id es igual al id del usuario o si $isset_user esta vacio:
        if($isset_user['id']==$usuario['id'] || empty($isset_user)){
            // Actualizar el usuario
            $sql = "UPDATE usuarios SET ".
            "nombre = '$nombre'," .
            "apellidos = '$apellidos'," .
            "email = '$email'" .
            "WHERE id = ". $usuario['id'];
        $guardar = mysqli_query($db, $sql);

            if($guardar){  
                // actualizar los datos de sesión del usuario
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['completado'] = "Tus datos se han actualizado con éxito";
            }else{
                $_SESSION['errores']['general'] = "Fallo al actualizar";
            }
        }else{
            $_SESSION['errores']['general'] = "Ese correo ya existe";
        }
    }else{
        $_SESSION['errores']['general'] = "Fallo al actualizar";

    }
}
header('Location: mis-datos.php');