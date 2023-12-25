<?php

require_once 'models/producto.php';

class CarritoController
{

    public function index()
    {
        // var_dump($_SESSION['carrito']);
        $carrito = $_SESSION['carrito'];
        require_once 'views/carrito/index.php';
    }

    public function add()
    {
        if (isset($_GET['id'])) {
            $producto_id = $_GET['id'];
            var_dump($producto_id);
        } else {
            header('Location:' . base_url);
        }

        if (isset($_SESSION['carrito'])) {
            $counter = 0;
            foreach ($_SESSION['carrito'] as $indice => $elemento) {
                if ($elemento['id_producto'] == $producto_id) {
                    $_SESSION['carrito'][$indice]['unidades']++;
                    $counter++;
                }
            }
        }
        // Si counter no existe o vale 0
        if (!isset($counter) || $counter == 0) {
            // Conseguir producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();

            // Añadir al carrito
            if (is_object($producto)) {
                $_SESSION['carrito'][] = array(
                    // Como es un objeto y no una instancia de la clase, se obtiene su valor de la siguiente forma:
                    "id_producto" => $producto->id,
                    "precio" => $producto->precio,
                    "unidades" => 1,
                    "producto" => $producto
                );
            }
        }
        header("Location:" . base_url . "carrito/index");
    }

    public function delete()
    {
    }

    public function delete_all()
    {
        unset($_SESSION['carrito']);
        header("Location:" . base_url . "carrito/index");
    }

    public function remove()
    {
    }
}
