<?php

class ValidatorForm
{
    public static function validator($dataForm)
    {
        $datos = '';
        $error = true;
        if (isset($dataForm)) {
            if ( // Si no esta vacio ningún valor del array
                !empty($dataForm['nombre']) && !empty($dataForm['apellidos'])
                && !empty(($dataForm['email'])) && !empty($dataForm['password'])
            ) {
                $error = 'ok';
                // Si existe se añade a la variable el contenido, sino, la variable vale false
                $nombre = isset($dataForm['nombre']) ? $dataForm['nombre'] : false;
                $apellidos = isset($dataForm['apellidos']) ? $dataForm['apellidos'] : false;
                $email = isset($dataForm['email']) ? $dataForm['email'] : false;
                $clave = isset($dataForm['password']) ? $dataForm['password'] : false;

                // Validar nombre
                if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)) { // -> si no es un string o si no es un formato valido
                    $error = 'nombre';
                }

                // Validar apellido
                if (!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)) {
                    $error = 'apellidos';
                }

                // Validar email
                if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { // Si no es un error o no es un email
                    $error = 'email';
                }

                // Validar contraseña
                if (empty($clave) || (strlen($clave) < 4)) { // Si esta vacia o tiene menos de 5 caracteres
                    $error = 'contraseña';
                }

                $datos = array('nombre' => $nombre, 'apellidos' => $apellidos, 'email' => $email, 'password' => $clave);
            }
        } else {
            return false;
        }

        if ($error != 'ok') {
            return false;
        } else {
            return $datos;
        }
    }
}
