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
}
