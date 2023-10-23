<?php

/*
* Destructores. Se usan cuando la referencia a ese objeto ya no exista.
*/

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        // Esto no se debe hacer, pero es solo por aprender:
        echo "<h1>Creando el objeto </h1>";

        $this->nombre = "Anthony Alegría";
        $this->email = "email@email.com";
    }

    // Metodo para tratar como String
    public function __toString(){
        return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }

    public function __destruct(){

        // Se lanza cuando se ejecuta el programa
        echo "<h1>Destruyendo el objeto</h1>";
    }
}

$usuario = new Usuario();

for($i = 0; $i<=50; $i++){
    echo $i."<br/>";
}

echo $usuario->nombre;

echo "<h2>" . $usuario . "</h2>";