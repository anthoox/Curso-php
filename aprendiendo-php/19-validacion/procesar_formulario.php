<?php
$error = true;
if (
    !empty($_POST['nombre']) && !empty($_POST['apellidos']) // Si usamos isset no lo carga porque la variable esta vacia
    && !empty($_POST['edad'] && !empty($_POST['email']))
    && !empty($_POST['contraseña'])
) {
    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int)$_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['contraseña'];


    // /[0-9]+/ -> contiene números entre el 0 y el 9 y se pueden repetir

    // Validar nombre
    if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)) { // -> si no es un string o si no es un formato valido
        $error = 'nombre';
    }

    // Validar apellido
    if (!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)) {
        $error = 'apellidos';
    }

    // Validar edad
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) { // confirma si no es un número o se comprueba que no es entero, es decir en caso de que no sea entero haz tal
        $error = 'edad';
    }

    // Validar email
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { // Si no es un error o no es un email
        $error = 'email';
    }

    // Validar contraseña
    if (empty($pass) || (strlen($pass) < 5)) { // Si esta vacia o tiene menos de 5 caracteres
        $error = 'contraseña';
    }

    /*var_dump($_POST);
    var_dump($error);
    die();*/
} else {
    $error = 'faltan datos';
    header("Location:index.php?error=$error");
}

if ($error != 'ok') {
    header("Location:index.php?error=$error");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios</title>
</head>

<body>
    <h1>Datos validados correctamente</h1>
    <?php if ($error == 'ok') : ?>
        <p><?= $nombre ?></p>
        <p><?= $apellidos ?></p>
        <p><?= $edad ?></p>
        <p><?= $email ?></p>
    <?php endif; ?>
</body>

</html>