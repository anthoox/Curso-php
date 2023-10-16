<?php require_once "conexion.php";?>
<?php require_once "helpers.php";?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Blog de Videojuegos</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        <!-- CABECERA -->
        <header id="cabecera">
            <!-- LOGO -->
            <div id="logo">
                <a href="index.php">
                    Blog de videojuegos
                </a>
            </div>
            <!-- MENU    -->
        
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <?php 
                        // Llamamos a las categorias con la función corresponiente. Se añade desde aqui $db porque aqui tenemos el require del archivo conexion.php que tiene $db
                        $categorias = conseguirCategorias($db);
                        // Si categorias no esta vacio
                        if(!empty($categorias)):
                            // Mientras hayan categorias mete cada una en categoria
                            while($categoria = mysqli_fetch_assoc($categorias)):
                    ?>
                    <li>
                        <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                    </li>

                    <?php 
                            endwhile;
                        endif;
                    ?>
                    <li>
                        <a href="index.php">Sobre mi</a>
                    </li>
                    <li>
                        <a href="index.php">contacto</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix">
                 <!--Para que limpie lo flotado  -->
            </div>
        </header>
    <main id="contenedor">