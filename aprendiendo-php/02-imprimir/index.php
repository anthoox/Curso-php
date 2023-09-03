<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla - Master en PHP</title>
</head>
<body>
    <h1>Master en PHP - <?php echo 'Anthony Alegría Alcántara'?></h1>
    <!-- //* echo atajado -->
    <?='<h2>Bienvenido al curso más grande en PHP</h2>'?>
    <?php
    //Titular de la sección
        echo '<h3>Listado de mis juegos favoritos:</h3>';
        /**
         * Esta es una linea de mis juegos favoritos
         */
        echo '<ul>'
                .'<li>League of legends</li>'
                .'<li>Word of Warcraft</li>'
                .'<li>MarioKart</li>'
                .'<li>Super Mario</li>'
                // .'<li>Zelda</li>'
            .'</ul>';
        
        echo '<p>Esta es toda la'.' - ' . 'lista'.'</p>';    
    ?>
</body>
</html>