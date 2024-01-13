<?php
class Utils
{
    // Creamos metodos estaticos para no instanciar objetos
    public static function deleteSession($name)
    {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    // Función para comprobar si existe la sesión admin
    public static function isAdmin()
    {
        // Si no existe:
        if (!isset($_SESSION['admin'])) {
            header("Location:" . base_url);
        } else {
            return true;
        }
    }

    // Comprobar si esta identificado
    public static function isIdentity()
    {
        // Si no existe:
        if (!isset($_SESSION['identity'])) {
            header("Location:" . base_url);
        } else {
            return true;
        }
    }

    public static function showCategorias()
    {
        require_once "models/categoria.php";
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        return $categorias;
    }

    //
    public static function statsCarrito()
    {
        $stats = array(
            'count' => 0,
            'total' => 0
        );

        if (isset($_SESSION['carrito'])) {
            $stats['count'] = count($_SESSION['carrito']);

            foreach ($_SESSION['carrito'] as $producto) {
                $stats['total'] += $producto['precio'] * $producto['unidades'];
            }
        }

        return $stats;
    }
}
