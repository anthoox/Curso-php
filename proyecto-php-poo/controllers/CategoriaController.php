<?php
// conectamos con el modelo de categorias
require_once 'models/categoria.php';
require_once 'helpers/validatorForm.php';
require_once 'models/producto.php';

class CategoriaController
{

    public function index()
    {
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        require_once 'views/categoria/index.php';
    }

    // Método para crear nuevas categorías. Lleva a un formulario
    public function crear()
    {
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }

    // Método para guardar la categoría en la base de datos
    public function save()
    {
        Utils::isAdmin();
        // Guardar la categoría en la base de datos y luego redirigir a categoria/index
        if (isset($_POST) && isset($_POST['nombre'])) {
            $categoria = new Categoria();
            $categoria->setNombre($_POST['nombre']);
            $categoria->save();
        }

        header("Location:" . base_url . "categoria/index");
    }

    public function ver()
    {
        if (isset($_GET['id'])) {
            // var_dump($_GET['id']);
            $id = $_GET['id'];

            // Conseguir categoria
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();

            // Conseguir productos
            $producto = new Producto();
            $producto->setCategoriaId($id);
            $productos = $producto->getAllCategory();
        }

        require_once 'views/categoria/ver.php';
    }
}
