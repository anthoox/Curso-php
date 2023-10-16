<?php
// Iniciar la session y la conexion a la bd
require_once 'includes/conexion.php';

// Recoger los datos del formulario
if(isset($_POST)){

    // Borrar la sesión del error si se loga correctamente
    if(isset($_SESSION['error-login'])){
        unset($_SESSION['error-login']);
    }

    // Recojo datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Hacer consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);
    
    // Si hay algun resultado con ese correo
    if($login && mysqli_num_rows($login) ==1){
        // Se almacenan los datos en un array
        $usuario = mysqli_fetch_assoc($login);
        
         // Comprobar la contraseña / cifrar
        $verify = password_verify($password, $usuario['clave']);


        if($verify){
            // Utilizar una sesion para guardar los datos del usuario logueado
            $_SESSION['usuario']= $usuario;            
        }else{
            // Si algo falla, enviar una sesión con el fallo
            $_SESSION['error-login'] = "Login incorrecto";
        }
    }else{
        // Mensaje de errror
        $_SESSION['error-login'] = "Login incorrecto";
    }

}

// Redirigir al index.php
header('Location: index.php');