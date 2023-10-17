<?php 
//Confirmamos si la sesion esta iniciada
require_once 'includes/conexion.php';
//Comprobamos que la sesion de usuarion exista
if(isset($_SESSION['usuario']) && isset($_GET['id'])){
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];
    $sql = "DELETE FROM entradas WHERE usuario_id = $usuario_id AND id = $entrada_id";
    mysqli_query($db, $sql);
//Metodo de prueba:
    // $borrar = mysqli_query($db, $sql);
    // echo (mysqli_error($db));
    // die();

}
header("Location: index.php");