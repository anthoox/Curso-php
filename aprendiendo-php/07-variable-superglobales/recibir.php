<?php
// * En esta web recibimos los datos enviados en el formulario
// * Si estos datos se modifican en directo en la url y se actualizan se modifican también.

// echo '<h1>' . $_GET['nombre'] . '</h1>';
// echo '<h1>' . $_GET['apellidos'] . '</h1>';
// var_dump($_GET);

echo '<h1>' . $_POST['nombre'] . '</h1>';
echo '<h1>' . $_POST['apellidos'] . '</h1>';
var_dump($_POST);