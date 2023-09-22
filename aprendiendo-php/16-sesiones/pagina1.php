<?php
session_start();
// hay que abrir index.php antes de intentar imprimir eesta variable en la ventana

// echo $variable_normal;
echo $_SESSION['variable_persistente'];