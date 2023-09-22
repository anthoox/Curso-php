<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos PHP</title>
</head>

<body>
    <h1>Subir archivos PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">

        <input type="submit" value="Enviar">
    </form>

    <h2>Listado de imagenes</h2>
    <?php
    $gestor = opendir('./images');

    if($gestor): // si gestor es true
        while(($image = readdir($gestor)) !== false):
            if($image != '.' && $image != '..'):
                echo "<img src='images/$image' width='200px'><br>";//se ordena por el nombre
            endif;
        endwhile;
    endif; // Se recomienda el uso de endif en casos de sistemas que muestran algun contenido
    ?>
</body>
</html>
