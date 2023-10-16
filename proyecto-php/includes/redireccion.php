<?php
// Si no existe la sessión creala
if(!isset($_SESSION)){
    session_start();
}
// Si la sesión usuario no existe, envialo al index.php
if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
}
?>