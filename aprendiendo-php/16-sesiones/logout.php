<?php

// si abrimos esta ventana despues de index.php y antes de pagina1.php se cierra la sesión
session_start();

// Cierro la sesión

session_destroy();