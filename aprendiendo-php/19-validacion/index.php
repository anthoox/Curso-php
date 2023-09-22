<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formularios</title>
</head>

<body>
    <h1>Validar formularios en PHP</h1>
    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan datos'){
                echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
            }

            if($error == 'nombre'){
                echo '<strong style="color:red">Introduce bien el nombre</strong>';
            }

            if($error == 'apellidos'){
                echo '<strong style="color:red">Introduce bien los apellidos</strong>';
            }

            if($error == 'edad'){
                echo '<strong style="color:red">Introduce bien la edad</strong>';
            }

            if($error == 'email'){
                echo '<strong style="color:red">Introduce bien el correo</strong>';
            }

            if($error == 'contraseña'){
                echo '<strong style="color:red">Introduce una contraseña de 5 o más caracteres</strong>';
            }
        }
    ?>
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" required="required" patter="[A-Za-z]+"><br> 

        <label for="apellidos">Apellidos</label><br>
        <input type="text" name="apellidos" required="required" patter="[A-Za-z]+"><br>

        <label for="edad">Edad</label><br>
        <input type="text" name="edad" patter="[0-9]+" required="required"><br>

        <label for="email">Correo</label><br>
        <input type="text" name="email" required="required"><br>

        <label for="contraseña">Contraseña</label><br>
        <input type="password" name="contraseña" required="required" minlength="5"><br>

        <input type="submit" value="Enviar">
    </form>
    
</body>

</html>