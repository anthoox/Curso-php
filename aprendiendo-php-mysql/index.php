<?php
//Conectar a la base de datos con MySQLi
$conexion = mysqli_connect("localhost","root","","phpmysql");

//Comprobar si la conexión es correcta
if(mysqli_connect_errno()){
    echo "La conexión a la base de datos MYSQL ha fallado " . mysqli_connect_error();
}else{
    echo "Conexión realizada correctamente";
}

//Consulta para configurar la codificación de caracteres
mysqli_query($conexion,"SET_NAME 'utf8");

//Consulta SELECT desde PHP
$query = mysqli_query($conexion,"SELECT * FROM notas");

// aqui me devuelve solo una nota:
// $notas = mysqli_fetch_assoc($query);
// var_dump($notas);

echo '<hr>';

while($nota = mysqli_fetch_assoc($query)){
    // var_dump($nota);
    echo '<h1>' . $nota['titulo'] . '</h1>';
    echo '<h2>' . $nota['descripcion'] . '</h2>';
}

// Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas VALUE(null,'nota desde PHP', 'Esto es una nota de PHP', 'green')";
$insert = mysqli_query($conexion, $sql);
if($insert){
    echo "Datos insertados correctamente <hr>" ;
}else{
    echo "Error: " . mysqli_error($conexion);
}