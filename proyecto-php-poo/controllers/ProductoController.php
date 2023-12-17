<?php
require_once 'models/producto.php';
class ProductoController
{

    public function index()
    {
        // echo "Controlador producto, Acción index";

        // Renderizar vista
        require_once 'views/productos/destacados.php';
    }

    public function gestion()
    {
        Utils::isAdmin();
        $producto = new Producto();
        $productos = $producto->getAll();
        require_once 'views/productos/gestion.php';
    }

    public function crear()
    {
        Utils::isAdmin();
        require_once 'views/productos/crear.php';
    }

    public function save()
    {
        Utils::isAdmin();
        if (isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;

            if ($nombre && $descripcion && $precio && $stock && $categoria) {
                $producto = new Producto();
                $producto->setCategoriaId($categoria);
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setCategoriaId($categoria);


                // Guardar la imagen
                $file = $_FILES['imagen'];
                $fileName = $file['name'];
                $mimeType = $file['type'];

                if ($mimeType == "image/jpg" || $mimeType == "image/jpeg" || $mimeType == "image/png" || $mimeType == "image/git") {
                    // Si no existe la carpeta uploads/images creala
                    if (!is_dir('uploads/images')) {
                        mkdir('uploads/images', 0777, true);
                    }
                    move_uploaded_file($file['tmp_name'], 'uploads/images/' . $file['name']);
                    $producto->setImagen($fileName);
                }


                $save = $producto->save();
                if ($save) {
                    $_SESSION['producto'] = 'Complete';
                } else {
                    $_SESSION['producto'] = 'failed-1';
                }
            } else {
                $_SESSION['producto'] = 'failed-2';
            }
        } else {
            $_SESSION['producto'] = 'failed-3';
        }

        header('Location:' . base_url . "producto/gestion");
    }
}
