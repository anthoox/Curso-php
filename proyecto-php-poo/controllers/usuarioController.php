<?php
// conectamos con el modelo de usuario
require_once 'models/usuario.php';
require_once 'helpers/validatorForm.php';
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
        $datos = ValidatorForm::validator($_POST);

        // Validación simple de datos. Se podría crear una librería con validación
        if ($datos) {
            $usuario = new Usuario();

            $usuario->setNombre($datos['nombre']);
            $usuario->setApellidos($datos['apellidos']);
            $usuario->setEmail($datos['email']);
            $usuario->setPassword($datos['password']);

            // Guardamos los datos en la base de datos con el método save
            $result = $usuario->save();
            if ($result) {
                // echo "Registro completado";
                $_SESSION['register'] = "Complete";
            } else {
                // echo "Registro fallido";
                $_SESSION['register'] = "Failed";
            }
        } else {
            // echo "Registro fallido";
            $_SESSION['register'] = "Failed";
        }

        header("Location:" . base_url . 'usuario/registro');
    }
}
