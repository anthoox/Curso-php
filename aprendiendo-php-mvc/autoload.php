<?php

// Función para autocargar las clases. Hay que añadirlo en el index.php
function autoCargar($className){
    include 'controllers/' . $className . '.php';
}

spl_autoload_register('autoCargar');