<?php

require_once 'models/producto.php';

class CarritoController
{

    public function index()
    {
        echo "<h1>Controlador carrito, Acción index</h1>";
        var_dump($_SESSION['carrito']);
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
        } else {
            // Conseguir producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();

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
    }

    public function remove()
    {
    }
}
