<?php

class ProductoController
{

    public function index()
    {
        // echo "Controlador producto, Acción index";

        // Renderizar vista
        require_once 'views/productos/destacados.php';
    }
}
