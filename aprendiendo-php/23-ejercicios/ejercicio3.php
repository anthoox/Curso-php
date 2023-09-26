<?php
/*
 * Hacer una calculadora en PHP que tenga una interfaz de un formulario 
 */

//  $resultado = '';
//  if(!empty($_POST['num1']) && !empty($_POST['num2']) && !empty($_POST['select'])){
//     if($_POST['select'] == 'suma'){
//         $resultado = ((int)($_POST['num1']) + (int)($_POST['num2']));
//     }else if($_POST['select'] == 'resta'){
//         $resultado = $_POST['num1'] - $_POST['num2'];
//     }else if($_POST['select'] == 'multiplicacion'){
//         $resultado = $_POST['num1'] * $_POST['num2'];
//     }else if($_POST['select'] == 'division'){
//         $resultado = $_POST['num1'] / $_POST['num2'];
//     }
//  }else{
//     $resultado = 'Debe rellenar los campos del formulario con números';
//  }

$resultado = false;
 if(isset($_POST['num1']) && isset($_POST['num2'])){ //-> me gusta más con empty, asi confirmo si no esta vacio porque sino da error
    if(isset($_POST['suma'])){
        $resultado = $_POST['num1'] + $_POST['num2'];
    }
    if(isset($_POST['resta'])){
        $resultado = $_POST['num1'] - $_POST['num2'];
    }
    if(isset($_POST['multiplicacion'])){
        $resultado = $_POST['num1'] * $_POST['num2'];
    }
    if(isset($_POST['division'])){
        $resultado = $_POST['num1'] / $_POST['num2'];
    }
 }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en Formulario</title>
</head>

<body>
    <h1>Calculadora en formulario</h1>
    <form action="" method="POST">
        <label>Número 1:</label>
        <input type="number" name="num1" id=""><br>
        <label>Número 2:</label>
        <input type="number" name="num2" id=""><br>
        <label>Operación:</label>
        <!-- <select name="select">
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacion">multiplicación</option>
            <option value="division">división</option>
        </select> -->
        <input type="submit" value="suma" name="suma">
        <input type="submit" value="resta" name="resta">
        <input type="submit" value="multiplicacion" name="multiplicacion">
        <input type="submit" value="division" name="division">
    </form>
    <?php
        if($resultado != false){
            echo "<h2>$resultado</h2>";
        }
    ?>

</body>

</html>