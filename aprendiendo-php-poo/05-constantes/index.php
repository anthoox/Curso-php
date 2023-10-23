<?php

class Usuario{

    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }
}

$usuario = new Usuario();
var_dump($usuario);

echo $usuario::URL_COMPLETA;
echo "<br/>";
echo Usuario::URL_COMPLETA;