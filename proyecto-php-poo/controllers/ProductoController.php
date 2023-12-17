<?php
require_once 'models/producto.php';
class ProductoController
{

    public function index()
    {
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
                if (isset($_FILES['imagen'])) {
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
                }

                // Configuración para determinar si el metodo guarda o edita
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $producto->setId($id);
                    $save = $producto->edit();
                } else {
                    $save = $producto->save();
                }

                if (isset($_GET['id'])) {
                    if ($save) {
                        $_SESSION['editado'] = 'Complete';
                    } else {
                        $_SESSION['editado'] = 'failed-1';
                    }
                } else {
                    if ($save) {
                        $_SESSION['producto'] = 'Complete';
                    } else {
                        $_SESSION['producto'] = 'failed-1';
                    }
                }
            } else {
                $_SESSION['producto'] = 'failed-2';
            }
        } else {
            $_SESSION['producto'] = 'failed-3';
        }

        header('Location:' . base_url . "producto/gestion");
    }

    public function editar()
    {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $edit = true;

            $producto = new Producto();
            $producto->setId($id);
            $pro = $producto->getOne();

            require_once 'views/productos/crear.php';
        } else {
            header('Location:' . base_url . 'producto/gestion');
        }
    }

    public function eliminar()
    {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $producto = new Producto();
            $producto->setId($id);
            $delete = $producto->delete();
            if ($delete) {
                $_SESSION['delete'] = "Complete";
            } else {
                $_SESSION['delete'] = "Failed-1";
            }
        } else {
            $_SESSION['delete'] = "Failed-2";
        }
        header('Location:' . base_url . 'producto/gestion');
    }
}
