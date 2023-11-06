<?php
require_once '../vendor/autoload.php';

$foto_original = 'foto.png';

$guardar_en = 'foto_modificada.png';


$thumb = new PHPThumb\GD($foto_original);

// Aquí da error, no avanza. Error en el value de un elemento, si comento esa sección de GD linea 972, hace la copia pero da error. He modficado es sección de GD.php

// Redimensionar
// $thumb->resize(250, 250);


// Recortar, se indica en que pixel empieza a cotar tanto en el eje X e Y y se le da el tamaño del recorte
$thumb->crop(50,50, 250,250);

// Recortar desde el centro dando el valor por lo anto y por lo ancho
$thumb->cropFromCenter(100, 150);
$thumb->show();
$thumb->save($guardar_en);