<?php
// conectamos con el modelo de usuario
require_once 'models/usuario.php';
class UsuarioController
{

    public function index()
    {
        echo "Controlador usuario, Acción index";
    }

    public function registro()
    {
        require_once 'views/usuario/registro.php';
    }

    /*
     * Función para guardar los datos del usuario que llegan por el formulario de registro
     */
    public function save()
    {
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellidos']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            // Guardamos los datos en la base de datos con el método save
            $result = $usuario->save();
            if ($result) {
                // echo "Registro completado";
                $_SESSION['register'] = "Complete";
            } else {
                // echo "Registro fallido";
                $_SESSION['register'] = "Failed";
            }
            // var_dump($usuario);
        } else {
            $_SESSION['register'] = "Failed";
        }
        header("Location:" . base_url . 'usuario/registro');
    }
}
